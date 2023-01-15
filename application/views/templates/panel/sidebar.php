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
        <a href="<?= base_url() ?>" class="d-block"><?= 'Administrator' ?> </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- tambah class menu-open untuk secara otomatis membuka -->
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Dashboard
              <!-- <span class="badge badge-info right">2</span> -->
            </p>
          </a>
        </li>

        <!-- <li class="nav-item">
          <a href="<?= base_url('log/pinjam') ?>" class="nav-link">
            <i class="nav-icon fas fa-upload"></i>
            <p>Log Peminjaman</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('log/kembali') ?>" class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>Log Buku Kembali</p>
          </a>
        </li> -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Master Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="<?= base_url('buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Pustaka</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?= base_url('membership') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>NDDP</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>SPPD</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Surat Perintah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Data Tujuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Data Biaya</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="<?= base_url('buku') ?>" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Buku Pustaka</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Daftar Permintaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>NPPD</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Surat Perintah Tugas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Rincian Biaya</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#!" class="nav-link">
                <i class="far fa-circle nav-icon ml-3"></i>
                <p>Hasil Perjalanan Dinas</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('downloads/document/SPPD 2022.docx') ?>" download class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>Download Template</p>
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