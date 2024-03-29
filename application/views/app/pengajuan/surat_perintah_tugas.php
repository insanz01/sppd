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
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('pengajuan/add_spt') ?>" method="post">
                <!-- <div class="form-group">
                  <label for="nomor_sppd">Nomor SPPD</label>
                  <select name="nomor_sppd" id="nomor_sppd" required class="form-control">
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['nomor_SPPD'] ?>">
                        <?= $sppd['nomor_SPPD'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div> -->
                <div class="form-group">
                  <label for="nip_karyawan">NIP Karyawan (Yang diperintah)</label>
                  <select name="nip_karyawan" id="nip_karyawan" class="form-control" onchange="getKaryawanName(this)">
                    <option value="">- PILIH - </option>
                    <?php foreach($karyawan as $k): ?>
                      <option value="<?= $k['NIP'] ?>"><?= $k["NIP"] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" name="nip_karyawan" class="form-control" id="nip_karyawan" required> -->
                </div>
                <div class="form-group">
                  <label for="nama_karyawan">Nama Karyawan (Yang diperintah)</label>
                  <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" required>
                </div>
                <div class="form-group">
                  <label for="pangkat">Pangkat</label>
                  <input type="text" name="pangkat" class="form-control" id="pangkat" required>
                </div>
                <div class="form-group">
                  <label for="golongan">Golongan</label>
                  <input type="text" name="golongan" class="form-control" id="golongan" required>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" required>
                </div>

                <div class="form-group">
                  <label for="rangka_acara">Rangka Acara</label>
                  <textarea name="rangka_acara" class="form-control" id="rangka_acara" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="tujuan">Tujuan</label>
                  <textarea name="tujuan" class="form-control" id="tujuan" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="tanggal_kegiatan">Tanggal kegiatan</label>
                  <input type="text" name="tanggal_kegiatan" class="form-control" id="tanggal_kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="atas_beban">Atas Beban</label>
                  <textarea name="atas_beban" class="form-control" id="atas_beban" required></textarea>
                </div>

                <!-- <div class="form-group">
                  <label for="NIP_petugas">NIP Petugas</label>
                  <input type="text" name="NIP_petugas" class="form-control" id="NIP_petugas" required>
                </div>
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" required>
                </div> -->

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT LAPORAN PERINTAH TUGAS</button>
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
  const getDetailKaryawan = async (nip) => {
    return await axios.get(`http://localhost/sppd/api/karyawan/${nip}`).then(res => res.data);
  }
  const getDetailKaryawanBySPPD = async (nip) => {
    return await axios.get(`http://localhost/sppd/api/sppd/${sppd}`).then(res => res.data);
  }
  const getKaryawanName = async (target) => {
    const nip = target.value;
    const karyawan = await getDetailKaryawan(nip).then(res => res.data);

    document.getElementById('nama_karyawan').value = karyawan.nama
  }
</script>