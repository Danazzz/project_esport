<?php include_once('../_include/header.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>User List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">User</a></li>
            <li class="breadcrumb-item active">List</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
              <th style="width: 1%">
                No.
              </th>
              <th style="width: 20%">
                ID Number
              </th>
              <th style="width: 30%">
                Name
              </th>
              <th>
                Registered
              </th>
              <th style="width: 8%" class="text-center">
                Status
              </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $limit = 7;
            $page = @$_GET['page'];
            if (empty($page)) {
              $position = 0;
              $page = 1;
            } else {
              $position = ($page - 1) * $limit;
            }
            $no = 1;
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
              $search = trim(mysqli_real_escape_string($con, $_POST['search']));
              if ($search != '') {
                $sql = "SELECT * FROM user
                                    WHERE full_name LIKE '%$search%' AND role = 'user'
                                    ORDER BY created_at DESC, updated_at DESC
                    ";
                $query = $sql;
                $query_sum = $sql;
              } else {
                $query = "SELECT * FROM user
                                    WHERE role = 'user'
                                    ORDER BY created_at DESC, updated_at DESC
                                    LIMIT $position, $limit";
                $query_sum = "SELECT * FROM user";
                $no = $position + 1;
              }
            } else {
              $query = "SELECT * FROM user
                                WHERE role = 'user'
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
              $query_sum = "SELECT * FROM user";
              $no = $position + 1;
            }

            $sql = mysqli_query($con, $query) or die(mysqli_error($con));
            if (mysqli_num_rows($sql) > 0) {
              while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $data['id_user']; ?></td>
                  <td><?= $data['full_name']; ?></td>
                  <td><?= indo_date($data['created_at']); ?> <br />
                    <small>
                      <?= $data['updated_at']; ?>
                    </small>
                  </td>
                  <td class="text-center"><?= $data['status'] ?></td>
                  <td class="project-actions text-right">
                    <a href="crud/detail.php?id=<?= $data['id_user'] ?>" class="btn btn-primary btn-sm">
                      <i class="fas fa-folder">
                      </i>
                      View
                    </a>
                    <a href="crud/edit.php?id=<?= $data['id_user'] ?>" class="btn btn-info btn-sm">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a href="crud/delete.php?id=<?= $data['id_user'] ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<tr><td colspan=\"4\" align=\"center\">Not found!</td></tr>";
            }
            ?>                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('../_include/footer.php'); ?>