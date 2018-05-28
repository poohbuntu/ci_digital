<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sectors_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function list_sector()
  {
    $query = $this->db->get('sectors');
    foreach ($query->result() as $row) {
      $array[$row->sector_name] = $row->sector_name;
    }
    return $array;
  }

}
