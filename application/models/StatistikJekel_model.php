<?php 

	class StatistikJekel_model extends CI_Model
	{
		
		public function getAllStatistikJekel()
		{
			return $this->db->get('statistikjekel')->result_array();
		}

		public function getStatistikJekelById($id)
		{
			return $this->db->get_where('statistikjekel', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('jekel', $this->input->post('jekel'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->insert('statistikjekel');
		}

		public function update()
		{
			$this->db->set('jekel', $this->input->post('jekel'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('statistikjekel');
		}
		
		public function delete($id)
		{
			$this->db->delete('statistikjekel', ['id' => $id]);
		}
	}
?>