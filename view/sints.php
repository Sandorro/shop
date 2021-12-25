<?php include ('layout/header.php')?>


<div id="content">
    <?php $dlina = count($sortirovka);?>
    <?php $kolStrok = intdiv($dlina, 4)?>
    <?php $ostatok = fmod($dlina, 4)?>
    <h1>Синтезаторы</h1>
    <table class="table table-striped">
        <?php for ($a=0; $a<$kolStrok; $a++): ?>
            <tr class="stroka">
                <?php $i = 0; ?>
                <?php while ($i<4): ?>
                    <td class="stolbec">
                        <a href="good/<?php echo $sortirovka[$i+$a*4]["id"]; ?>"><img src="<?php echo $sortirovka[$i+$a*4]['image']; ?>" height="250"  alt="Изображение товара" title="<?php echo $sortirovka[$i+$a*4]["header"]; ?>"></a>
                        <p><b><?php echo $sortirovka[$i+$a*4]["header"]; ?></b></p>
                        <p><?php echo $sortirovka[$i+$a*4]["price"]; ?></p>
                            <button  class="add-cart" type="submit" data-id="<?php echo $sortirovka[$i+$a*4]['id']; ?>" name="add">Добавить в корзину</button>
                    </td>
                    <?php $i = $i+1; ?>
                <?php endwhile; ?>
            </tr>
        <?php endfor; ?>
        <?php if ($ostatok != 0): ?>
            <tr class="stroka">
                <?php $i=0; ?>
                <?php while($i<$ostatok): ?>
                    <td class="stolbec">
                        <a href="good/<?php echo $sortirovka[$kolStrok*4+$i]["id"]; ?>"><img src="<?php echo $sortirovka[$kolStrok*4+$i]['image']; ?>" height="250"  alt="Изображение товара" title="<?php echo $sortirovka[$kolStrok*4+$i]["header"]; ?>"></a>
                        <p><b><?php echo $sortirovka[$i+$a*4]["header"]; ?></b></p>
                        <p><?php echo $sortirovka[$i+$a*4]["price"]; ?></p>
                            <button  class="add-cart" type="submit" data-id="<?php echo $sortirovka[$i+$a*4]['id']; ?>" name="add">Добавить в корзину</button>
                    </td>
                    <?php $i = $i+1; ?>
                <?php endwhile; ?>
            </tr>
        <?php endif; ?>

    </table>

</div>



<?php include ('layout/footer.php')?>
