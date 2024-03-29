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
                  <th>Status</th>
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
                        <?php if($b['status'] == -1): ?>
                          Ditolak
                        <?php elseif($b['status'] == 1): ?>
                          Diterima
                        <?php else: ?>
                          Menunggu Konfirmasi
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if($b['status'] == 0): ?>
                          <a href="<?= base_url('permintaan/sppd/approve/') . $b['hash_id'] ?>" class="badge badge-sm badge-info badge-pill">setuju</a>
                          
                          <a href="#!" class="badge badge-sm badge-danger badge-pill" data-toggle="modal" data-target="#rejectModal" onclick="showTolak(this)" data-id="<?= $b['hash_id'] ?>">tolak</a>
                        <?php endif; ?>
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

<!-- Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rejectModalLabel">Tolak SPPD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="reject-form" action="<?= base_url("permintaan/sppd/reject") ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id-tolak" name="hash_id">
        <div class="modal-body">
          <div class="form-group">
            <label for="alasan">Alasan</label>
            <textarea name="alasan" id="alasan" class="form-control" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="userfile">Upload File (Berkas Pendukung)</label>
            <input type="file" class="form-control" name="userfile" id="userfile">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tolak</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

  const showTolak = (target) => {
    const id = target.getAttribute("data-id");

    document.getElementById("id-tolak").value = id;
    document.getElementById("reject-form").setAttribute("action", `<?= base_url("permintaan/sppd/reject/") ?>${id}`)
  }

</script>