<?php 

	class Aparatur_model extends CI_Model
	{
		
		public function getAllAparatur()
		{
			return $this->db->get('aparatur')->result_array();
		}

		public function getAparaturById($id)
		{
			return $this->db->get_where('aparatur', ['nik' => $id])->row_array();
		}

		public function add()
		{
			$foto = $_FILES['foto']['name'];
			
			if ($foto) {

				if (!is_dir('./upload/foto/')) {
					mkdir('./upload/foto/', 0777, true);
				}

				$config['file_name'] = random_string('alnum', 16);
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['upload_path'] = './upload/foto/';

				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto', $new_image);
					$this->db->set('nik', $this->input->post('nik'));
					$this->db->set('nama', $this->input->post('nama'));
					$this->db->set('jekel', $this->input->post('jekel'));
					$this->db->set('jabatan', $this->input->post('jabatan'));
					$this->db->insert('aparatur');
				} else {
					// var_dump($this->upload->display_errors());
					// exit();
					echo $this->upload->display_errors();
				}
			}

			
		}

		public function update()
		{
			$foto = $_FILES['foto']['name'];
			
			if ($foto) {

				if (!is_dir('./upload/foto/')) {
					mkdir('./upload/foto/', 0777, true);
				}

				$config['file_name'] = random_string('alnum', 16);
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['upload_path'] = './upload/foto/';

				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('foto', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('nama', $this->input->post('nama'));
			$this->db->set('jekel', $this->input->post('jekel'));
			$this->db->set('jabatan', $this->input->post('jabatan'));
			$this->db->where('nik', $this->input->post('nik'));
			$this->db->update('aparatur');
		}
		
		public function delete($id)
		{
			$this->db->delete('aparatur', ['nik' => $id]);
		}
	}
?>