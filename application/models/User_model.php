<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function getUser()
  {
    $query = " SELECT user . *, user_menu. menu
               FROM user JOIN user_menu
                 ON user . role_id = user_menu. id
  ";
    return $this->db->query($query)->result_array();
  }
	

	public function count_user(){
			$query = $this->db->get("user");
			return $query->num_rows();
	}
}