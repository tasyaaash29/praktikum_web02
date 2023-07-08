
<?php 

require_once 'header.php';
require_once 'sidebar.php';

// Buat Array asosiatif nilai
$nilai1 = ["id"=>1, "nim"=>"01101", "uts"=>89, "uas"=>84, "tugas"=>78];
$nilai2 = ["id"=>2, "nim"=>"01102", "uts"=>84, "uas"=>88, "tugas"=>78];
$nilai3 = ["id"=>3, "nim"=>"01103", "uts"=>99, "uas"=>80, "tugas"=>84];
$nilai4 = ["id"=>4, "nim"=>"01104", "uts"=>60, "uas"=>99, "tugas"=>80];

// Buat Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];


?>

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      <div class="container">
        <h1 class="text-center"> Daftar Nilai Siswa </h1>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach ($kumpulan_nilai as $nilai): ?>
    
        <tr>
            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3;?>
            <td><?= $nilai["id"]?></td>
            <td><?= $nilai["nim"]?></td>
            <td><?= $nilai["uts"]?></td>
            <td><?= $nilai["uas"]?></td>
            <td><?= $nilai["tugas"]?></td>
            <td><?= number_format($nilai_akhir, 2, ",", ".") ?></td>

        
        </tr>
    
    <?php endforeach; ?>
</table>
</div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 
require_once 'footer.php';  
?>

  