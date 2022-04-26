<?php include_once('../../_include/header_crud.php');

$id = @$_GET['id'];
$sql = "SELECT * FROM squad
WHERE id_squad = '$id'
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
          <h1>Edit Squad</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../index.html">Squad</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <form action="proses.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="hidden" name="oldimage" value="<?= $data['image'] ?>">
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
                <input type="text" name="name" id="name" class="form-control" value="<?= $data['name'] ?>">
              </div>
              <div class="form-group">
                <label for="game">Game</label>
                <select name="game" id="game" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="62108a45e522d">Valorant</option>
                  <option value="96441d2c-908d-11ec-962f-00d861e392f3">Mobile Legends Bang Bang</option>
                </select>
              </div>
              <div class="form-group">
                <label for="description">Squad Description</label>
                <textarea name="description" id="description" class="form-control"><?= $data['s_description'] ?>"</textarea>
              </div>
              <div class="form-group">
                <label for="image">Squad Image</label>
                <input type="file" name="image" class="form-control">
              </div>
              <div style="height: 0; margin: 1rem 0; overflow: hidden; border-top: 1px solid #8c8e91;"></div>
              <div class="form-group">
                <label for="name">Leader</label>
                <input type="text" name="leader" id="leader" class="form-control" value="<?= $data['leader'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 1</label>
                <input type="text" name="member1" id="member1" class="form-control" value="<?= $data['member1'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 2</label>
                <input type="text" name="member2" id="member2" class="form-control" value="<?= $data['member2'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 3</label>
                <input type="text" name="member3" id="member3" class="form-control" value="<?= $data['member3'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 4</label>
                <input type="text" name="member4" id="member4" class="form-control" value="<?= $data['member4'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 5</label>
                <input type="text" name="member5" id="member5" class="form-control" value="<?= $data['member5'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 6</label>
                <input type="text" name="member6" id="member6" class="form-control" value="<?= $data['member6'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 7</label>
                <input type="text" name="member7" id="member7" class="form-control" value="<?= $data['member7'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 8</label>
                <input type="text" name="member8" id="member8" class="form-control" value="<?= $data['member8'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Member 9</label>
                <input type="text" name="member9" id="member9" class="form-control" value="<?= $data['member9'] ?>">
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