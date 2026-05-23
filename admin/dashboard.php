<?php
session_start();

if(!isset($_SESSION['admin'])){
    header('Location: login.php');
}

include '../db.php';

$result = mysqli_query($conn, "SELECT * FROM messages ORDER BY id DESC");
?>

<h2>Portfolio Messages</h2>

<table border="1" cellpadding="10">

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['message']; ?></td>
</tr>

<?php } ?>

</table>
