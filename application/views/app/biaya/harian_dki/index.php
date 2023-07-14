<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Uang Harian Perjalanan Dinas DKI</h1>
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
              <a href="<?= base_url('biaya/harian_dki/add') ?>" class="btn btn-primary float-right mb-2">TAMBAH DATA UANG HARIAN</a>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>URAIAN</th>
                      <th>WALIKOTA / WAKIL WALIKOTA / PIMPINAN DPRD</th>
                      <th>ANGGOTA DPRD</th>
                      <th>SEKDA</th>
                      <th>ASISTEN SEKDA / JABATAN PIMPINAN TINGGI</th>
                      <th>ADMINISTRATOR / GOL IV</th>
                      <th>PENGAWAS / GOL III</th>
                      <th>PELAKSANA GOL II / I / NON PNS</th>
                      <th>KET.</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($biaya as $b) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $b['uraian'] ?></td>
                          <td><?= $b['walikota'] ?></td>
                          <td><?= $b['dprd'] ?></td>
                          <td><?= $b['sekda'] ?></td>
                          <td><?= $b['asisten_sekda'] ?></td>
                          <td><?= $b['administrator'] ?></td>
                          <td><?= $b['pengawas'] ?></td>
                          <td><?= $b['pelaksana'] ?></td>
                          <td><?= $b['keterangan'] ?></td>
                          <td>
                            <a href="<?= base_url('biaya/harian_dki/edit/') . $b['id'] ?>" class="badge badge-sm badge-info badge-pill">edit</a>
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
      <form action="<?= base_url("biaya/harian_dki/delete") ?>" method="post">
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