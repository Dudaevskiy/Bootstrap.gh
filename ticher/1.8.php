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
	<!-- BootStrap CSS 3.3.7 MIN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--- BootStrap JS 3.3.7 MIN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--LESS LESS -->
	<link rel="stylesheet/less" href="/style.less" type="text/css">
	<!--LESS JS 2.7.1 MIN -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<!--- Font Noto Sans -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext">
	
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
<!-- MENU END -->
<h1 style="text-align:center;">1.9 Переопределение стилей BootStrap</h1>
<!-- BootStrap CONTAINER -->
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-ms-12 col-md-12 col-lg-12">
		
		<p>
1) Необходимо добавить файл стилей после подключения стилей бутстрап </br>
<b>Например:</b></br>
	< link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></br>
	< link rel="stylesheet" href="style.css"></br>
И далее переопределять стили внося и изменяя стили BootStrap в 	файле style.css
</br></br>2) Вносить правки в файл <b>bootstrap-theme.css</b>
</br></br>3) Можем отключить не нужные компоненты BootStrap перед загрузкой фреймверка
на странице:
<a href="http://getbootstrap.com/customize/">http://getbootstrap.com/customize/</a>
</br></br> 4) Вносим правки в LESS файл,для этого загружаем LESS BootStrap: <br>
<a href="https://github.com/twbs/bootstrap/archive/v3.3.7.zip">https://github.com/twbs/bootstrap/archive/v3.3.7.zip</a>
</br><img style="width:550px;" src="\ticher\1.9.png" alt="">
<br> из загруженного архива берем папку less.
<br>
Далее загружаем компилятор для компиляции файлов css из файлов less <br>
<a href="http://koala-app.com/">http://koala-app.com/</a>
<br>В начале в настройки программы вносим изменения указанные на скриншоте:
<br> <img style="width:550px;" src="\ticher\1.9_2.png" alt="">
<br> Далее перетягиваем папку с less файлами в окно программы, наводим курсор на файл bootstrap.less в окне программы <br>
<br> и жмем правую кнопку мыши. Далее выбирваем "Настройка пути вывда", и выбираем файл bootstrap.css в папке css BootStrap'a
<br> В основном все правки вносятся в файл variables.less, так как он содержит все переменные фреймверка.
</p>
		
		</div>
	</div>
</div>


</body>
<!-- LiveReload -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>