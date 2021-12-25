<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Музыкальный магазин</title>
    <link rel="stylesheet" type="text/css" href="/styles/mainPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="././znak.ico" type="image/x-icon">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    </script>
</head>
<body id="tablica">
<div id="headerheader">

    <div class="div-table">
        <div class="div-table-cell">
            <h1 id="nazvanie">Музыкальный магазин</h1>
            <?php if (isset($_SESSION['user'])): ?>
            <p id="descript">Я вас категорически приветствую, <?php echo $_SESSION['user']['login']; ?>!</p>
            <?php else: ?>
                <p id="descript">Я вас категорически приветствую!</p>
            <?php endif; ?>
            <ul class="nav  nav-justified">
                <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <form action="../cabinet" method="post">
                    <button class="btn btn-primary" type="submit" style="background-color: red">Личный кабинет</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="../cart" method="post">
                        <button class="btn btn-primary" type="submit" style="background-color: red">Корзина</button>
                    </form>
                </li>
                <li class="nav-item">
                    <form action="../user/logout" method="post">
                        <button class="btn btn-primary" type="submit" style="background-color: red">Выход</button>
                    </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <form action="../cabinet" method="post">
                            <button class="btn btn-primary" type="submit" style="background-color: red">Вход</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form action="../user/register" method="post">
                            <button class="btn btn-primary" type="submit" style="background-color: red">Регистрация</button>
                        </form>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <form action="/index.php" method="post">
                        <button class="btn btn-primary" type="submit" style="background-color: red">Главная страница</button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
</div>



<div id="classification">
    <?php $catList = Product::getCategories(); ?>
    <p style="text-align: center"><u>Выберите категорию:</u></p>
    <form action="/index.php" method="post">
        <button class="btn btn-primary" type="submit">Все</button>
    </form>
    <br>
    <?php foreach ($catList as $c): ?>
        <form action="/good/<?php echo $c['tabl']; ?>" method="post">
        <button class="btn btn-primary" type="submit"><?php echo $c['cat']; ?></button>
    </form>
    <br>
    <?php endforeach; ?>
    <br>
    <br>
    <p id="vvod">Показать товары дороже заданной цены:</p>
    <form action="productListOver" method="post">
    <p id="vvod">
    <input  name="dor" type="number" size="40" style="margin: auto">
    </p>
        <p id="vvod">
    <input type="submit" value="Показать">
        </p>
    </form>

    <p id="vvod">Показать товары дешевле заданной цены:</p>
    <form action="productListLess" method="post">
        <p id="vvod">
            <input  name="desh" type="number" size="40" style="margin: auto">
        </p>
        <p id="vvod">
            <input type="submit" value="Показать">
        </p>
    </form>
</div>






