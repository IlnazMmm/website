<?php
include 'db.php';
session_start();

// Проверяем авторизацию
if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.html");
    exit();
}

// Добавление пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    
    if ($stmt->execute()) {
        header("Location: users.php");
        exit();
    } else {
        echo "Ошибка: " . $stmt->error;
    }
}

// Удаление пользователя
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: users.php");
        exit();
    } else {
        echo "Ошибка при удалении.";
    }
}

// Получение всех пользователей
$result = $conn->query("SELECT id, username FROM users");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление пользователями</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<nav>
    <a href="../pages/dashboard.html">Панель управления</a>
    <a href="../php/logout.php">Выйти</a>
</nav>

<h2>Список пользователей</h2>

<table border="1" cellpadding="10" cellspacing="0" align="center">
    <tr>
        <th>ID</th>
        <th>Логин</th>
        <th>Действия</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['username']); ?></td>
            <td>
                <a href="users.php?delete=<?= $row['id']; ?>" onclick="return confirm('Удалить пользователя?')">Удалить</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<h2>Добавить пользователя</h2>
<form action="users.php" method="post">
    <input type="text" name="username" placeholder="Логин" required>
    <input type="password" name="password" placeholder="Пароль" required>
    <button type="submit" name="add_user">Добавить</button>
</form>

</body>
</html>
