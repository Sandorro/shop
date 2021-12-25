<?php include ('layout/header.php')?>

    <div id="content">
        <?php $dlina = count($arr);?>
        <?php $kolStrok = intdiv($dlina, 4)?>
        <?php $ostatok = fmod($dlina, 4)?>
        <table>
            <?php for ($a=0; $a<$kolStrok; $a++): ?>
                <tr class="stroka">
                    <?php $i = 0; ?>
                    <?php while ($i<4): ?>
                        <td class="stolbec">
                            <a href="good/<?php echo $arr[$i+$a*4]["id"]; ?>"><img src="<?php echo $arr[$i+$a*4]['image']; ?>" height="250"  alt="Изображение товара" title="<?php echo $arr[$i+$a*4]["header"]; ?>"></a>
                            <p><?php echo $arr[$i+$a*4]["header"]; ?></p>
                            <p><?php echo $arr[$i+$a*4]["price"]; ?></p>
                            <form action="/good/<?php echo $arr[$i+$a*4]['id']; ?>/productAdd" method="post">
                                <button type="submit" value="<?php echo $arr[$i+$a*4]['id']; ?>" name="add">Добавить в корзину</button>
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
                            <a href="good/<?php echo $arr[$kolStrok*4+$i]["id"]; ?>"><img src="<?php echo $arr[$kolStrok*4+$i]['image']; ?>" height="250"  alt="Изображение товара" title="<?php echo $arr[$kolStrok*4+$i]["header"]; ?>"></a>
                            <p><?php echo $arr[$i+$a*4]["header"]; ?></p>
                            <p><?php echo $arr[$i+$a*4]["price"]; ?></p>
                            <form action="/good/<?php echo $arr[$i+$a*4]['id']; ?>/productAdd" method="post">
                                <button type="submit" value="<?php echo $arr[$i+$a*4]['id']; ?>" name="add">Добавить в корзину</button>
                        </td>
                        <?php $i = $i+1; ?>
                    <?php endwhile; ?>
                </tr>
            <?php endif; ?>

        </table>



    </div>



<?php include ('layout/footer.php')?>