<?php include ('layout/header.php')?>
    <div id="content">
        <p>Придумайте себе новый пароль</p>
        <form action="./changepassword" method="post">
            <label>Новый пароль
                <input name="newpassword" type="text">
            </label>
            <input type="submit" value="Поменять">
        </form>
    </div>
    S
<?php include ('layout/footer.php')?>