<?php include ('layout/header.php')?>
<div id="content">
    <p>Пожалуйста, введите логин и пароль</p>
    <form action="./auth" method="post">
        <label>Логин
        <input name="login" type="text">
        </label>
        <p></p>
        <p><label>Пароль
        <input name="password" type="password">
            </label></p>
        <input type="submit" value="Войти">

    </form>
</div>

<?php include ('layout/footer.php')?>
