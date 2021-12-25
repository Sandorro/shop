<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Список товаров</h1>
<table>
    <th>Идентификатор</th>
    <th>Название</th>
    <th>Цена</th>

    <?php foreach ($productList as $product): ?>
        <tr>
            <td><?php echo $product["id"]; ?></td>
            <td><?php echo $product["header"]; ?></td>
            <td><?php echo $product["price"]; ?></td>
            <td>
                <form action="../productAdd" method="post">
                    <button type="submit" value="<?php echo $product['id'];?>" name="add">Добавить</button>
                    <!--<input type-->
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>
