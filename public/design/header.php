<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="viewport" content="width=1170px" />
	
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="css/style/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script src="js/js/target.js"></script>
	<script src="js/js/header.js"></script>
	<script src="js/js/glasses.js"></script>
	
  </head>
<body>

<header>
	<div class="header_block">
		<div class="header_shap">
			<div class="header_shap_logo">
				<div class="header_shap_logo_left">
					<a href="index.php">
						<img id="logo1" src="images/logo.png" alt="Волгоградский Колледж Управления и Новых Технологий" />
						<p id="block-logo" class="text-right">Волгоградский Колледж Управления<br> и Новых Технологий</p>
						<img id="logo2" src="images/logo.gif" alt="Лаготип ВКУиНТ" />
					</a>
				</div>
				<div class="header_shap_logo_right">
					<ul>
						<li><a href="index.php?id=college">Наш<br>Колледж</a></li>
						<li><a href="http://www.do.vgkuint.ru" target="_blank">Дистанционное<br>обучение</a></li>					
					</ul>
				</div>
			</div>
			
			<div class="container">
				<div class="header_shap_text">				
					<div class="textrotator"></div>										
				</div>
			</div>
			
			<div class="header_shap_logo">
				<div class="header_shap_logo_right">
					<div class="address">
						<button class="btn btn-primary btn-lg" id="model_window" data-toggle="modal" data-target="#myModal">Контакты</button>
					</div>
				</div>
			</div>
			
		</div>
		<video loop="loop" muted="muted" autoplay="autoplay" poster="video/header.jpg" class="header_video">
		    <source src="video/header.webm" type="video/webm" />
			<source src="video/header.mp4" type="video/mp4" />
		</video>
	</div>	
</header>


<!-- Модель окна -->

<div>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Контактные данные</h4>
				</div>
				<div class="modal-body">
					<div class="address_window">
						<p><i class="fa fa-share" aria-hidden="true"></i> vgkunt@vlgmail.ru</p>
						<p><i class="fa fa-phone-square" aria-hidden="true"></i> (8442) 70-72-02</p>
						<p><i class="fa fa-location-arrow" aria-hidden="true"></i> 400125, г. Волгоград, ул. им. Грамши, 53.</p>
						<?php
			                include $_SERVER['DOCUMENT_ROOT'].'/widget/map.php';
		                ?>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
				</div>
			</div>
		</div>
	</div>
</div>