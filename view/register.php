<?php include ('layout/header.php')?>

<div id="content">
    <p>Пожалуйста, придумайте себе логин и пароль и введите их в поля ниже</p>
<form action="./saveUser" method="post">

    <label>Логин
    <input name="login" type="text">
    </label>
    <p></p>

    <p><label>Пароль <input name="password" type="password"></label></p>

    <p><input type="submit" value="Зарегистрироваться"></p>

</form>
</div>

<?php include ('layout/footer.php')?>