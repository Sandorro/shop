<?php include ('layout/header.php')?>
<!--<div id="content">
    <p><a href="good/0">Yamaha F310</a></p>
    <p><a href="good/1">Rockdale Aurora D1 C N</a></p>
    <p><a href="good/2">Fender Squier MM Stratocaster Hard Tail Red</a></p>
    <p><a href="good/3">Yamaha PSR-E273</a></p>
    <p><a href="good/4">KORG PA600</a></p>
</div>-->


<!--<div id="content">-->
<!---->
<!--    --><?php //foreach ($arr as $arr): ?>
<!--    -->
<!--    <p><a href="good/--><?php //echo $arr["id"]; ?><!--">--><?php //echo $arr['header'] ?><!--</a></p>-->
<!---->
<!--        <a href="good/--><?php //echo $arr["id"]; ?><!--"><img src="--><?php //echo $arr['image']; ?><!--" height="100" alt="Изображение товара" title="Купи меня!"></a>-->
<!---->
<!--    --><?php //endforeach; ?>
<!---->
<!--</div>-->

<div id="content">

            <?php $dlina = count($arr);?>
            <?php $kolStrok = intdiv($dlina, 4)?>
            <?php $ostatok = fmod($dlina, 4)?>




    <table class="table table-striped">
        <?php for ($a=0; $a<$kolStrok; $a++): ?>
        <tr class="stroka">
            <?php $i = 0; ?>
    <?php while ($i<=3): ?>
        <td class="stolbec">
        <a href="good/<?php echo $arr[$i+$a*4]["categ"]; ?>/<?php echo $arr[$i+$a*4]["id"]; ?>"><img src="<?php echo $arr[$i+$a*4]['image']; ?>" width="200" alt="Изображение товара" title="<?php echo $arr[$i+$a*4]["header"]; ?>"></a>
        <p><b><?php echo $arr[$i+$a*4]["header"]; ?></b></p>
            <p><?php echo $arr[$i+$a*4]["price"]; ?></p>
                <button class="add-cart" data-tabl="<?php echo $arr[$i+$a*4]['categ']; ?>"
                        data-id="<?php echo $arr[$i+$a*4]['id']; ?>">Добавить в корзину</button>
                <!--<input type="submit" value="// echo $product['id']; ?>" name="add">-->
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
                    <a href="good/<?php echo $arr[$i+$a*4]["categ"]; ?>/<?php echo $arr[$i+$a*4]["id"]; ?>"><img src="<?php echo $arr[$kolStrok*4+$i]['image']; ?>" width="200"  alt="Изображение товара" title="<?php echo $arr[$kolStrok*4+$i]["header"]; ?>"></a>
                    <p><b><?php echo $arr[$i+$a*4]["header"]; ?></b></p>
                    <p><?php echo $arr[$i+$a*4]["price"]; ?></p>
                        <button  class="add-cart" data-tabl="<?php echo $arr[$i+$a*4]['categ']; ?>" data-id="<?php echo $arr[$i+$a*4]['id']; ?>">Добавить в корзину</button>
                        <!--<input type="submit" value="// echo $product['id']; ?>" name="add">-->
                </td>
                <?php $i = $i+1; ?>
            <?php endwhile; ?>
        </tr>
        <?php endif; ?>

    </table>
    <?php var_dump($catList); ?>

</div>



<?php include ('layout/footer.php')?>
