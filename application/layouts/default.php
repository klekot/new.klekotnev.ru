<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Igor Klekotnev">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo SITE_TITLE?></title>

    <link rel="stylesheet" href="../../css/common.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sticky-footer.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="header-banner">
        <h1><a href="<?php echo SITE_ROOT ?>"><?php echo SITE_TITLE?></a></h1>
    </div>

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Музыка <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/music/prehistory">Предыстория</a></li>
                        <li><a href="/music/godfathers">Крёстные Отцы</a></li>
                        <li><a href="/music/old-nectar">Старый Нектар</a></li>
                        <li><a href="/music/svetlo">CBETLO</a></li>
                        <li><a href="/music/pinstripe">PINSTRIPE</a></li>
                        <li><a href="/music/ten-thousands-mics">10000 Микрофонов</a></li>
                        <li><a href="/music/soloing">Сольное творчество</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Раритеры</li>
                        <li><a href="/music/raritets/nuages-combo">Nuages Combo</a></li>
                        <li><a href="/music/raritets/anything">Разное</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Литература <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/literature/prose">Проза</a></li>
                        <li><a href="/literature/poetry">Поэзия</a></li>
                        <li><a href="/literature/lyrics">Тексты песен</a></li>
                        <li><a href="/literature/drama">Драматургия</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Нигдея <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/nowhereland/history">История</a></li>
                        <li><a href="/nowhereland/maps">Картография</a></li>
                        <li><a href="/nowhereland/languages">Языки</a></li>
                        <li><a href="/nowhereland/folklore">Фольклор</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Контакты</a></li>
                <li><a href="/thanks">Спасибо</a></li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Поиск по сайту ...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Найти</button>
                            </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div>
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="layout-wrapper">
        SITE_CONTENT

    </div>

</div> <!-- /container -->

<footer class="footer">
    <div class="container">
        <p class="text-muted">&copy Игорь Клекотнев, 2008 - <?php echo date("Y"); ?></p>
    </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
