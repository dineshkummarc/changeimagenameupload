<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Change Image Name When Upload</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3">
			<form method="POST" enctype="multipart/form-data">
				<h4>Upload here</h4>
				<input type="file" name="file" required="required"/>
				<br />
				<div class="form-group">
					<input type="text" class="form-control" name="filename" placeholder="Enter file name" required="required"/>
				</div>
				<center><button class="btn btn-primary" name="upload"><span class="glyphicon glyphicon-upload"></span> Upload</button></center>
			</form>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<?php include'rename.php'?>
		</div>
	</div>
</body>
</html>