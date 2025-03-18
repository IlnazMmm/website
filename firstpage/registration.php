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
        <div id = "modal_reg">
            <form action= "signup.php" method = "post" enctype="multipart/form-data">
                <div class = "modal_logo"><img src="../img/logo1.png"></div>
                <div class = "modal_word">Регистрация</div>
                <div class = "data_inputs">
                    <input class = "modal_full_name" type= "text" name = "full_name"placeholder = "Введите ФИО">
                    <input class = "modal_email" type= "email" name = "email" placeholder = "Введите свою почту">
                    <input class = "modal_file" type= "text" name = "" placeholder = "Вставьте свое фото">
                    <input class = "modal_file2" name = "avatar" type= "file">
                    <input class = "modal_login_reg" type= "login" name = "login" placeholder = "Логин">
                    <input class = "modal_pass_reg" type= "password" name = "password" placeholder = "Пароль">
                    <input class = "modal_pass2" type= "password" name = "password_confirm" placeholder = "Подтвердите пароль">
                </div>
                <div class = "exit_btn">
                    <button class = "modal_exit_btn" type = "text" href = "#">
                        Войти
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
<script src="../js/openReg.js"></script>