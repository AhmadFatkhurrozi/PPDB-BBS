<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$config['first_link']      = 'Pertama';
		$config['last_link']       = 'Terakhir';
		$config['next_link']       = 'Selanjutnya';
		$config['prev_link']       = 'Sebelumnya';
		$config['full_tag_open']   = '<ul class="pagination justify-content-end">';
		$config['full_tag_close']  = '</ul>';
		$config['attributes']      = ['class' => 'page-link'];
		$config['first_link']      = false;
		$config['last_link']       = false;
		$config['first_tag_open']  = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link']       = 'Sebelumnya';
		$config['prev_tag_open']   = '<li class="page-item">';
		$config['prev_tag_close']  = '</li>';
		$config['next_link']       = 'Selanjutnya';
		$config['next_tag_open']   = '<li class="page-item">';
		$config['next_tag_close']  = '</li>';
		$config['last_tag_open']   = '<li class="page-item">';
		$config['last_tag_close']  = '</li>';
		$config['cur_tag_open']    = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open']    = '<li class="page-item">';
		$config['num_tag_close']   = '</li>';

		$this->load->library('pagination', $config);

	}

	public function is__login()
	{
		if( $this->session->userdata('username') == null ){
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! silahkan login
				</div>');
			redirect('admin');
			die();
		}
	}

	public function dashboard()
	{
		$this->is__login();

		$this->load->model('Model_dashboard');

		$data['dashboard'] = 'active';
		$data['title'] = 'Dashboard';

		$data['tahun'] = ( is_null($this->input->post('tahun')) )? date('Y') : $this->input->post('tahun');

		$data['content'] = $this->load->view('admin/dashboard', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function index()
	{
		$this->load->view('admin/login', '', FALSE);
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

			redirect('admin/dashboard');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! username atau password salah
				</div>');
			redirect('admin/index');
		}
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('admin/index');
	}

	public function baru()
	{
		$this->is__login();

		$this->load->model('Model_dashboard');

		// Konfigurasi paginasi
		$config['base_url']        = base_url('admin/baru/');
		$config['total_rows']      = $this->db->where('siswa_status','baru')->get('siswa')->num_rows();

		$config['per_page']        = (is_null($this->session->userdata('per_page')))? 5 : $this->session->userdata('per_page');
		
		$config['uri_segment']     = 3;
		$pilih                     = $config['total_rows'] / $config['per_page'];
		$config['num_links']       = 5;
		
		$this->pagination->initialize($config);

		$data['page']              = ($this->uri->segment(3))? $this->uri->segment(3) : 0 ;

		$data['keyword'] 		   = $this->input->post('keyword');

		$this->Model_dashboard->limit   = $config['per_page'];
		$this->Model_dashboard->offset  = $data['page'];
		$this->Model_dashboard->keyword = $this->input->post('keyword');

		
		$data['query_siswa']     = $this->Model_dashboard->baru();
		
		$data['limit']             = $data['query_siswa']->num_rows();
		$data['total_rows']        = $config['total_rows'];
		$data['paginasi']          = $this->pagination->create_links();
		$data['per_page']          = $config['per_page'];

		$data['data_siswa'] = 'active';
		$data['title'] = 'Pendaftar Baru';
		$data['content'] = $this->load->view('admin/baru', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function tervalidasi()
	{
		$this->is__login();

		$this->load->model('Model_dashboard');

		// Konfigurasi paginasi
		$config['base_url']        = base_url('admin/tervalidasi/');
		$config['total_rows']      = $this->db->where('siswa_status','tervalidasi')->get('siswa')->num_rows();

		$config['per_page']        = (is_null($this->session->userdata('per_page')))? 10 : $this->session->userdata('per_page');
		
		$config['uri_segment']     = 3;
		$pilih                     = $config['total_rows'] / $config['per_page'];
		$config['num_links']       = 5;
		
		$this->pagination->initialize($config);

		$data['page']              = ($this->uri->segment(3))? $this->uri->segment(3) : 0 ;

		$data['keyword'] 		   = $this->input->post('keyword');

		$this->Model_dashboard->limit   = $config['per_page'];
		$this->Model_dashboard->offset  = $data['page'];
		$this->Model_dashboard->keyword = $this->input->post('keyword');

		
		$data['query_siswa']     = $this->Model_dashboard->tervalidasi();
		
		$data['limit']             = $data['query_siswa']->num_rows();
		$data['total_rows']        = $config['total_rows'];
		$data['paginasi']          = $this->pagination->create_links();
		$data['per_page']          = $config['per_page'];

		$data['data_siswa'] = 'active';
		$data['title'] = 'Pendaftar Tervalidasi';
		$data['content'] = $this->load->view('admin/tervalidasi', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function detail()
	{
		$this->is__login();

		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$data['query_siswa'] = $this->db->where('siswa_id', $id)->get('siswa');

		$data['data_siswa'] = 'active';
		$data['title']   = 'Detail Data Diri Siswa';

		$data['content'] = $this->load->view('admin/detail', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function konfirmasi_validasi()
	{
		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);

		$data['data_siswa'] = 'active';
		$data['title']   = 'Konfimasi Validasi Pembayaran Pendaftaran ?';

		$data['content'] = $this->load->view('admin/konfirmasi_validasi', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function konfirmasi_batal_validasi()
	{
		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		
		$data['data_siswa'] = 'active';
		$data['title']   = 'Konfimasi Pembatalan Validasi Pembayaran Pendaftaran ?';

		$data['content'] = $this->load->view('admin/konfirmasi_batal_validasi', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function validasi()
	{
		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$arrayName = array(
			'siswa_status' => 'tervalidasi',
			'siswa_tanggal_validasi' => date('Y-m-d H:i:s') 
		);
		if( $this->db->where('siswa_kode', $id)->update('siswa', $arrayName)){
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
				  Data berhasil disimpan
				</div>');
			
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! terjadi masalah saat menyimpan data,  silahkan coba lagi
				</div>');
		}

		redirect('admin/baru');
	}

	public function batal_validasi()
	{
		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$arrayName = array(
			'siswa_status' => 'baru',
			'siswa_tanggal_validasi' => '0000-00-00 00:00:00' 
		);
		if( $this->db->where('siswa_kode', $id)->update('siswa', $arrayName)){
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
				  Data berhasil disimpan
				</div>');
			
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! terjadi masalah saat menyimpan data,  silahkan coba lagi
				</div>');
		}

		redirect('admin/tervalidasi');
	}

	public function profil()
	{
		$this->is__login();
		
		$data['title']   = 'Profil Admin';
		$data['content'] = $this->load->view('admin/profil', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_profil()
	{
		$col = array(
			'admin_username' => $this->input->post('username') , 
		);

		if ( $this->input->post('password') != null ) {
			$col['admin_password'] = md5($this->input->post('password'));
		}

		if( $this->db->where('admin_id', 1)->update('admin', $col)){
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
				  Data berhasil disimpan
				</div>');

			$array = array(
				'username' => $this->input->post('username')
			);
			
			$this->session->set_userdata( $array );
			
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! terjadi masalah saat menyimpan data,  silahkan coba lagi
				</div>');
		}

		redirect('admin/profil');
	}

	public function upload_file()
	{
		$__type = $this->input->get('type');
		$__id   = $this->uri->segment(3);

		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']      = '1048';
		
		$this->load->library('upload', $config);
		
		if ( $this->upload->do_upload('siswa_file_'.$__type.'')){
			$object['siswa_file_'.$__type.''] = $this->upload->data('file_name');

			if( $this->db->where('siswa_id', $__id)->update('siswa', $object) ){

				$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
				  Berhasil! Data berhasil disimpan
				</div>');
			}else{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! terjadi masalah saat menyimpan data,  silahkan coba lagi
				</div>');
			}
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! terjadi masalah saat mengunggah file,  silahkan coba lagi
				</div>');
		}

		redirect( $this->input->server('HTTP_REFERER') );
	}

	public function delete_file()
	{
		$__id   = $this->uri->segment(3);
		$__type = $this->input->get('type');
		
		$__file =  $this->db->where('siswa_id', $__id )->get('siswa')->row_array()['siswa_file_'.$__type.''];

		$object = array('siswa_file_'.$__type.'' => NULL );

		if( file_exists('./uploads/'.$__file.'') ){
			@unlink('./uploads/'.$__file.'');
		}

		if( $this->db->where('siswa_id', $__id )->update('siswa', $object) ){
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
				  Berhasil! Data berhasil disimpan
				</div>');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				  Maaf! Data gagal disimpan
				</div>');
		}

		redirect( $this->input->server('HTTP_REFERER') );
		
	}

	public function export()
	{
		$data['title']   = 'Export Data Pendaftaran';
		$data['content'] = $this->load->view('admin/export', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function export_pendaftar()
	{
		$__status = $this->input->post('status');
		$__unit   = $this->input->post('unit');
		$__pondok = $this->input->post('pondok');
		$__tahun  = $this->input->post('tahun');

		$data['title']   = 'Export Data Pendaftaran';

		$object = array(
			'siswa_pilihan_pendidikan' => $__unit,
		);

		if ( $__status != 'semua' ) {
			$object['siswa_status'] = $__status;
		}

		if ( $__unit != 'PONDOK' ) {
			$object['siswa_pilihan_pondok'] = $__pondok;
		}

		$data['pendaftar'] = $this->db->like('siswa_tanggal_daftar', $__tahun.'-','both')->where( $object )->get('siswa')->result();

		$this->load->view('admin/export_pendaftar', $data, FALSE);
	}

	public function cetak_pdf($id) 
	{
		$data['query_pendaftar']   = $this->db->where('siswa_id', $id)
											  ->get('siswa')
											  ->row();

		$this->load->view('admin/cetak_pdf', $data, FALSE);
		
		$html = $this->output->get_output();
		
		$this->load->library('dompdf_gen');
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Profil_".$id.".pdf", array('Attachment' => 0));
	}

	public function cetak_bukti($id) 
	{
		$data['query_pendaftar']   = $this->db->where('siswa_id', $id)
											  ->get('siswa')
											  ->row();

		$this->load->view('admin/cetak_bukti', $data, FALSE);
		
		$html = $this->output->get_output();
		
		$this->load->library('dompdf_gen');
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Profil_".$id.".pdf", array('Attachment' => 0));
	}

	public function download()
	{
		$__id = $this->uri->segment(3);
		
		$row  = $this->db->where('siswa_id', $__id )->get('siswa')->row();


		$this->load->library('zip');

		$this->zip->read_file("./uploads/".$row->siswa_file_foto."");
		$this->zip->read_file("./uploads/".$row->siswa_file_nisn."");
		$this->zip->read_file("./uploads/".$row->siswa_file_kk."");
		$this->zip->read_file("./uploads/".$row->siswa_file_akte."");
		$this->zip->read_file("./uploads/".$row->siswa_file_ktp."");
		$this->zip->read_file("./uploads/".$row->siswa_file_ijazah."");

		$this->zip->download('file.zip');
	}

	public function edit_data_pribadi()
	{
		$this->is__login();

		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$data['query_siswa'] = $this->db->where('siswa_id', $id)->get('siswa');

		$data['data_siswa'] = 'active';
		$data['title']   = 'Edit Data Pribadi Siswa';

		$data['content'] = $this->load->view('admin/edit_bio', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_bio()
	{
		$this->is__login();
		$__id   = $this->uri->segment(3);

		$object = array(
			'siswa_no_kk' 					=> $this->input->post('siswa_no_kk'),
			'siswa_no_nisn' 				=> $this->input->post('siswa_no_nisn'),
			'siswa_no_nik' 				    => $this->input->post('siswa_no_nik'),
			'siswa_nama' 					=> $this->input->post('siswa_nama'),
			'siswa_tempat_lahir' 			=> $this->input->post('siswa_tempat_lahir'),
			'siswa_tanggal_lahir' 			=> $this->input->post('siswa_tanggal_lahir'),
			'siswa_jenis_kelamin' 			=> $this->input->post('siswa_jenis_kelamin'),
			'siswa_anak_ke'              	=> $this->input->post('siswa_anak_ke'),
			'siswa_jumlah_saudara'       	=> $this->input->post('siswa_jumlah_saudara'),
			'siswa_kewarganegaraan'      	=> $this->input->post('siswa_kewarganegaraan'),
			'siswa_isi_kewarganegaraan'  	=> $this->input->post('siswa_isi_kewarganegaraan'),
			'siswa_penanggung_biaya'     	=> $this->input->post('siswa_penanggung_biaya'),
			'siswa_isi_penanggung_biaya' 	=> $this->input->post('siswa_isi_penanggung_biaya'),
		);

		if( $this->db->where('siswa_id', $__id)->update('siswa', $object) )
		{
			$this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
			  Data berhasil diperbarui!
			</div>');
		}else{
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
			  Maaf! terjadi masalah saat mengubah data,  silahkan coba lagi
			</div>');
		}

		redirect('admin/detail/'.$__id);
	}

	public function edit_asal_sekolah()
	{
		$this->is__login();

		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$data['query_siswa'] = $this->db->where('siswa_id', $id)->get('siswa');

		$data['data_siswa'] = 'active';
		$data['title']   = 'Edit Asal Sekolah';

		$data['content'] = $this->load->view('admin/edit_asal_sekolah', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_asal_sekolah()
	{
		$this->is__login();
		$__id   = $this->uri->segment(3);

		$object = array(
			'siswa_asal_sekolah'         => $this->input->post('siswa_asal_sekolah'),
			'siswa_isi_asal_sekolah'     => $this->input->post('siswa_isi_asal_sekolah'),
			'siswa_status_asal_sekolah'  => $this->input->post('siswa_status_asal_sekolah'),
			'siswa_nama_asal_sekolah'    => $this->input->post('siswa_nama_asal_sekolah'),
			'siswa_npsn_asal_sekolah'    => $this->input->post('siswa_npsn_asal_sekolah'),
			'siswa_alamat_asal_sekolah'  => $this->input->post('siswa_alamat_asal_sekolah'),
			'siswa_telp_asal_sekolah'    => $this->input->post('siswa_telp_asal_sekolah'),
			'siswa_no_ijazah'            => $this->input->post('siswa_no_ijazah'),
			'siswa_th_ijazah'            => $this->input->post('siswa_th_ijazah'),
		);

		if( $this->db->where('siswa_id', $__id)->update('siswa', $object) )
		{
			$this->session->set_flashdata('msg1', '<div class="alert alert-success" role="alert">
			  Data berhasil diperbarui!
			</div>');
		}else{
			$this->session->set_flashdata('msg1', '<div class="alert alert-danger" role="alert">
			  Maaf! terjadi masalah saat mengubah data,  silahkan coba lagi
			</div>');
		}

		redirect('admin/detail/'.$__id);
	}

	public function edit_data_ortu()
	{
		$this->is__login();

		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$data['query_siswa'] = $this->db->where('siswa_id', $id)->get('siswa');

		$data['data_siswa'] = 'active';
		$data['title']   = 'Edit Data Orang Tua';

		$data['content'] = $this->load->view('admin/edit_data_ortu', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_data_ortu()
	{
		$this->is__login();
		$__id   = $this->uri->segment(3);

		$object = array(
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
		);

		if( $this->db->where('siswa_id', $__id)->update('siswa', $object) )
		{
			$this->session->set_flashdata('msg2', '<div class="alert alert-success" role="alert">
			  Data berhasil diperbarui!
			</div>');
		}else{
			$this->session->set_flashdata('msg2', '<div class="alert alert-danger" role="alert">
			  Maaf! terjadi masalah saat mengubah data,  silahkan coba lagi
			</div>');
		}

		redirect('admin/detail/'.$__id);
	}

	public function edit_pendidikan()
	{
		$this->is__login();

		$id = ($this->uri->segment(3) == null )? die() : $this->uri->segment(3);
		$data['query_siswa'] = $this->db->where('siswa_id', $id)->get('siswa');

		$data['data_siswa'] = 'active';
		$data['title']   = 'Edit Pilihan Pendidikan';

		$data['content'] = $this->load->view('admin/edit_pendidikan', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_pendidikan()
	{
		$this->is__login();
		$__id   = $this->uri->segment(3);

		$object = array(
			'siswa_pilihan_pendidikan'   => $this->input->post('siswa_pilihan_pendidikan'),
			'siswa_pilihan_pondok'       => $this->input->post('siswa_pilih_pondok'),
		);

		if( $this->db->where('siswa_id', $__id)->update('siswa', $object) )
		{
			$this->session->set_flashdata('msgg', '<div class="alert alert-success" role="alert">
			  Data berhasil diperbarui!
			</div>');
		}else{
			$this->session->set_flashdata('msgg', '<div class="alert alert-danger" role="alert">
			  Maaf! terjadi masalah saat mengubah data,  silahkan coba lagi
			</div>');
		}

		redirect('admin/detail/'.$__id);
	}

	public function setting()
	{
		$data['title']   = 'Hak Akses Pendaftaran';
		$data['content'] = $this->load->view('admin/hak_akses', $data, TRUE);

		$this->load->view('admin/container', $data, FALSE);
	}

	public function update_akses()
	{
		$object = array(
			'akses' 	=> $this->input->post('akses'),
		);

		if( $this->db->update('setting', $object) )
		{
			$this->session->set_flashdata('msg9', '<div class="alert alert-success" role="alert">
			  Data berhasil diperbarui!
			</div>');
		}else{
			$this->session->set_flashdata('msg9', '<div class="alert alert-danger" role="alert">
			  Maaf! terjadi masalah saat mengubah data,  silahkan coba lagi
			</div>');
		}

		redirect('admin/setting');
	}		
}
