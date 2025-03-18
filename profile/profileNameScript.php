<?php
    session_start();
    require_once '../config_db.php';
    $login = $_POST['login'];
    $check_users = mysqli_query($connect, "SELECT * FROM `base` WHERE `login` = '$login'");
    $check_users = mysqli_fetch_all($check_users);

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<title>iLnaZi
	</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic" rel="stylesheet" />
	<link rel="stylesheet" href="../css/profile.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/jquery.fancybox.min.css">
</head>
<header class = "header">
	<div class = "container">
		<div class = "header_inner">
			<div class = "logo"><img src="../img/sdfsdfdf.png"></div>
			<nav class = "nav">
				<a class = "nav_link" href = "../index.php">главная</a>
				<a class = "nav_link" href = "https://vk.com/jeessus">контакты</a>
				<a class = "nav_link" href = "#">помощь</a>
			</nav>
			<div class = "search_box">
				<input class = "search_txt" type="text" placeholder="Кликните, чтобы начать поиск...">
				<a class = "search_btn" href="#">
					<i class="fas fa-search"></i>
				</a>
			</div>
			<div class = "auth">
				<button class = "auth_btn" type = "text">
					<a id = "auth_word" href = "auth.php">Выход</a>
				</button>
			</div>
		</div>
	</div>
</header>

<body class="body">
	<div class = "intro">
        <div class = "profile_info">
			<form method = "post">
				<img src = "<?=$_SESSION['user']['avatar']?>" width = "100">
				<h2 style = "left:10px;"><?=$_SESSION['user']['full_name']?></h2>
				<a><?=$_SESSION['user']['email']?></a>
				<button class = "phone" type = "text"><a href = "profileName.php">Добавить номер телефона</a></button>
				<button class = "email" type = "email">Добавить свою почту</button>
				<button class = "info" type = "text">Информация об отделе</button>
			</form>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/jquery.fancybox.min.js"></script>
