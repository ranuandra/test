<?php
class Mstprovinsi_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_provinsi()
		{
			$query = $this->db->get('mst_provinsi');
			return $query->row_array();
		}
}