<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('event_model');
		$data['event']=$this->event_model->readevent();
		$this->load->view('event/list_event', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('event_model');
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
		$this->form_validation->set_rules('id_event','event','trim|required');
		$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
		$this->form_validation->set_rules('nama_event','nama_event','trim|required');
		$this->form_validation->set_rules('tanggal_event','tanggal_event','trim|required');
		$this->form_validation->set_rules('tempat_event','tempat_event','trim|required');
		$this->form_validation->set_rules('waktu_event','waktu_event','trim|required');

		$data['event']=$this->event_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('event/edit_event_view',$data);
		}
		else{
			$this->event_model->UpdateById($id);
			$this->load->view('event/edit_event_sukses');
			}
		}	

	public function delete($id)
	{
		$this->event_model->delete($id);
		$this->load->view('event/hapus_event_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */