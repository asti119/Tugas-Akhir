<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Layout_1</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>
<style type="text/css">
  a{text-decoration: none; color: white; background: black; padding: 5px;}
</style>
<body>

<table width="100%">
<tr>
<td valign="top" align="center">   
<p align="left"><a href="in_dokter.php" >+ Tambahkan Data Dokter</a></p>
<table width="100%" height="116" bgcolor="black" cellpadding="10px">
    <tr bgcolor="<?php echo $bg; ?> ">
      <td colspan="11" align="center" bgcolor="#ffb642">laporan dokter</td>
    </tr>
    
    <tr bgcolor="<?php echo $bg; ?> ">
      <td width="25" align="center" bgcolor="#ffb642">no</td>
      <td width="80" align="center" bgcolor="#ffb642">kode dokter</td>
      <td width="63" align="center" bgcolor="#ffb642">nama dokter</td>
      <td width="105" align="center" bgcolor="#ffb642">sip</td>
      <td width="98" align="center" bgcolor="#ffb642">tanggal lahir</td>
      <td width="86" align="center" bgcolor="#ffb642">telepon</td>
      <td width="97" align="center" bgcolor="#ffb642">alamat</td>
      <td width="113" align="center" bgcolor="#ffb642">Action</td>
    </tr>
   <?php 
   include "koneksi.php";
	
	$query=mysql_query("select*from dokter");
	$no=1;
	while ($data=mysql_fetch_array($query))
	{
	if($no%2==0)
	{$bg="#e5c490";}
	else{$bg="white";}
	?>
    <tr bgcolor="<?php echo $bg; ?> ">
      <td align="center"><?php echo $no; ?></td>
      <td align="center"><?php echo $data['kode_dokter']; ?></td>
      <td align="center"><?php echo $data['nama_dokter']; ?></td>
      <td align="center"><?php echo $data['SIP']; ?></td>
      <td align="center"><?php echo $data['tanggal_lahir']; ?></td>
      <td align="center"><?php echo $data['telepon']; ?></td>
      <td align="center"><?php echo $data['alamat']; ?></td>
      <td align="center" width="15%"><center>
      <a href="up_dokter.php?kode_dokter=<?php echo $data['kode_dokter']; ?>">EDIT </a>   
      <a href="del_dokter.php?kode_dokter=<?php echo $data['kode_dokter']; ?>">DELETE</a></center>
      </td>
    </tr>
    <?php 
	$no++;
	}?>
    

 

</td>
</tr>
</table></b>
   
</body>
</html>
