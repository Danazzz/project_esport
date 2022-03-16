<?php include_once('../../_include/header_crud.php');

$id = @$_GET['id'];
$sql = "SELECT tournament.*, game.*, tournament_rules.*, tournament_schedule.* FROM tournament, game, tournament_rules, tournament_schedule
WHERE id_tournament = '$id'
";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <strong>Id Tournament:</strong>
          <h1 class="text-primary"><?= $data['id_tournament']; ?></h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.html">Tournament</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
        <div class="col-12">
          <td><?= $data['image'];">"?></td>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item col-md-2">
                    <a class="nav-link active text-center" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Overview</a>
                  </li>
                  <li class="nav-item col-md-2">
                    <a class="nav-link text-center" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Jadwal</a>
                  </li>
                  <li class="nav-item col-md-2">
                    <a class="nav-link text-center" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Peraturan</a>
                  </li>
                  <li class="nav-item col-md-2">
                    <a class="nav-link text-center" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Bracket</a>
                  </li>
                  <li class="nav-item col-md-2">
                    <a class="nav-link text-center" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">Team Registered</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <small>Penyelenggara</small> <br>
                    Nimo TV <br><br>
                    <small>Komunitas</small> <br>
                    GarudaKu <br><br>
                    <small>Mode Turnamen</small> <br>
                    <td><?= $data['mode']; ?><br><br> 
                    <small>Lokasi</small> <br>
                    <td><?= $data['location']; ?></td><br><br>
                    <small>Tim Terdaftar</small> <br>
                    <?= $data['id_registeam']; ?><sup>/5</sup><br><br>
                    <small>Biaya Pendaftaran</small> <br>
                    <td><?= $data['regis_fee']; ?></td><br><br>
                    <small>Total Hadiah</small> <br>
                    <td><?= $data['price']; ?></td><br><br>
                    <small>Deskripsi</small> <br>
                    <td><?= $data['description']; ?></td>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                    <small>Pendaftaran Dibuka</small> <br>
                    <td><?= $data['registration']; ?></td><br><br>
                    <small>Rapat Teknis</small> <br>
                    <td><?= $data['technical_meeting']; ?></td><br><br>
                    <small>Turnamen Dimulai</small> <br>
                    <td><?= $data['start']; ?></td>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                    <small>Mode Turnamen</small> <br>
                    <td><?= $data['mode']; ?><br><br>
                    <small>Sistem Pertandingan</small> <br>
                    <td><?= $data['match_system']; ?><br><br>
                    <small>Persyaratan Tim</small> <br>
                    <td><?= $data['requirements']; ?><br><br>
                    <small>Perangkat dan Sinyal</small> <br>
                    <td><?= $data['device']; ?><br><br>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                    <!-- Bracket on detail -->
                    <link rel="stylesheet" href="../../bracket.js">
                    <div id="add" class="metroBtn">Add Bracket</div>
                    <div id="clear" class="metroBtn">Clear</div>
                    <div class="brackets" id="brackets"></div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about-tab">
                    <h2 style: text-center>Tim yang Terdaftar</h2>
                  </div>
                </div>
              </div>
              <!-- /.card body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.card header -->
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('../../_include/footer_crud.php'); ?>