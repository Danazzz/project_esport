<?php include_once('../_include/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Admin List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
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
                <table id="example1" class="table table-bordered table-striped">
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
                      <th style="width: 8%">
                        Status
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
                                    WHERE full_name LIKE '%$search%' AND role = 'admin'
                                    ORDER BY created_at DESC, updated_at DESC";
                      $query = $sql;
                      $query_sum = $sql;
                    }else{
                      $query = "SELECT * FROM user
                                WHERE role = 'admin'
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                      $query_sum = "SELECT * FROM user";
                      $no = $position + 1;
                    }
                    }else{
                      $query = "SELECT * FROM user
                                WHERE role = 'admin'
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
                        <a href="crud/delete.php?id=<?= $data['id_user'] ?>" onclick="return confirm('Are you sure you want to delete this Admin?')" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                      </td>
                    </tr>
                  <?php
                  }
                    }else{
                    echo "<tr><td colspan=\"4\" align=\"center\">Not found</td></tr>";
                  }
                  ?>

                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 1%">No.</th>
                      <th style="width: 20%">ID Number</th>
                      <th style="width: 30%">Name</th>
                      <th>Registered</th>
                      <th style="width: 8%">Status</th>
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
                                    WHERE full_name LIKE '%$search%' AND role = 'admin'
                                    ORDER BY created_at DESC, updated_at DESC";
                      $query = $sql;
                      $query_sum = $sql;
                    }else{
                      $query = "SELECT * FROM user
                                WHERE role = 'admin'
                                ORDER BY created_at DESC, updated_at DESC
                                LIMIT $position, $limit";
                      $query_sum = "SELECT * FROM user";
                      $no = $position + 1;
                    }
                    }else{
                      $query = "SELECT * FROM user
                                WHERE role = 'admin'
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
                        <a href="crud/delete.php?id=<?= $data['id_user'] ?>" onclick="return confirm('Are you sure you want to delete this Admin?')" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                      </td>
                    </tr>
                  <?php
                  }
                    }else{
                    echo "<tr><td colspan=\"4\" align=\"center\">Not found</td></tr>";
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