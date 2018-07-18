<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('pembayaran_model');
		$data['pembayaran']=$this->pembayaran_model->readevent();
		$this->load->view('pembayaran/list_pembayaran', $data);	
	}

	public function __construct()
	{

		parent::__construct();
		$this->load->model('pembayaran_model');
		$this->load->library('form_validation');
		$this->load->helper('url','form');

	}

	//FUNGSI TAMBAH
	public function Create()
	{
	 	$this->load->helper('url','form');
		$this->load->library('form_validation');
	 	$this->load->model('pembayaran_model');

		$this->form_validation->set_rules('id_bayar','id_bayar','trim|required');
	 	$this->form_validation->set_rules('id_user','id_user','trim|required');
	 	$this->form_validation->set_rules('id_event','id_event','trim|required');
	 	$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
	 	$this->form_validation->set_rules('jumlah_beli','jumlah_beli','trim|required');
	 	$this->form_validation->set_rules('total_harga','total_harga','trim|required');
		if($this->form_validation->run()==FALSE)
		{
	 	$this->load->view('pembayaran/tambah_pembayaran_view');
		}
			else
		{
	 	$this->pembayaran_model->insertevent();
	 	$this->load->view('pembayaran/tambah_pembayaran_sukses');
	 	}
	 }

	public function Update($id)
	{
		$this->form_validation->set_rules('id_bayar','id_bayar','trim|required');
		$this->form_validation->set_rules('id_user','id_user','trim|required');
		$this->form_validation->set_rules('id_event','id_event','trim|required');
		$this->form_validation->set_rules('id_tiket','id_tiket','trim|required');
		$this->form_validation->set_rules('jumlah_beli','jumlah_beli','trim|required');
		$this->form_validation->set_rules('total_harga','total_harga','trim|required');

		$data['pembayaran']=$this->pembayaran_model->getevent($id);
		if($this->form_validation->run()==FALSE){
			$this->load->view('pembayaran/edit_pembayaran_view',$data);
		}
		else{
			$this->pembayaran_model->UpdateById($id);
			$this->load->view('pembayaran/edit_pembayaran_sukses');
			}
		}	

	public function delete($id)
	{
		$this->pembayaran_model->delete($id);
		$this->load->view('pembayaran/hapus_pembayaran_sukses');
	}

}

/* End of file event.php */
/* Location: ./application/controllers/event.php */