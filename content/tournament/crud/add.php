<?php include_once('../../_include/header_crud.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Tournament</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.html">User</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="proses.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-6">
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
                  <input type="text" name="name" id="name" class="form-control" placeholder="PMGC Season 0" required>
                </div>
                <div class="form-group">
                  <label for="game">Game</label>
                  <select name="game" id="game" class="form-control custom-select" required>
                    <option selected disabled>Select one</option>
                    <option value="">Mobile Legends : Bang Bang</option>
                    <option value="closed">PUBG Mobile</option>
                    <option value="closed">Valorant</option>
                    <option value="closed">Free Fire</option>
                    <option value="closed">Arena of Valor</option>
                    <option value="closed">League of Legends : Wild Rift</option>
                    <option value="closed">Apex Legends Mobile</option>
                    <option value="closed">Call of Duty Mobile</option>
                    <option value="closed">Lokapala</option>
                    <option value="closed">Pro Evolution Soccer</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="type">Type</label>
                  <select name="type" id="type" class="form-control custom-select" required>
                    <option selected disabled>Select one</option>
                    <option value="open">Free</option>
                    <option value="closed">Paid</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="t_regis">Team Registered</label>
                  <input type="t_regis" name="t_regis" id="t_regis" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select name="status" id="status" class="form-control custom-select" required>
                    <option selected disabled>Select one</option>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="ongoing">On Going</option>
                    <option value="comingsoon">Coming Soon</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="t_mode">Tournament Mode</label>
                  <input type="text" name="t_mode" id="t_mode" class="form-control" placeholder="Single Elimination" required>
                </div>
                <div class="form-group">
                  <label for="loc">Location</label>
                  <select name="loc" id="loc" class="form-control custom-select" required>
                    <option selected disabled>Select one</option>
                    <option value="open">Offline</option>
                    <option value="closed">Online</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="coordinate">Coordinates</label>
                  <input type="text" name="coordinate" id="coordinate" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="price" name="price" id="price" class="form-control" placeholder="xxx.xxx.xxx" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Add a description..."></textarea>
                </div>
                <div class="form-group">
                  <label for="image">Image</label><br>
                  <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                  <label for="date">Date</label>
                  <input type="date" name="date" id="date" class="form-control" required>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          
        </div>
        <div class="row">
          <div class="col-12">
            <a href=../index.html class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Add Tournament"class="btn btn-success float-right">
          </div>
        </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include_once('../../_include/footer_crud.php'); ?>