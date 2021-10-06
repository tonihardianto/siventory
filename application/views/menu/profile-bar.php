<?php 
$this->load->model('m_total');

$query1 = $this->db->query("SELECT * FROM tb_barang a
INNER JOIN tb_kategori b ON a.barang_kategori_id=b.kategori_id
INNER JOIN tb_satuan c ON a.barang_satuan_id=c.satuan_id
WHERE a.barang_stok <= a.barang_min_stok ");

$query = $this->db->query("SELECT * FROM tb_barang a
INNER JOIN tb_kategori b ON a.barang_kategori_id=b.kategori_id
INNER JOIN tb_satuan c ON a.barang_satuan_id=c.satuan_id
WHERE a.barang_stok <= a.barang_min_stok limit 5 ");
$totalRestok = $query1->num_rows();

?>

<ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-bell"></i><span class="badge rounded-pill bg-danger"><?php echo $totalRestok ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <?php foreach($query->result_array() as $i) : ?>
                                            <a href="<?php echo base_url('admin/informasi') ?>" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="fa fa-cube"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0"><?php echo $i['barang_nama']; ?></h5>
                                                        <span class="mail-desc">Stok tersisa: <?php echo $i['barang_stok'] ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php endforeach ?>
                                            <!-- Message -->
                                        </div>
                                        <div class="">
                                            <a href="<?php echo base_url('admin/informasi') ?>">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <div class="ms-2">
                                                        <h5 class="text-center ml-2">Lihat semua notifikasi</h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url().'/assets/images/users/1.jpg'?>" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                
                                <div class="ps-4 p-10"><a href="<?php echo base_url('admin/login/logout') ?>"
                                        class="btn btn-sm btn-danger btn-rounded text-white"><i class="fa fa-power-off"></i> Logout</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>