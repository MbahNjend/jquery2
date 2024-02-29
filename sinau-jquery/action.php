<?php
include 'connect.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST ['pekerjaan'];

mysqli_query($db, "insert into user values ('','$nama','$alamat','pekerjaan')")

?>