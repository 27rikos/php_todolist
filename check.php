<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "update todo set status='done' where id='$id'";
$action = $conn->query($sql);
if ($action == true) {
    header('location:index.php');
}