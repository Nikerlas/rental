<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM kendaraantbl WHERE id=$id");
header("location:master.php");