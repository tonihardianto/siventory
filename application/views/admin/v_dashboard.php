<?php 

$query=$this->db->query("SELECT * FROM tb_barang WHERE barang_stok<=barang_min_stok");
$total = $query->num_rows();

?>

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
    <title>Sistem Inventori Barang</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'/assets/images/favicon.png'?>">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'/assets/libs/flot/css/float-chart.css'?>" rel="stylesheet">
    <!-- DataTables -->
    <link href="<?php echo base_url().'/assets/DataTables/datatables.min.css'?>" rel="stylesheet">
    <!-- Custom CSS -->
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
                            <img src="<?php echo base_url().'/assets/images/logo-icon.png'?>" alt="homepage"
                                class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?php echo base_url().'/assets/images/logo-text.png'?>" alt="homepage"
                                class="light-logo" />

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
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/pengguna') ?>">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                                    <h6 class="text-white">Data Pengguna</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->

                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="<?php echo base_url('admin/produk/barang') ?>">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-cube"></i></h1>
                                    <h6 class="text-white">Data Gudang</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/produk/barang_masuk') ?>">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-arrow-down-box"></i></h1>
                                    <h6 class="text-white">Barang Masuk</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/produk/barang_keluar') ?>">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-arrow-up-box"></i></h1>
                                    <h6 class="text-white">Barang Keluar</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/suplier/suplier') ?>">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-account-switch"></i></h1>
                                    <h6 class="text-white">Suplier</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="<?php echo base_url('admin/laporan') ?>">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                    <h6 class="text-white">Laporan</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/produk/kategori') ?>">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-kodi"></i></h1>
                                    <h6 class="text-white">Kategori</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="<?php echo base_url('admin/produk/satuan') ?>">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-layers"></i></h1>
                                    <h6 class="text-white">Satuan</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="<?php echo base_url('admin/informasi') ?>">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-yellow">
                            <span class="badge rounded-pill bg-white text-warning"> <?php echo $total; ?></span></h1>
                                    <h6 class="text-white">Barang Minimum</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Barang Masuk Hari Ini</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                <div class="table-responsive">
                                    <table id="masuk" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="alert alert-success">
                                            <th style="font-weight: bold;">No Faktur</th>
                                            <th style="font-weight: bold;">Nama barang</th>
                                            <th style="font-weight: bold;">Satuan</th>
                                            <th style="font-weight: bold; text-align: center;">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($today_in->result_array() as $i) : ?>
                                        <tr>
                                            <td><?php echo $i['produk_nofak'] ?></td>
                                            <td><?php echo $i['barang_nama'] ?></td>
                                            <td><?php echo $i['satuan_nama'] ?></td>
                                            <td style="text-align: center;"><b><?php echo $i['d_masuk_jumlah'] ?></b>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                    </div>
                    <!-- column -->

                    <div class="col-lg-6">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Barang Keluar Hari Ini</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                <div class="table-responsive">
                                    <table id="keluar" class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="alert alert-danger">
                                            <th style="font-weight: bold;">No Transaksi</th>
                                            <th style="font-weight: bold;">Nama barang</th>
                                            <th style="font-weight: bold;">Satuan</th>
                                            <th style="font-weight: bold; text-align: center;">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($today_out->result_array() as $i) : ?>
                                        <tr>
                                            <td><?php echo $i['produk_kode'] ?></td>
                                            <td><?php echo $i['barang_nama'] ?></td>
                                            <td><?php echo $i['satuan_nama'] ?></td>
                                            <td style="text-align: center;"><b><?php echo $i['d_keluar_jumlah'] ?></b>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
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
    <script src="<?php echo base_url().'/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'?>">
    </script>
    <script src="<?php echo base_url().'/assets/extra-libs/sparkline/sparkline.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'/assets/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'/assets/dist/js/sidebarmenu.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'/assets/dist/js/custom.min.js'?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url().'/dist/js/pages/dashboards/dashboard1.js'?>"></script> -->
    <!-- DataTables -->
    <script src="<?php echo base_url().'/assets/DataTables/datatables.min.js'?>"></script>
    <!-- Charts js Files -->
    <script src="<?php echo base_url().'/assets/libs/flot/excanvas.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot/jquery.flot.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot/jquery.flot.pie.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot/jquery.flot.time.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot/jquery.flot.stack.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot/jquery.flot.crosshair.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/dist/js/pages/chart/chart-page-init.js'?>"></script>

    <script>
        $('#masuk').DataTable();
        $('#keluar').DataTable();
    </script>

</body>

</html>