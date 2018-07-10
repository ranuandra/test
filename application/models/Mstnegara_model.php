<?php
class Mstnegara_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_negara()
		{
			$query = $this->db->get('mst_negara');
			return $query->row_array();
		}
}