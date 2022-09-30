<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Profil_model', 'profil');
    }

    public function index()
    {
    	if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('nama', 'nama', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$data['profil'] = $this->profil->getProfil();
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/profil/index.php', $data);
				$this->load->view('template-admin/footer');
			} else {
				$data['profil'] = $this->profil->getProfil();
				if(count($data['profil'])<=0) {
					$this->profil->add();
					$this->session->set_flashdata('flash','Ditambahkan');
					redirect('profil');
				} else {
					$this->profil->update();
					$this->session->set_flashdata('flash','Diupdate');
					redirect('profil');
				}
			}
	    }
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('nama', 'nama', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/profil/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$data['profil'] = $this->profil->getProfil();
				if(count($data['profil'])<=0) {
					$this->profil->add();
					$this->session->set_flashdata('flash','Ditambahkan');
					redirect('profil');
				} else {
					$this->profil->update();
					$this->session->set_flashdata('flash','Diupdate');
					redirect('profil');
				}
			}
		}
	}
}
?>