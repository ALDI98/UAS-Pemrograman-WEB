<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function readevent(){
		$query=$this->db->get('event');
		return $query->result();
	}
	
	//FUNGSI TAMBAH
	 public function insertevent()
	 {
	 	$object = array('id_event' =>$this->input->post('id_event'),
	 	'id_tiket' =>$this->input->post('id_tiket'),
	 	'nama_event' =>$this->input->post('nama_event'),
	 	'tanggal_event' =>$this->input->post('tanggal_event'),		 	
	 	'tempat_event' =>$this->input->post('tempat_event'),	 
	 	'waktu_event' =>$this->input->post('waktu_event')
	 	 );
	 	$this->db->insert('event',$object);
	 }

	public function getevent($id)
	{
		$this->db->where('id_event',$id);
		$query=$this->db->get('event');
		return $query->result();	 
	}
	
	public function UpdateById($id)
	{
		$data = array('id_event' =>$this->input->post('id_event'),
		 	'id_tiket' =>$this->input->post('id_tiket'),
		 	'nama_event' =>$this->input->post('nama_event'),
		 	'tanggal_event' =>$this->input->post('tanggal_event'),
		 	'tempat_event' =>$this->input->post('tempat_event'),
		 	'waktu_event' =>$this->input->post('waktu_event')
		 );
		$this->db->where('id_event',$id);
		$this->db->update('event',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_event',$id);
		$this->db->delete('event');
	}
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */