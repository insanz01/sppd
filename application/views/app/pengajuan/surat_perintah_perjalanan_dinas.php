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
              <form action="<?= base_url('pengajuan/add_sppd') ?>" method="post">
                <div class="form-group">
                  <label for="author">Pejabat yang memberi perintah</label>
                  <input type="text" name="author" class="form-control" id="author" required>
                </div>
                <div class="form-group">
                  <label for="nip_karyawan">NIP Karyawan</label>
                  <select name="nip_karyawan" id="nip_karyawan" class="form-control" onchange="getKaryawanName(this)">
                    <option value="">- PILIH - </option>
                    <?php foreach($karyawan as $k): ?>
                      <option value="<?= $k['NIP'] ?>"><?= $k["NIP"] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" name="nip_karyawan" class="form-control" id="nip_karyawan" required> -->
                </div>
                <div class="form-group">
                  <label for="nama_karyawan">Nama Karyawan</label>
                  <input type="text" name="nama_karyawan" class="form-control" id="nama_karyawan" required>
                </div>
                <div class="form-group">
                  <label for="pangkat">Pangkat Karyawan</label>
                  <input type="text" name="pangkat" class="form-control" id="pangkat" required>
                </div>
                <div class="form-group">
                  <label for="golongan">Golongan Karyawan</label>
                  <input type="text" name="golongan" class="form-control" id="golongan" required>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" id="jabatan" required>
                </div>
                <div class="form-group">
                  <label for="instansi">Instansi</label>
                  <input type="text" name="instansi" class="form-control" id="instansi" required>
                </div>

                <div class="form-group">
                  <label for="tingkat_perjalanan_dinas">Tingkat Perjalanan Dinas</label>
                  <input type="text" name="tingkat_perjalanan_dinas" class="form-control" id="tingkat_perjalanan_dinas" required>
                </div>
                <div class="form-group">
                  <label for="maksud_perjalanan_dinas">Maksud Perjalanan Dinas</label>
                  <input type="text" name="maksud_perjalanan_dinas" class="form-control" id="maksud_perjalanan_dinas" required>
                </div>
                <div class="form-group">
                  <label for="alat_angkutan">Alat Angkutan</label>
                  <input type="text" name="alat_angkutan" class="form-control" id="alat_angkutan" required>
                </div>
                <div class="form-group">
                  <label for="tempat_berangkat">Tempat Berangkat</label>
                  <input type="text" name="tempat_berangkat" class="form-control" id="tempat_berangkat" required>
                </div>
                <div class="form-group">
                  <label for="tempat_tujuan">Tempat Tujuan</label>
                  <input type="text" name="tempat_tujuan" class="form-control" id="tempat_tujuan" required>
                </div>
                <div class="form-group">
                  <label for="lama_dinas">Lama Dinas</label>
                  <input type="text" name="lama_dinas" class="form-control" id="lama_dinas" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_berangkat">Tanggal Berangkat</label>
                  <input type="text" name="tanggal_berangkat" class="form-control" id="tanggal_berangkat" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_kembali">Tanggal Kembali</label>
                  <input type="text" name="tanggal_kembali" class="form-control" id="tanggal_kembali" required>
                </div>
                <div class="form-group">
                  <label for="beban_anggaran_instansi">Beban Anggaran (Instansi)</label>
                  <input type="text" name="beban_anggaran_instansi" class="form-control" id="beban_anggaran_instansi" required>
                </div>
                <div class="form-group">
                  <label for="beban_anggaran_mata_anggaran">Mata Anggaran</label>
                  <input type="text" name="beban_anggaran_mata_anggaran" class="form-control" id="beban_anggaran_mata_anggaran" required>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan Lainnya</label>
                  <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                  <label for="berangkat_tempat-kedudukan">Berangkat Dari</label>
                  <input type="text" class="form-control" name="berangkat_dari" id="berangkat_tempat-kedudukan" required>
                </div>

                <div class="form-group">
                  <label for="tujuan-satu">Tujuan Pertama</label>
                  <input type="text" class="form-control" name="tujuan_satu" id="tujuan-satu" required>
                </div>

                <div class="form-group">
                  <label for="tujuan-dua">Tujuan Kedua</label>
                  <input type="text" class="form-control" name="tujuan_dua" id="tujuan-dua" placeholder="hanya isi jika ada tujuan kedua">
                </div>

                <div class="form-group">
                  <label for="tujuan-tiga">Tujuan Ketiga</label>
                  <input type="text" class="form-control" name="tujuan_tiga" id="tujuan-tiga" placeholder="hanya isi jika ada tujuan ketiga">
                </div>

                <div class="form-group">
                  <label for="tanggal-tiba">Tanggal Tiba</label>
                  <input type="date" class="form-control" name="tanggal_tiba" id="tanggal-tiba" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT SURAT PERINTAH PERJALANAN DINAS</button>
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
  const getKaryawanName = async (target) => {
    const nip = target.value;
    const karyawan = await getDetailKaryawan(nip).then(res => res.data);

    document.getElementById('nama_karyawan').value = karyawan.nama
  }
</script>