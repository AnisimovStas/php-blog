<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Регистрация на сайте</title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <form action="reg/reg.php" method="post">
            <h1 class="h3 mb-3 text-center fw-normal">Регистрация: </h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Введите имя">
                <label for="name">Имя</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="surname" placeholder="Введите фамилию">
                <label for="surname">Фамилия</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="login" placeholder="Введите логин">
                <label for="login">Логин</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="login" placeholder="Введите электронную почту">
                <label for="login">Электронная почта</label>
            </div>
     
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Введите пароль">
                <label for="password">Пароль</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня?
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-warning" type="submit">Войти</button>
        </form>
    </main>
    <div class="absolute">
        <?php require './blocks/footer.php' ?> </div>
</body>

</html>