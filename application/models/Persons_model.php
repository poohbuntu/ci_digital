<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persons_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function list_person()
  {
    $query = $this->db->get('persons');
    foreach ($query->result() as $row) {
      $array[$row->person_name] = $row->person_name;
    }
    return $array;
  }

}
