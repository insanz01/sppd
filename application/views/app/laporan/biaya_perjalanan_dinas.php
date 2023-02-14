<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Biaya Perjalanan Dinas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active"></li>
          </ol> -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <!-- <a href="<?= base_url('membership/add') ?>" class="btn btn-primary float-right mb-2">TAMBAH KARYAWAN</a> -->
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>Nama Karyawan</th>
                      <th>Nomor Surat</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($reports as $laporan) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $laporan['nama_karyawan'] ?></td>
                          <td>
                            <?= $laporan['nomor_SPPD'] ?>
                          </td>
                          <td><?= $laporan['status'] ?></td>
                          <td>
                            <a href="<?= base_url("surat/bpd/") . $laporan['hash_id'] ?>" class="badge badge-info badge-sm badge-pill">
                              Lihat
                            </a>
                            <a href="<?= base_url('pengajuan/bpd/') . $laporan['hash_id'] . '/terima' ?>" class="badge badge-sm badge-success badge-pill">Terima</a>
                            <a href="<?= base_url('pengajuan/bpd/') . $laporan['hash_id'] . '/tolak' ?>" class="badge badge-sm badge-danger badge-pill">Tolak</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  // const getNameOfMember = () => {

  // }
</script>