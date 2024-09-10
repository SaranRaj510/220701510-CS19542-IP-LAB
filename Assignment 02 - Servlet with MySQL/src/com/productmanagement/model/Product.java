package com.productmanagement.controller;

import com.productmanagement.dao.ProductDao;
import com.productmanagement.model.Product;

import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.sql.SQLException;
import java.util.List;

public class ProductServlet extends HttpServlet {

    private ProductDao productDao;

    public void init() {
        productDao = new ProductDao();
    }

    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        doGet(request, response);
    }

    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        String action = request.getServletPath();
        try {
            switch (action) {
                case "/new":
                    showNewForm(request, response);
                    break;
                case "/insert":
                    insertProduct(request, response);
                    break;
                case "/delete":
                    deleteProduct(request, response);
                    break;
                case "/edit":
                    showEditForm(request, response);
                    break;
                case "/update":
                    updateProduct(request, response);
                    break;
                case "/search":
                    searchProducts(request, response);
                    break;
                default:
                    listProducts(request, response);
                    break;
            }
        } catch (SQLException ex) {
            throw new ServletException(ex);
        }
    }

    private void listProducts(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, IOException, ServletException {
        List<Product> listProducts = productDao.selectAllProducts();
        request.setAttribute("listProducts", listProducts);
        RequestDispatcher dispatcher = request.getRequestDispatcher("view-products.jsp");
        dispatcher.forward(request, response);
    }

    private void showNewForm(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        RequestDispatcher dispatcher = request.getRequestDispatcher("add-product.jsp");
        dispatcher.forward(request, response);
    }

    private void showEditForm(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, ServletException, IOException {
        int id = Integer.parseInt(request.getParameter("id"));
        Product existingProduct = productDao.selectProduct(id);
        RequestDispatcher dispatcher = request.getRequestDispatcher("add-product.jsp");
        request.setAttribute("product", existingProduct);
        dispatcher.forward(request, response);
    }

    private void insertProduct(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, IOException {
        String name = request.getParameter("name");
        String category = request.getParameter("category");
        double price = Double.parseDouble(request.getParameter("price"));
        int stock = Integer.parseInt(request.getParameter("stock"));
        Product newProduct = new Product();
        newProduct.setName(name);
        newProduct.setCategory(category);
        newProduct.setPrice(price);
        newProduct.setStock(stock);
        productDao.insertProduct(newProduct);
        response.sendRedirect("list");
    }

    private void updateProduct(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, IOException {
        int id = Integer.parseInt(request.getParameter("id"));
        String name = request.getParameter("name");
        String category = request.getParameter("category");
        double price = Double.parseDouble(request.getParameter("price"));
        int stock = Integer.parseInt(request.getParameter("stock"));
        Product product = new Product();
        product.setId(id);
        product.setName(name);
        product.setCategory(category);
        product.setPrice(price);
        product.setStock(stock);
        productDao.updateProduct(product);
        response.sendRedirect("list");
    }

    private void deleteProduct(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, IOException {
        int id = Integer.parseInt(request.getParameter("id"));
        productDao.deleteProduct(id);
        response.sendRedirect("list");
    }

    private void searchProducts(HttpServletRequest request, HttpServletResponse response)
            throws SQLException, ServletException, IOException {
        String searchQuery = request.getParameter("search");
        List<Product> searchResults = productDao.searchProducts(searchQuery);
        request.setAttribute("searchResults", searchResults);
        RequestDispatcher dispatcher = request.getRequestDispatcher("search-products.jsp");
        dispatcher.forward(request, response);
    }
}
