<?php include ('layout/header.php')?>

<div id="content">
    <h1>Корзинка</h1>

    <?php if ((isset($_SESSION['cart'])) and (isset($_SESSION['user']))): ?>
        <a href="order" class="btn btn-primary">Оформить заказ!</a>

        <p></p>
        <p></p>

        <button id="sch" data-id="1">Посчитать количество товаров</button>

        <h3 id="cart-count">---</h3>
        <button id="price">Посчитать общую стоимость</button>
        <h3 id="price-output">---</h3>
    <table class="table table-striped" >
    <tr class="stroka">
        <th class="stolbec">Название</th>
        <th class="stolbec">Цена</th>
        <th class="stolbec">Фотография</th>
        <th class="stolbec">Количество</th>
        <th class="stolbec"> </th>
    </tr>
    <?php foreach ($_SESSION['cart'] as $p): ?>
        <tr class="stroka">
            <td class="stolbec"><?php echo $p["header"]; ?></td>
            <td class="stolbec"><?php echo $p["price"]; ?></td>
            <td class="stolbec"><img src="<?php echo $p['image']; ?>" height="250"></td>
            <td class="stolbec"><?php echo $p["dubler"]; ?></td>
            <td class="stolbec">
                    <button type="button" class="udalenie" data-id="<?php echo $p['kolvo']; ?>">Удалить из корзины</button>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
    <p></p>
    <p></p>
    <p></p>
    <p></p>

    <?php else:?>
    <p>Пока что Вы ничего не добавили в корзину.</p>
    <?php endif; ?>

</div>
<?php include ('layout/footer.php')?>