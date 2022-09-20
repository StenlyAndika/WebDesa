<?php 

	class Admin_model extends CI_Model
	{
		
		public function getAllAdmin()
		{
			return $this->db->get('admin')->result_array();
		}

		public function getAdminById($id)
		{
			return $this->db->get_where('admin', ['username' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('username', $this->input->post('username'));
			$this->db->set('password', password_hash($this->input->post('password'), PASSWORD_DEFAULT));
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->insert('admin');
		}

		public function update()
		{
			$this->db->set('password', password_hash($this->input->post('password'), PASSWORD_DEFAULT));
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->where('username', $this->input->post('username'));
			$this->db->update('admin');
		}
		
		public function delete($id)
		{
			$this->db->delete('admin', ['username' => $id]);
		}
	}
?>