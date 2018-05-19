<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>

<!--		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>-->
<!--		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>-->

		<link rel="stylesheet" type="text/css" href="/css/style.css"/>

		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>

        <title>Task</title>
	</head>
	<body>
		<div id="wrapper">

			<div id="header">

				<div id="menu">
					<ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/services">Услуги</a></li>
                        <li><a href="/task">Задание</a></li>
                        <li><a href="/addtask">Добавить задание</a></li>
                        <li><a href="/image">Изображение</a></li>
                        <li><a href="/portfolio">Портфолио</a></li>
                        <li><a href="/video">Видео</a></li>
                        <li><a href="/contacts">Контакты</a></li>
					</ul>
					<br class="clearfix"/>
				</div>

			</div>

			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix"/>
				</div>
				<br class="clearfix"/>
			</div>

			<div id="page-bottom">
				<div id="page-bottom-sidebar">
<!--					<h3>Наши контакты</h3>-->
<!--					<ul class="list">-->
<!--                        <li class="first">Телефоны для связи:</li>-->
<!--                        <li class="last">+7(978)263-0-264 (Viber, WhatsApp, Telegram)</li>-->
<!--					</ul>-->
				</div>
				<br class="clearfix"/>
			</div>
		</div>
		<div id="footer">
			<a href="/">JeK2a</a> &copy; 2018</a>
		</div>
	</body>
</html>