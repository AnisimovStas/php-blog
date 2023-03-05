<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Войти</title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <form>
            <h1 class="h3 mb-3 text-center fw-normal">Войти: </h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Введите логин">
                <label for="floatingInput">Логин</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Введите пароль">
                <label for="floatingPassword">Пароль</label>
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