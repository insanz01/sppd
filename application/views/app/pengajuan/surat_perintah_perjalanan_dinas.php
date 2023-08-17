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
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <select name="nomor_SPPD" id="nomor_SPPD" required class="form-control">
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['nomor_SPPD'] ?>">
                        <?= $sppd['nomor_SPPD'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
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
                  <input type="text" name="tempat_berangkat" class="form-control" id="tempat_berangkat" value="KOTA BANJARMASIN" required>
                </div>
                <div class="form-group">
                  <label for="tempat_tujuan">Tempat Tujuan (Provinsi)</label>
                  
                  <select name="tempat_tujuan" id="tempat_tujuan" class="form-control">
                    <option value="">- PILIH -</option>
                    <?php foreach($provinsi as $p): ?>
                      <option value="<?= $p['name'] ?>">
                        <?= $p['name'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" name="tempat_tujuan" class="form-control" id="tempat_tujuan" required> -->
                </div>
                <div class="form-group">
                  <label for="lama_dinas">Lama Dinas</label>
                  <input type="text" name="lama_dinas" class="form-control" id="lama_dinas" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_berangkat">Tanggal Berangkat</label>
                  <input type="date" name="tanggal_berangkat" class="form-control" id="tanggal_berangkat" required>
                </div>
                <div class="form-group">
                  <label for="tanggal_kembali">Tanggal Kembali</label>
                  <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" required>
                </div>
                <div class="form-group">
                  <label for="beban_anggaran_instansi">Beban Anggaran (Instansi)</label>
                  <input type="text" name="beban_anggaran_instansi" class="form-control" id="beban_anggaran_instansi" value="Dinas Ketahanan Pangan, Pertanian dan Perikanan Kota Banjarmasin" required>
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
                  <label for="kelas_penerbangan">Kelas Penerbangan</label>
                  <select name="kelas_penerbangan" id="kelas_penerbangan" class="form-control">
                    <option value=""></option>
                    <option value="EKONOMI">Ekonomi</option>
                    <option value="BISNIS">Bisnis</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="berangkat_tempat-kedudukan">Berangkat Dari</label>
                  <select name="berangkat_dari" id="berangkat_tempat-kedudukan" class="form-control" onchange="getBiayaPesawat(this)">
                    <?php foreach($kota_asal as $kota): ?>
                      <option value="<?= $kota['kota_asal'] ?>"><?= $kota['kota_asal'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" class="form-control" name="berangkat_dari" id="berangkat_tempat-kedudukan" required> -->
                </div>

                <div class="form-group">
                  <label for="tujuan-satu">Tujuan Pertama</label>
                  <select name="tujuan_satu" id="tujuan-satu" class="form-control" onchange="getBiayaPesawat(this)">
                    <option value="">- SILAHKAN PILIH -</option>
                    <?php foreach($kota_tujuan as $kota): ?>
                      <option value="<?= $kota['kota_tujuan'] ?>"><?= $kota['kota_tujuan'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" class="form-control" name="tujuan_satu" id="tujuan-satu" required> -->
                </div>

                <div class="form-group">
                  <label for="tujuan-dua">Tujuan Kedua</label>
                  <select name="tujuan_dua" id="tujuan-dua" class="form-control">
                    <option value="">hanya isi jika ada tujuan kedua</option>
                    <?php foreach($kota_tujuan as $kota): ?>
                      <option value="<?= $kota['kota_tujuan'] ?>"><?= $kota['kota_tujuan'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" class="form-control" name="tujuan_dua" id="tujuan-dua" placeholder="hanya isi jika ada tujuan kedua"> -->
                </div>

                <div class="form-group">
                  <label for="tanggal-tiba-tujuan-dua">Tanggal Berangkat Tujuan Kedua</label>
                  <input type="date" class="form-control" name="tanggal_berangkat_tujuan_dua" id="tanggal-tiba-tujuan-dua" placeholder="hanya isi jika ada tujuan kedua">
                </div>

                <div class="form-group">
                  <label for="tujuan-tiga">Tujuan Ketiga</label>
                  <select name="tujuan_tiga" id="tujuan-tiga" class="form-control">
                    <option value="">hanya isi jika ada tujuan ketiga</option>
                    <?php foreach($kota_tujuan as $kota): ?>
                      <option value="<?= $kota['kota_tujuan'] ?>"><?= $kota['kota_tujuan'] ?></option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" class="form-control" name="tujuan_tiga" id="tujuan-tiga" placeholder="hanya isi jika ada tujuan ketiga"> -->
                </div>

                <div class="form-group">
                  <label for="tanggal-tiba-tujuan-tiga">Tanggal Berangkat Tujuan Ketiga</label>
                  <input type="date" class="form-control" name="tanggal_berangkat_tujuan_tiga" id="tanggal-tiba-tujuan-tiga" placeholder="hanya isi jika ada tujuan ketiga">
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
    return await axios.get(`<?= base_url() ?>api/karyawan/${nip}`).then(res => res.data);
  }
  const getKaryawanName = async (target) => {
    const nip = target.value;
    const karyawan = await getDetailKaryawan(nip).then(res => res.data);

    console.log(karyawan);

    document.getElementById('nama_karyawan').value = karyawan.nama
    document.getElementById('pangkat').value = "pegawai";
    document.getElementById('golongan').value = karyawan.golongan;
    document.getElementById('jabatan').value = karyawan.jabatan;
  }
  const checkBiayaPesawat = async (data) => {
    console.log(data);

    return await axios.get(`<?= BASE_URL() ?>api/anggaran/BISNIS/${data.asal}/${data.tujuan}`).then(res => res.data);
  }

  const getBiayaPesawat = async (target) => {
    
    const asal = document.getElementById('berangkat_tempat-kedudukan').value;
    const tujuan = document.getElementById('tujuan-satu').value;
    
    const data = {
      asal,
      tujuan
    };

    if(data.asal != "" && data.tujuan != "") {
      const result = await checkBiayaPesawat(data);

      if(result.success) {
        // document.getElementById("beban_anggaran_instansi").value = result.data.biaya;
      }
    }
    
  }
</script>