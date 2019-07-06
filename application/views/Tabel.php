<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BROTH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url(); ?>Admin/tabel" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BRT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BROTH</b></span>
    </a>
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
              <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">ADMIN</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Facebook</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Twitter</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Instagram</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo site_url(); ?>Admin/logout" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ADMIN</p>
          <a href="<?php echo site_url(); ?>Admin/tabel"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="active">
          <a href="<?php echo site_url(); ?>Admin/tabel">
            <i class="fa fa-table"></i> <span>Data</span>

          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
      </h1>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo site_url(); ?>Admin/form"><button type="button" class="btn btn-block btn-info btn-lg"> Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor Nota</th>
                  <th>Tanggal Masuk</th>
                  <th>Status</th>
                  <th>Ubah</th>
                  <th>Hapus</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                  function tgl_ind($tanggal){
                     $bulan = array (
                      1 =>   'Januari',
                      'Februari',
                      'Maret',
                      'April',
                      'Mei',
                      'Juni',
                      'Juli',
                      'Agustus',
                      'September',
                      'Oktober',
                      'November',
                      'Desember' );
                      $pecahkan = explode(',', $tanggal);
                      return $pecahkan[0] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
                      }
                                  foreach ($data as $data):
                                    $nota = $data['nota'];
                                    $tanggal_masuk = $data['tanggal_masuk'];
                                    $bulan_masuk = $data['bulan_masuk'];
                                    $tahun_masuk = $data['tahun_masuk'];
                                    $status = $data['status'];


                  ?>
                  <tr data-id='<?php echo $nota ?>'>
                   <td><span class='span-nota caption' data-id='<?php echo $nota; ?>'><?php echo $nota; ?></span> </td>
                   <td><span class='span-waktu_masuk caption' data-id='<?php echo $nota; ?>'><?php
                   echo tgl_ind($tanggal_masuk.','.$bulan_masuk.','.$tahun_masuk); ?>
                 </span>
               </td>
                   <td>
                     <?php
                            if ($status == 0): ?>
                            <button class='btn btn-xs btn-danger' data-id='<?php echo $nota; ?>'><i class='fa fa-fw fa-times-circle'></i> Belum Selesai</button>
                            <?php else: ?>
                              <button class='btn btn-xs btn-success' data-id='<?php echo $nota; ?>'><i class='fa fa-fw fa-check-circle'></i> Sudah Selesai</button>
                            <?php endif; ?>
                   </td>
                   <td><button class='btn btn-xs btn-default' data-id='<?php echo $nota; ?>' data-toggle='modal' data-target='.modal-ubah-<?php echo $nota; ?>'><i class='fa fa-fw fa-exchange'></i> Ubah Status</button>
                   </td>
                 </td>
                 <td><button class='btn btn-xs btn-danger' data-id='<?php echo $nota; ?>' data-toggle='modal' data-target='.modal-hapus-<?php echo $nota; ?>'><i class='fa fa-fw fa-trash'></i> Hapus Nota</button>
                 </td>

                   <div class='modal modal-success fade modal-ubah-<?php echo $nota; ?>' tabindex='-1' role='dialog' aria-hidden='true'>
                     <div class='modal-dialog modal-sm'>
                     <form method='post' action='ubah_status'>
                       <div class='modal-content'>
                         <div class='modal-header'>
                           <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                           </button>
                           <h4 class='modal-title' id='myModalLabel2'>Ubah Status Barang</h4>
                         </div>
                         <div class='modal-body'>
                         <label>Nota</label>
                         <input type='text' name='nota' id='nota' class='form-control' value=<?php echo $nota; ?> readonly>
                         </div>
                         <div class='modal-footer'>
                              <input type='hidden' name='user_id' id='user_id' />
                              <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                              <input type='submit' name='action' id='action' class='btn btn-danger' value='Ubah' />
                         </div>
                       </div>
                       </form>
                     </div>
                   </div>
                   <div id="modal" class="modal fade" tabindex='-1' role='dialog' aria-hidden='true' data-backdrop='static' data-keyboard='false'>
                     <div class='modal-dialog modal-sm'>
                       <form method='post' action='tabel'>
                       <div class='modal-content'>
                         <div class='modal-header'>
                           <h4 class='modal-title'>Pesan</h4>
                         </div>
                         <div class='modal-body'>
                         <label>Data Nota Sudah Ada Goblok !</label>
                         </div>
                         <div class='modal-footer'>
                              <input type='submit' name='action' id='action' class='btn btn-danger' value='OK' />
                         </div>
                       </div>
                      </form>
                     </div>
                   </div>
                   <div id="berhasil" class='modal fade' tabindex='-1' role='dialog' aria-hidden='true' data-backdrop='static' data-keyboard='false'>
                     <div class='modal-dialog modal-sm'>
                       <form method='post' action='tabel'>
                       <div class='modal-content'>
                         <div class='modal-header'>
                           <h4 class='modal-title'>Pesan</h4>
                         </div>
                         <div class='modal-body'>
                         <label>Data Nota Berhasil Dimasukkan Terima Kasih !</label>
                         </div>
                         <div class='modal-footer'>
                              <input type='submit' name='action' id='action' class='btn btn-success' value='OK' />
                         </div>
                       </div>
                      </form>
                     </div>
                   </div>

                   <div id="modal-tambah" class='modal fade' tabindex='-1' role='dialog' aria-hidden='true'>
                     <div class='modal-dialog modal-sm'>
                       <form method='post' action='tambah'>
                       <div class='modal-content'>
                         <div class='modal-header'>
                           <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                           </button>
                           <h4 class='modal-title'>Tambah Nota Transaksi</h4>
                         </div>
                         <div class='modal-body'>
                           <label>Nomor Nota</label>
                           <input type="text" name="nota" id="nota" class="form-control" onkeypress="isInputChar(event)"
                           required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong !')" oninput="setCustomValidity('')">
                         </div>
                         <div class='modal-footer'>
                           <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                           <input type='submit' name='action' id='action' class='btn btn-success' value='Submit' />
                         </div>
                       </div>
                      </form>
                     </div>
                   </div>

                   <div class='modal fade modal-danger modal-hapus-<?php echo $nota; ?>' tabindex='-1' role='dialog' aria-hidden='true'>
                     <div class='modal-dialog modal-sm'>
                     <form method='post' action='hapus_nota'>
                       <div class='modal-content'>
                         <div class='modal-header'>
                           <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
                           </button>
                           <h4 class='modal-title' id='myModalLabel2'>Hapus Nota</h4>
                         </div>
                         <div class='modal-body'>
                         <label>Nota</label>
                         <input type='text' name='nota' id='nota' class='form-control' value=<?php echo $nota; ?> readonly>
                         </div>
                         <div class='modal-footer'>
                              <input type='hidden' name='user_id' id='user_id' />
                              <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                              <input type='submit' name='action' id='action' class='btn btn-success' value='Hapus' />
                         </div>
                       </div>
                       </form>
                     </div>
                   </div>
                   </tr>
<?php endforeach;?>

<?php
if(isset($_GET['pesan'])){
if($_GET['pesan'] == "sudahada"){
echo "<script type='text/javascript'>$(window).load(function(){
$('.modal-sudahada').modal('show');
});</script>";
}else if($_GET['pesan'] == "berhasil"){
echo "<script type='text/javascript'>$(window).load(function(){
$('#modal-berhasil').modal('show');
});</script>";
}
}
?>

                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor Nota</th>
                  <th>Tanggal Masuk</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
