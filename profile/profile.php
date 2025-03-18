<?php
    session_start();
	require_once '../config_db.php';
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
			<div class = "logo"><img src="../img/logo1.png"></div>
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
				<button class = "modal_exit" type = "sumbit" href = "../firstpage/auth.php">
                        <a href = "../firstpage/auth.php">
                            Выйти
                        </a>
                </button>
			</div>
		</div>
	</div>
</header>

<body class="body">
	<div class = "intro">
        <div class = "profile_info">
			<form method = "post" action="profileName.php">
				<img class = "avatar" src = "../<?=$_SESSION['user']['avatar']?>" width = "100" alt = "">
				<h2 class = "full_name" style = "width:200px;"><?=$_SESSION['user']['full_name']?></h2>
				<button class = "phone" type = "text"><a href = "profileName.php">Добавить номер телефона</a></button>
				<button class = "email" type = "email">Добавить свою почту</button>
				<button class = "info" type = "text">Информация об отделе</button>
			</form>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/jquery.fancybox.min.js"></script>
