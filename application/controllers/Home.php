<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{	
		// $data = "";
		$data['header'] = $this->load->view('header', '', TRUE);
		$data['footer'] = $this->load->view('footer', '', TRUE);

		$this->load->view('home', $data, FALSE);
	}

	public function formulir()
	{	
		$data['content'] = $this->load->view('siswa/formulir', '', TRUE);

		$this->load->view('siswa/container', $data, FALSE);
	}



	public function registrasi()
	{
		$string   = "abcdefghtijklmnopqrstuvwxyz";
		$password = "";
		for( $i=0; $i<=3; $i++ ){
			$password .= $string[rand(0,26)];
		}

		$kode = date('ymdHis');
		
		$ada = $this->db->where('siswa_nama', $this->input->post('siswa_nama'))->where('siswa_no_kk', $this->input->post('siswa_no_kk'))->get('siswa')->num_rows();


		if( $ada ){
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! Anda telah mendaftar, jika anda mengalami kesulitan silahkan menghubungi panitia
				</div>');
			redirect('home/formulir');
		}else{

			$arrayName = array(
				'siswa_kode'                 => $kode,
				'siswa_password'             => $password,
				'siswa_pilihan_pendidikan'   => $this->input->post('siswa_pilihan_pendidikan'),
				'siswa_pilihan_pondok'       => $this->input->post('siswa_pilih_pondok'),
				'siswa_no_kk'                => $this->input->post('siswa_no_kk'),
				'siswa_no_nisn'              => $this->input->post('siswa_no_nisn'),
				'siswa_no_nik'              => $this->input->post('siswa_no_nik'),
				'siswa_nama'                 => $this->input->post('siswa_nama'),
				'siswa_tempat_lahir'         => $this->input->post('siswa_tempat_lahir'),
				'siswa_tanggal_lahir'        => $this->input->post('siswa_tanggal_lahir'),
				'siswa_anak_ke'              => $this->input->post('siswa_anak_ke'),
				'siswa_jumlah_saudara'       => $this->input->post('siswa_jumlah_saudara'),
				'siswa_jenis_kelamin'        => $this->input->post('siswa_jenis_kelamin'),
				'siswa_kewarganegaraan'      => $this->input->post('siswa_kewarganegaraan'),
				'siswa_isi_kewarganegaraan'  => $this->input->post('siswa_isi_kewarganegaraan'),
				'siswa_penanggung_biaya'     => $this->input->post('siswa_penanggung_biaya'),
				'siswa_isi_penanggung_biaya' => $this->input->post('siswa_isi_penanggung_biaya'),
				'siswa_asal_sekolah'         => $this->input->post('siswa_asal_sekolah'),
				'siswa_isi_asal_sekolah'     => $this->input->post('siswa_isi_asal_sekolah'),
				'siswa_status_asal_sekolah'  => $this->input->post('siswa_status_asal_sekolah'),
				'siswa_nama_asal_sekolah'    => $this->input->post('siswa_nama_asal_sekolah'),
				'siswa_alamat_asal_sekolah'  => $this->input->post('siswa_alamat_asal_sekolah'),
				'siswa_telp_asal_sekolah'    => $this->input->post('siswa_telp_asal_sekolah'),
				'siswa_npsn_asal_sekolah'    => $this->input->post('siswa_npsn_asal_sekolah'),
				'siswa_no_ijazah'            => $this->input->post('siswa_no_ijazah'),
				'siswa_th_ijazah'            => $this->input->post('siswa_th_ijazah'),
				'siswa_nik'           		 => $this->input->post('siswa_nik'),
				'siswa_nik2'           		 => $this->input->post('siswa_nik2'),
				'siswa_nama_ayah'            => $this->input->post('siswa_nama_ayah'),
				'siswa_agama_ayah'           => $this->input->post('siswa_agama_ayah'),
				'siswa_nama_ibu'             => $this->input->post('siswa_nama_ibu'),
				'siswa_agama_ibu'            => $this->input->post('siswa_agama_ibu'),
				'siswa_pekerjaan_wali'       => $this->input->post('siswa_pekerjaan_wali'),
				'siswa_penghasilan_wali'     => $this->input->post('siswa_penghasilan_wali'),
				'siswa_alamat'               => $this->input->post('siswa_alamat'),
				'siswa_no_telp'              => $this->input->post('siswa_no_telp'),
				'siswa_kode_pos'             => $this->input->post('siswa_kode_pos'),
				'siswa_pendidikan_ayah'      => $this->input->post('siswa_pendidikan_ayah'),
				'siswa_pendidikan_ibu'       => $this->input->post('siswa_pendidikan_ibu'),
				'siswa_status'               => 'baru',
				'siswa_tanggal_validasi'     => '0000-00-00 00:00:00',
				'siswa_tanggal_daftar'       => date('Y-m-d H:i:s'),
			);

			$this->db->insert('siswa', $arrayName);
			$array = array(
				'kode' => $arrayName['siswa_kode']
			);
			
			$this->session->set_userdata( $array );

			redirect('home/success');
		}
	}

	public function success()
	{
		$kode = $this->session->userdata('kode');
		$data['query_siswa'] = $this->db->where('siswa_kode', $kode)->get('siswa');
		$data['content'] = $this->load->view('siswa/success', $data, TRUE);

		$this->load->view('siswa/container', $data, FALSE);
	}

	public function check()
	{	
		$data['content'] = $this->load->view('siswa/login', '', TRUE);

		$this->load->view('siswa/container', $data, FALSE);
	}

	public function checking()
	{
		$arrayName = array(
			'siswa_kode'     => $this->input->post('siswa_kode'),
			'siswa_password' => $this->input->post('siswa_password')
		);

		if( $this->db->where($arrayName)->get('siswa')->num_rows()){
			$array = array(
				'kode' => $this->input->post('siswa_kode')
			);
			
			$this->session->set_userdata( $array );

			redirect('home/status_pendaftaran');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! akun tidak tersedia, jika anda mengalami kesulitan silahkan menghubungi panitia
				</div>');
			redirect('home/check');
		}
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('home/check');
	}

	public function status_pendaftaran()
	{	
		if( $this->session->userdata('kode') == null ){
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! silahkan login , jika anda mengalami kesulitan silahkan menghubungi panitia
				</div>');
			redirect('home/check');
			die();
		}
		$kode = $this->session->userdata('kode');
		$data['query_siswa'] = $this->db->where('siswa_kode', $kode)->get('siswa');
		$data['content'] = $this->load->view('siswa/status_pendaftaran', $data, TRUE);

		$this->load->view('siswa/container', $data, FALSE);
	}

	public function login()
	{
		$this->load->view('siswa/login_user', '', FALSE);
	}

	public function auth()
	{
		$arrayName = array(
			'admin_username' => $this->input->post('admin_username'),
			'admin_password' => md5($this->input->post('admin_password'))
		);

		if( $this->db->where($arrayName)->get('admin')->num_rows()){
			$array = array(
				'username' => $this->input->post('admin_username')
			);
			
			$this->session->set_userdata( $array );

			redirect('home/formulir');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! username atau password salah
				</div>');
			redirect('home/login');
		}
	}
}
