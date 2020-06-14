<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Layout_1</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>
<b>
<table width="100%">
<tr>
   <td valign="top" align="center"> 	
            <form id="form1" name="form1" method="post" action="">
            <?php
            include"koneksi.php";
            $query=mysql_query("select max(kode_dokter)as maxKode from dokter");/* mengambil kode tertinggi */
            $data=mysql_fetch_array($query);/* memecah field */
            $kode=$data['maxKode'];/* memasukkan kedalam variable kode */
            $num=(int)substr($kode,3,3);/* substr memecah karakter */
            $num++;/* menambah angka*/
            $char="DR";/* kode primary */
            $baru=$char.sprintf("%03s",$num);/* menggabungkan ps dgn num */

            ?>
              <table width="346" border="0" align="center" >
                <tr>
                  <td colspan="3" align="center">Input Table Dokter<br><hr></td>
                </tr>
                <tr>
                  <td width="200">kode dokter</td>
                  <td width="3">:</td>
                  <td width="268"><label>
                    <input name="kode_dokter" type="text" id="kode_dokter" size="30" maxlength="5" value="<?php 
            		echo $baru; ?>" readonly="readonly"/>
                  </label></td>
                </tr>
             
                <tr>
                  <td>nama dokter</td>

                <td>:</td>
                <td><label>
                  <input name="nama_dokter" type="text" id="nama_dokter" size="30" maxlength="30" />
                </label></td>
                </tr>
                <tr>
                  <td>sip</td>
                  <td>:</td>
                  <td><label>
                    <input name="sip" type="text" id="sip" size="30" maxlength="20" />
                  </label></td>
                </tr>
                <tr>
                  <td>tanggal lahir</td>
                  <td>:</td>
                  <td><label>
                    <select name="tanggal" id="tanggal">
                     <?php  for 
                 ($tanggal=1;
                 $tanggal<=31;$tanggal++){
                 ?> 
                     <option value="<?php echo $tanggal ;?>"><?php echo $tanggal ?></option><?php }?>   </select>
                    <select name="bulan" id="bulan">
                     <?php  for 
                 ($bulan=1;
                 $bulan<=12;$bulan++){
                 ?> <option value="<?php echo $bulan ;?>"><?php echo $bulan ?></option><?php }?> 
                            </select>
                    <select name="tahun" id="tahun">
                            <?php  for 
                 ($tahun=1980;
                 $tahun<=2020;$tahun++){
                 ?> <option value="<?php echo $tahun ;?>"><?php echo $tahun ?></option><?php } ?>  </select>
                  </label></td>
                </tr>
                <tr>
                  <td>telepon</td>
                  <td>:</td>
                  <td><label>
                    <input name="telepon" type="text" id="telepon" size="30" maxlength="12" />
                  </label></td>
                </tr>
                
                  
                
                <tr>
                  <td>alamat</td>
                  <td>:</td>
                  <td><label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td height="26" colspan="3"><label>
                    <input type="submit" name="input" id="input" value="simpan" />
                    <input type="reset" name="reset" id="reset" value="batal" />
                  </label></td>
                </tr>
              </table>

            </form>
            <?php if (isset($_POST['input'])){
            		$a=$_POST['kode_dokter'];
            		$b=$_POST['nama_dokter'];
            		$c=$_POST['sip'];
            		$d=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
            		$e=$_POST['telepon'];
            		$f=$_POST['alamat'];
            		
            		$query = "insert into dokter (kode_dokter,nama_dokter,SIP,tanggal_lahir,telepon,alamat) values ('$a','$b','$c','$d','$e','$f')";
                $hasil = mysql_query($query);
                
              }
            ?>
</td>
</tr>
</table>
</body>
</html>
