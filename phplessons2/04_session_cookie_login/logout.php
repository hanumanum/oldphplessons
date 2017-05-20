<?php
session_start();
session_destroy();

header("Location: http://localhost/phplessons2/04_session_cookie_login/login.php");
