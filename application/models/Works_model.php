<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function add()
  {
    $data = array(
        'work_number' => $this->input->post('work_number'),
        'work_date' => $this->input->post('work_date'),
        'sector_name' => $this->input->post('sector_name'),
        'work_title' => $this->input->post('work_title'),
        'pages' => $this->input->post('work_title'),
        'type_page' => $this->input->post('pages'),
        'work_number' => $this->input->post('type_page'),
        'number_of_sheets' => $this->input->post('number_of_sheets'),
        'course_name' => $this->input->post('course_name'),
        'number_of_sets' => $this->input->post('number_of_sets'),
        'person_name' => $this->input->post('person_name'),
        'total_pages' => $this->input->post('total_pages'),
        'total_papers' => $this->input->post('total_papers'),
      );
    $this->db->insert('works', $data);
  }

}
