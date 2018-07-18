<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiket extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('tiket_model');
		$data['tiket']=$this->tiket_model->readevent();
		$this->load->view('tiket/list_tiket', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('tiket_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

	}

	//FUNGSI TAMBAH
	 public function Create()
	 {
	 	$this->load->helper('url','form');
		$this->load->library('form_validation');
	 	$this->load->model('tiket_model');

		$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
	 	$this->form_validation->set_rules('nama_event','nama_event','trim|required');
	 	$this->form_validation->set_rules('kategori','kategori','trim|required');
	 	$this->form_validation->set_rules('qty','qty','trim|required');
	 	$this->form_validation->set_rules('harga','harga','trim|required');
	 	$this->form_validation->set_rules('availability','availability','trim|required');
		if($this->form_validation->run()==FALSE)
		{
	 	$this->load->view('tiket/tambah_tiket_view');
		}
		else
		{
	 	$this->tiket_model->insertevent();
	 	$this->load->view('tiket/tambah_tiket_sukses');
	 	}
		}

	public function Update($id)
	{
		$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
		$this->form_validation->set_rules('nama_event','nama_event','trim|required');
		$this->form_validation->set_rules('kategori','kategori','trim|required');
		$this->form_validation->set_rules('qty','qty','trim|required');
		$this->form_validation->set_rules('harga','harga','trim|required');
		$this->form_validation->set_rules('availability','availability','trim|required');

		$data['tiket']=$this->tiket_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('tiket/edit_tiket_view',$data);
		}
		else{
			$this->tiket_model->UpdateById($id);
			$this->load->view('tiket/edit_tiket_sukses');
			}
		}	

	public function delete($id)
	{
		$this->tiket_model->delete($id);
		$this->load->view('tiket/hapus_tiket_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */