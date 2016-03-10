<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Jazmin</a>
				<img src="public/imagenes/4.png" width="50">
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">

				<ul class="nav navbar-nav">
					
					<li><a href="#">Link</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</div>
	<!--slider-->
	<center>
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="public/imagenes/1.jpg" alt="First slide" src="public/imagenes/1.jpg" width="989">
				<div class="container">
					<div class="carousel-caption">
						<p><a class="btn btn-lg btn-primary" a href="https://www.google.com.pe/search?q=GALERIA+DE+MODAS&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjK28-cxbbLAhUFmJAKHaYiB7wQ_AUIBigB#tbm=isch&q=TIPOS+DE+MODAS" target="https://www.google.com.pe/search?q=GALERIA+DE+MODAS&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjK28-cxbbLAhUFmJAKHaYiB7wQ_AUIBigB#tbm=isch&q=TIPOS+DE+MODAS" role="button">TIPOS DE MODAS</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img data-src="public/imagenes/2.jpg" alt="Second slide" src="public/imagenes/2.jpg" width="920">
				<div class="container">
					<div class="carousel-caption">
						<p><a class="btn btn-lg btn-primary" href="https://www.google.com.pe/search?q=DESFILES+DE+MODAS&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwie-IT_xrbLAhUMEpAKHSAtByQQ_AUIBigB" target="https://www.google.com.pe/search?q=DESFILES+DE+MODAS&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwie-IT_xrbLAhUMEpAKHSAtByQQ_AUIBigB" role="button">DESFILE DE MODAS</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img data-src="public/imagenes/3.jpg" alt="Third slide" src="public/imagenes/3.jpg" width="710">
				<div class="container">
					<div class="carousel-caption">
						<p><a class="btn btn-lg btn-primary" a href="https://www.google.com.pe/search?q=GALERIA+DE+VESTIR&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjlo4qdxrbLAhXIQ5AKHbyQA70Q_AUIBigB" target="https://www.google.com.pe/search?q=GALERIA+DE+VESTIR&espv=2&biw=1366&bih=667&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjlo4qdxrbLAhXIQ5AKHbyQA70Q_AUIBigB" role="button">GALERIA DE VESTIR</a></p>
					</div>
				</div>

			</div>            
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	</center>
	

<!-- Latest compiled and minified JavaScript -->
<script src="public/js/jquery-1.12.1.js"></script>
<script src="public/js/bootstrap.js">
</script>
</body>
</html>
