<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MData extends CI_Model {

	var $table = 'ahmad';
	var $column_order = array(null, 'NoHadis','Isi_Arab','Isi_Indonesia','Perawi'); //set column field database for datatable orderable
	var $column_search = array('NoHadis','Isi_Arab','Isi_Indonesia','Perawi'); //set column field database for datatable searchable 
	var $order = array('id' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function data($number,$offset){
		return $query = $this->db->get('user',$number,$offset)->result();		
	}
	
	function jumlah_data(){
		return $this->db->get('user')->num_rows();
	}

}
