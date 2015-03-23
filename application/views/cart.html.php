<!doctype html>
<html lang="en">
<head>
	<title>Products</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="../assets/cart.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- bootstrap javascript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<style>
</style>
<body>
<div class="container">
	<div class="row">
	 	<h1 class="col-md-4">Coding Dojo</h1>
	 	<h3 class='col-md-offset-5 col-md-3'>Shopping Cart (#)</small>
	</div>
	<h2>Products</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Hose</td>
				<td>For watering things</td>
				<td>$14.99</td>
				<td><a href="/products/show/1">Show</a></td>
				<td><a href="/products/edit/1">Edit</a></td>
				<td><a href="/products/destroy/1">Remove</a></td>
			</tr>
			<tr>
				<td>Toaster</td>
				<td>Bread warming device</td>
				<td>$29.99</td>
				<td><a href="/products/show/2">Show</a></td>
				<td><a href="/products/edit/2">Edit</a></td>
				<td><a href="/products/destroy/2">Remove</a></td>
			</tr>
			<tr>
				<td>T-Shirt</td>
				<td>With CodingDojo logo</td>
				<td>$39.95</td>
				<td><a href="/products/show/3">Show</a></td>
				<td><a href="/products/edit/3">Edit</a></td>
				<td><a href="/products/destory/3">Remove</a></td>
			</tr>
		</tbody>
	</table>
	<p>Total price: $100.03</p>
	<button action="#">Continue Shopping</button>


	<form action='/products/billing' method='post'>	
		<h1>Shipping information</h1>
			<span><label for="first_name">First Name:</label>
		<input type="text" name="first_name" id="first_name"></span>
			<span><label for="last_name">Last Name:</label>
		<input type="text" name="last_name" id="last_name"></span>
			<span><label for="address">Address:</label>
		<input type="text" name="address" id="address"></span>
			<span><label for="address_2">Address 2:</label>
		<input type="text" name="address_2" id="address_2"></span>
			<span><label for="city">City:</label>
		<input type="text" name="city" id="city"></span>
			<span><label for="state">State:</label>
		<input type="text" name="state" id="state"></span>
			<span><label for="zipcode">Zipcode:</label>
		<input type="text" name="zipcode" id="zipcode"></span>

		<h1>Billing Information</h1>
			<span><label for="same_as">Same as Shipping</label>
		<input id="same_as" type="checkbox" name="same_as"></span>
			<span><label for="first_name">First Name:</label>
		<input type="text" name="first_name" id="first_name"></span>
			<span><label for="last_name">Last Name:</label>
		<input type="text" name="last_name" id="last_name"></span>
			<span><label for="address">Address:</label>
		<input type="text" name="address" id="address"></span>
			<span><label for="address_2">Address 2:</label>
		<input type="text" name="address_2" id="address_2"></span>
			<span><label for="city">City:</label>
		<input type="text" name="city" id="city"></span>
			<span><label for="state">State:</label>
		<input type="text" name="state" id="state"></span>
			<span><label for="zipcode">Zipcode:</label>
		<input type="text" name="zipcode" id="zipcode"></span>
			<span><label for="card">Card:</label>
		<input type="text" name="state" id="card"></span>
			<span><label for="security_code">Security Code:</label>
		<input type="text" name="security_code" id="security_code"></span>

   

	</form>
	<a href="/products/show" class="col-md-2 col-offset-10">show</a>
	<a href="/products">Back</a>
</div>
</body>
</html>
