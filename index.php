<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="font-awesome.min.css">
	<!--jQuery 3.1.1 MIN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!--- Font Awesome JS 4.0.3 MIN -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<!--LESS LESS -->
	<link rel="stylesheet/less" href="/style.less" type="text/css">
	<!--LESS JS 2.7.1 MIN -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<!--- Font Noto Sans -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext">
	<!-- BootStrap CSS 3.3.7 MIN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--- BootStrap JS 3.3.7 MIN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- BootStrap CONTAINER FLUID-->
	<div class="container-fluid">
		<div class="row">
			<p>Название сайта</p>
			<div class="navbar navbar-inverse">
				<!-- BootStrap CONTAINER-->
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="col-xs-2 navbar-toggle" data-toggle="collapse" data-target="#responsive-menu" >
							<i class="fa fa-bars fa-1x" style="color: beige;" aria-hidden="true"></i>
						</button>
						<!-- VK -->
						<div class="col-xs-1 navbar-toggle">
							<i class="fa fa-vk fa-1x" style="color: beige;" aria-hidden="true"></i>
						</div>
						<!-- FACEBOOK -->
						<div class="col-xs-1 navbar-toggle">
							<i class="fa fa-facebook fa-1x" style="color: beige;" aria-hidden="true"></i>
						</div>
						<!-- ODNOKLASSNIKI -->
						<div class="col-xs-1 navbar-toggle">
							<i class="fa fa-odnoklassniki fa-1x" style="color: beige;" aria-hidden="true"></i>
						</div>
							<!-- LOGO -->
							<div class="col-xs-5" style="float:left;position: relative;">
								<img style="height: 56px;" src="\logo.jpg" alt="LOGO IMAGE">
							</div>
						<!-- <div class="navbar-brand" href="#">Название сайта</div> -->
					</div>
					<div class="collapse navbar-collapse" id="responsive-menu">
						<ul class="nav navbar-nav">
							<!-- li*4>a[href="#"]{Пункт $} -->
							<li><a href="#">Пункт 1</a></li>
							<li><a href="#">Пункт 2</a></li>
							<li><a href="#">Пункт 3</a></li>
							<li><a href="#">Пункт 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>