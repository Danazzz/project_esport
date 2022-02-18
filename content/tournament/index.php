<?php include_once('../_include/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
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
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                        No.
                      </th>
                      <th style="width: 20%">
                        ID Number
                      </th>
                      <th style="width: 30%">
                        Nama
                      </th>
                      <th>
                        Registered
                      </th>
                      <th style="width: 8%" class="text-center">
                        Status
                      </th>
                      <th style="width: 20%" class="text-center">
                        <a href="crud/add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Add new user</a>
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
                                    $sql = "SELECT * FROM user
                                    WHERE name = '%$search%'
                                    ORDER BY created_at DESC, updated_at DESC
                    ";
                    $query = $sql;
                    $query_sum = $sql;
                  }else{
                    $query = "SELECT * FROM user
                                    ORDER BY created_at DESC, updated_at DESC
                                    LIMIT $position, $limit";
                    $query_sum = "SELECT * FROM user";
                    $no = $position + 1;
                  }
                }else{
                  $query = "SELECT * FROM user
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                  $query_sum = "SELECT * FROM user";
                  $no = $position + 1;
                }
                
                $sql = mysqli_query($con, $query) or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0){
                  while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['id_user']; ?></td>
                      <td><?= $data['full_name']; ?></td>
                      <td><?= indo_date($data['created_at']); ?> <br/>
                        <small>
                          <?= $data['updated_at']; ?>
                        </small>
                      </td>
                      <td class="text-center"><?= $data['status'] ?></td>
                      <td class="project-actions text-right">
                        <a href="crud/detail.php?id=<?= $data['id_user'] ?>" class="btn btn-primary btn-sm" >
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a href="crud/edit.php?id=<?= $data['id_user'] ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a href="crud/delete.php?id=<?= $data['id_user'] ?>" onclick="return confirm('Are you sure to delete this user?')" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                      </td>
                    </tr>
                  <?php
                  }
                }else{
                echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
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
