<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function readevent(){
		$query=$this->db->get('pembayaran');
		return $query->result();
	}
	
	//FUNGSI TAMBAH
	 public function insertevent()
	 {
	 	$object = array
		('id_bayar' =>$this->input->post('id_bayar'),
	 	'id_user' =>$this->input->post('id_user'),
	 	'id_event' =>$this->input->post('id_event'),
	 	'id_tiket' =>$this->input->post('id_tiket'),		 	
	 	'jumlah_beli' =>$this->input->post('jumlah_beli'),	 
	 	'total_harga' =>$this->input->post('total_harga')
		);
	 	$this->db->insert('pembayaran',$object);
	}

	public function getevent($id)
	{
		$this->db->where('id_bayar',$id);
		$query=$this->db->get('pembayaran');
		return $query->result();	 
	}
	
	public function UpdateById($id)
	{
		$data = array('id_bayar' =>$this->input->post('id_bayar'),
		 	'id_user' =>$this->input->post('id_user'),
		 	'id_event' =>$this->input->post('id_event'),
		 	'id_tiket' =>$this->input->post('id_tiket'),
		 	'jumlah_beli' =>$this->input->post('jumlah_beli'),
		 	'total_harga' =>$this->input->post('total_harga')
		 );
		$this->db->where('id_bayar',$id);
		$this->db->update('pembayaran',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_bayar',$id);
		$this->db->delete('pembayaran');
	}
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */