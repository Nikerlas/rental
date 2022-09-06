<?php
include_once("koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM sewa WHERE id=$id");
header("location:master.php");