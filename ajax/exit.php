 <?php
    setcookie('loginCookie', $login, time() - 3600 * 24 * 30, '/');
echo true;
    ?>