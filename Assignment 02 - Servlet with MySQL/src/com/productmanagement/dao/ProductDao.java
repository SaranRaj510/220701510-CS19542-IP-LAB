package com.productmanagement.dao;

import com.productmanagement.model.Product;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;



public class ProductDao {

    private String jdbcURL = "jdbc:mysql://localhost:3306/product_management";
    private String jdbcUsername = "root";
    private String jdbcPassword = "Kavi@2005";

    private static final String INSERT_PRODUCT_SQL = "INSERT INTO products (name, category, price, stock) VALUES (?, ?, ?, ?)";
    private static final String SELECT_PRODUCT_BY_ID = "SELECT id, name, category, price, stock FROM products WHERE id = ?";
    private static final String SELECT_ALL_PRODUCTS = "SELECT * FROM products";
    private static final String DELETE_PRODUCT_SQL = "DELETE FROM products WHERE id = ?";
    private static final String UPDATE_PRODUCT_SQL = "UPDATE products SET name = ?, category = ?, price = ?, stock = ? WHERE id = ?";
    private static final String SEARCH_PRODUCTS_SQL = "SELECT * FROM products WHERE name LIKE ? OR category LIKE ?";

    protected Connection getConnection() throws SQLException {
        Connection connection = DriverManager.getConnection(jdbcURL, jdbcUsername, jdbcPassword);
        return connection;
    }

    public void insertProduct(Product product) throws SQLException {
        try (Connection connection = getConnection();
             PreparedStatement preparedStatement = connection.prepareStatement(INSERT_PRODUCT_SQL)) {
            preparedStatement.setString(1, product.getName());
            preparedStatement.setString(2, product.getCategory());
            preparedStatement.setDouble(3, product.getPrice());
            preparedStatement.setInt(4, product.getStock());
            preparedStatement.executeUpdate();
        }
    }

    public Product selectProduct(int id) throws SQLException {
        Product product = null;
        try (Connection connection = getConnection();
             PreparedStatement preparedStatement = connection.prepareStatement(SELECT_PRODUCT_BY_ID)) {
            preparedStatement.setInt(1, id);
            ResultSet rs = preparedStatement.executeQuery();
            while (rs.next()) {
                String name = rs.getString("name");
                String category = rs.getString("category");
                double price = rs.getDouble("price");
                int stock = rs.getInt("stock");
                product = new Product();
                product.setId(id);
                product.setName(name);
                product.setCategory(category);
                product.setPrice(price);
                product.setStock(stock);
            }
        }
        return product;
    }

    public List<Product> selectAllProducts() throws SQLException {
        List<Product> products = new ArrayList<>();
        try (Connection connection = getConnection();
             PreparedStatement preparedStatement = connection.prepareStatement(SELECT_ALL_PRODUCTS)) {
            ResultSet rs = preparedStatement.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String name = rs.getString("name");
                String category = rs.getString("category");
                double price = rs.getDouble("price");
                int stock = rs.getInt("stock");
                Product product = new Product();
                product.setId(id);
                product.setName(name);
                product.setCategory(category);
                product.setPrice(price);
                product.setStock(stock);
                products.add(product);
            }
        }
        return products;
    }

    public boolean deleteProduct(int id) throws SQLException {
        boolean rowDeleted;
        try (Connection connection = getConnection();
             PreparedStatement statement = connection.prepareStatement(DELETE_PRODUCT_SQL)) {
            statement.setInt(1, id);
            rowDeleted = statement.executeUpdate() > 0;
        }
        return rowDeleted;
    }

    public boolean updateProduct(Product product) throws SQLException {
        boolean rowUpdated;
        try (Connection connection = getConnection();
             PreparedStatement statement = connection.prepareStatement(UPDATE_PRODUCT_SQL)) {
            statement.setString(1, product.getName());
            statement.setString(2, product.getCategory());
            statement.setDouble(3, product.getPrice());
            statement.setInt(4, product.getStock());
            statement.setInt(5, product.getId());
            rowUpdated = statement.executeUpdate() > 0;
        }
        return rowUpdated;
    }

    public List<Product> searchProducts(String searchQuery) throws SQLException {
        List<Product> products = new ArrayList<>();
        try (Connection connection = getConnection();
             PreparedStatement preparedStatement = connection.prepareStatement(SEARCH_PRODUCTS_SQL)) {
            preparedStatement.setString(1, "%" + searchQuery + "%");
            preparedStatement.setString(2, "%" + searchQuery + "%");
            ResultSet rs = preparedStatement.executeQuery();
            while (rs.next()) {
                int id = rs.getInt("id");
                String name = rs.getString("name");
                String category = rs.getString("category");
                double price = rs.getDouble("price");
                int stock = rs.getInt("stock");
                Product product = new Product();
                product.setId(id);
                product.setName(name);
                product.setCategory(category);
                product.setPrice(price);
                product.setStock(stock);
                products.add(product);
            }
        }
        return products;
    }
}
