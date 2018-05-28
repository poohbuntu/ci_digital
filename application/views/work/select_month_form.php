<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h1><?php echo $title_h1; ?></h1>
      <p><?php echo validation_errors(); ?></p>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php
        $data = array(
          'name' => 'form_work_add',
        );
        echo form_open('work/report_month', $data);
      ?>
        <div class="form-group">
          <?php
            echo form_label('วันทีเริ่ม', 'work_date_start');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'work_date_start',
              'id'    => 'work_date_start',
              'placeholder' => 'วันทีเริ่ม',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            echo form_label('วันที่สุดท้าย', 'work_date_end');
            $data = array(
              'type'  => 'text',
              'class' => 'form-control',
              'name'  => 'work_date_end',
              'id'    => 'work_date_end',
              'placeholder' => 'วันที่สุดท้าย',
            );
            echo form_input($data);
          ?>
        </div>
        <div class="form-group">
          <?php
            $data = array(
              'class' => 'btn btn-primary',
              'name' => 'mysubmit',
              'value' => 'ค้นหา',
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

<script src="<?=base_url('assets/js/ninenik.datetimepicker3.js')?>" charset="utf-8"></script>
