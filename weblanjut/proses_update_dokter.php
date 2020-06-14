<?php
include "koneksi.php";
$a=$_POST['kode_dokter'];
$b=$_POST['nama_dokter'];
$c=$_POST['SIP'];
$d=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
$e=$_POST['telepon'];
$f=$_POST['alamat'];


$query = "UPDATE dokter SET kode_dokter='$a', nama_dokter='$b', SIP='$c', tanggal_lahir='$d', telepon='$e', alamat='$f' WHERE kode_dokter = '$a'";
$hasil = mysql_query($query);

?>
<script type="text/javascript">window.location.href="lap_dokter.php";</script>



