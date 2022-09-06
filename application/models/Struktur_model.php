<?php 

	class Struktur_model extends CI_Model
	{
		
		public function getAllStruktur()
		{
			return $this->db->get('struktur')->result_array();
		}

		public function getStrukturById($id)
		{
			return $this->db->get_where('struktur', ['id' => $id])->row_array();
		}

		public function add()
		{
			$struktur = $_FILES['struktur']['name'];

			if (!is_dir('./upload/struktur/')) {
				mkdir('./upload/struktur/', 0777, true);
			}

			if ($struktur) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/struktur/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('struktur')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('struktur', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tugas", $this->input->post('tugas'));
			$this->db->insert('struktur');
		}

		public function update()
		{
			$struktur = $_FILES['struktur']['name'];

			if (!is_dir('./upload/struktur/')) {
				mkdir('./upload/struktur/', 0777, true);
			}
			
			if ($struktur) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/struktur/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('struktur')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('struktur', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set("tugas", $this->input->post('tugas'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('struktur');
		}
		
		public function delete($id)
		{
			$this->db->delete('struktur', ['id' => $id]);
		}
	}
?>