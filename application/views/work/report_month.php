<div class="container-fluid">
  <div class="row">
    <table class="table table-sm table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>เลขทะเบียนคุม</th>
          <th>วันที่</th>
          <th>ภาควิชา</th>
          <th>เรื่อง</th>
          <th>จำนวนหน้า</th>
          <th>ประเภทหน้ากระดาษ</th>
          <th>จำนวนแผ่น</th>
          <th>หลักสูตร</th>
          <th>จำนวนชุด</th>
          <th>ชือบุคลากร</th>
          <th>จำนวนรวม</th>
          <th>จำนวนกระดาษ</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sum_total_pages = 0;
          $sum_total_papers = 0;

          foreach ($report_month->result() as $row) {
            echo "<tr>";
            echo "<td>".$row->work_number."</td>";
            echo "<td>".$row->work_date."</td>";
            echo "<td>".$row->sector_name."</td>";
            echo "<td>".$row->work_title."</td>";
            echo "<td>".$row->pages."</td>";
            echo "<td>".$row->type_page."</td>";
            echo "<td>".$row->number_of_sheets."</td>";
            echo "<td>".$row->course_name."</td>";
            echo "<td>".$row->number_of_sets."</td>";
            echo "<td>".$row->person_name."</td>";
            echo "<td style='color:red;'>".$row->total_pages."</td>";
            echo "<td style='color:red;'>".$row->total_papers."</td>";
            echo "</tr>";
            $sum_total_pages += $row->total_pages;
            $sum_total_papers += $row->total_papers;
          }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="12" style="color:red;"><?php echo "รวมกระดาษทั้งหมด : ".$sum_total_papers." แผ่น"; ?></td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
