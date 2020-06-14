
<?php
include "koneksi.php";	
$a=$_GET ['kode_dokter'];
$query2 = "delete from dokter where kode_dokter = '$a'";
mysql_query($query2);

?>
<script type="text/javascript">window.location.href="lap_dokter.php";</script>