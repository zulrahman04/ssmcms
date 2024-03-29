
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CMS <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('cms/dashboard') ?>">
                    <i class="fa fa-map-marker"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('cms/project') ?>">
                    <i class="fa fa-credit-card"></i>
                    <span>PROJECT</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('cms/factory') ?>">
                    <i class="fa fa-location-arrow"></i>
                    <span>Factory</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">   
            
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> 

        </ul>