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
          <div class="row">
            <div class="col-12">
              <!-- <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#filterModal">FILTER LAPORAN</button> -->
              <a href="<?= base_url("bulk/sppd/print") ?>" class="btn btn-primary mb-2" role="button" target="_blank">CETAK SEMUA</a>

            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>Nomor SPPD</th>
                      <th>NIP Karyawan</th>
                      <th>Nama Karyawan</th>
                      <th>Tujuan Perjalanan</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($reports as $laporan) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $laporan['nomor_SPPD'] ?></td>
                          <td><?= $laporan['nip_karyawan'] ?></td>
                          <td><?= $laporan['nama_karyawan'] ?></td>
                          <td><?= $laporan['maksud_perjalanan_dinas'] ?></td>
                          <td>
                            <a href="<?= base_url('pengajuan/edit_sppd/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-info badge-pill">edit</a>
                            <a href="<?= base_url('pengajuan/delete_sppd/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-danger badge-pill">hapus</a>
                            <a href="<?= base_url('surat/sppd/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-success badge-pill" target="_blank">lihat surat</a>
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

<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="filterModalLabel">Filter Laporan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("laporan/sppd") ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="tanggal_awal">Tanggal Awal</label>
            <input type="date" class="form-control" name="tanggal_awal">
          </div>
          <div class="form-group">
            <label for="tanggal_akhir">Tanggal Akhir</label>
            <input type="date" class="form-control" name="tanggal_akhir">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Filter</button>
        </div>
      </form>
    </div>
  </div>
</div>