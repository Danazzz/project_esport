<?php include_once('../../_include/header_crud.php'); 

$id = @$_GET['id'];
$sql = "SELECT * FROM tournament
WHERE id_tournament = '$id'";
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
            <h1>Edit Tournament</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.html">Tournament</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="proses.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tournament</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Tournament Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?= $data['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="type" id="free" value="free"> Free
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="type" id="paid" value="paid"> paid
                        </label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="t_regis">Team Registered</label>
                  <input type="t_regis" name="t_regis" id="t_regis" class="form-control">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="status" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="ongoing">On Going</option>
                    <option value="comingsoon">Coming Soon</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="t_mode">Tournament Mode</label>
                  <input type="text" name="t_mode" id="t_mode" class="form-control" value="<?= $data['mode'] ?>">
                </div>
                <div class="form-group">
                    <label for="loc">Location</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="loc" id="online" value="online"> Online
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="loc" id="offline" value="offline"> Offline
                        </label>
                    </div>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" name="city" id="city" class="form-control" value="<?= $data['city'] ?>">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="form-control" value="<?= $data['address'] ?>">
                </div>
                <div class="form-group">
                  <label for="coordinate">Coordinates</label>
                  <input type="text" name="coordinate" id="coordinate" class="form-control" value="<?= $data['coordinates'] ?>">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="price" name="price" id="price" class="form-control" value="<?= $data['price'] ?>">
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" name="date" id="date" class="form-control" value="<?= $data['date'] ?>">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" value="<?= $data['description']?>" placeholder="Add a description..." ></textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label><br>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="startdate">Start Date</label>
                  <input type="date" name="startdate" id="startdate" class="form-control" value="<?= $data['startTime'] ?>">
                </div>
                <div class="form-group">
                  <label for="enddate">End Date</label>
                  <input type="date" name="enddate" id="enddate" class="form-control" value="<?= $data['endTime'] ?>">
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