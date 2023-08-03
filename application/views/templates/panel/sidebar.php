<style>
  .bg-custom-side {
    background-color: #594545;
  }
</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-custom-side">
  <!-- Brand Logo -->
  <a href="<?= base_url('profile') ?>" class="brand-link">
    <img src="<?= base_url() ?>assets/bahan/sipetruk_Transparent.png" alt="Panel Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Panel Console</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar bg-custom-side">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/image/profile/user.png" class="objectPicture" alt="User Image">
      </div>
      <div class="info">
        <a href="<?= base_url() ?>" class="d-block">
          <?php if($this->session->userdata('SESS_SPPD_ROLEID') != 1): ?>
              <?= $this->session->userdata('SESS_SPPD_USERNAME') ?>
            <?php else: ?>
              <?= 'ADMINISTRATOR' ?> 
          <?php endif; ?>
        </a>
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
              DASHBOARD
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

        <?php if($this->session->userdata('SESS_SPPD_ROLEID') == 2): ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PENGAJUAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('na/bpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('permintaan/sppd') ?>" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                SPPD
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                LAPORAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('na/bpd/laporan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('na/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a href="<?= base_url('batalkan/sppd') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Batalkan Perjalanan
              </p>
            </a>
          </li> -->
          
        <?php else: ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe-asia"></i>
              <p>
                MASTER DATA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('karyawan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Pegawai</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PENGAJUAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/spt') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pengajuan/sppd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= base_url('pengajuan/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('pengganti') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PENGGANTI SPPD
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('penolakan') ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                PENOLAKAN SPPD
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                PEMBATALAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('batalkan/sppd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Batalkan Perjalanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('batalkan/sppd/riwayat') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Riwayat Pembatalan</p>
                </a>
              </li>
            </ul>
          </li>
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                LAPORAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('laporan/spt') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/sppd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>SPPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/bpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>BPD</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('laporan/lpd') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>LPD</p>
                </a>
              </li>
            </ul>
          </li>
        <?php endif; ?>

        <!-- <li class="nav-item">
          <a href="<?= base_url('downloads/document/SPPD 2022.docx') ?>" download class="nav-link">
            <i class="nav-icon fas fa-download"></i>
            <p>Download Template</p>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a href="<?= base_url('admin/laporan') ?>" target="_blank" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Print Laporan
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li> -->

        <li class="nav-item">
          <a href="<?= base_url('kwitansi') ?>" class="nav-link">
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              PENYERAHAN BPD
            </p>
          </a>
        </li>

        <?php if($this->session->userdata("SESS_SPPD_ROLEID") == 1): ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BIAYA TRANSPORTASI
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('biaya/pesawat') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Pesawat Udara</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('biaya/taxi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Taxi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                BIAYA PERJALANAN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('biaya/harian') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Uang Harian</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="<?= base_url('biaya/harian_dki') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon ml-3"></i>
                  <p>Uang Harian (DKI)</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('kinerja') ?>" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>
                KINERJA PEGAWAI
              </p>
            </a>
          </li>
        <?php endif; ?>

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