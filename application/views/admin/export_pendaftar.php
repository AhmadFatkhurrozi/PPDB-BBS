<?php 
header("Content-Disposition: attachment; filename=doc.xls");
header("Content-Type: application/vnd.ms-excel");

echo "NO\t";
echo "KODE\t";
echo "PASSWORD\t";
echo "PILIHAN PENDIDIKAN\t";
echo "PONDOK\t";
echo "NO KK\t";
echo "NISN\t";
echo "NIK SISWA\t";
echo "NAMA\t";
echo "TEMPAT LAHIR\t";
echo "TANGGAL LAHIR\t";
echo "ANAK KE-\t";
echo "JUMLAH SAUDARA\t";
echo "JENIS KELAMIN\t";
echo "KEWARGANEGARAAN\t";
echo "PENANGGUNG BIAYA\t";
echo "ASAL SEKOLAH\t";
echo "STATUS SEKOLAH\t";
echo "NAMA SEKOLAH\t";
echo "ALAMAT ASAL SEKOLAH\t";
echo "TELP. SEKOLAH\t";
echo "NPSN\t";
echo "NO IJAZAH\t";
echo "THN. IJAZAH\t";
echo "NIK AYAH\t";
echo "NAMA AYAH\t";
echo "AGAMA AYAH\t";
echo "NIK IBU\t";
echo "NAMA IBU\t";
echo "AGAMA IBU\t";
echo "NO. TELP\t";
echo "PEKERJAAN WALI\t";
echo "PENGHASILAN WALI\t";
echo "ALAMAT\t";
echo "KODE POS\t";
echo "PENDIDIKAN AYAH\t";
echo "PENDIDIKAN IBU\t";
echo "TANGGAL DAFTAR\t";
echo "BERKAS\t";
echo "\n";

$no=1;

foreach( $pendaftar as $row ){
    echo $no++."\t";
    echo "[ ".$row->siswa_kode." ]\t";
    echo $row->siswa_password."\t";
    echo $row->siswa_pilihan_pendidikan."\t";
    echo $row->siswa_pilihan_pondok."\t";
    echo "[ ".$row->siswa_no_kk." ]\t";
    echo "[ ".$row->siswa_no_nisn." ]\t";
    echo "[ ".$row->siswa_no_nik." ]\t";
    echo $row->siswa_nama."\t";
    echo $row->siswa_tempat_lahir."\t";
    echo $row->siswa_tanggal_lahir."\t";
    echo $row->siswa_anak_ke."\t";
    echo $row->siswa_jumlah_saudara."\t";
    echo $row->siswa_jenis_kelamin."\t";
    echo $row->siswa_kewarganegaraan."\t";
    echo $row->siswa_penanggung_biaya."\t";
    echo $row->siswa_asal_sekolah."\t";
    echo $row->siswa_status_asal_sekolah."\t";
    echo $row->siswa_nama_asal_sekolah."\t";
    echo $row->siswa_alamat_asal_sekolah."\t";
    echo "[ ".$row->siswa_telp_asal_sekolah." ]\t";
    echo "[ ".$row->siswa_npsn_asal_sekolah." ]\t";
    echo $row->siswa_no_ijazah."\t";
    echo $row->siswa_th_ijazah."\t";
    echo "[ ".$row->siswa_nik." ]\t";
    echo $row->siswa_nama_ayah."\t";
    echo $row->siswa_agama_ayah."\t";
    echo "[ ".$row->siswa_nik2." ]\t";
    echo $row->siswa_nama_ibu."\t";
    echo $row->siswa_agama_ibu."\t";
    echo "[ ".$row->siswa_no_telp." ]\t";
    echo $row->siswa_pekerjaan_wali."\t";
    echo $row->siswa_penghasilan_wali."\t";
    echo $row->siswa_alamat."\t";
    echo $row->siswa_kode_pos."\t";
    echo $row->siswa_pendidikan_ayah."\t";
    echo $row->siswa_pendidikan_ibu."\t";
    echo $row->siswa_tanggal_daftar."\t";
    echo base_url()."admin/download/".$row->siswa_id."\t";
    echo "\n";
}

 ?>