<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepuasan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Kepuasan_model', 'kepuasan');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "kepuasan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['kepuasan'] = $this->kepuasan->getAllKepuasan();
	        $this->load->view('template-admin/header.php', $data);
	        $this->load->view('menu-admin/kepuasan/index.php', $data);
	        $this->load->view('template-admin/footer.php');
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "kepuasan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('tahun', 'tahun', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/kepuasan/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->kepuasan->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('kepuasan');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "kepuasan";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['kepuasan'] = $this->kepuasan->getKepuasanById($id);
	        
			$this->form_validation->set_rules('tahun', 'tahun', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/kepuasan/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->kepuasan->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('kepuasan');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->kepuasan->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('kepuasan');
		}
	}
}
?>