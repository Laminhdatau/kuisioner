<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `t_user_sub_menu`.*, `t_user_menu`.`menu`
                  FROM `t_user_sub_menu` JOIN `t_user_menu`
                  ON `t_user_sub_menu`.`menu_id` = `t_user_menu`.`menu_id`
                ";
        return $this->db->query($query)->result_array();
    }
}