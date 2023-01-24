<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Karyawan</h1>
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
              <a href="<?= base_url('karyawan/add') ?>" class="btn btn-primary float-right mb-2">TAMBAH KARYAWAN</a>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Jabatan</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $index = 1 ?>
                      <?php foreach ($karyawan as $k) : ?>
                        <tr>
                          <td><?= $index++ ?></td>
                          <td><?= $k['NIP'] ?></td>
                          <td><?= $k['nama'] ?></td>
                          <td><?= $k['alamat'] ?></td>
                          <td><?= $k['email'] ?></td>
                          <td><?= $k['jabatan'] ?></td>
                          <td>
                            <a href="<?= base_url('k/edit/') . $k['id'] ?>" class="badge badge-sm badge-info badge-pill">edit</a>
                            <a href="#!" data-toggle="modal" data-target="#hapusModal" class="badge badge-sm badge-danger badge-pill" onclick="hapusData(this)" data-id="<?= $k['id'] ?>">hapus</a>
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
        <h5 class="modal-title" id="hapusModalLabel">Hapus Karyawan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('karyawan/delete') ?>" method="post">
        <div class="modal-body">
          <input type="hidden" name="id" id="delete-id">
          <p>Apakah anda yakin ingin menghapus data karyawan ini ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-primary">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
  const hapusData = (target) => {
    const id = target.getAttribute('data-id');

    console.log(id);

    document.getElementById('delete-id').value = id;
  }
</script>