<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
  <meta name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
  <meta name="robots" content="noindex,nofollow">
  <title>Sistem Inventori</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'/assets/images/favicon.png'?>">
  <!-- Select2 -->
  <link href="<?php echo base_url().'assets/select2/css/select2.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'assets/select2/css/select2.css'?>" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'/assets/extra-libs/multicheck/multicheck.css'?>">
  <link href="<?php echo base_url().'/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'/assets/dist/css/style.min.css'?>" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">

          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="index.html">
            <!-- Logo icon -->
            <b class="logo-icon ps-2">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <img src="<?php echo base_url().'/assets/images/logo-icon.png'?>" alt="homepage" class="light-logo" />

            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text -->
              <img src="<?php echo base_url().'/assets/images/logo-text.png'?>" alt="homepage" class="light-logo" />

            </span>
            <!-- Logo icon -->
            <!-- <b class="logo-icon"> -->
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <!-- <img src="../../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

            <!-- </b> -->
            <!--End Logo icon -->
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
            <!-- ============================================================== -->
            <!-- create new -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                  class="ti-search"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i
                    class="ti-close"></i></a>
              </form>
            </li> -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <?php $this->load->view('menu/profile-bar') ?>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <?php $this->load->view('menu/sidebar') ?>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- <div class="page-breadcrumb">
        <div class="row">
          <div class="col-12 d-flex no-block align-items-center">
            <div class="ms-auto text-end">
              <div class="col-12 d-flex">
              </div>
            </div>
          </div>
        </div>
        <div class="alert alert-success" role="alert">
          A simple success alert—check it out!
        </div>
      </div> -->
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <?php $this->load->view('menu/alert'); ?>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <form action="<?php echo base_url().'admin/produk/barang_keluar/addCart'?>" method="post">
                    <table>
                      <tr>
                        <th>Tanggal</th>
                      </tr>
                      <tr>
                        <th>
                          <input class="form-control" value="<?php echo date('Y-m-d') ?>" type="date"
                            name="tanggal" id="tanggal" style="width: 180px;" readonly required>
                        </th>
                        <th></th>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <th>Kode Barang</th>
                      </tr>
                      <tr>
                        <th>
                        <select class="form-control" style="width:180px;" name="kode_brg" id="kode_brg">
                        <option value="" selected disabled> - Pilih Barang -</option>
                        <?php foreach($getData->result_array() as $i): ?>
                          <option value="<?php echo $i['barang_id'] ?>"><?php echo $i['barang_id'] ?> - <?php echo $i['barang_nama'] ?></option>
                        <?php endforeach ?>
                        </select>
                        </th>
                      </tr>
                      <div id="detail_barang" style="position:absolute;">
                      </div>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Cart Items -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th style="text-align:center;">Satuan</th>
                        <!-- <th>Kategori</th> -->
                        <th style="text-align:center;">Jumlah</th>
                        <th style="text-align:center;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ($this->cart->contents() as $items): ?>
                      <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                      <tr>
                        <th scope="row"><?php echo $items['id'] ?></th>
                        <td><?php echo $items['name'] ?></td>
                        <td style="text-align:center;"><?php echo $items['satuan'] ?></td>
                        <!-- <td><?php echo $items['kat'] ?></td> -->
                        <td style="text-align:center; width: 20px"><?php echo $items['qty'] ?></td>
                        <td style="text-align:center; width: 35px"><a
                            href="<?php echo base_url().'admin/produk/barang_keluar/remove/'.$items['rowid'];?>"
                            class="text-danger"><span class="fa fa-times"></span></a></td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  <a href="<?php echo base_url().'admin/produk/barang_keluar/addBarang'?>"
                    class="btn btn-info btn-md"><span class="fa fa-save"></span> Simpan</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Title table -->
        <div class="alert alert-info alert-dismissible" role="alert">
          <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button> -->
            <i class="fa fa-info-circle"></i>
           <b>Riwayat Barang Keluar</b>
        </div>

        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="col-12"></div>
                <div class="table-responsive">
                  <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="text-align: center; width: 20px">No</th>
                        <th>Tanggal Keluar</th>
                        <th>No Transaksi</th>
                        <th style="text-align: center;">Jumlah Barang</th>
                        <th style="text-align: center;">Total Barang</th>
                        <th style="text-align: center;">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach($data->result_array() as $i) : 
                      ?>
                      <tr>
                        <td style="text-align: center;"><?php echo $no++ ?></td>
                        <td><?php echo $i['produk_tanggal'] ?></td>
                        <td><?php echo $i['produk_kode'] ?></td>
                        <td style="text-align: center;"><b><?php echo $i['jumlah'] ?></b> Item</td>
                        <td style="text-align: center;"><b><?php echo $i['total'] ?></b> Barang</td>
                        <td style="text-align: center; width: 80px">
                          <a href="<?php echo base_url().'admin/produk/barang_keluar/detail_keluar'?>?trx_id=<?php echo $i['produk_id'] ?>" class="btn btn-info btn-sm text-white"><i class="fa fa-bars"></i> Detail</a>
                        </td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                    <tfoot>
                    </tfoot>
                  </table>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <?php $this->load->view('menu/footer') ?>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="<?php echo base_url().'/assets/libs/jquery/dist/jquery.min.js'?>"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="<?php echo base_url().'/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="<?php echo base_url().'/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'/assets/extra-libs/sparkline/sparkline.js'?>"></script>
  <!--Wave Effects -->
  <script src="<?php echo base_url().'/assets/dist/js/waves.js'?>"></script>
  <!--Menu sidebar -->
  <script src="<?php echo base_url().'/assets/dist/js/sidebarmenu.js'?>"></script>
  <!--Custom JavaScript -->
  <script src="<?php echo base_url().'/assets/dist/js/custom.min.js'?>"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url().'assets/select2/js/select2.full.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/select2/js/select2.min.js'?>"></script>
  <!-- this page js -->
  <script src="<?php echo base_url().'/assets/extra-libs/multicheck/datatable-checkbox-init.js'?>"></script>
  <script src="<?php echo base_url().'/assets/extra-libs/multicheck/jquery.multicheck.js'?>"></script>
  <script src="<?php echo base_url().'/assets/extra-libs/DataTables/datatables.min.js'?>"></script>
  <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
    $('#kode_brg').select2();
  </script>
  <script>
    function initiateSelect2() {
      $('#barang').select2();
      $('#suplier').select2();
    }
    initiateSelect2();
    // when modal is open
    $('.modal').on('shown.bs.modal', function () {
      initiateSelect2();
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {

      $("#kode_brg").focus();
      $("#kode_brg").change(function () {
        var kobar = {
          kode_brg: $(this).val()
        };
        $.ajax({
          type: "POST",
          url: "<?php echo base_url().'admin/produk/barang_keluar/getBarang';?>",
          data: kobar,
          success: function (msg) {
            $('#detail_barang').html(msg);
            $('#jumlah').focus();
          }
        });
      });

      $("#kode_brg").keypress(function (e) {
        if (e.which == 13) {
          $("#jumlah").focus();
        }
      });
    });
  </script>

</body>

</html>