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
				<article class="index-intro">
					<div class="jumbotron">
						<form action="donate.phpP" method="POST">
							<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" required>
								</div>
									<button class="btn btn-dark" type="submit" name="submit">Donate</button>
						</form>
					</div>
				</article>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
