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
          foreach ($list_work->result() as $row) {
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
          }
        ?>
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <?php
        echo $this->pagination->create_links();
      ?>
    </nav>
  </div>
</div>
