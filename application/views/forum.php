<div class="container" id="forum">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Forum Diskusi</h3>
    </div>
    <div class="panel-body">
      <table class="forum" style="width:900px;" align="center">
        <tr>
          <th class="forum-th" style="width:350px;">Judul Diskusi</th>
          <th class="forum-th" style="width:200px;">Dimulai Oleh</th>
          <th class="forum-th" style="width:150px;">Jumlah Balasan</th>
          <th class="forum-th">Balasan Terakhir</th>
        </tr>
      <?php
foreach ($threadlist as $row){
  echo "<tr>";
  echo "<td>";
  echo '<a href="'.site_url('/forum/'.$row['IdThread']).'">'.$row['JudulThread']."</a>";
  echo "</td>";
  echo "<td>";
  echo $row['starter'];
  echo "</td>";
  echo "<td>";
  echo $row['jumlahbalasan'];
  echo "</td>";
  echo "<td>";
  echo $row['balasanterakhir'];
  echo "</td>";
  echo "</tr>";
}
      ?>
      </table>
      <table>
        <tr>
          <td><ul></ul></td>
        </tr>
        <tr>
          <td><ul></ul></td>
          <td><ul></ul></td>
          <td>
            <ul></ul>
            <?php $logged = $this->session->userdata('idAnggotaTLPI');
            if($logged!=false){echo '
            <form action="#">
              <a class="btn btn-default" href="';
              echo site_url('/forum/newThread');
              echo'" role="button">Buat Thread</a>
            </form>';}
            ?>
          </td>
          <td><ul></ul></td>
        </tr>
        <tr>
          <td><ul></ul></td>
          <td><ul></ul></td>
          <td>
            <ul class="pagination">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </td>
        </tr>
      </table>
    </div>
  </div> <!-- /container -->
