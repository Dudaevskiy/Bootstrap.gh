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
		<h1 style="text-align:center;">1.7 Компоненты</h1>
<h3 style="text-align:center;">Оформление таблицы</h3>
			<!-- tr*3>td*5>{Item $} -->
			<!------------------------------
			Для оформления таблиц в BootStrap используются классы:
			table - данный класс красиво оформляет таблицу в общем
			table-striped - подсведка через линию
			table-bordered - Подсветка границ таблиц
			table-hover - Подсветка таблиц при наведении
			table-condensed - Класс делает таблицу более компактной
			
			Классы подсветки рядов
			active - серый	
			success	- зеленый
			warning	- бежевый
			danger	- красный
			info - голубой
			------------------------------->
			
			<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<th class="">Item 1</th>
				<th>Item 2</th>
				<th>Item 3</th>
				<th>Item 4</th>
				<th>Item 5</th>
			</thead>
			<tr>
			 <!-- Подсведка классы подсветки рядов -->
			  <td class="active">active</td>
			  <td class="success">success</td>
			  <td class="warning">warning</td>
			  <td class="danger">danger</td>
			  <td class="info">info</td>
			</tr>
			<tr>
				<td>Item 1</td>
				<td>Item 2</td>
				<td>Item 3</td>
				<td>Item 4</td>
				<td>Item 5</td>
			</tr>
			<tr>
				<td>Item 1</td>
				<td>Item 2</td>
				<td>Item 3</td>
				<td>Item 4</td>
				<td>Item 5</td>
			</tr>
			</table>
			
<h3 style="text-align:center;">Создание таблицы с прокруткой - Responsive</h3>
<p style="text-align:center;"><a href="http://getbootstrap.com/css/#tables">http://getbootstrap.com/css/#tables</a></p>
			<!------------------------------
			Для создания прокрутки используется класс table-responsive
			------------------------------->
		<div class="table-responsive">
		<!-- Обвернул таблицу в table-responsive -->
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<th class="">Item 1</th>
					<th>Item 2</th>
					<th>Item 3</th>
					<th>Item 4</th>
					<th>Item 5</th>
					<th>Item 6</th>
					<th>Item 7</th>
					<th>Item 8</th>
					<th>Item 9</th>
					<th>Item 10</th>
				</thead>
				<tr>
					<td>Item 1</td>
					<td>Item 2</td>
					<td>Item 3</td>
					<td>Item 4</td>
					<td>Item 5</td>
					<td>Item 6</td>
					<td>Item 7</td>
					<td>Item 8</td>
					<td>Item 9</td>
					<td>Item 10</td>
				</tr>
				<tr>
					<td>Item 1</td>
					<td>Item 2</td>
					<td>Item 3</td>
					<td>Item 4</td>
					<td>Item 5</td>
					<td>Item 6</td>
					<td>Item 7</td>
					<td>Item 8</td>
					<td>Item 9</td>
					<td>Item 10</td>
				</tr>
				<tr>
					<td>Item 1</td>
					<td>Item 2</td>
					<td>Item 3</td>
					<td>Item 4</td>
					<td>Item 5</td>
					<td>Item 6</td>
					<td>Item 7</td>
					<td>Item 8</td>
					<td>Item 9</td>
					<td>Item 10</td>
				</tr>
			</table>
<h3 style="text-align:center;">Работа с формами</h3>
<p style="text-align:center;"><a href="http://getbootstrap.com/css/#forms">http://getbootstrap.com/css/#forms</a></p>
<p style="text-align:center;"><a href="http://getbootstrap.com/components/#input-groups-basic">Своеобразные лейблы для форм</a></p>
			<!------------------------------
			Выравнивание по горизонтали form-horizontal
			Выравнивание по вертикали form-inline
			------------------------------->
			
			<form class="form-horizonatl">
			  <div class="form-group">
				<label class="sr-only" for="exampleInputEmail3">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
			  </div>
			  <div class="form-group">
				<label class="sr-only" for="exampleInputPassword3">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
			  </div>
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Remember me
				</label>
			  </div>
			  <button type="submit" class="btn btn-default">Sign in</button>
			</form>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://lorempixel.com/1200/300" alt="Image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1200/301" alt="Image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	<div class="item">
      <img src="http://lorempixel.com/1200/299" alt="Image">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			
		</div>
	
</div>

 
</body>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>





















