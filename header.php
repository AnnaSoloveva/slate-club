<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Касса-взаимопомощи</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <script data-main="js/config.js" async="async" src="js/require.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body class="<?echo(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == '/' ? 'index' :'' );?>">
<header>
    <div class="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6"><a href="mailtto:support@mail.ru"><span class="mail-ico">&#9993;</span> support@mail.ru</a> </div>
                <div class="col-xs-6 login-block text-right"><a href="/login.php" class="active">Регистрация</a> | <a href="/enter.php">Вход</a> </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="/">Касса<br>взаимопомощи</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/text.php">Информация</a></li>
                        <li><a href="/faq.php">Вопрос-ответ</a></li>
                        <li><a href="/news.php">Новости</a></li>
                        <li><a href="/text.php">Соглашение</a></li>
                        <li><a href="/reviews.php">Отзывы</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

</header>