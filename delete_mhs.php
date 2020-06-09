<?php
include_once 'koneksi_db.php';
$nrp = $_GET['nrp'];
$result=mysqli_query($connection,"DELETE FROM mhs WHERE nrp='$nrp'");

header("Location: index.php");
?>