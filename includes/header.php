<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <?php if (isset($_SESSION['username'])) { ?>
            <a href="profile.php">Profile</a>
            <?php if ($_SESSION['role'] === 'admin') { ?>
                <a href="admin.php">Admin Dashboard</a>
            <?php } ?>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        <?php } ?>
    </nav>
