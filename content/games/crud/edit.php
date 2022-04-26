<?php include_once('../../_include/header_crud.php'); 

$id = @$_GET['id'];
$sql = "SELECT * FROM game
WHERE id_game = '$id'
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
            <h1>Edit Game</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.html">Game</a></li>
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
        <input type="hidden" name="oldimage" value="<?= $image ?>">
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
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?= $data['game_name'] ?>">
                </div>
                <div class="form-group">
                  <label for="image">Change Image</label>
                  <input type="file" id="image" name="image" class="form-control">
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