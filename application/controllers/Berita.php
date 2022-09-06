<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Berita_model', 'berita');
    }

    public function index()
    {
		$data['data'] = "berita";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['berita'] = $this->berita->getAllBerita();
        $this->load->view('template-admin/header.php', $data);
        $this->load->view('menu-admin/berita/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$data['data'] = "berita";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/berita/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->berita->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('berita');
		}
	}

    public function ubah($id)
	{
		$data['data'] = "berita";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['berita'] = $this->berita->getBeritaById($id);
        
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/berita/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->berita->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('berita');
		}
	}

    public function hapus($id)
	{
		$this->berita->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('berita');
	}
}
?>