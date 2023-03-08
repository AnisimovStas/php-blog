<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Войти</title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <?php if ($_COOKIE['loginCookie'] == 0) : ?>
            <form>
                <h1 class="h3 mb-3 text-center fw-normal">Войти: </h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
                    <label for="login">Логин</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль">
                    <label for="password">Пароль</label>
                </div>
                <div class="alert alert-danger testing" id="alert"> </div>
                <button class="w-100 btn btn-lg btn-warning" id="loginUser" type="button">Войти</button>
            </form>
        <?php else : ?>
            <h1> Здравствуйте, <?= $_COOKIE['loginCookie'] ?>! </h1>
            <button class="btn btn-danger btn-lg" id='exitBtn'> Выход</button>
        <?php endif; ?>
    </main>
    <div class="absolute">
        <?php require './blocks/footer.php' ?> </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $('#exitBtn').click(function() {
            $.ajax({
                url: 'ajax/exit.php',
                type: 'POST',
                cache: false,
                data: {},
                dataType: "HTML",
                success: function(data) {
                    if (data) {
                        document.location.reload(true);
                    } else {
                        alert('Что-то пошло не так, перезагрузите страницу');
                    }
                }
            })

        });
        $('#loginUser').click(function() {
            let login = $('#login').val();
            let password = $('#password').val();
            $.ajax({
                url: 'ajax/login.php',
                type: 'POST',
                cache: false,
                data: {
                    'login': login,
                    'password': password
                },
                dataType: "HTML",
                success: function(data) {
                    if (data == 'Готово') {
                        $('#loginUser').text('Готово')
                        $('#loginUser').css('background-color', 'green');
                        $('#loginUser').css('color', 'white');
                        $('#alert').hide();
                        document.location.reload(true);
                    } else {
                        $('#alert').show();
                        $('#alert').text(data);
                    }
                }
            })

        });
    </script>
</body>

</html>