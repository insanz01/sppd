<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('profile') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/bahan/sipetruk_Transparent.png" alt="Panel Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Panel Console</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/image/profile/user.png" class="objectPicture" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url('profile') ?>" class="d-block"><?= 'Administrator' ?> </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- tambah class menu-open untuk secara otomatis membuka -->
        <li class="nav-item">
          <a href="<?= base_url('profile') ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Kelola Modul
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('menu') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Manajemen Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('objective') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Tujuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('glossary') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Glosarium</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('indicator') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Indikator</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Uji Kompetensi</p>
                <i class="right fas fa-angle-left"></i>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('competence/questions') ?>" class="nav-link">
                    <i class="fas fa-chevron-circle-right nav-icon ml-4"></i>
                    <p>Soal Kompetensi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('competence/responses') ?>" class="nav-link">
                    <i class="fas fa-chevron-circle-right nav-icon ml-4"></i>
                    <p>Responden</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('bibliography') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Daftar Pustaka</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('apk') ?>" class="nav-link">
            <i class="nav-icon fab fa-android"></i>
            <p>Download APK</p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="<?= base_url('admin/laporan') ?>" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Print Laporan
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
            <a href="<?= base_url('panel/pengaturan') ?>" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li> -->

        <li class="nav-item my-4">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Keluar
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>