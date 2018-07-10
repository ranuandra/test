<?php
class Mstkota_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_kota()
		{
			$query = $this->db->get('mst_kota');
			return $query->row_array();
		}
}