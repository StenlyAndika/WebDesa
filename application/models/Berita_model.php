<?php 

	class Berita_model extends CI_Model
	{
		
		public function getAllBerita()
		{
			$this->db->from('berita');
			$this->db->order_by("tgl", "desc");
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getBeritaRandom()
		{
			$this->db->from('berita');
			$this->db->order_by("tgl", "desc");
			$this->db->order_by('rand()');
			$this->db->limit(3);
			$query = $this->db->get();
			return $query->result_array();
		}

		public function getBeritaById($id)
		{
			return $this->db->get_where('berita', ['id' => $id])->row_array();
		}

		public function add()
		{
			$gambar = $_FILES['gambar']['name'];

			if (!is_dir('./upload/berita/')) {
				mkdir('./upload/berita/', 0777, true);
			}

			if ($gambar) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tgl", date('d-m-Y'));
			$this->db->set("nama", $this->session->userdata('nama'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("isi", $this->input->post('isi'));
			$this->db->insert('berita');
		}

		public function update()
		{
			$gambar = $_FILES['gambar']['name'];

			if ($gambar) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/berita/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set("tgl", date('d-m-Y'));
			$this->db->set("judul", $this->input->post('judul'));
			$this->db->set("nama", $this->session->userdata('nama'));
			$this->db->set("isi", $this->input->post('isi'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('berita');
		}
		
		public function delete($id)
		{
			$this->db->delete('berita', ['id' => $id]);
		}
	}
?>