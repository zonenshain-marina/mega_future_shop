<?php include('../parts/header_conf.php'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/products.php">Список товаров</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/product_add.php">Добавить новый товар</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/orders.php">Заказы</a>
            </li>
        </ul>
        <br/><br/>