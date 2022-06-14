<?php

include_once("koneksi.php");
 
$id_pembeli = $_GET['id_pembeli'];
$user_data = mysqli_query($konek, "DELETE FROM tb_pembeli WHERE id_pembeli='$id_pembeli'");
 
header("Location:data_pembeli.php");
?>