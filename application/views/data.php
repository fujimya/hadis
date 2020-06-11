<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HADIS App</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/LTE/plugins/daterangepicker/daterangepicker.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <b><h1>APLIKASI PENCARIAN HADIS</h1></b>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
       <!--  <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
            <i class="fas fa-th-large"></i>
          </a>
        </li> -->
        

        <!-- SEARCH FORM -->
        <form role="form" class="form-inline ml-3" action="<?php echo base_url(); ?>GetData/filter" method="post">
          <div class="input-group input-group-lg">
            <input class="form-control form-control-navbar" type="search" placeholder="Cari" aria-label="Search">
            
            <div class="input-group input-group-lg">
              
            </div>
          </div>
        </form>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- right column -->
          <div class="col-md-12">
            <!-- general form elements disabled -->
            
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Daftar Hadis</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

                <table  border="2" id="example1" class="display nowrap" width="100%">
                  <thead >
                    <tr >
                      <th>No</th>
                      <!-- <th>Urutan</th> -->
                      <th style="text-align: center;">Arab</th>
                      <th style="text-align: center;">Terjemahan</th>
                      <th>Perawi</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: justify;">
                    <?php $no = $this->uri->segment('3') + 1; foreach ($hadis as $ahm) {?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <!-- <td><?php echo $ahm->NoHdt; ?></td> -->
                        <td ><?php echo $ahm->Isi_Arab; ?></td>
                        <td><?php echo $ahm->Isi_Indonesia; ?></td>
                        <td><?php echo $ahm->Perawi; ?></td>
                      </tr>
                    <?php }?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <!-- <th>Urutan</th> -->
                      <th>Arab</th>
                      <th>Terjemahan</th>
                      <th>Perawi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>




            <nav style="width: 100%; text-align: center;" aria-label="Page navigation">
              <?php echo $this->pagination->create_links(); ?>
            </nav>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.modal -->
  <!-- /.content-wrapper -->
  <footer class="container-fluid">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1-beta
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="">Hadis</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url(); ?>assets/LTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/LTE/dist/js/demo.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
<!-- DataTables -->
<!-- <script src="<?php echo base_url(); ?>assets/LTE/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/LTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script>
   $(document).ready(function() {
    var table = $('#example1').DataTable( {
         // responsive: true,
         "scrollX": true
       } );
  } );
    // table.on( 'draw', function () {
    //     var body = $( table.table().body() );

    //     body.unhighlight();
    //     body.highlight( table.search() );  
    // } );

  } );


</script>

</body>
</html>
