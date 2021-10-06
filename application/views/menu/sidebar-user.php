<aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="<?php echo base_url('user/dashboard') ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?php echo base_url('user/barang_masuk') ?>" class="sidebar-link"><i
                                            class="mdi mdi-arrow-right-box"></i><span class="hide-menu"> Barang Masuk
                                        </span></a></li>
                                <li class="sidebar-item"><a href="<?php echo base_url('user/barang_keluar') ?>" class="sidebar-link"><i
                                            class="mdi mdi-arrow-left-box"></i><span class="hide-menu"> Barang Keluar
                                        </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>