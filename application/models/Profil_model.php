<?php 

	class Profil_model extends CI_Model
	{
		
		public function getAllProfil()
		{
			return $this->db->get('instansi')->result_array();
		}

		public function getProfilById($id)
		{
			return $this->db->get_where('instansi', ['id' => $id])->row_array();
		}

		public function add()
		{
			$logo = $_FILES['logo']['name'];
			
			if (!is_dir('./upload/logo/')) {
				mkdir('./upload/logo/', 0777, true);
			}

			if ($logo) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/logo/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('logo')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('logo', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$fotokepala = $_FILES['fotokepala']['name'];
			
			if (!is_dir('./upload/fotokepala/')) {
				mkdir('./upload/fotokepala/', 0777, true);
			}

			if ($fotokepala) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/fotokepala/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('fotokepala')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('fotokepala', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('nama', $this->input->post('nama'));
			$this->db->set('kepala', $this->input->post('kepala'));
			$this->db->set('alamat', $this->input->post('alamat'));
			$this->db->set('email', $this->input->post('email'));
			$this->db->set('wa', $this->input->post('wa'));
			$this->db->set('fb', $this->input->post('fb'));
			$this->db->set('tw', $this->input->post('tw'));
			$this->db->set('ig', $this->input->post('ig'));
			$this->db->insert('instansi');
		}

		public function update()
		{
			$logo = $_FILES['logo']['name'];
			
			if (!is_dir('./upload/logo/')) {
				mkdir('./upload/logo/', 0777, true);
			}

			if ($logo) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/logo/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('logo')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('logo', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$fotokepala = $_FILES['fotokepala']['name'];
			
			if (!is_dir('./upload/fotokepala/')) {
				mkdir('./upload/fotokepala/', 0777, true);
			}

			if ($fotokepala) {
				$config['allowed_types'] = 'jpg|png|jpeg|pdf';
				$config['upload_path'] = './upload/fotokepala/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('fotokepala')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('fotokepala', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->set('kepala', $this->input->post('kepala'));
			$this->db->set('alamat', $this->input->post('alamat'));
			$this->db->set('email', $this->input->post('email'));
			$this->db->set('wa', $this->input->post('wa'));
			$this->db->set('fb', $this->input->post('fb'));
			$this->db->set('tw', $this->input->post('tw'));
			$this->db->set('ig', $this->input->post('ig'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('instansi');
		}
		
		public function delete($id)
		{
			$this->db->delete('instansi', ['id' => $id]);
		}
	}
?>