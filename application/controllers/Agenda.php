<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Agenda_model', 'agenda');
	}

	public function index()
    {
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['agenda'] = $this->agenda->getAllAgenda();
			$this->load->view('template-admin/header.php', $data);
			$this->load->view('menu-admin/agenda/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('lokasi', 'lokasi', 'required');
			
			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/agenda/tambah');
				$this->load->view('template-admin/footer');
			} else {
				$this->agenda->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('agenda');
			}
		}
	}

    public function ubah($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['agenda'] = $this->agenda->getAgendaById($id);
			$this->form_validation->set_rules('kegiatan', 'kegiatan', 'required');
			$this->form_validation->set_rules('lokasi', 'lokasi', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template-admin/header', $data);
				$this->load->view('menu-admin/agenda/ubah', $data);
				$this->load->view('template-admin/footer');
			} else {
				$this->agenda->update();
				$this->session->set_flashdata('flash','Diupdate');
				redirect('agenda');
			}
		}
	}

    public function hapus($id)
	{
		if ($this->session->userdata('username') == "") {
			redirect(base_url());
		} else {
			$this->agenda->delete($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('agenda');
		}
	}

}
