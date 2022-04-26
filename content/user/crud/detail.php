<?php include_once('../../_include/header_crud.php');

$id = @$_GET['id'];
$sql = "SELECT user.*, game.*, squad.*, auth.* FROM user, game, squad, auth
WHERE user.id_user = '$id'
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
            <h2>Informasi Akun</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.html">User</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 text-justify">
              <div class="d-flex flex-row justify-content-between">
                <div>                
                  <h4><?= $data['full_name'] ?></h4>
                  <p class="text-muted"><?= $data['id_user'] ?></p>
                  <br>
                  <div class="text-muted">
                    <div class="d-flex flex-row justify-content-between">
                      <div>
                        <p class="text-sm">Username
                          <b class="d-block"><?= $data['username'] ?></b>
                        </p>
                        <p class="text-sm">Email
                          <b class="d-block"><?= $data['email'] ?></b>
                        </p>
                        <p class="text-sm">Role
                          <b class="d-block"><?= $data['role'] ?></b>
                        </p>
                        <p class="text-sm">Gender
                          <b class="d-block">
                            <?php
                            if($data['gender'] == 'L'){?>
                              <b class="d-block">Male</b>
                            <?php 
                            } else if ($data['gender'] == 'P'){?>
                              <b class="d-block">Female</b>
                            <?php
                            }
                            ?>
                          </b>
                        </p>
                      </div>
                      <div>
                        <p class="text-sm">Poin
                          <b class="d-block"><?= $data['poin'] ?></b>
                        </p>
                        <p class="text-sm">Phone Number
                          <b class="d-block"><?= $data['phone_number'] ?></b>
                        </p>
                        <p class="text-sm">Birth of Date
                          <b class="d-block"><?= $data['birth_date'] ?></b>
                        </p>
                        <p class="text-sm">Status
                          <b class="d-block">
                            <?php
                            if($data['status'] == '0'){?>
                              <b class="d-block">Not Activated</b>
                            <?php 
                            } else if ($data['status'] == '1'){?>
                              <b class="d-block">Activated</b>
                            <?php
                            }
                            ?>
                          </b>
                        </p>
                      </div>
                      <div>
                        <p class="text-sm">Signed at
                          <b class="d-block"><?= $data['created_at'] ?></b>
                        </p>
                        <p class="text-sm">Recent Activity
                          <b class="d-block"><?= $data['updated_at'] ?></b>
                        </p>
                        <p class="text-sm">Squad
                          <b class="d-block"><?= $data['name'] ?></b>
                        </p>
                        <p class="text-sm">Games
                          <b class="d-block"><?= $data['game_name'] ?></b> 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <img src="../../../database/img/<?= $data['image'] ?>" alt="" height="150px" style="margin-left:50px">
              </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once('../../_include/footer_crud.php'); ?>