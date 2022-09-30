<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Sejarah_model', 'sejarah');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "sejarah";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['sejarah'] = $this->sejarah->getAllSejarah();
			$this->load->view('template-admin/header.php', $data);
	        $this->load->view('menu-admin/sejarah/index.php', $data);
	        $this->load->view('template-admin/footer.php');
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "sejarah";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('sejarah', 'sejarah', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/sejarah/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->sejarah->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('sejarah');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "sejarah";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['sejarah'] = $this->sejarah->getSejarahById($id);
	        
			$this->form_validation->set_rules('sejarah', 'sejarah', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/sejarah/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->sejarah->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('sejarah');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->sejarah->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('sejarah');
		}
	}
}
?>