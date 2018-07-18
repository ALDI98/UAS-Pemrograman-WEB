<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('user_model');
		$data['user']=$this->user_model->readevent();
		$this->load->view('user/list_user', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

	}

	//FUNGSI TAMBAH
	 public function Create()
	 {
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user_model');

		$this->form_validation->set_rules('id_user','id_user','trim|required');
		$this->form_validation->set_rules('nama_user','nama_user','trim|required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');
		if($this->form_validation->run()==FALSE)
		{
		$this->load->view('user/tambah_user_view');
		}
		else
		{
		$this->user_model->insertevent();
		$this->load->view('user/tambah_user_sukses');
		}
		}

	public function Update($id)
	{
		$this->form_validation->set_rules('id_user','id_user','trim|required');
		$this->form_validation->set_rules('nama_user','nama_user','trim|required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		$this->form_validation->set_rules('no_telp','no_telp','trim|required');

		$data['user']=$this->user_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('user/edit_user_view',$data);
		}
		else{
			$this->user_model->UpdateById($id);
			$this->load->view('user/edit_user_sukses');
			}
		}	

	public function delete($id)
	{
		$this->user_model->delete($id);
		$this->load->view('user/hapus_user_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */