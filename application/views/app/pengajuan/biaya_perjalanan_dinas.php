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
              <form action="<?= base_url('pengajuan/add_bpd') ?>" method="post">
                <div class="form-group">
                  <label for="nomor_SPPD">Nomor SPPD</label>
                  <select name="nomor_SPPD" class="form-control" id="nomor_SPPD" required>
                    <option value="">- PILIH -</option>
                    <?php foreach($SPPD as $sppd): ?>
                      <option value="<?= $sppd['nomor_SPPD'] ?>"><?= $sppd['nomor_SPPD'] ?> | [ <?= $sppd['maksud_perjalanan_dinas'] ?> ]</option>
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
  // const getNameOfMember = () => {

  // }
</script>