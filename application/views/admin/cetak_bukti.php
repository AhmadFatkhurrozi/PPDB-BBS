<?php $row = $query_pendaftar; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
      body{
        font-family: "Times New Roman", Times, serif;
        font-size: 11px;
      }
      hr{
          border:none;
          border-bottom:1px solid black;
      }
      .header{
          font-size: 10px;
      }
      @page { size: a6 landscape; }
      @page { margin : 5px 25px }
    </style>
    <title>PPDB</title>
  </head>
  <body>
     
   <div>
      <table width="90%" class="header">
          <tbody align="center">
            <tr>
              <td width="30%" style="padding-right: 10px; padding-top: 10px; padding-left: 40px;">
                 <img src="dist/img/icon.png" width="70" >
              </td>
              <td><h3>Penerimaan Peserta Didik Baru (PPDB)<br>
                  Yayasan Pondok Pesantren Babussalam</h3>
                Jl. KH. Nur Syahid 110 Kalibening Mojoagung Jombang 61482<br>
                Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700
              </td>
            </tr>
          </tbody>
      </table>
      <hr>
      <h4 align="center" style="margin-bottom:40px"><u>Bukti Validasi Pendaftaran</u></h4>

      <table width="70%" style="margin-top:-20px">
        <tbody>
            <tr>
              <td colspan="3"><b style="letter-spacing:2px">Data Identitas</b></td>
            </tr>
            <tr>
                <td>Nomor Registrasi</td>
                <td>:</td>
                <td><b><?php echo $row->siswa_kode; ?></b></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><b><?php echo $row->siswa_password; ?></b></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $row->siswa_nama; ?></td>
            </tr>
            <tr>
                <td>No. Telp.</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_telp; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $row->siswa_jenis_kelamin; ?></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td>:</td>
                <td><?php echo $row->siswa_pilihan_pendidikan; ?></td>
            </tr>
        </tbody>
      </table>
      <table width="100%">
          <tr align="center">
              <td width="70%"></td>
              <td width="30%">Jombang, <?php echo date('d-m-Y'); ?></td>
          </tr>
          <tr align="center">
              <td></td>
              <td>
                  <p>Petugas</p>
                  <br>
                  <p>................................</p>
              </td>
          </tr>
      </table>
   </div>

  </body>
</html>