<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo PATH; ?>/backend/" class="brand-link bg-purple">
        <img src="<?php echo PATH; ?>/backend/img/logo_fb.png" class="brand-image img-circle elevation-3" <span
            class="brand-text font-weight-light">
        <span class="brand-text font-weight-light">Ninestarfood</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PATH; ?>/backend/img/default.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Systems</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/sr" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Sample request
                        </p>
                    </a>
                </li>
                <li class="nav-header">Data</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/item" class="nav-link">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                        Item
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/unit" class="nav-link">
                        <i class="nav-icon fas fas fa-box"></i>
                        <p>
                            Unit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/customer" class="nav-link">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            Customer
                        </p>
                    </a>
                </li>
                <!-- <li class="nav-item">
                        <a href="<?php echo PATH; ?>/backend/production/pp" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                            Production Plan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo PATH; ?>/backend/production/wo" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                                Work Order
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo PATH; ?>/backend/store/gr" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                            Goods Receipt
                            </p>
                        </a>
                    </li>
                    
                    <li class="nav-header">Reports</li>
                    <li class="nav-item">
                        <a href="<?php echo PATH; ?>/backend/reports/MSF01" class="nav-link">
                            <i class="nav-icon fas  fa-file-alt"></i>
                            <p>
                                Monthly Sales Forecast
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo PATH; ?>/backend/reports/RFM01" class="nav-link">
                            <i class="nav-icon fas fa-paste "></i>
                            <p>
                            Reservation Of Material
                        </p>
                    </a></li> -->
                <?php if ($_SESSION['type'] == 'Admin') { ?>
                <li class="nav-header">ระบบจัดการพนักงาน</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/backend/user" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ข้อมูลพนักงาน
                        </p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>