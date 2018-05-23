<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="description" content=""/>
		<meta name="keywords" content=""/>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" type="text/css" href="/css/theme-white.css"/>
<!--        <link rel="stylesheet" type="text/css" href="/css/theme-black.css"/>-->
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>


<!--		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>-->

        <title>JeK-2a</title>
	</head>
	<body>
		<div id="wrapper">
            <div class="container">

                <div id="header">
                    <hr/>
                    <div class="row pad-15" id="menu">
                        <div class="col-sm">
                            <a href="/" class="btn btn-lg green">Задания</a>
                        </div>
                        <div class="col-sm">
                            <a href="/addtask" class="btn btn-lg blue">Добавить задание</a>
                        </div>
                        <div class="col-sm">
                            <a href="/edittask" class="btn btn-lg orange">Редактировать задание</a>
                        </div>
<!--                        <div class="col-sm">-->
<!--                            <a href="/video" class="btn btn-lg red">Войти</a>-->
<!--                        </div>-->
                        <div class="col-sm">
                            <a href="/image" class="btn btn-lg yellow">Изображения</a>
                        </div>
                    </div>
                    <hr/>
                </div>

                <div id="page">
                    <div id="content">
                        <div class="box">
                            <?php include 'application/views/'.$content_view; ?>
                        </div>
                    </div>
                </div>

                <div id="footer">
                    <hr/>
                    <a href="/">JeK-2a</a> &copy; 2018</a>
                    <br class="clearfix"/>
                    <hr/>
                </div>
            </div>

<!--        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>-->
<!--        <script src="/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->

	</body>
</html>