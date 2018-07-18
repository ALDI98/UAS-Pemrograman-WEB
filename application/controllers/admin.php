<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('admin_model');
		$data['admin']=$this->admin_model->readevent();
		$this->load->view('admin/list_admin', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

	}

	//FUNGSI TAMBAH
	 public function Create()
	{
	 	$this->load->helper('url','form');
		$this->load->library('form_validation');
	 	$this->load->model('event_model');

	 	$this->form_validation->set_rules('id_event','event','trim|required');
	 	$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
	 	$this->form_validation->set_rules('nama_event','nama_event','trim|required');
	 	$this->form_validation->set_rules('tanggal_event','tanggal_event','trim|required');
	 	$this->form_validation->set_rules('tempat_event','tempat_event','trim|required');
	 	$this->form_validation->set_rules('waktu_event','waktu_event','trim|required');
	 if($this->form_validation->run()==FALSE)
	 {
	 	$this->load->view('event/tambah_event_view');
	 }
	 else
	 {
	 	$this->event_model->insertevent();
	$this->load->view('event/tambah_event_sukses');
		}
	}

	public function Update($id)
	{
		$this->form_validation->set_rules('id_admin','id_admin','trim|required');
		$this->form_validation->set_rules('nama_admin','nama_admin','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');

		$data['admin']=$this->admin_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/edit_admin_view',$data);
		}
		else{
			$this->admin_model->UpdateById($id);
			$this->load->view('admin/edit_admin_sukses');
			}
		}	

	public function delete($id)
	{
		$this->admin_model->delete($id);
		$this->load->view('admin/hapus_admin_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */