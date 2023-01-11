<? require "blocks/header.php";?>
<main>
    <div class="login wrepper">  
        <div class="login_button">
            <button class="style_top" id="but_top_l" onclick="login_reg()">Авторизация</button>
            <button class="" id="but_top_r" onclick="login_log()">Регистрация</button>
        </div>
    <div class="login_log" id="login_log">
            <h2>Авторизация</h2>         
            <form action="form/auth.php" method="post">
                <input type="text" name="login" placeholder="Ведите логин"><br>
                <input type="password" name="password" placeholder="Ведите пароль"><br>
                <button type="submit">Войти</button>
            </form>
        </div>
    <!--  -->
        <div class="login_reg display_r" id="login_reg">
            <h2>Регистрация</h2>         
            <form action="form/check.php" method="post">
                <input type="text" name="nik" placeholder="Ведите имя"><br>
                <input type="text" name="login" placeholder="Ведите логин"><br>
                <input type="password" name="password" placeholder="Ведите пароль"><br>
                <button type="submit">Готово</button>
            </form>
        </div>
        <!--  -->
    </div>
</main>
<? require "blocks/footer.php";?>