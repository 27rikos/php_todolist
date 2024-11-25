<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "delete from todo where id='$id'";
$action = $conn->query($sql);
if ($action == true) {
    header('location:index.php');
}