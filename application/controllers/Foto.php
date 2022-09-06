<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Foto_model', 'foto');
    }

    public function index()
    {
		$data['data'] = "foto";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['foto'] = $this->foto->getAllFoto();
        $this->load->view('template-admin/header.php', $data);
        $this->load->view('menu-admin/foto/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$data['data'] = "foto";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/foto/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->foto->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('foto');
		}
	}

    public function ubah($id)
	{
		$data['data'] = "foto";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['foto'] = $this->foto->getFotoById($id);
        
		$this->form_validation->set_rules('tgl', 'Tanggal', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/foto/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->foto->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('foto');
		}
	}

    public function hapus($id)
	{
		$this->foto->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('foto');
	}
}
?>