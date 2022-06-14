<?php

include_once("koneksi.php");
 
$id_mobil = $_GET['id_mobil'];
$user_data = mysqli_query($konek, "DELETE FROM tb_mobil WHERE id_mobil='$id_mobil'");
 
header("Location:data_mobil.php");
?>