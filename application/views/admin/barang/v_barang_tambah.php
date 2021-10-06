<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Inventori | Tambah Barang</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet'?>">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet'?>">
    <!-- NProgress -->
    <link href="<?php echo base_url().'assets/vendors/nprogress/nprogress.css'?>" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo base_url().'assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css'?>" rel="stylesheet"/>
    <!-- iCheck -->
    <link href="<?php echo base_url().'assets/vendors/iCheck/skins/flat/green.css'?>" rel="stylesheet">
	<!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url().'assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css'?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url().'assets/select2/css/select2.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/select2/css/select2.css'?>" rel="stylesheet">
 
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/build/css/custom.min.css'?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-cube"></i> <span>Sistem Inventori</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url().'assets/images/img.jpg'?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('ses_name') ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php $this->load->view('menu/sidebar') ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url().'assets/images/img.jpg'?>" alt=""><?php echo $this->session->userdata('ses_name') ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="<?php echo base_url().'assets/images/img.jpg'?>" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="<?php echo base_url().'assets/images/img.jpg'?>" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="<?php echo base_url().'assets/images/img.jpg'?>" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="<?php echo base_url().'assets/images/img.jpg'?>" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
                <div class="">
                    <!-- <div class="page-title">
                        <div class="title_left">
                            <h3>Form Validation</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Tambah Barang <small></small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form class="" action="<?php echo base_url().'admin/produk/barang/simpanData' ?>" method="post" novalidate>
                                        <span class="section">Tambah Barang</span>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namaBarang" placeholder="ex. Indomie" required="required" />
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Satuan<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control select2" name="satuan" id="satuan" required>
                                                <option value="" disabled selected>-Pilih Satuan-</option>
                                                <?php foreach ($sat->result_array() as $s) : ?>
                                                  <option value="<?php echo $s['satuan_id'] ?>"><?php echo $s['satuan_nama'] ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Kategori<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control select2" name="kategori" id="kategori" required>
                                                <option value="" disabled selected>-Pilih Kategori-</option>
                                                <?php foreach ($kat->result_array() as $k) : ?>
                                                  <option value="<?php echo $k['kategori_id'] ?>"><?php echo $k['kategori_nama'] ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Min. Stok<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="number" name="minStok" required="required" /></div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Masuk<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="date" name="tanggal" id="tanggal" placeholder="yyyy/mm/dd" required>
                                            </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Supplier<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="form-control select2" name="suplier" id="suplier" required>
                                                <option value="" disabled selected>-Pilih Supplier-</option>
                                                <?php foreach ($sup->result_array() as $k) : ?>
                                                  <option value="<?php echo $k['suplier_id'] ?>"><?php echo $k['suplier_nama'] ?></option>
                                                <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                    <button type='reset' class="btn btn-success">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php $this->load->view('menu/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>
    <!-- Validator -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/vendors/validator/multifield.js'?>"></script>
    <script src="<?php echo base_url().'assets/vendors/validator/validator.js'?>"></script>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/vendors/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url().'assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'assets/vendors/fastclick/lib/fastclick.js'?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'assets/vendors/nprogress/nprogress.js'?>"></script>
    <!-- jQuery custom content scroller -->
    <script src="<?php echo base_url().'assets/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url().'assets/vendors/iCheck/icheck.min.js'?>"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url().'assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url().'assets/select2/js/select2.full.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/select2/js/select2.min.js'?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'assets/build/js/custom.min.js'?>"></script>

    <script>
        $('#satuan').select2();
        $('#kategori').select2();
        $('#suplier').select2();
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

  </body>
</html>