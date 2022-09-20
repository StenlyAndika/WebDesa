<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Visimisi_model', 'visimisi');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "visimisi";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['visimisi'] = $this->visimisi->getAllVisiMisi();
			$this->load->view('template-admin/header.php', $data);
	        $this->load->view('menu-admin/visimisi/index.php', $data);
	        $this->load->view('template-admin/footer.php');
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "visimisi";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('visi', 'visi', 'required');
			$this->form_validation->set_rules('misi', 'misi', 'required');
			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/visimisi/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->visimisi->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('visimisi');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "visimisi";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['visimisi'] = $this->visimisi->getVisiMisiById($id);
	        
			$this->form_validation->set_rules('visi', 'visi', 'required');
			$this->form_validation->set_rules('misi', 'misi', 'required');
			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/visimisi/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->visimisi->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('visimisi');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->visimisi->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('visimisi');
		}
	}
}
?>