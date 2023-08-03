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
                  <th>NIP Karyawan</th>
                  <th>Nama Karyawan</th>
                  <th>Alasan</th>
                  <!-- <th>Aksi</th> -->
                </thead>
                <tbody>
                  <?php $index = 1 ?>
                  <?php foreach ($penolakan as $b) : ?>
                    <tr>
                      <td><?= $index++ ?></td>
                      <td><?= $b['nomor_SPPD'] ?></td>
                      <td><?= $b['nip_karyawan'] ?></td>
                      <td><?= $b['nama_karyawan'] ?></td>
                      <td><?= $b['alasan'] ?></td>
                      <!-- <td> -->
                        <!-- <a href="<?= base_url('permintaan/sppd/approve/') . $b['hash_id'] ?>" class="badge badge-sm badge-info badge-pill">setuju</a> -->
                      <!-- </td> -->
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
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="filterModalLabel">Tolak SPPD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("permintaan/sppd/reject") ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" id="id-hapus" name="hash_id">
        <div class="modal-body">
          <div class="form-group">
            <label for="alasan">Alasan</label>
            <textarea name="alasan" id="alasan" class="form-control" cols="30" rows="10"></textarea>
          </div>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="userfile">Upload File</label>
            <textarea name="userfile" id="userfile" class="form-control" cols="30" rows="10"></textarea>
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

    document.getElementById("id-hapus").value = id;
  }

</script>