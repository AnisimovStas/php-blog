<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Регистрация на сайте</title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <form>
            <h1 class="h3 mb-3 text-center fw-normal">Регистрация: </h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="Введите имя пользователя">
                <label for="username">Имя пользователя</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                <label for="login">Логин</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Введите электронную почту">
                <label for="email">Электронная почта</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль">
                <label for="password">Пароль</label>
            </div>
            <div class="alert alert-danger testing" id="alert"> </div>
            <button class="w-100 btn btn-lg btn-warning" id="regUser" type="button">Зарегистироваться</button>
        </form>
    </main>
    <div class="absolute">
        <?php require './blocks/footer.php' ?> </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $('#regUser').click(function() {
            let username = $('#username').val();
            let login = $('#login').val();
            let email = $('#email').val();
            let password = $('#password').val();
            $.ajax({
                url: 'ajax/reg.php',
                type: 'POST',
                cache: false,
                data: {
                    'username': username,
                    'login': login,
                    'email': email,
                    'password': password
                },
                dataType: "HTML",
                success: function(data) {
                    if (data == 'Готово') {
                        $('#regUser').text('Все готово')
                        $('#regUser').css('background-color', 'green');
                        $('#regUser').css('color', 'white');
                        $('#alert').hide();
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