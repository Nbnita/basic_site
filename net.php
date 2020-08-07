<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style2.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script
	 src="https://code.jquery.com/jquery-3.3.1.min.js"
	 integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top nav-tabs">
		<div class="container-fluid">
			<div class="row">
				<div>
					<a href=""><img class="logo" src="icon3.png"></a>
				</div>
			</div>
			<div class="row-sm-4" align="right"> 
				<div class="nav-tabs navbar-toggler-right">
					<a href="index.php"><button class="btn btn-outline-dark">Home</button></a>&nbsp;
				</div>
			</div>	
		</div>
	</nav>
	<div class="main-container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<section>
					<article class="index-intro">
						<div class="jumbotron">
						<form action="success.php" method="POST">
							<div class="form-group">
								<label for="number">Account-Number</label>
								<input type="number" class="form-control" id="card-number" required>
							</div>
							<div class="form-group">
								<label for="name">Account-Holder</label>
								<input type="name" class="form-control" id="name" required>
							</div>
							<div class="form-group">
								<label for="name">Branch</label>
								<input type="name" class="form-control" id="name" required>
							</div>
							<div class="form-group">
								<label for="number">Amount</label>
								<input type="number" class="form-control" name="number" required>
							</div>
							
								<button class="btn btn-dark" type="submit" name="submit1">Donate</button></a>
						</form>
						</div>	
					</article>
				</section>
			</div>		
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>