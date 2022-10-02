<?php 

	class StatistikUmur_model extends CI_Model
	{
		
		public function getAllStatistikUmur()
		{
			return $this->db->get('statistikumur')->result_array();
		}

		public function getStatistikUmurById($id)
		{
			return $this->db->get_where('statistikumur', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('umur', $this->input->post('umur'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->insert('statistikumur');
		}

		public function update()
		{
			$this->db->set('umur', $this->input->post('umur'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('statistikumur');
		}
		
		public function delete($id)
		{
			$this->db->delete('statistikumur', ['id' => $id]);
		}
	}
?>