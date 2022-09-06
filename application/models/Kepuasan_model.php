<?php 

	class Kepuasan_model extends CI_Model
	{
		
		public function getAllKepuasan()
		{
			return $this->db->get('kepuasan')->result_array();
		}

		public function getKepuasanById($id)
		{
			return $this->db->get_where('kepuasan', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('sp', $this->input->post('sp'));
			$this->db->set('p', $this->input->post('p'));
			$this->db->set('cp', $this->input->post('cp'));
			$this->db->set('kp', $this->input->post('kp'));
			$this->db->insert('kepuasan');
		}

		public function update()
		{
			$this->db->set('sp', $this->input->post('sp'));
			$this->db->set('p', $this->input->post('p'));
			$this->db->set('cp', $this->input->post('cp'));
			$this->db->set('kp', $this->input->post('kp'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('kepuasan');
		}
		
		public function delete($id)
		{
			$this->db->delete('kepuasan', ['id' => $id]);
		}
	}
?>