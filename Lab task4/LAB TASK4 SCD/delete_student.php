<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";
mysqli_query($conn, $sql);

header('Location: dashboard.php');
exit();
?>
