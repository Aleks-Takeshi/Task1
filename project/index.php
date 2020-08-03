<?php
require_once "includes/config.php"
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.0/bootstrap.min.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>
    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="header__information">
                            <p>Телефон: <a href="tel: 4993409471">(499) 340-94-71</a></p>
                            <p>Email: <a href="mailto: info@future-group.ru">info@future-group.ru</a></p>
                        </div>
                        <div class="header__title">
                            <h1>Комментарии</h1>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex ml-auto">
                        <div class="header__logo">
                            <img src="img/logo.png" alt="logo">
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="comments">
            <div class="container">
                <?php require_once "addComments.php"; ?>
                <div class="row">
                    <?php require_once "comments.php"; ?>
                </div>

                <hr>

                
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div id="comments__form" class="comments__form">
                            <h3>Оставить комментарий</h3>
                            <form action="/" method="POST" name="comment">
                                <div class="comments__name">
                                    <lable><p>Ваше имя</p></lable>
                                    <input type="text" name="name">
                                </div>
                                <div class="comments__text">
                                    <lable><p>Ваш комментарий</p></lable>
                                    <textarea name="text" cols="70" rows="7"></textarea>
                                </div>
                                <div class="comments__button">
	                                <p><input type="submit" name="button"></p>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-2">
                        <div class="footer__logo d-flex ml-auto">
                            <img src="img/logo.png" alt="logo">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="footer__information">
                            <p>Телефон: <a href="tel: 4993409471">(499) 340-94-71</a></p>
                            <p>Email: <a href="mailto: info@future-group.ru">info@future-group.ru</a></p>
                            <p>Адрес: <a href="">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>
                        </div>
                        <div class="copyright">
                            <p> &#169; 2010 - <?php echo date(Y); ?> Future - все права защищены</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
</body>

</html>