<?php
    session_start();
    require_once '../config_db.php';
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($connect, "SELECT * FROM `user_info` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user); 
        print_r($user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
        ];
        header('Location: ../profile/profile.php');
 
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль!';
        header('Location: auth.php');
    }
?>
<pre>
    <?php
        print_r($user);
    ?>
</pre>