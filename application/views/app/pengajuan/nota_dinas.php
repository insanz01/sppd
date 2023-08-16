<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Nota Dinas</h1>
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
              <form action="<?= base_url('pengajuan/add_nd') ?>" method="post">
                <div class="form-group">
                  <label for="">Kepada : </label>
                  <input type="text" class="form-control" name="kepada" id="kepada" value="Kepala Dinas Ketahanan Pangan Pertanian dan Perikanan Kota Banjarmasin">
                </div>
                <div class="form-group">
                  <label for="dari">Dari : </label>
                  <input type="text" class="form-control" name="dari" id="dari">
                </div>
                <input type="hidden" id="nomor_SPPD" name="nomor_SPPD">
                <div class="form-group">
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <select name="hash_id" id="hash_id" required class="form-control" onchange="pilihSPPD(this)">
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['hash_id'] ?>">
                        <?= $sppd['nomor_SPPD'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="tanggal">Tanggal</label>
                  <input type="text" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="form-group">
                  <label for="perihal">Perihal</label>
                  <textarea name="perihal" id="perihal" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="dasar">Dasar</label>
                  <textarea name="dasar" id="dasar" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="uraian">Uraian</label>
                  <textarea name="uraian" id="uraian" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="saran">Saran</label>
                  <textarea name="saran" id="saran" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                  <input type="text" class="form-control" name="tanggal_kegiatan" id="tanggal_kegiatan">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">BUAT LAPORAN PERJALANAN DINAS</button>
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

  const getDataSPT = async (hash_id) => {
    return await axios.get(`<?= base_url() ?>api/spt/${hash_id}`).then(res => res.data);
  }

  const setValue = (target, val) => {
    document.getElementById(target).value = val;
  }

  const setInnerHTML = (target, val) => {
    document.getElementById(target).innerHTML = val;
  }

  const pilihSPPD = async (target) => {
    const hash_id = target.value;

    var selectElement = document.getElementById('hash_id');
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var label = selectedOption.label;

    setValue("nomor_SPPD", label);

    console.log('label', label);

    const resultSPPD = await getDataSPPD(hash_id);
    const resultSPT = await getDataSPT(hash_id);

    if(resultSPPD.success) {
      setValue("tanggal", resultSPPD.data.created_at);
      setValue("dasar", resultSPT.data.rangka_acara);
      setValue("tanggal_kegiatan", resultSPT.data.tanggal_kegiatan)
    }

  }
</script>