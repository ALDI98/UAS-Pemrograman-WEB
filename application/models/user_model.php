<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function readevent(){
		$query=$this->db->get('user');
		return $query->result();
	}
	
	//FUNGSI TAMBAH
	 public function insertevent()
	 {
	 	$object = array
		('id_user' =>$this->input->post('id_user'),
	 	'nama_user' =>$this->input->post('nama_user'),
	 	'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
	 	'email' =>$this->input->post('email'),		 	
	 	'alamat' =>$this->input->post('alamat'),	 
	 	'no_telp' =>$this->input->post('no_telp')
	 	 );
	 	$this->db->insert('user',$object);
	 }

	public function getevent($id)
	{
		$this->db->where('id_user',$id);
		$query=$this->db->get('user');
		return $query->result();	 
	}
	
	public function UpdateById($id)
	{
		$data = array('id_user' =>$this->input->post('id_user'),
		 	'nama_user' =>$this->input->post('nama_user'),
		 	'jenis_kelamin' =>$this->input->post('jenis_kelamin'),
		 	'email' =>$this->input->post('email'),
		 	'alamat' =>$this->input->post('alamat'),
		 	'no_telp' =>$this->input->post('no_telp')
		 );
		$this->db->where('id_user',$id);
		$this->db->update('user',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('user');
	}
}

/* End of file event_model.php */
/* Location: ./application/models/event_model.php */