
<?php require_once('koneksi.php'); ?>
<?php
session_start();
$id_user=$_POST['nama_user'];
$pass=$_POST['sandi'];
$dt="select*from login where nama_user='$id_user' and sandi='$pass'";
$qy=mysql_query($dt) or die(mysql_error());
if(mysql_num_rows($qy)>0){
	$_SESSION['user_aktif']=$id_user;
?>
<script type="text/javascript">window.location.href="index.php";</script>
<?php
}

else{
	?>
	<script type="text/javascript">alert("login gagal");</script>
	<?php
}
?>

