<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_pages_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function list_type_page()
  {
    $query = $this->db->get('type_pages');
    foreach ($query->result() as $row) {
      $array[$row->type_page] = $row->type_page;
    }
    return $array;
  }

}
