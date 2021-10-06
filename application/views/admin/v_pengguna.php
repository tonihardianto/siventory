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
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url().'/assets/extra-libs/multicheck/multicheck.css'?>">
    <link href="<?php echo base_url().'/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css'?>"
        rel="stylesheet">
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
                        <h4 class="page-title">Data Pengguna</h4>
                        <div class="ms-auto text-end">
                            <div class="col-12 d-flex">
                                <button type="button" class="btn btn-success text-white" data-bs-toggle="modal"
                                    data-bs-target="#tambah"><i class="fa fa-plus"></i> Tambah Data</button>
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
            <?php $this->load->view('menu/alert'); ?>
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
                                            <tr class="alert alert-success text-bold">
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama Lengkap</th>
                                                <th style="text-align: center;">Previllage</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                        $no=1;
                        foreach($data->result_array() as $i) : 
                      ?>
                                            <tr>
                                                <td style="text-align: center; width: 10px"><?php echo $no++ ?></td>
                                                <td><?php echo $i['user_username'] ?></td>
                                                <td><?php echo $i['user_nama'] ?></td>
                                                <td style="text-align: center; width: 140px">
                                                    <?php echo $i['user_akses'] ?></td>
                                                <td style="text-align: center; width: 200px">
                                                    <button type="button" class="btn btn-warning btn-sm text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#update<?php echo $i['user_id'] ?>"><i
                                                            class="fa fa-edit"></i> </button>
                                                    <button type="button" class="btn btn-danger btn-sm text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#delete<?php echo $i['user_id'] ?>"><i
                                                            class="fa fa-trash"></i> </button>
                                                    <button type="button" class="btn btn-info btn-sm text-white"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#password<?php echo $i['user_id'] ?>"><i
                                                            class="fa fa-key"></i> Ubah Password</button>

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

            <!-- Modal Tambah -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('admin/pengguna/insert'); ?>" method="POST"
                                class="form-horizontal">
                                <div class="form-group ">
                                    <label class="control-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control"
                                        placeholder="Masukkan Username..." required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Masukkan Password</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                    placeholder="*********" required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        placeholder="Masukkan Nama Lengkap..." required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Akses</label>
                                    <select class="form-control" name="akses" id="akses">
                                        <option value="" disabled selected>-Pilih Akses-</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline"
                                data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-success text-white">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Update -->
            <?php foreach($edit->result_array() as $i) : 
            $level = $i['user_akses'];
            ?>
            <div class="modal fade" id="update<?php echo $i['user_id']; ?>" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update Pengguna</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('admin/pengguna/update'); ?>" method="POST"
                                class="form-horizontal">
                                <div class="form-group ">
                                    <label class="control-label">Username</label>
                                    <input type="hidden" name="id" id="id" value="<?php echo $i['user_id'] ?>">
                                    <input type="text" name="username" id="username" class="form-control"
                                        value="<?php echo $i['user_username']; ?>" required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input type="text" name="nama" id="nama" class="form-control"
                                        value="<?php echo $i['user_nama'] ?>" required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Akses</label>
                                    <select class="form-control" name="akses" id="akses">
                                        <?php if ($level=='admin'): ?>
                                        <option value="admin" selected>Admin</option>
                                        <option value="user">User</option>
                                        <?php elseif ($level=='user'): ?>
                                        <option value="admin">Admin</option>
                                        <option value="user" selected>User</option>
                                        <?php endif ?>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Masukkan Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach ?>


            <!-- Modal Delete -->
            <?php foreach($delete->result_array() as $i): ?>
            <div id="delete<?php echo $i['user_id']  ?>" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Peringatan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <form method="post" action="<?php echo base_url() . 'admin/pengguna/delete'; ?>">
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $i['user_id']; ?>">
                                <p>Yakin ingin menghapus pengguna <b><?php echo $i['user_nama'] ?></b> ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger"> Hapus</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach ?>

            <!-- Modal Ubah Password -->
            <?php foreach($pass->result_array() as $i): ?>
            <div class="modal fade" id="password<?php echo $i['user_id'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update Password</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="myForm" action="<?php echo base_url('admin/pengguna/ubah_password'); ?>" method="POST"
                                class="form-horizontal">
                                <div class="form-group ">
                                    <label class="control-label">Password Baru</label>
                                    <input type="hidden" name="user" id="user" value="<?php echo $i['user_username'] ?>">
                                    <input type="hidden" name="id" id="id" value="<?php echo $i['user_id'] ?>">
                                    <input type="password" name="oldpass" id="oldpass" class="required form-control"
                                        placeholder="*********" required>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label">Ulangi Password</label>
                                    <input type="password" name="password" id="password" class="required form-control"
                                    placeholder="*********" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-outline"
                                data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" id="btnSave" class="btn btn-success text-white">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach ?>


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
    <!-- Select2 -->
    <script src="<?php echo base_url().'assets/select2/js/select2.full.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/select2/js/select2.min.js'?>"></script>
    <!-- Validation -->
    <script src="<?php echo base_url().'assets/libs/jquery-validation/dist/jquery.validate.min.js'?>"></script>
    <!-- this page js -->
    <script src="<?php echo base_url().'/assets/extra-libs/multicheck/datatable-checkbox-init.js'?>"></script>
    <script src="<?php echo base_url().'/assets/extra-libs/multicheck/jquery.multicheck.js'?>"></script>
    <script src="<?php echo base_url().'/assets/extra-libs/DataTables/datatables.min.js'?>"></script>
    <script>
        $('#zero_config').DataTable();

        var form = $("#myForm");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            rules: {
                password: {
                    equalTo: "#oldpass"
                }
            }
        });
    </script>

</body>

</html>