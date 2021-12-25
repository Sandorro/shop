<?php include ('layout/header.php')?>

<div id="content">
    <h1><?php echo $product['header']; ?></h1>

    <p><i>Страна-производитель: </i><?php echo $product['country']; ?></p>
    <p><i>Цена:</i>
        <b><?php echo $product['price']; echo " рублей";?></b></p>
    <p>
    <?php if($product['categ']=="guitars"): ?>
    <p><?php echo $product['strun'];?></p>
    <?php endif; ?>
    <p><?php echo $product['comment']; ?></p>
    <form action="<?php echo $product; ?>/productAdd" method="post">
        <button type="submit" class="add-cart" data-id="<?php echo $product['id']; ?>" name="add">Добавить в корзину</button>
    </form>
    </p>
    <img src="<?php echo $product['image']; ?>" class="shadow"  height="500" alt="Изображение товара" title="Купи меня!">

</div>
<?php include ('layout/footer.php')?>