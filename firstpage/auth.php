<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<title>iLnaZi
	</title>
    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/jquery.fancybox.min.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic" rel="stylesheet" />

</head>
<?php require "header.php" ?>
<body class="body">
	<div class = "intro">
        <div id = "modal">
            <form action="signin.php" method = "post">
                <div class = "modal_logo"><img src="../img/logo1.png"></div>
                <div class = "modal_word">Авторизация</div>
                <div class = "data_inputs">
                    <input class = "modal_login" type="login" placeholder = "Логин" name = "login">
                    <input class = "modal_pass" type="password" placeholder = "Пароль" name = "password">
                </div>
                <div class = "modal_description">
                    <p>
                        У вас нет аккаунта? - <a id = "reg_word" href = "registration.php">Зарегистрируйтесь!</a>
                    </p>
                </div>
                <div class = "exit_btn">
                    <button class = "modal_exit" >
                        <a>
                            Войти
                        </a>
                    </button>
                </div>
                <div class = "modal_close"></div>
                <?php
                if ($_SESSION['message']){
                    echo '<p class = "msg">'. $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div> 
    </div> 
</body>
<script src="../js/openAuth.js"></script>