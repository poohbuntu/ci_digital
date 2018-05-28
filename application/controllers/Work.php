<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller{

  var $per_page = 5;

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Works_model');
    $this->load->model('Sectors_model');
    $this->load->model('Type_pages_model');
    $this->load->model('Courses_model');
    $this->load->model('Persons_model');

    $config['base_url'] = base_url().'work/page';
    $config['total_rows'] = $this->db->count_all('works');
    $config['per_page'] = $this->per_page;
    $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item">';
    $config['cur_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);
  }

  function index()
  {
    $data['title'] = "งานดิจิตอล";
    //$data['title_h1'] = "งานดิจิตอล";

    $data['list_work'] = $this->db->get('works', $this->per_page, 0);

    $this->load->view('templates/header', $data);
    $this->load->view('work/index', $data);
    $this->load->view('templates/footer');
  }

  public function page()
  {
    $data['title'] = "งานดิจิตอล";

    if ($this->uri->segment(3)) {
      $page = $this->uri->segment(3);
    }
    else {
      $page = 0;
    }
    $data['list_work'] = $this->db->get('works', $this->per_page, $page);

    $this->load->view('templates/header', $data);
    $this->load->view('work/index', $data);
    $this->load->view('templates/footer');
  }

  public function add()
  {
    $data['title'] = "งานดิจิตอล";
    $data['title_h1'] = "บันทึกงานดิจิตอล";

    $this->form_validation->set_rules('work_number', 'เลขทะเบียนคุม', 'required');
    $this->form_validation->set_rules('work_date', 'วันที่', 'required');
    $this->form_validation->set_rules('sector_name', 'ภาควิชา', 'required');
    $this->form_validation->set_rules('work_title', 'เรื่อง', 'required');
    $this->form_validation->set_rules('pages', 'จำนวนหน้า', 'required');
    $this->form_validation->set_rules('type_page', 'ประเภทหน้ากระดาษ', 'required');
    $this->form_validation->set_rules('number_of_sheets', 'จำนวนแผ่น', 'required');
    $this->form_validation->set_rules('course_name', 'หลักสูตร', 'required');
    $this->form_validation->set_rules('number_of_sets', 'จำนวนชุด', 'required');
    $this->form_validation->set_rules('person_name', 'ชือบุคลากร', 'required');
    $this->form_validation->set_rules('total_pages', 'จำนวนรวม', 'required');
    $this->form_validation->set_rules('total_papers', 'จำนวนกระดาษ', 'required');

    $data['list_sector'] = $this->Sectors_model->list_sector();
    $data['list_type_page'] = $this->Type_pages_model->list_type_page();
    $data['list_course'] = $this->Courses_model->list_course();
    $data['list_person'] = $this->Persons_model->list_person();

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('work/add_form', $data);
      $this->load->view('templates/footer');
    }
    else {
      $this->Works_model->add();
      $this->session->set_flashdata('item', 'บันทึกข้อมูลสำเร็จ');
      redirect('work/add');
    }
  }

  public function report_month()
  {
    $data['title'] = "งานดิจิตอล";
    $data['title_h1'] = "รายงานดิจิตอล";

    $this->form_validation->set_rules('work_date_start', 'วันทีเริ่ม', 'required');
    $this->form_validation->set_rules('work_date_end', 'วันที่สุดท้าย', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('work/select_month_form', $data);
      $this->load->view('templates/footer');
    }
    else {
      $work_date_start = $this->input->post('work_date_start');
      $work_date_end = $this->input->post('work_date_end');

      $this->db->select();
      $this->db->from('works');
      $this->db->where('work_date >=', $work_date_start);
      $this->db->where('work_date <=', $work_date_end);
      $this->db->order_by('work_date');
      $data['report_month'] = $this->db->get();

      $this->load->view('templates/header', $data);
      $this->load->view('work/select_month_form', $data);
      $this->load->view('work/report_month', $data);
      $this->load->view('templates/footer');
    }
  }
}
