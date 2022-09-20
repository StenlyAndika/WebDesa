<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Struktur_model', 'struktur');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "struktur";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['struktur'] = $this->struktur->getAllStruktur();
	        $this->load->view('template-admin/header.php', $data);
	        $this->load->view('menu-admin/struktur/index.php', $data);
	        $this->load->view('template-admin/footer.php');
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "struktur";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('tugas', 'tugas', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/struktur/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->struktur->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('struktur');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['data'] = "struktur";
			$data['instansi'] =  $this->db->get('instansi')->result_array();
	        $data['struktur'] = $this->struktur->getStrukturById($id);
	        
			$this->form_validation->set_rules('tugas', 'tugas', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/struktur/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->struktur->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('struktur');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->struktur->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('struktur');
		}
	}
}
?>