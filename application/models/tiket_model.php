<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiket_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function readevent(){
		$query=$this->db->get('tiket');
		return $query->result();
	}
	
	//FUNGSI TAMBAH
	public function insertevent()
	 {
	 	$object = array('id_tiket' =>$this->input->post('id_tiket'),
	 	'nama_event' =>$this->input->post('nama_event'),
	 	'kategori' =>$this->input->post('kategori'),
	 	'qty' =>$this->input->post('qty'),		 	
	 	'harga' =>$this->input->post('harga'),	 
	 	'availability' =>$this->input->post('availability')
	 	 );
	 	$this->db->insert('tiket',$object);
	 }

	public function getevent($id)
	{
		$this->db->where('id_tiket',$id);
		$query=$this->db->get('tiket');
		return $query->result();	 
	}
	
	public function UpdateById($id)
	{
		$data = array('id_tiket' =>$this->input->post('id_tiket'),
		 	'nama_event' =>$this->input->post('nama_event'),
		 	'kategori' =>$this->input->post('kategori'),
		 	'qty' =>$this->input->post('qty'),
		 	'harga' =>$this->input->post('harga'),
		 	'availability' =>$this->input->post('availability')
		 );
		$this->db->where('id_tiket',$id);
		$this->db->update('tiket',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_tiket',$id);
		$this->db->delete('tiket');
	}
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */