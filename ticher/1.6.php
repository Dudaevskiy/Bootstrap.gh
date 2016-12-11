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

<body style="padding-bottom:200px;">
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
							<div class="col-xs-5" style="float:left;position:relative; width:100% !important;">
							<a href="\">
								<img style="height: 56px;" src="\logo.jpg" alt="LOGO IMAGE">
							</a>
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
	<!-- END MENU -->
	
	<!-- BootStrap CONTAINER -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 block">
				<h1>Header</h1>
			</div>
		</div>
		<!-- BootStrap ROW-->
		<div class="row">
			<div class="col-md-8 col-md-push-4 block">
				<h2>Content</h2>
					<!-- BootStrap ROW-->
					<div class="row">
						<div class="col-sm-4">
							<!------------------------------
							Ниже был использован класс .panel
							Данный класс выделяет белым блок. 
							Используется для верстки
							------------------------------->
							
							<div class="panel">
								<h4>Goods 1</h4>
								<!------------------------------
								Делаем картинку адаптивной,для этого
								ставим класс: img-responsive
								Но лучше задать правило в стилях для изображений
								img {
									max-width: 100%;
									height: auto;
								}
								------------------------------->
								<!-- <img class="img-responsive" src="http://lorempixel.com/800/400" alt="Image"> -->
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="panel">
								<h4>Goods 1</h4>
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>	
						</div>
						<div class="col-sm-4">
							<div class="panel">
								<h4>Goods 1</h4>
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>	
						</div>
					</div>
				<!-- BootStrap ROW-->
				<div class="row">
					<div class="col-sm-4">
							<div class="panel">
								<h4>Goods 1</h4>
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>	
					</div>
					<div class="col-sm-4">
							<div class="panel">
								<h4>Goods 1</h4>
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>	
					</div>
					<div class="col-sm-4">
							<div class="panel">
								<h4>Goods 1</h4>
								<img src="http://placehold.it/300x200" alt="Image">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, fugit ullam voluptate inventore illo quisquam sit veniam. Numquam, incidunt reiciendis perspiciatis sunt aperiam rem quas nisi illum asperiores vel. Ea?</p>
							</div>	
					</div>
				</div>
			</div>
					

			<div class="col-md-4 col-md-pull-8 block">
				<h2>Sidebar</h2>	
				<!-- Создаем списки
				http://getbootstrap.com/components/#list-group
				-->
								<ul class="list-group">
				  <li class="list-group-item">Cras justo odio</li>
				  <li class="list-group-item">Dapibus ac facilisis in</li>
				  <li class="list-group-item">Morbi leo risus</li>
				  <li class="list-group-item">Porta ac consectetur ac</li>
				  <li class="list-group-item">Vestibulum at eros</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 block">
				<h3>Footer</h3>
			</div>
		</div>
	</div>
 
</body>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>