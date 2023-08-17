<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Biaya Perjalanan Pesawat</h1>
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
              <a href="<?= base_url('biaya/pesawat/add') ?>" class="btn btn-primary float-right mb-2">TAMBAH DATA PERJALANAN</a>
              <a href="<?= base_url("print/biaya/pesawat") ?>" target="_blank" class="btn btn-info float-right mx-1 mb-2">
                <i class="fas fa-fw fa-print"></i>
                Print
              </a>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>Kota Asal</th>
                      <th>Kota Tujuan</th>
                      <th>Bisnis (Rp)</th>
                      <th>Ekonomi (Rp)</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($biaya as $b) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $b['kota_asal'] ?></td>
                          <td><?= $b['kota_tujuan'] ?></td>
                          <td><?= number_format( $b['kelas_bisnis'], 0, '', '.') ?></td>
                          <td><?= number_format( $b['kelas_ekonomi'], 0, '', '.') ?></td>
                          <td>
                            <a href="<?= base_url('biaya/pesawat/edit/') . $b['id'] ?>" class="badge badge-sm badge-info badge-pill">edit</a>
                            <a href="#!" class="badge badge-sm badge-danger badge-pill"  data-toggle="modal" data-target="#hapusModal" data-id="<?= $b['id'] ?>" onclick="hapusData(this)">hapus</a>
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
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("biaya/pesawat/delete") ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id-hapus" name="id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const hapusData = (target) => {
    const id = target.getAttribute("data-id");

    document.getElementById('id-hapus').value = id;
  }
</script>