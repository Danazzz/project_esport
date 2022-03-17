<?php include_once('../_include/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Squad List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Squad</a></li>
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
                    <th style="width: 15%">
                      ID Squad
                    </th>
                    <th style="width: 20%">
                      Name
                    </th>
                    <th style="width: 5%">
                      Registered
                    </th>
                    <th style="width: 30%" class="text-center">
                      Image
                    </th>
                    <th style="width: 20%" class="text-center">
                      <a href="crud/add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Add Squad</a>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i=1;
                    $query = "SELECT * FROM squad";
                      $sql = mysqli_query($con, $query) or die(mysqli_error($con));
                      if(mysqli_num_rows($sql) > 0){
                      while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $data['id_squad']; ?></td>
                      <td><?= $data['name']; ?></td>
                      <td><?= indo_date($data['created_at']); ?> <br/>
                        <small>
                          <?= $data['updated_at']; ?>
                        </small>
                      </td>
                      <td><img src="../../database/img/<?= $data['image'] ?>" width='90' height='110'></td>
                      <td class="project-actions text-right">
                        <a href="crud/detail.php?id=<?= $data['id_squad'] ?>" class="btn btn-primary btn-sm" >
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a href="crud/edit.php?id=<?= $data['id_squad'] ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a href="crud/delete.php?id=<?= $data['id_squad'] ?>" onclick="return confirm('Are you sure you want to delete this Squad?')" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                      </td>
                    </tr>
                  <?php
                  }
                }else{
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