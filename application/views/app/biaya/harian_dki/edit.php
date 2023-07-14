<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Biaya Perjalanan Dinas DKI</h1>
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
              <form action="<?= base_url('biaya/harian_dki/do_edit') ?>" method="post">
                <div class="form-group">
                  <label for="uraian">Uraian</label>
                  <input type="text" name="uraian" class="form-control" id="uraian" value="<?= $biaya['uraian'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="walikota">Walikota</label>
                  <input type="text" name="walikota" class="form-control" id="walikota" value="<?= $biaya['walikota'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="dprd">DPRD</label>
                  <input type="text" name="dprd" class="form-control" id="dprd" value="<?= $biaya['dprd'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="sekda">SEKDA</label>
                  <input type="text" name="sekda" class="form-control" id="sekda" value="<?= $biaya['sekda'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="asisten_sekda">ASISTEN SEKDA</label>
                  <input type="text" name="asisten_sekda" class="form-control" id="asisten_sekda" value="<?= $biaya['asisten_sekda'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="administrator">ADMINISTRATOR</label>
                  <input type="text" name="administrator" class="form-control" id="administrator" value="<?= $biaya['administrator'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="pengawas">PENGAWAS</label>
                  <input type="text" name="pengawas" class="form-control" id="pengawas" value="<?= $biaya['pengawas'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="pelaksana">PELAKSANA</label>
                  <input type="text" name="pelaksana" class="form-control" id="pelaksana" value="<?= $biaya['pelaksana'] ?>" required>
                </div>

                <div class="form-group">
                  <label for="keterangan">KETERANGAN</label>
                  <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"><?= $biaya['keterangan'] ?></textarea>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SIMPAN DATA</button>
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