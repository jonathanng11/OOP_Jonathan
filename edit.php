<?php

require_once 'Config/koneksi.php';
require_once 'App/classSiswa.php';

$edit = new crud();

$id = $_GET['id'];
if (! is_null($id)) {
  $data = $edit->edit($id);
}else{
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="Assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Assets/plugins/summernote/summernote-bs4.min.css">
</head>
<?php include ("Assets/header.php"); ?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
           

              <form action="Route/route.php?aksi=update" method="POST">

                <div class="card-body">

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $data['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="id_kelas">Kelas</label>
                    <select name="kode_kelas" id="id_kelas" class="form-control">
                      <?php
                     foreach ($edit->tampil_kelas() as $data) {

                     ?>
                     <option value="<?php echo $data['nama_kelas  '] ?>" class="dropdown-item"><?php echo $data['nama_kelas'] ?></option>

                   <?php } ?>
                    </select>
                  </div>
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>


 <?php include ("Assets/footer.php"); ?>
<!-- jQuery -->
<script src="Assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="Assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="Assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="Assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="Assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="Assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="Assets/plugins/moment/moment.min.js"></script>
<script src="Assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="Assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="Assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="Assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="Assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Assets/Assets/dist/js/pages/dashboard.js"></script>
</body>




<?php 

include ("Assets/sidebar.php");

 ?>

