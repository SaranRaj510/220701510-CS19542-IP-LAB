<%@ include file="header.jsp" %>
<h2>Search Products</h2>
<form action="search" method="get">
    <label>Search:</label>
    <input type="text" name="search" required>
    <input type="submit" value="Search">
</form>

<c:if test="${not empty searchResults}">
    <h2>Search Results</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <c:forEach var="product" items="${searchResults}">
                <tr>
                    <td>${product.id}</td>
                    <td>${product.name}</td>
                    <td>${product.category}</td>
                    <td>${product.price}</td>
                    <td>${product.stock}</td>
                </tr>
            </c:forEach>
        </tbody>
    </table>
</c:if>
