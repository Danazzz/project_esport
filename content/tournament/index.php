<?php include_once('../_include/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tournament</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Admin</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects text-center">
              <thead>
                  <tr>
                      <th style="width: 1%">
                        No.
                      </th>
                      <th style="width: 5%">
                        Tournament ID
                      </th>
                      <th style="width: 10%">
                        Tournament Name
                      </th>
                      <th style="width: 10%">
                      Game
                      </th>
                      <th style="width: 5%">
                        Status
                      </th>
                      <th style="width: 5%">
                        Registered Team
                      </th>
                      <th style="width: 5%">
                        Date
                      </th>
                      <th style="width: 10%">
                        <a href="crud/add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Add new tournament</a>
                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php
                $limit = 7;
                $page = @$_GET['page'];
                if(empty($page)){
                  $position = 0;
                  $page = 1;
                }
                else{
                  $position = ($page - 1) * $limit;
                }
                $no = 1;
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                  $search = trim(mysqli_real_escape_string($con, $_POST['search']));
                  if($search != ''){
                                    $sql = "SELECT * FROM tournament
                                    INNER JOIN game USING (id_game)
                                    WHERE tournament.name LIKE '%$search%'
                                    ORDER BY created_at DESC, updated_at DESC
                    ";
                  
                    $query = $sql;
                    $query_sum = $sql;
                  }else{
                    $query = "SELECT * FROM tournament
                              INNER JOIN game USING (id_game)
                              WHERE tournament.id_game
                              ORDER BY created_at DESC, updated_at DESC
                              LIMIT $position, $limit";
                    $query_sum = "SELECT * FROM tournament";
                    $no = $position + 1;
                  }
                }else{
                  $query = "SELECT * FROM tournament
                            ORDER BY created_at DESC, updated_at DESC
                            LIMIT $position, $limit";
                  $query_sum = "SELECT * FROM tournament";
                  $no = $position + 1;
                }
                
                $sql = mysqli_query($con, $query) or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0){
                  while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['id_tournament']; ?></td>
                      <td><?= $data['name']; ?></td>
                      <td><?= $data['id_game']; ?></td>
                      <td><?= $data['status']; ?></td>
                      <td><?= $data['price']; ?></td>
                      <td><?= indo_date($data['created_at']); ?> <br/>
                        <small>
                          <?= $data['updated_at']; ?>
                        </small>
                      </td>
                      <td class="project-actions text-right">
                        <a href="crud/detail.php?id=<?= $data['id_tournament'] ?>" class="btn btn-primary btn-sm" >
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a href="crud/edit.php?id=<?= $data['id_tournament'] ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a href="crud/delete.php?id=<?= $data['id_tournament'] ?>" onclick="return confirm('Are you sure to delete this user?')" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                      </td>
                    </tr>
                  <?php
                  }
                }else{
                echo "<tr><td colspan=\"7\" align=\"center\">Data tidak ditemukan</td></tr>";
              }
            ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once('../_include/footer.php'); ?>
