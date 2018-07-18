<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function readevent(){
		$query=$this->db->get('admin');
		return $query->result();
	}
	
	//FUNGSI TAMBAH
	// public function insertevent()
	// {
	// 	$object = array('id_event' =>$this->input->post('id_event'),
	// 	'id_tiket' =>$this->input->post('id_tiket'),
	// 	'nama_event' =>$this->input->post('nama_event'),
	// 	'tanggal_event' =>$this->input->post('tanggal_event'),		 	
	// 	'tempat_event' =>$this->input->post('tempat_event'),	 
	// 	'waktu_event' =>$this->input->post('waktu_event')
	// 	 );
	// 	$this->db->insert('event',$object);
	// }

	public function getevent($id)
	{
		$this->db->where('id_admin',$id);
		$query=$this->db->get('id_admin');
		return $query->result();	 
	}
	
	public function UpdateById($id)
	{
		$data = array('id_admin' =>$this->input->post('id_admin'),
		 	'nama_admin' =>$this->input->post('nama_admin'),
		 	'username' =>$this->input->post('username'),
		 	'password' =>$this->input->post('password')
		 );
		$this->db->where('id_admin',$id);
		$this->db->update('admin',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_admin',$id);
		$this->db->delete('admin');
	}
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */