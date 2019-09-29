<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {

	public $limit, $offset, $keyword;

	public function baru()
	{
		$this->db->select('*');
		if ($this->keyword != '' OR isset($this->keyword)) {
			$this->db->like('siswa_kode', $this->keyword, 'BOTH');
			$this->db->or_like('siswa_nama', $this->keyword, 'BOTH');
		}
		$this->db->order_by('siswa_tanggal_daftar', 'desc');
		$this->db->where('siswa_status', 'Baru');
		return $this->db->get('siswa', $this->limit, $this->offset);
	}

	public function tervalidasi()
	{
		$this->db->select('*');
		if ($this->keyword != '' OR isset($this->keyword)) {
			$this->db->like('siswa_kode', $this->keyword, 'BOTH');
			$this->db->or_like('siswa_nama', $this->keyword, 'BOTH');
		}
		$this->db->order_by('siswa_tanggal_daftar', 'desc');
		$this->db->where('siswa_status', 'Tervalidasi');
		return $this->db->get('siswa', $this->limit, $this->offset);
	}

	public function siswa_tervalidasi($pendidikan, $tahun)
	{
		$arrayName = array(
			'siswa_pilihan_pendidikan' => $pendidikan ,
			'siswa_status'             => 'Tervalidasi'
		);
		$result = $this->db->where($arrayName)->like('siswa_tanggal_daftar',$tahun.'-')->get('siswa')->num_rows();

		return $result;
	}

	public function siswa_tervalidasi_plus_pondok($pendidikan, $tahun)
	{
		$arrayName = array(
			'siswa_pilihan_pendidikan' => $pendidikan ,
			'siswa_pilihan_pondok'     => 'ya' ,
			'siswa_status'             => 'Tervalidasi'
		);
		$result = $this->db->where($arrayName)->like('siswa_tanggal_daftar',$tahun.'-')->get('siswa')->num_rows();

		return $result;
	}

	public function total_siswa_tervalidasi($tahun)
	{
		$result = $this->db->where('siswa_status','Tervalidasi')->like('siswa_tanggal_daftar',$tahun.'-')->get('siswa')->num_rows();

		return $result;
	}

}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */