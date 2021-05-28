<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.18/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- ckeditor -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.1/ckeditor.js" type="text/javascript"></script>
  <!-- <script src="<?php echo base_url() ?>assets/ckeditor/samples/js/sample.js" type="text/javascript"></script> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- HEADER -->
<header class="main-header">
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://i.imgur.com/ttSDdPY.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username'] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username'] ?> - <?php echo $this->session->userdata('akses_level'); ?>
                  <small><?php echo date('d M Y'); ?></small>
                </p>
              </li>
              
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('login/logout') ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

<!-- NAVBAR -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">

<!-- FORM TAMBAH -->
<?php
// Error upload
if(isset($error)) {
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}
// Notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// Form open
echo form_open_multipart(site_url('kendaraan/updateKendaraan/'.$kendaraan['noPlat']), ' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
  <label class="col-md-2 control-label">No Plat</label>
  <div class="col-md-5">
    <input type="text" name="noPlat" class="form-control" placeholder="<?= $kendaraan['noPlat'] ?>" value="<?php echo set_value('noPlat') ?>" readonly>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Merek Kendaraan</label>
  <div class="col-md-5">
    <input type="text" name="merekKendaraan" class="form-control" placeholder="<?= $kendaraan['merekKendaraan'] ?>" value="<?php echo set_value('merekKendaraan') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Jenis Kendaraan</label>
  <div class="col-md-5">
    <input type="text" name="jenisKendaraan" class="form-control" placeholder="<?= $kendaraan['jenisKendaraan'] ?>" value="<?php echo set_value('jenisKendaraan') ?>" required>   
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Warna Kendaraan</label>
  <div class="col-md-5">
    <input type="text" name="warnaKendaraan" class="form-control" placeholder="<?= $kendaraan['warnaKendaraan'] ?>" value="<?php echo set_value('warnaKendaraan') ?>" required>   
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Biaya Standar</label>
  <div class="col-md-5">
    <input type="number" name="biayaStandar" class="form-control" placeholder="<?= $kendaraan['biayaStandar'] ?>" value="<?php echo set_value('biayaStandar') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Durasi Tersedia</label>
  <div class="col-md-5">
    <input type="number" name="durasi" class="form-control" placeholder="<?= $kendaraan['durasi'] ?>" value="<?php echo set_value('durasi') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label">Stok</label>
  <div class="col-md-5">
    <input type="number" name="stok" class="form-control" placeholder="<?= $kendaraan['stok'] ?>" value="<?php echo set_value('stok') ?>" required>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label"></label>
  <div class="col-md-5">
    <button class="btn btn-success btn-lg" name="submit" type="submit">
    	<i class="fa fa-save"></i> Simpan
    </button>
    <button class="btn btn-info btn-lg" name="reset" type="reset">
    	<i class="fa fa-times"></i> Reset
    </button>
  </div>
</div>

<?php echo form_close(); ?>