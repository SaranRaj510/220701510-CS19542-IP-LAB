<%@ include file="header.jsp" %>
<h2>Product List</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <c:forEach var="product" items="${listProducts}">
            <tr>
                <td>${product.id}</td>
                <td>${product.name}</td>
                <td>${product.category}</td>
                <td>${product.price}</td>
                <td>${product.stock}</td>
                <td>
                    <a href="edit?id=${product.id}">Edit</a>
                    <a href="delete?id=${product.id}">Delete</a>
                </td>
            </tr>
        </c:forEach>
    </tbody>
</table>
