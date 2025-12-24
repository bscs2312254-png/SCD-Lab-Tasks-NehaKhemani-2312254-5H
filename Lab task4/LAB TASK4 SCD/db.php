<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'student_system';

$conn = mysqli_connect($host, $user, $pass);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS $db";
mysqli_query($conn, $sql);

mysqli_select_db($conn, $db);

$table1 = "CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)";
mysqli_query($conn, $table1);

$table2 = "CREATE TABLE IF NOT EXISTS students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    roll_no VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    marks INT NOT NULL,
    department VARCHAR(100) NOT NULL
)";
mysqli_query($conn, $table2);
?>
