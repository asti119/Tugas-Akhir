<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<?php require_once('koneksi.php'); ?>

<body>
<form id="form1" name="form1" method="post" action="proses_update_dokter.php">
  <table width="452" border="0" align="center">
    <tr>
      <td colspan="3" align="center"><span class="style1">UPDATE DATA DOKTER</span></td>
    </tr>
    <?php
	
	$a = $_GET ['kode_dokter'];
	$tampil = mysql_query("select*from dokter where kode_dokter='$a'");
	$data = mysql_fetch_array($tampil);
	?>
    <tr>
      <td width="146">Kode Dokter</td>
      <td width="6">:</td>
      <td width="104"><label for="kode_dokter"></label>
        <input name="kode_dokter" type="text" id="kode_dokter" size="10" maxlength="5" value="<?php echo $data['kode_dokter'];?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>Nama Dokter</td>
      <td>:</td>
      <td><label for="nama_dokter"></label>
        <input name="nama_dokter" type="text" id="nama_dokter" size="30" maxlength="30"value="<?php echo $data['nama_dokter'];?>" /></td>
    </tr>
    <tr>
      <td>SIP</td>
      <td>:</td>
      <td><label for="SIP"></label>
        <input name="SIP" type="text" id="SIP" size="30" maxlength="15" value="<?php echo $data['SIP'];?>" /></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
       <td>:</td>
      <td><label for="tanggal"></label>
        <select name="tanggal" id="tanggal">
        <option value="">Tanggal</option>
        <?php for($tanggal=1; $tanggal<=31; $tanggal++) { ?>
        <option <?php if($tanggal==date('d',strtotime($data['tanggal_lahir']))){echo "selected";}?>>
		<?php echo $tanggal;?></option>		
		<?php }?>
        </select>
        <select name="bulan" id="bulan">
        <option value="">Bulan</option>
          <?php for ($bulan=1; $bulan<=12; $bulan++){ ?>
          <option <?php if($bulan==date('m',strtotime($data['tanggal_lahir']))){echo "selected";}?>>
		  <?php echo $bulan;?></option>
          <?php }?> 
        </select>
        <select name="tahun" id="tahun">
        <option value="">Tahun</option>
          <?php for ($tahun=1980; $tahun<=2100; $tahun++){ ?>
          <option <?php if($tahun==date('y',strtotime($data['tanggal_lahir']))){echo "selected";}?>><?php echo $tahun;?></option>
          <?php }?>
        </select>
        </td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td><label for="telepon"></label>
        <input name="telepon" type="text" id="telepon" size="20" maxlength="12" value="<?php echo $data['telepon'];?>" /></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><label for="alamat"></label>
        <textarea name="alamat" id="alamat" cols="25" rows="5"><?php echo $data['alamat'];?></textarea></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><p>
        <input type="submit" name="update" id="input" value="Simpan" />
        <input type="reset" name="reset" id="reset" value="Batal" />
      </p>
      </td>
    </tr>
  </table>
</form>

</body>
</html>