<?php

include('parts/header_conf.php');

if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])) {
    $countBasket = [];

    foreach ($_SESSION['basket'] as $item) {
        $item = count($item);
        $countBasket[] = $item;
    };

    unset($item);
}


?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $header_config['title'] ?></title>

    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/<?= $header_config['style'] ?>">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<div class="wrapper">
    <header class="header">
        <nav class="header__navbar">
            <a href="/" class="navbar-logo"></a>
            <div class="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="navbar-menu">
                <a href="/catalog.php?category_id=1" class="menu-item">Женщинам</a>
                <a href="/catalog.php?category_id=2" class="menu-item">Мужчинам</a>
                <a href="/catalog.php?category_id=3" class="menu-item">Детям</a>
            </div>
        </nav>
        <div class="header__user-box">
            <a href="#" class="user-box__login">Войти</a>
            <a href="/basket.php" class="user-box__basket">
                Корзина (
                <?php if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])) : ?>
                    <strong>
                        <?= array_sum($countBasket) ?>
                    </strong>
                <?php endif; ?>
                )
            </a>
        </div>
        <div class="popup-log">
            <div class="popup-log__close"></div>
            <form method="GET" action="/#" class="popup-log__form"
                  onsubmit="return checkFormLog(this.elements)"
                  onkeyup="return checkFormLog(this.elements)">
                <div class="form__group">
                    <input type="email" name="login" placeholder=" ">
                    <label>Email</label>
                </div>
                <div class="form__group">
                    <input type="password" name="pass" placeholder=" ">
                    <label>Пароль</label>
                </div>
                <input type="submit" value="Войти" disabled>
            </form>
            <span><a href="#/" class="forgot-href">забыли пароль?</a></span>
            <span>/</span>
            <span><a href="#" class="reg-href">регистрация</a></span>
        </div>

        <!-- Попап уведомлений -->
        <div class="notice-popup"></div>

        <!-- Тут лежит попап регистрации новых пользователей и попап восстановления пороля-->
        <?php include('parts/registration.php') ?>
    </header>


    <?php

    // Авторизация пользователя -----------------------

    if (isset($_GET['login']) && isset($_GET['pass'])) {

        if (!empty($_GET['login']) && !empty($_GET['pass'])) {

//            exit("<meta http-equiv='refresh' content='0; url= /'>");
        }
    }

    //-------------------------------------------------

    ?>
