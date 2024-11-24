<?php
    session_start();

    if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .logout-btn {
            background: #666;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['admin_username']; ?>!</h1>
    <p>Ini adalah halaman dashboard.</p>
    <a href="logout.php" class="logout-btn">Logout</a>
</body>
</html>