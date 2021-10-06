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
    <link href="<?php echo base_url().'/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'?>" rel="stylesheet" >
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                        </li>
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
                        <h2 class="page-title">Laporan</h2>
                        <div class="ms-auto text-end">
                            <div class="col-12 d-flex">
                            <!-- Button Here -->
                            </div>
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
                <!-- Start Page Content -->

                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th></th>
                                        <th> :</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>No Transaksi</th>
                                        <th style="width: 10px;"></th>
                                        <th> :</th>
                                        <th></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12"></div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-bordered">
                                        <thead>
                                            <tr class="alert alert-success text-bold" style="text-align: center;">
                                                <th style="width: 10px;"><b>No</b></th>
                                                <th><b>Laporan</b></th>
                                                <th style="text-align: center; width: 70px"><b>Print</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;">1</td>
                                                <td>Laporan Stok Barang</td>
                                                <td style="text-align: center;">
                                                    <a href="<?php echo base_url('admin/laporan/lap_barang') ?>" target="blank" class="btn btn-info text-white"><i class="fa fa-print"> Print</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">2</td>
                                                <td>Laporan Barang Masuk PerTanggal</td>
                                                <td style="text-align: center;">
                                                    <a href="#masuk" data-bs-toggle="modal" type="button" class="btn btn-info text-white"><i class="fa fa-print"> Print</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">3</td>
                                                <td>Laporan Barang Masuk PerBulan</td>
                                                <td style="text-align: center;">
                                                    <a href="#masuk_bulan" data-bs-toggle="modal" type="button" class="btn btn-info text-white"><i class="fa fa-print"> Print</i></a>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td style="text-align: center;">4</td>
                                                <td>Laporan Barang Keluar PerTanggal</td>
                                                <td style="text-align: center;">
                                                    <a href="#keluar" data-bs-toggle="modal" type="button" class="btn btn-info text-white"><i class="fa fa-print"> Print</i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">5</td>
                                                <td>Laporan Barang Keluar PerBulan</td>
                                                <td style="text-align: center;">
                                                    <a href="#keluar_bulan" data-bs-toggle="modal" type="button" class="btn btn-info text-white"><i class="fa fa-print"> Print</i></a>
                                                </td>
                                            </tr> 
                                            
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

            <div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Pilih Tanggal</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url().'admin/laporan/lap_masuk_pertanggal'?>" method="post" target="blank">
                            <label class="mt-3">Tanggal Awal</label>
                                <div class="input-group">
                                    <input type="text" name="awal" id="awal" class="form-control mydatepicker" placeholder="Start Date..."  required>
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                </div>
                            <label class="mt-3">Tanggal Akhir</label>
                                <div class="input-group">
                                    <input type="text" name="ahir" id="ahir" class="form-control mydatepicker" placeholder="End Date..."  required>
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline align-left" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success text-white"><i class="fa fa-print"> Cetak</i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="masuk_bulan" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Pilih Bulan</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url().'admin/laporan/lap_masuk_perbulan'?>" method="post" target="blank">
                            <label class="mt-3">Pilih Bulan</label>
                                <div class="input-group">
                                    <select name="bulan_masuk" id="bulan_masuk" class="form-control">
                                    <?php foreach ($masuk_bulan->result_array() as $k) {
                                        $bln=$k['bulan'];
                                    ?>
                                        <option> <?php echo $bln; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline align-left" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success text-white"><i class="fa fa-print"> Cetak</i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Keluar -->
            <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Pilih Tanggal</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url().'admin/laporan/lap_keluar_pertanggal'?>" method="post" target="blank">
                            <label class="mt-3">Tanggal Awal</label>
                                <div class="input-group">
                                    <input type="text" name="awal1" id="awal1" class="form-control mydatepicker" placeholder="Start Date..."  required>
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                </div>
                            <label class="mt-3">Tanggal Akhir</label>
                                <div class="input-group">
                                    <input type="text" name="ahir1" id="ahir1" class="form-control mydatepicker" placeholder="End Date..."  required>
                                        <div class="input-group-append">
                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                        </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline align-left" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success text-white"><i class="fa fa-print"> Cetak</i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Keluar Bulan -->
            <div class="modal fade" id="keluar_bulan" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Pilih Bulan</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url().'admin/laporan/lap_keluar_perbulan'?>" method="post" target="blank">
                            <label class="mt-3">Pilih Bulan</label>
                                <div class="input-group">
                                    <select name="bulan_keluar" id="bulan_keluar" class="form-control">
                                    <?php foreach ($keluar_bulan->result_array() as $k) {
                                        $bln=$k['bulan'];
                                    ?>
                                        <option> <?php echo $bln; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline align-left" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success text-white"><i class="fa fa-print"> Cetak</i></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

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
    <script src="<?php echo base_url().'/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'?>">
    </script>
    <script src="<?php echo base_url().'/assets/extra-libs/sparkline/sparkline.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'/assets/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'/assets/dist/js/sidebarmenu.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'/assets/dist/js/custom.min.js'?>"></script>
    <!--Daterange Picker -->
    <script src="<?php echo base_url().'/assets/dist/daterangepicker/js/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url().'assets/select2/js/select2.full.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/select2/js/select2.min.js'?>"></script>
    <!-- this page js -->
    <script src="<?php echo base_url().'/assets/extra-libs/multicheck/datatable-checkbox-init.js'?>"></script>
    <script src="<?php echo base_url().'/assets/extra-libs/multicheck/jquery.multicheck.js'?>"></script>
    <script src="<?php echo base_url().'/assets/extra-libs/DataTables/datatables.min.js'?>"></script>
    <script>
        function initiateSelect2() {
            $('select').select2();
            $('#bulan_masuk').select2();
            $('#bulan_keluar').select2();
        }
            $('.modal').on('shown.bs.modal', function () {
            initiateSelect2();
        });
    </script>
    <script>
        $('#zero_config').DataTable();

        $('#awal').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            todayHighlight: true
        });
        $('#ahir').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            todayHighlight: true
        });

        $('#awal1').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            todayHighlight: true
        });
        $('#ahir1').datepicker({
            autoclose: true,
            format: 'yyyy/mm/dd',
            todayHighlight: true
        });

        $(function () {
            // function masuk
            $("#awal").on('changeDate', function (selected) {
                var startDate = new Date(selected.date.valueOf());
                $("#ahir").datepicker('setStartDate', startDate);
                if ($("#awal").val() > $("#ahir").val()) {
                    $("#ahir").val($("#awal").val());
                }
            });

            // function keluar
            $("#awal1").on('changeDate', function (selected) {
                var startDate = new Date(selected.date.valueOf());
                $("#ahir1").datepicker('setStartDate', startDate);
                if ($("#awal1").val() > $("#ahir1").val()) {
                    $("#ahir1").val($("#awal1").val());
                }
            });
        });
    </script>

</body>

</html>