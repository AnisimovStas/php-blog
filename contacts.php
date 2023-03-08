<!DOCTYPE html>
<html lang="ru">

<head>
    <?php require './blocks/headData.php' ?>
    <title>Обратная связь</title>

</head>

<body>
    <?php require './blocks/header.php' ?>
    <main class="container mt-5  ">
        <form>
            <h1 class="h3 mb-3 text-center fw-normal">Обратная связь: </h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="Введите имя пользователя">
                <label for="username">Имя пользователя</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="Введите электронную почту">
                <label for="email">Электронная почта</label>
            </div>

            <div class="form-floating">
                <textarea type="password" class="form-control" name="mess" id="mess" placeholder="Введите сообщение"></textarea>
                <label for="mess">Сообщение</label>
            </div>
            <div class="alert alert-danger testing" id="alert"> </div>
            <button class="w-100 btn btn-lg btn-warning" id="sendEmail" type="button">Отправить сообщение</button>
        </form>
    </main>
    <div class="absolute">
        <?php require './blocks/footer.php' ?> </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $('#sendEmail').click(function() {
            let username = $('#username').val();
            let email = $('#email').val();
            let mess = $('#mess').val();
            $.ajax({
                url: 'ajax/sendEmail.php',
                type: 'POST', 
                cache: false,
                data: {
                    'username': username,
                    'mess': mess,
                    'email': email,
                },
                dataType: "HTML",
                success: function(data) {
                    if (data == 'Готово') {
                        $('#sendEmail').text('Все готово')
                        $('#sendEmail').css('background-color', 'green');
                        $('#sendEmail').css('color', 'white');
                        $('#alert').hide();
                        $('#username').val('');
                        $('#mess').val('');
                        $('#email').val('');
                      
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