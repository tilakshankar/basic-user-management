<?php
include('includes/header.php');
include('includes/db.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2>Welcome, <?php echo $user['username']; ?></h2>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    <p><strong>Role:</strong> <?php echo $user['role']; ?></p>
    <a href="logout.php" class="btn">Logout</a>
</div>

<?php include('includes/footer.php'); ?>
