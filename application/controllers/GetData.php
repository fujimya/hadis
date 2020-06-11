<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetData extends CI_Controller {
	
	public function index()
	{
		// //jumlah data di database dibaca
		// $jumlah_data = $this->db->query('SELECT * FROM ahmad 
		// 	UNION 
		// 	SELECT * FROM annasai
		// 	UNION 
		// 	SELECT * FROM bukhari
		// 	UNION 
		// 	SELECT * FROM ibnumajah
		// 	UNION 
		// 	SELECT * FROM malik
		// 	UNION 
		// 	SELECT * FROM muslim
		// 	UNION 
		// 	SELECT * FROM tirmidzi')->num_rows();

		// //LOAD library pagination
		// $this->load->library('pagination');

		// //konfigurasi library
		// $config['base_url'] = base_url().'GetData/index/';		$config['total_rows'] = $jumlah_data;
		// $config['per_page'] = 5;
		// // $config['next_link'] = 'Selanjutnya';

		// // $config['prev_link'] = 'Sebelumnya';
		// $config['first_link']       = 'First';
		// $config['last_link']        = 'Last';
		// $config['next_link']        = 'Next';
		// $config['prev_link']        = 'Prev';
		// $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		// $config['full_tag_close']   = '</ul></nav></div>';
		// $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		// $config['num_tag_close']    = '</span></li>';
		// $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		// $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		// $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		// $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['prev_tagl_close']  = '</span>Next</li>';
		// $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		// $config['first_tagl_close'] = '</span></li>';
		// $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		// $config['last_tagl_close']  = '</span></li>';

		// //untuk batasin jumlah data per halaman
		// $limit = 5;
		// $from = '0'+$this->uri->segment(3);
		// $limit = $limit + $from;
		// $this->pagination->initialize($config);		
		// //baca data dari database
		// $data['hadis'] = $this->db->query('SELECT * FROM ahmad 
		// 	UNION 
		// 	SELECT * FROM annasai
		// 	UNION 
		// 	SELECT * FROM bukhari
		// 	UNION 
		// 	SELECT * FROM ibnumajah
		// 	UNION 
		// 	SELECT * FROM malik
		// 	UNION 
		// 	SELECT * FROM muslim
		// 	UNION 
		// 	SELECT * FROM tirmidzi LIMIT '.$from.','.$limit)->result();
		// //kirim ke view
		// $this->load->view('getdata',$data);


		$this->load->view('getawal');
	}


	//filter
	public function filter(){

		//manggil helper highlight
		$this->load->helper('highlight');

		$sess_array = array (
				'cari' => $this->input->post('cari') ,
			);
			$this->session->set_userdata('cari',$sess_array);

		$quire = "";
		$imam = $this->input->post('imam');
		foreach ($imam as $imm) {
			// echo $imm."<br>";
			if($imm == 'ahmad'){
				$quire = "SELECT * FROM ahmad WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
			}else if($imm == 'annasai'){
				if($quire == ''){
					$quire = $quire . "SELECT * FROM annasai WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire = $quire .  " UNION SELECT * FROM annasai WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}
			}else if($imm == 'bukhari'){
				if($quire == ''){
					$quire = $quire . "SELECT * FROM bukhari WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire = $quire .  " UNION SELECT * FROM bukhari WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}
			}else if($imm == 'ibnu_majah'){
				if($quire == ''){
					$quire =  $quire . "SELECT * FROM ibnumajah WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire =  $quire . " UNION SELECT * FROM ibnumajah WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}

			}else if($imm == 'malik'){
				if($quire == ''){
					$quire = $quire . "SELECT * FROM malik WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire = $quire . " UNION SELECT * FROM malik WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}

			}else if($imm == 'muslim'){
				if($quire == ''){
					$quire = $quire . "SELECT * FROM muslim WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire = $quire . " UNION SELECT * FROM muslim WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}

			}else if($imm == 'tirmizi'){
				if($quire == ''){
					$quire = $quire . "SELECT * FROM tirmidzi WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}else{
					$quire = $quire . " UNION SELECT * FROM tirmidzi WHERE Isi_Indonesia  LIKE '%".$this->input->post('cari')."%'";
				}
			}else{

			}
		}

		// echo $quire;

		
		
		$jumlah_data = $this->db->query($quire)->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'GetData/filter_next/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		// $config['next_link'] = 'Selanjutnya';

		// $config['prev_link'] = 'Sebelumnya';
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$limit = 5;
		$from = '0'+$this->uri->segment(3);
		$limit = $limit + $from;
		$this->pagination->initialize($config);		
		$data['hadis'] = $this->db->query($quire." LIMIT ".$from.",".$limit)->result();
		$data['kunci'] = $this->input->post('cari');
		$this->load->view('datafilter',$data);
	}

	public function filter_next(){
		$this->load->helper('highlight');
		$cari = $this->session->userdata('cari');
		$jumlah_data = $this->db->query("
			SELECT * FROM ahmad WHERE Isi_Indonesia  LIKE '%".$cari['cari']."%'
			UNION 
			SELECT * FROM annasai WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM bukhari WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM ibnumajah WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM malik WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM muslim WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM tirmidzi WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'")->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'GetData/filter_next/';		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		// $config['next_link'] = 'Selanjutnya';

		// $config['prev_link'] = 'Sebelumnya';
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$limit = 5;
		$from = '0'+$this->uri->segment(3);
		$limit = $limit + $from;
		$this->pagination->initialize($config);		
		$data['hadis'] = $this->db->query("SELECT * FROM ahmad WHERE Isi_Indonesia  LIKE '%".$cari['cari']."%'
			UNION 
			SELECT * FROM annasai WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM bukhari WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM ibnumajah WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM malik WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM muslim WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%'
			UNION 
			SELECT * FROM tirmidzi WHERE Isi_Indonesia LIKE  '%".$cari['cari']."%' LIMIT ".$from.",".$limit)->result();
		$data['kunci'] = $cari['cari'];
		$this->load->view('datafilter',$data);
	}


	
}
