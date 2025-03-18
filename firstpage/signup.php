<?php
    session_start();
    require_once '../config_db.php';
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    if ($password == $password_confirm)
    {
        if (strlen($password)>4)
        {
            $path = 'uploads/' . time(). $_FILES['avatar']['name'];
            if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path))
            {
                $_SESSION['message'] = 'Ошибка загрузки файла!';
                header('Location: registration.php');
            }
            $password = md5($password);
            $check_user = mysqli_query($connect, "SELECT * FROM `user_info` WHERE `login` = '$login' AND `password` = '$password'");
            if (mysqli_num_rows($check_user) == 0)
            {
                mysqli_query(
                    $connect, 
                    "INSERT INTO `user_info` (`id`, `full_name`, `login`, `email`, `password`, `avatar`)
                    VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')"
                );
                header('Location: auth.php');
            }
            else
            {
                $_SESSION['message'] = 'Такой пользователь уже зарегестрирован';
                header('Location: registration.php');
            }
        }
        else
        {
            $_SESSION['message'] = 'Длинна пароля должна быть больше 4!';
            header('Location: registration.php');
        }
    }
    else
    {
        $_SESSION['message'] = 'Пароли не cовпадают!';
        header('Location: registration.php');
    }
?>