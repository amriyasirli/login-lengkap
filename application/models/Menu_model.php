<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{


  public function getSubMenu()
  {
    $query = " SELECT user_sub_menu . *, user_menu. menu
               FROM user_sub_menu JOIN user_menu
                 ON user_sub_menu . menu_id = user_menu. id
  ";
    return $this->db->query($query)->result_array();
  }


  public function submenu_edit($id)
  {
    $submenu = $this->db->get_where('user_sub_menu', array('id' => $id));
    return $submenu;
  }
    
  public function count_user_menu(){
      $query = $this->db->get("user_menu");
      return $query->num_rows();
      }

    public function count_user_sub_menu(){
      $query = $this->db->get("user_sub_menu");
      return $query->num_rows();
      }

}
