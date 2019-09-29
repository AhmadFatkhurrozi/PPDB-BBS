<?php $row = $query_pendaftar; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style type="text/css">
      body{
        font-family: "Times New Roman", Times, serif;
        font-size: 12px;
      }
    </style>
    <title>PPDB</title>
  </head>
  <body>
     
   <div style="margin: 0px 30px;">
        <table>
          <tbody align="center">
            <tr>
              <td style="padding-right: 20px; padding-top: 20px; padding-left: 70px;">
                 <img src="dist/img/icon.png" width="80" >
              </td>
              <td><h1>Penerimaan Peserta Didik Baru (PPDB)<br>
                  Yayasan Pondok Pesantren Babussalam</h1>
                Jl. KH. Nur Syahid 110 Kalibening Mojoagung Jombang 61482<br>
                Telp. (0321) 489009 - 081231919636 - 085655419681 - 085109132700
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <hr>
        <h2 align="center"><u>Data Siswa</u></h2>
        <br>
      <table width="50%" style="float: left;">
        <tbody>
            <tr>
              <td colspan="3"><h3 style="letter-spacing:3px"><u>Pilihan Pendidikan</u></h3></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?php echo $row->siswa_pilihan_pendidikan; ?></td>
            </tr>
            <?php if( $row->siswa_pilihan_pondok != "PONDOK" ){ ?>
            <tr>
                <td>Pilih Pondok?</td>
                <td>:</td>
                <td>
                  <?php if( $row->siswa_pilihan_pondok == 'ya'){ ?>
                    <span class="badge badge-success">Ya</span>
                  <?php }else{ ?>
                    <span class="badge badge-danger">Tidak</span>
                  <?php } ?>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="3"><br></td>
            </tr>
            <tr>
              <td colspan="3"><h3 style="letter-spacing:3px"><u>Data Pribadi</u></h3></td>
            </tr>
            <tr>
                <td>Nomor KK.</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_kk; ?></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_nisn; ?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_nik; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $row->siswa_nama; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $row->siswa_jenis_kelamin; ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $row->siswa_tempat_lahir; ?>, <?php echo date('d-m-Y', strtotime($row->siswa_tanggal_lahir)); ?></td>
            </tr>
            <tr>
                <td>Anak Ke -</td>
                <td>:</td>
                <td><?php echo $row->siswa_anak_ke; ?></td>
            </tr>
            <tr>
                <td>Jumlah Saudara</td>
                <td>:</td>
                <td><?php echo $row->siswa_jumlah_saudara; ?></td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>:</td>
                <td><?php echo $row->siswa_kewarganegaraan; ?></td>
            </tr>
            <tr>
                <td>Biaya Ditanggung</td>
                <td>:</td>
                <td><?php echo $row->siswa_penanggung_biaya; ?></td>
            </tr>
            <tr>
                <td colspan="3"><br></td>
            </tr>
            <tr>
              <td colspan="3"><h3 style="letter-spacing:3px"><u>Data Sekolah Asal</u></h3></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><?php echo $row->siswa_asal_sekolah; ?>
                  <?php echo ($row->siswa_isi_asal_sekolah != null)? '( '.$row->siswa_isi_asal_sekolah.' )' : '' ; ?>
                </td>
            </tr>
            <tr>
                <td>Status Sekolah</td>
                <td>:</td>
                <td><?php echo $row->siswa_status_asal_sekolah; ?> </td>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td>:</td>
                <td><?php echo $row->siswa_nama_asal_sekolah; ?></td>
            </tr>
            <tr>
                <td>Alamat Sekolah</td>
                <td>:</td>
                <td><?php echo $row->siswa_alamat_asal_sekolah; ?></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>:</td>
                <td><?php echo $row->siswa_telp_asal_sekolah; ?></td>
            </tr>
            <tr>
                <td>No NPSN</td>
                <td>:</td>
                <td><?php echo $row->siswa_npsn_asal_sekolah; ?></td>
            </tr>
            <tr>
                <td>No Seri Ijazah</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_ijazah; ?></td>
            </tr>
            <tr>
                <td>Tahun Ijazah</td>
                <td>:</td>
                <td><?php echo $row->siswa_th_ijazah; ?></td>
            </tr>
        </tbody>
      </table>

      <table width="50%" style="float: right;">
          <tbody>
            <tr>
              <td colspan="3"><h3 style="letter-spacing:3px"><u>Data Orang Tua/Wali</u></h3></td>
            </tr>
            <tr>
                <td>NIK Ayah</td>
                <td>:</td>
                <td><?php echo $row->siswa_nik; ?></td>
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td>:</td>
                <td><?php echo $row->siswa_nama_ayah; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $row->siswa_agama_ayah; ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?php echo $row->siswa_pendidikan_ayah; ?></td>
            </tr>
            <tr>
                <td>NIK Ibu</td>
                <td>:</td>
                <td><?php echo $row->siswa_nik2; ?></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><?php echo $row->siswa_nama_ibu; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $row->siswa_agama_ibu; ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?php echo $row->siswa_pendidikan_ibu; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td>
                <td>:</td>
                <td><?php echo $row->siswa_pekerjaan_wali; ?></td>
            </tr>
            <tr>
                <td>Penghasilan Wali</td>
                <td>:</td>
                <td><?php echo $row->siswa_penghasilan_wali; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $row->siswa_alamat; ?></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td><?php echo $row->siswa_no_telp; ?></td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td><?php echo $row->siswa_kode_pos; ?></td>
            </tr>
          </tbody>
      </table>
      
      <table width="100%" style="margin-top: 60%;">
          <tr align="center">
              <td></td>
              <td></td>
              <td>Jombang, <?php echo date('d-m-Y'); ?></td>
          </tr>
          <tr align="center">
              <td>
                  <p>Petugas Pendaftaran</p>
                  <br>
                  <br>
                  <br>
                  <p>................................</p>
              </td>
              <td>
                  <p>Orang Tua/Wali</p>
                  <br>
                  <br>
                  <br>
                  <p>................................</p>
              </td>
              <td>
                  <p>Pembuat Pernyataan</p>
                  <br>
                  <br>
                  <br>
                  <p>................................</p>
              </td>
          </tr>
      </table>
   </div>
  
  </body>
</html>