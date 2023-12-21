<pre>
<table width="647" border="1" style="margin:auto;">
  <tr style="font-family: Arial, Helvetica, sans-serif; color: black; font-size:16px;">
    <th height="100" colspan="3" bgcolor="819efe"><h2> BUKTI PEMESANAN LAPANGAN FUTSAL</h2></th>  
  </tr> 

  <?php 

  foreach($bukti as $bk) { ?>
  <tr style="font-family: Arial, Helvetica, sans-serif; color: black; font-size:16px;">
    <td width="271" height="117"><div style="padding-left:17px; padding-right:17px;">     <img src="<?= base_url('assets/images/kodeqr.png'); ?>" width="188" height="200" /></div>             <label style="font-size:27px;">Kode Sewa</label><br>                    <label style="font-size:27px; color: red;"><?= $bk['id_sewa']; ?></label></p></td>
    <td width="360" height="100">    Nama Pemesan         : <?= $bk['nama_pemesan']; ?><br>
    Lapangan                   : <?= $bk['lapangan']; ?> <br>
    Email                          : <?= $bk['email']; ?><br>
    Tanggal                      : <?= $bk['tanggal']; ?><br>
    Jam Main                   : <?= $bk['jam_main']; ?><br>
    Selesai                       : <?= $bk['selesai']; ?><br>
    Lama Main                 : <?= $bk['lama_main']; ?> Jam<br>
    Harga Sewa               : Rp.<?= $bk['harga_sewa']; ?></td>
  </tr>
  <?php } ?>
  <tr style="font-family: Arial, Helvetica, sans-serif; color: black; font-size:16px;">
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