
<!DOCTYPE html>
<html>
<head>
	<title>Bukti Pendaftaran</title>
	<style>


tr{
  font-family: Arial, Helvetica, sans-serif;
  color: black;
  font-size:16px;
}
#k{
  font-size:27px; 
}

table{
  margin:auto;
}
.photo img{
padding-left:17px;
padding-right:17px;
}
.f {
	color: red;
}

	</style>
	
</head>
<body>
<pre>
	
<table width="647" border="1">
  <tr>
    <th height="100" colspan="3" bgcolor="819efe"><h2>BUKTI PEMESANAN LAPANGAN FUTSAL</h2></th>  
  </tr> 

  <?php 
  
  foreach($bukti as $bk) { ?>
  <tr>
    <td width="271" height="117"><div class="photo">     <img src="<?php echo base_url().'assets/images/kodeqr.png'?>" width="188" height="200" /></div>             <label id="k">Kode Sewa</label><br>                    <label id="k"class="f"><?php echo $bk['id_sewa'] ?></label></p></td>
    <td width="360" height="100">    Nama Pemesan          : <?php echo $bk['nama_pemesan'] ?><br>
    Lapangan                   : <?php echo $bk['lapangan'] ?> <br>
    Email                          : <?php echo $bk['email'] ?><br>
    Tanggal                      : <?php echo $bk['tanggal'] ?><br>
    Jam Main                   : <?php echo $bk['jam_main'] ?><br>
    Selesai                       : <?php echo $bk['selesai'] ?><br>
    Lama Main                 : <?php echo $bk['lama_main'] . " Jam" ?><br>
    Harga Sewa               : <?php echo "Rp.".$bk['harga_sewa'] ?></td>
  </tr>
<?php } ?>
  <tr>
    <td height="46" colspan="2"> Keterangan :
     # Simpan atau print Bukti pendaftaran ini.
     # Setelah itu lakukan pembayaran ke gopay atas nama khaerul falah
     # lalu simpan atau foto bukti pembayaran  
     # Setelah itu kirimkan bukti pembayaran dan bukti pendaftaran ke email kami 
     # Kemudian tunggu proses verifikasi pembayaran dari kami.
     # jika proses verifikasi sudah selesai kami akan mengirimkan email pemberitahuan
     # untuk melihat status pemesanan lihatlah tabel jadwal di halaman lapangan</td>
  </tr>
</table>
</pre>
</body>
</html>