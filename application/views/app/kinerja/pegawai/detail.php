<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Kinerja Pegawai</h1>
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
            <div class="col-12 my-3">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <h3><?= $info['nama'] ?></h3>
                      <h4><?= $info['NIP'] ?></h4>
    
                      <small class="text-danger"><sup>*</sup>klik pada badge poin untuk merubah</small>
                    </div>
                    <div class="col-6">
                      <a href="<?= base_url("print/kinerja/detail/") . $info['NIP'] ?>" target="_blank" class="btn btn-info float-right">
                        <i class="fas fa-fw fa-print"></i>
                        Cetak
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                <ul class="list-group">
                  <?php foreach($detail as $det): ?>
                    <li class="list-group-item">
                      <h4>Hasil Kegiatan</h4>
                      <p>
                        <?= $det["hasil"] ?>
                      </p>
                      <h5>Poin : 
                        <span class="badge badge-sm badge-primary badge-pill"  data-toggle="modal" data-target="#skorModal" data-id="<?= $det['hash_id'] ?>" data-nip="<?= $info["NIP"] ?>" onclick="updateSkor(this)">
                          <?= $det["poin"] ?>
                        </span>
                      </h5>
                    </li>
                  <?php endforeach; ?>
                </ul>
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
        <h5 class="modal-title" id="hapusModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("biaya/pesawat/delete") ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="id-hapus" name="id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="skorModal" tabindex="-1" aria-labelledby="skorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="skorModalLabel">Update Skor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url("kinerja/update/skor") ?>" method="post">
        <div class="modal-body">
          <input type="hidden" id="NIP" name="NIP">
          <input type="hidden" id="hash_id" name="hash_id">
          <div class="form-group">`
            <label for="">Skor</label>
            <select name="skor" id="skor" class="form-control">
              <option value="1">Buruk</option>
              <option value="2">Cukup</option>
              <option value="3">Baik</option>
              <option value="4">Sangat Baik</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Skor</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  const setValue = (target, val) => {
    document.getElementById(target).value = val;
  }

  const updateSkor = (target) => {
    const hashId = target.getAttribute("data-id");
    const NIP = target.getAttribute("data-nip");

    console.log("hash_id", hashId);
    console.log("NIP", NIP);

    setValue("NIP", NIP);
    setValue("hash_id", hashId);
  }

  const hapusData = (target) => {
    const id = target.getAttribute("data-id");

    document.getElementById('id-hapus').value = id;
  }
</script>