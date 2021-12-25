<?php include ('layout/header.php')?>

<div id="content">
    <h2>Добро пожаловать в Ваш личный кабинет!</h2>
    <br>
    <p>Если Вы хотите сменить логин, <a href="./user/showchange">нажмите сюда</a></p>
    <br>
    <p>Если Вы хотите сменить пароль, <a href="./user/showchangepassword">нажмите сюда</a></p>
    <?php $orderList = Order::getOrders(); ?>

    <h4>Ваша история заказов</h4>
    <table border="2" class="table table-striped">
        <th class="stolbec">Дата заказа</th>
        <th class="stolbec">Товары</th>
        <th class="stolbec">Стоимость</th>
    <?php foreach ($orderList as $o): ?>
        <tr class="stroka">
            <td class="stolbec"><?php echo $o["data"]; ?></td>
            <td class="stolbec">
            <?php $perenos = str_replace(')', ")\n", $o["tovars"]); ?>
            <?php echo nl2br($perenos); ?>
            </td>
            <td class="stolbec"><?php echo $o["price"]; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>


<?php include ('layout/footer.php')?>
