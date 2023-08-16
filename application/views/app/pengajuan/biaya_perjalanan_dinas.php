<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Biaya Perjalanan Dinas</h1>
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
              <form action="<?= base_url('pengajuan/add_bpd') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" id="nomor_SPPD" name="nomor_SPPD">
                <input type="hidden" id="user_id" name="user_id">
                <div class="form-group">
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <select name="hash_id" class="form-control" id="hash_id" required onchange="pilihSPPD(this)">
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['hash_id'] ?>"><?= $sppd['nomor_SPPD'] ?> | [ <?= $sppd['maksud_perjalanan_dinas'] ?> ]</option>
                    <?php endforeach; ?>
                  </select>
                  <!-- <input type="text" name="nomor_SPPD" class="form-control" id="nomor_SPPD" required> -->
                </div>
                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>

                <div class="app">
                  <div class="form-group">
                    <label for="perincian_biaya">Perincian Biaya</label>
                    <input type="text" name="perincian_biaya" id="perincian_biaya" class="form-control" required>
                  </div>  
                  
                  <div class="form-group">
                    <label for="jumlah_biaya">Jumlah Biaya</label>
                    <input type="number" name="jumlah_biaya" id="jumlah_biaya" class="form-control" required>
                  </div>  
                  
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" required>
                  </div>  
                </div>

                <div class="form-group">
                  <label for="nama_bendaharawan">Nama Bendaharawan Pengeluaran</label>
                  <input type="text" name="nama_bendaharawan" id="nama_bendaharawan" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label for="NIP_bendaharawan">NIP Bendaharawan Pengeluaran</label>
                  <input type="text" name="NIP_bendaharawan" id="NIP_bendaharawan" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="file_dokumen">Upload Bukti Perjalanan (cth: Biaya Hotel / Pesawat)</label>
                  <input type="file" name="file_dokumen" id="file_dokumen" class="form-control" required>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT BIAYA PERJALANAN DINAS</button>
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
  const getDataSPPD = async (hash_id) => {
    return await axios.get(`<?= base_url() ?>api/sppd/${hash_id}`).then(res => res.data);
  }

  const getDataKaryawan = async (NIP) => {
    return await axios.get(`<?= base_url() ?>api/karyawan/${NIP}`).then(res => res.data);
  }

  const getBiaya = async (target, name) => {
    return await axios.get(`<?= base_url() ?>api/biaya/${target}/${name}`).then(res => res.data);
  }

  const setValue = (target, val) => {
    document.getElementById(target).value = val;
  }

  const setInnerHTML = (target, val) => {
    document.getElementById(target).innerHTML = val;
  }

  const rincianBiaya = async (data) => {
    const biayaHotel = await getBiaya("hotel", data.tempat_tujuan);
    const biayaPesawat = await getBiaya("pesawat", data.tujuan_satu);
    const biayaHarian = await getBiaya("harian", data.tempat_tujuan);
    const biayaTaxi = await getBiaya("taxi", data.tempat_tujuan);
    const biayaSewa = await getBiaya("sewa", data.tempat_tujuan);

    let totalBiaya = parseInt(biayaHotel.data.besaran);
    totalBiaya += parseInt(biayaHarian.data.besaran);
    totalBiaya += parseInt(biayaTaxi.data.besaran);
    totalBiaya += parseInt(biayaSewa.data.besaran);

    if(data.kelas_penerbangan == "BISNIS") {
      totalBiaya += parseInt(biayaPesawat.data.kelas_bisnis);
    } else {
      totalBiaya += parseInt(biayaPesawat.data.kelas_ekonomi);
    }

    setValue("jumlah_biaya", totalBiaya);
  }

  const pilihSPPD = async (target) => {
    const hash_id = target.value;

    var selectElement = document.getElementById('hash_id');
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var label = selectedOption.label;

    setValue("nomor_SPPD", label);

    console.log('label', label);

    const resultSPPD = await getDataSPPD(hash_id);

    console.log("SPPD", resultSPPD);

    if(resultSPPD.success) {
      const NIP = resultSPPD.data.nip_karyawan;

      const karyawan = await getDataKaryawan(NIP);

      console.log(karyawan);

      console.log("user_id", karyawan.data.user_id);

      setValue("user_id", karyawan.data.user_id);

      await rincianBiaya(resultSPPD.data);
      
      if(karyawan.success) {
        console.log("user_id", karyawan.data.user_id);
      }
    }

  }
</script>