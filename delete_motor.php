<?php

include_once("koneksi.php");
 
$id_motor = $_GET['id_motor'];
$user_data = mysqli_query($konek, "DELETE FROM tb_motor WHERE id_motor='$id_motor'");
 
header("Location:data_mobil.php");
?>