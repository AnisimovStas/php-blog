<header id="header" class="  lh-1 ">
    <div class=" row flex-nowrap bg-warning border-white justify-content-between align-items-center">

        <div class="  col-4 text-center">
            <img src="./img/favicon.ico" class=" w-25 h-25 " alt="logo">
            <a class="blog-header-logo h1 text-decoration-none text-dark" href="index.php">IT Blog</a>
        </div>

        <div class="col-4 d-flex justify-content-end align-items-center">
        </a> <a class="btn btn-lg  border-dark text-dark m-2 btn-outline-dark" href="contacts.php">Контакты</a>
            <?php if ($_COOKIE['loginCookie'] == 0) : ?>
                </a> <a class="btn btn-lg  border-dark text-dark m-2 btn-outline-dark" href="login.php">Войти</a>
                <a class="btn  btn-lg m-2 border-dark text-dark btn-outline-dark" href="reg.php"> Регистрация</a>
            <?php else : ?>
                <a class="btn  btn-lg m-2 border-dark text-dark btn-outline-dark" href="article.php">Добавить статью</a>

                <a class="btn  btn-lg m-2 border-dark text-dark btn-outline-dark" href="login.php"> Кабинет пользователя</a>
            <?php endif; ?>
        </div>
    </div>
    <hr>
</header>