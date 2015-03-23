<html>
<head>
	<title>Edit Product - ID # </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../assets/edit.css"></style>
</head>
<body class="container">
	<h1>Edit Product - ID #</h1>
	<form class="form-horizontal control-form" role="form" action="/" method="post">
		<div class="form-group">
		      <label class="control-label col-sm-2" for="name">Name:</label>
		      <input type="text" class="col-md-4" id="name" placeholder="Enter product name">
		</div>
		  <div class="row">
	 		 <label for="comment" class="control-label col-sm-2">Description:</label>
	  		<textarea id="comment" class="col-md-4" rows="3"></textarea>
		</div>
		<div class="row dropdown">
			<label for="dropdown" class="control-label col-md-2">Categories:</label>
			<button class="btn btn-default dropdown-toggle col-md-4" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		      		Dropdown
				<span class="caret"></span>
			</button>
		 	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			      	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">hat</a></li>
			      	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">key chain</a></li>
			      	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">shirt</a></li>
			      	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">belt</a></li>
		   	</ul>
		</div>
		<div class="row">
			<label for="new_cat" class="control-label col-md-2">or add new Category:</label>
			<input type="text" id="description" class="col-md-4" placeholder="add a new description here" ></textarea>
		 </div>

		 <div class="row col-md-offest-3">
			<div class="fileupload fileupload-new" data-provides="fileupload">
		     		<label class="control-label col-md-2" for="images" class="col-md-4">Images:</label>
		     		<span class="btn btn-primary btn-file"><span class="fileupload-new">Upload</span>
		    		<span class="fileupload-exists">Change</span>         <input type="file" /></span>
				<span class="fileupload-preview"></span>
				<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
			 </div>	
		</div class="row">	
			<input type="button" class="btn col-md-1 col-md-offset-2" name="cancel" value="Cancel">
			<input type="button" class="btn col-md-1 btn" name="preview" value="Preview">
			<input type="button" class="btn col-md-1 btn" name="update" value="Update">
		</div>
	</form>
</body>
</html>