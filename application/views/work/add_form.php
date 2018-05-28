<div class="container-fluid" style="background-color:#e6e6e6;">
  <div class="row align-items-center">
    <div class="col">
      <h1><?php echo $title_h1; ?></h1>
      <p><?php echo validation_errors(); ?></p>
      <p><?php echo $this->session->flashdata('item'); ?></p>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col">
      <?php
        $data = array(
          'name' => 'form_work_add',
        );
        echo form_open('work/add', $data);
      ?>
        <div class="form-group">
          <?php
            echo form_label('เลขทะเบียนคุม', 'work_number');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'work_number',
              'id'    => 'work_number',
              'placeholder' => 'เลขทะเบียนคุม',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('วันที่', 'work_date');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'work_date',
              'id'    => 'work_date',
              'placeholder' => 'วันที่',
            );
            echo form_input($data);
          ?>
        <!--  <div id="testdate4"></div> -->
        </div>
        <div class="form-group">
          <?php
            echo form_label('ภาควิชา', 'sector_name');
            $data = array(
              'class' => 'form-control',
              'id'    => 'sector_name',
            );
            echo form_dropdown('sector_name', $list_sector, '', $data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('เรื่อง', 'work_title');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'work_title',
              'id'    => 'work_title',
              'placeholder' => 'เรื่อง',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('จำนวนหน้า', 'pages');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'pages',
              'id'    => 'pages',
              'placeholder' => 'จำนวนหน้า',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('ประเภทหน้ากระดาษ', 'type_page');
            $data = array(
              'class' => 'form-control',
              'id'    => 'type_page',
            );
            echo form_dropdown('type_page', $list_type_page, '', $data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('จำนวนแผ่น', 'number_of_sheets');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'number_of_sheets',
              'id'    => 'number_of_sheets',
              'placeholder' => 'จำนวนแผ่น',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('หลักสูตร', 'course_name');
            $data = array(
              'class' => 'form-control',
              'id'    => 'course_name',
            );
            echo form_dropdown('course_name', $list_course, '', $data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('จำนวนชุด', 'number_of_sets');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'number_of_sets',
              'id'    => 'number_of_sets',
              'placeholder' => 'จำนวนชุด',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('ชื่อบุคลากร', 'person_name');
            $data = array(
              'class' => 'form-control',
              'id'    => 'person_name',
            );
            echo form_dropdown('person_name', $list_person, '', $data);
          ?>

        </div>
        <div class="form-group">
          <?php
            echo form_label('จำนวนรวม', 'total_pages');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'total_pages',
              'id'    => 'total_pages',
              'placeholder' => 'จำนวนรวม',
              'readonly' => 'readonly',
              'style' => 'color:red;',
              'onClick' => 'sum_pages();',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('จำนวนกระดาษ', 'total_papers');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'total_papers',
              'id'    => 'total_papers',
              'placeholder' => 'จำนวนกระดาษ',
              'readonly' => 'readonly',
              'style' => 'color:red;',
              'onClick' => 'sum_papers();',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            $data = array(
              'class' => 'btn btn-primary',
              'name' => 'mysubmit',
              'value' => 'บันทึกข้อมูล',
            //  'onClick' => 'myFunction()',
            );
            echo form_submit($data);
            $data = array(
              'class' => 'btn btn-danger',
              'name' => 'myreset',
              'value' => 'ล้างข้อมูล',
            );
            echo form_reset($data);
          ?>
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script src="<?=base_url('assets/js/ninenik.datetimepicker.js')?>" charset="utf-8"></script>
<script src="<?=base_url('assets/js/auto_person_name.js')?>" charset="utf-8"></script>
<script src="<?=base_url('assets/js/sum_works.js')?>" charset="utf-8"></script>
