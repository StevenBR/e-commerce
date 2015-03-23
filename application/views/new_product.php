<!DOCTYPE html>
<html lang='eng'>
<head>
	<title>Add Product</title>
</head>
<body>
	<h1>Add a New Product</h1>

	<form action='/products/update' method='post'>	
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		<label for="description">Description</label>
		<input type="text" name="description" id="description">
		<label for="price">Price</label>
		<input type="text" name="price" id="price">
		<input type='sumbit' name="update" value="Update">
	</form>
	<a href="/products/show">show</a>
	<a href="/products">Back</a>

</body>
</html>