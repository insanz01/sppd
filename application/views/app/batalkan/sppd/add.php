<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Batalkan Perjalanan Dinas</h1>
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
              <form action="<?= base_url('batalkan/sppd/do_batal/') . $hash_id ?>" method="post">
                <div class="form-group">
                  <label for="nip_pegawai">NIP Pegawai</label>
                  <input type="text" name="nip_pegawai" class="form-control" id="nip_pegawai" value="<?= $batalkan['nip_karyawan'] ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="nama_pegawai">Nama Pegawai</label>
                  <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $batalkan['nama_karyawan'] ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="jabatan_pegawai">Jabatan Pegawai</label>
                  <input type="text" name="jabatan_pegawai" class="form-control" id="jabatan_pegawai" value="<?= $batalkan['jabatan'] ?>" readonly required>
                </div>
                <div class="form-group">
                  <label for="SKPD_pegawai">SKPD Pegawai</label>
                  <input type="text" name="SKPD_pegawai" class="form-control" id="SKPD_pegawai" value="Dinas Ketahanan Pangan, Pertanian dan Perikanan" required>
                </div>

                <div class="form-group">
                  <label for="nip_petugas">NIP Petugas</label>
                  <input type="text" name="nip_petugas" class="form-control" id="nip_petugas" value="19650328.198803.1.009" required>
                </div>
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" value="Ir. M. Makhmud, MS" required>
                </div>
                <div class="form-group">
                  <label for="jabatan_petugas">Jabatan Petugas</label>
                  <input type="text" name="jabatan_petugas" class="form-control" id="jabatan_petugas" value="Pembina Utama Muda" required>
                </div>
                <div class="form-group">
                  <label for="SKPD_petugas">SKPD Petugas</label>
                  <input type="text" name="SKPD_petugas" class="form-control" id="SKPD_petugas" value="Dinas Ketahanan Pangan, Pertanian dan Perikanan" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BATALKAN PERJALANAN TUGAS</button>
                </div>
              </form>
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