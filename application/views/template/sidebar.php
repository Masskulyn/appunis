 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('administrator/dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/apple-touch-icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Si<strong>Akad</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/ambatukam.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="<?= site_url('administrator/dashboard') ?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="<?= site_url('administrator/mahasiswa') ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('administrator/dosen') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dosen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('administrator/jadwal') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Jadwal Kuliah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('administrator/fakultas') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Fakultas
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  