<?php


/*
git add PARCIALES/PARCIAL_3/ index.php PARCIALES/PARCIAL_3/ recursobiblioteca.php
git commit -m "Parcial3"
git push origin main

*/


require_once 'funciones.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (validateLogin($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['tasks'] = $_SESSION['tasks'] ?? [];
        header('Location: dashboard.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div>
            <label>Username:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>


















