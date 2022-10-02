<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistikPerkawinan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('StatistikPerkawinan_model', 'pddk');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikperkawinan'] = $this->pddk->getAllStatistikPerkawinan();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/statistikperkawinan/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('perkawinan', 'perkawinan', 'required');
			
			if ( $this->form_validation->run() == FALSE ) {
				$data['perkawinan'] = ["", "Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikperkawinan/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->pddk->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('statistikperkawinan');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['statistikperkawinan'] = $this->pddk->getStatistikPerkawinanById($id);
			$this->form_validation->set_rules('perkawinan', 'perkawinan', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$data['perkawinan'] = ["", "Belum Kawin", "Kawin", "Cerai Hidup", "Cerai Mati"];
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/statistikperkawinan/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->pddk->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('statistikperkawinan');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->pddk->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('statistikperkawinan');
		}
	}

}
