<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function list_course()
  {
    $query = $this->db->get('courses');
    foreach ($query->result() as $row) {
      $array[$row->course_name] = $row->course_name;
    }
    return $array;
  }

}
