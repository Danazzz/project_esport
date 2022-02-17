<?php include_once('../../_include/header_crud.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.html">User</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      $id = @$_GET['id'];
      $sql = "SELECT * FROM user 
      INNER JOIN login ON user.id_user = login.id_user 
      WHERE user.id_user = '$id'
      ";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      // var_dump($data);die;
      ?>
      <form action="proses.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="full_name">Full Name</label>
                  <input type="text" name="full_name" id="full_name" class="form-control" value="<?= $data['full_name'] ?>">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="tel" id="phone" name="phone" pattern="[0-9]{12}" class="form-control" value="<?= $data['phone_number'] ?>" placeholder="+62">
                </div>
                <div class="form-group">
                  <label for="birth_date">Birth of Date</label>
                  <input type="date" name="birth_date" id="birth_date" class="form-control" value="<?= $data['birth_date'] ?>">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="L" value="L" required=""> Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="P" value="P"> Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="status" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                    <option value="organizer">Organizer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 mx-auto">
                  <input type="submit" name="edit" value="Save Changes" class="btn btn-success">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-3">
            <a href="../index.html" class="btn btn-secondary float-right">Cancel</a>
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once('../../_include/footer_crud.php'); ?>