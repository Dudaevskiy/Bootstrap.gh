<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Обучение BootStrap v3</title>
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
<!------------------------------
Блок с меню BootStrap
------------------------------->

	<!-- BootStrap CONTAINER FLUID-->
	<div class="container-fluid" style="padding-bottom: 28px; display:visible;">
								<!------------------------------
								Отключил меню
								------------------------------->
								
		<div class="row">
			<p>Название сайта</p>
			<div class="navbar navbar-inverse  navbar-fixed-top">
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
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Пункт 1 
									<b class="caret"></b>
										<ul class="dropdown-menu">
										<!-- ul.dropdown-menu>li*4>a[href="#"] -->
											<ul class="dropdown-menu">
												<li><a href="#"><p>Пункт 1</p></a></li>
												<li><a href="#"><p>Пункт 2</p></a></li>
												<li><a href="#"><p>Пункт 3</p></a></li>
												<li><a href="#"><p>Пункт 4</p></a></li>
											</ul>
										</ul>
								</a>
							
							</li>
							
							<li><a href="#">Пункт 2</a></li>
							<li><a href="#">Пункт 3</a></li>
							<li><a href="#">Пункт 4</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!------------------------------
Блок с div BootStrap урок 1.4
------------------------------->
<!-- div>p.b{Работа с отступами в BootStrap урок 1.5} -->
		<div style="text-align:center;">
			<p>
				<h2>Работа с отображением и скрытием блоков в BootStrap урок 1.4</h2>
			</p>
		</div>		

	<!-- BootStrap CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 block" >
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, ea, eum, omnis ducimus voluptates nesciunt quam cumque nemo ad qui obcaecati placeat consequuntur nulla minima nisi dolorum necessitatibus asperiores repudiandae.</p>
			</div>
			<div class="col-md-3 col-sm-6 block" ><b>6</b></div>
			<!------------------------------
			Сброс блоков, перенос блоков при помощи .clearfix
			http://getbootstrap.com/css/#helper-classes-clearfix
			------------------------------->
			<!------------------------------
			Скрытие и показ блоковhttp://getbootstrap.com/css/#helper-classes-show-hide
			------------------------------->
			<div class="clearfix visible-sm-block"></div>
			
			<div class="col-md-3 col-sm-6 block" ><b>6</b></div>
			<div class="col-md-3 col-sm-6 block" ><b>6</b></div>
		</div>
	</div>
<!-----------------------------------------
Работа с отступами в BootStrap урок 1.5
------------------------------------------->
	<!-- BootStrap CONTAINER -->
	<div class="container">
		<div class="row">
		<!-- div>p.b{Работа с отступами в BootStrap урок 1.5} -->
		<div style="text-align:center;">
			<p>
				<h2>Работа с отступами в BootStrap урок 1.5</h2>
			</p>
		</div>
			<div class="col-md-12"></div>
		</div>
	</div>
</body>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>