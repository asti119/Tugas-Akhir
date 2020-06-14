
<?php
require_once('koneksi.php');
session_start();
if(!isset($_SESSION['user_aktif']))
{
?>
<script type="text/javascript">alert('anda belum login!');
window.location.href="login.php";
</script>
<?php
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Layout_1</title>

</head>
<style type="text/css">
    a{text-decoration: none; color: white; padding: 2px 10px;}
    #main{background: #f3ffb3;}
    #header{background: #000; padding: 10px;}
    #footer{background: black; padding: 10px;color: white;}
    iframe{background: white;}
</style>
<body bgcolor="#f3ffb3">
<div id="main" ><p align="center"> <font size="90" align="center">Rumah Sakit Medika</font><br><font size="3" face="lucida calygraphy">
<i>Jl.senopati no 56 semarang kode pos 54212 fax (021) 00086 e-mail:rsmedika@gmail.com</i></font><br><br></p>
<div id="header">   
<a href="home.php"  target="isi">Home </a>
<a href="in_dokter.php" target="isi">Tambah Data</a> 
<a href="lap_dokter.php" target="isi">Laporan Data </a>
<a href="logout.php" >Logout</a>

    </div>
    <div id="wrapper"><iframe src="a.jpg" height="400 px" width="100%" name="isi" ></iframe></div>
    <div id="footer" align="center"> Nama :Asti Afelia safika wardani | NIM: G.211.18.0109
    </div>
</div>
</body>
</html>
