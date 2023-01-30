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
                      <th>File Pengajuan</th>
                      <th>Status</th>
                      <!-- <th>Aksi</th> -->
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($reports as $laporan) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $laporan['nama_karyawan'] ?></td>
                          <td>
                            <a href="<?= base_url('uploads/documents/') . $laporan['file_pengajuan'] ?>" download>
                              <?= $laporan['file_pengajuan'] ?>
                            </a>
                          </td>
                          <td><?= $laporan['status'] ?></td>
                          <!-- <td>
                            <a href="<?= base_url('surat/lpd/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-success badge-pill">lihat surat</a>
                          </td> -->
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