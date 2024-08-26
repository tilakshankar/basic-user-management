<?php
include('includes/header.php');
include('includes/db.php');
session_start();

if ($_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>Admin Dashboard</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php while ($user = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['role']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php include('includes/footer.php'); ?>
