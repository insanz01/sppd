<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Surat Perintah Perjalanan Dinas</h1>
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
          <div class="card">
            <div class="card-body">
              <table class="table custom-table">
                <thead>
                  <th>#</th>
                  <th>Nomor SPPD</th>
                  <th>Maksud Perjalanan Dinas</th>
                  <th>Tempat Tujuan</th>
                  <th>Lama Dinas</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $index = 1 ?>
                  <?php foreach ($sppd as $b) : ?>
                    <tr>
                      <td><?= $index++ ?></td>
                      <td><?= $b['nomor_SPPD'] ?></td>
                      <td><?= $b['maksud_perjalanan_dinas'] ?></td>
                      <td><?= $b['tempat_tujuan'] ?></td>
                      <td><?= $b['lama_dinas'] ?></td>
                      <td>
                        <a href="<?= base_url('permintaan/sppd/approve/') . $b['id'] ?>" class="badge badge-sm badge-info badge-pill">setuju</a>
                        <a href="<?= base_url('permintaan/sppd/reject/') . $b['id'] ?>" class="badge badge-sm badge-danger badge-pill">tolak</a>
                        <!-- <a href="#!" class="badge badge-sm badge-danger badge-pill"  data-toggle="modal" data-target="#hapusModal" data-id="<?= $b['id'] ?>" onclick="hapusData(this)">hapus</a> -->
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
  </section>
</div>