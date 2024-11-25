<?php
include "koneksi.php";
$todo = $_POST['todo'];
$sql = "insert into todo(todo)values('$todo')";
$action = $conn->query($sql);
if ($action == true) {
    header('location:index.php');
}