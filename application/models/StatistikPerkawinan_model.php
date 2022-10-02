<?php 

	class StatistikPerkawinan_model extends CI_Model
	{
		
		public function getAllStatistikPerkawinan()
		{
			return $this->db->get('statistikperkawinan')->result_array();
		}

		public function getStatistikPerkawinanById($id)
		{
			return $this->db->get_where('statistikperkawinan', ['id' => $id])->row_array();
		}

		public function add()
		{
			$this->db->set('perkawinan', $this->input->post('perkawinan'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->insert('statistikperkawinan');
		}

		public function update()
		{
			$this->db->set('perkawinan', $this->input->post('perkawinan'));
			$this->db->set('jumlah', $this->input->post('jumlah'));
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('statistikperkawinan');
		}
		
		public function delete($id)
		{
			$this->db->delete('statistikperkawinan', ['id' => $id]);
		}
	}
?>