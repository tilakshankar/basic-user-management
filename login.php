<?php
include('includes/header.php');
include('includes/db.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header('Location: profile.php');
    } else {
        echo "<p>Invalid login credentials</p>";
    }
}

mysqli_close($conn);
?>

<div class="container">
    <h2>User Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username or Email:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn">Login</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>
