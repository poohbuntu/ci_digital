<!DOCTYPE html>
<html>
  <head lang="th">
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/jquery.datetimepicker.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/select2.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/select2-bootstrap.min.css')?>">

    <script src="<?=base_url('assets/js/jquery-3.min.js')?>" charset="utf-8"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>" charset="utf-8"></script>
    <script src="<?=base_url('assets/js/jquery.datetimepicker.full.min.js')?>" charset="utf-8"></script>
    <script src="<?=base_url('assets/js/select2.min.js')?>" charset="utf-8"></script>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?=base_url('work/index');?>">งานดิจิตอล</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=base_url('work/index');?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('work/add');?>">บันทึกงาน</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('work/report_month');?>">รายงานตามเดือน</a>
          </li>
        </ul>
      </div>
    </nav>
