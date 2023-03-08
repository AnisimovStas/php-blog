 <?php
    setcookie('loginCookie', '', time() - 3600 * 24 * 30, '/');
    unset($_COOKIE['loginCookie']);
    echo true;
    ?>