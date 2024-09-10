<%@ include file="header.jsp" %>
<h2>Add Product</h2>
<form action="insert" method="post">
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Category:</label>
    <input type="text" name="category">
    <label>Price:</label>
    <input type="number" step="0.01" name="price" required>
    <label>Stock:</label>
    <input type="number" name="stock" required>
    <input type="submit" value="Add Product">
</form>
