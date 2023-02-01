<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Surat Perintah Tugas</h1>
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
                          <td><?= $laporan['nip_karyawan'] ?></td>
                          <td><?= $laporan['nama_karyawan'] ?></td>
                          <td><?= $laporan['rangka_acara'] ?></td>
                          <td>
                            <a href="<?= base_url('pengajuan/edit_spt/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-info badge-pill">edit</a>
                            <a href="<?= base_url('pengajuan/delete_spt/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-danger badge-pill">hapus</a>
                            <a href="<?= base_url('surat/spt/') . $laporan['hash_id'] ?>" class="badge badge-sm badge-success badge-pill" target="_blank">lihat surat</a>
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