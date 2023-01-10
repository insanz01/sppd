<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Log Buku Kembali</h1>
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
        <div class="col-8">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table class="table custom-table">
                    <thead>
                      <th>#</th>
                      <th>Kode Buku</th>
                      <th>Nama Buku</th>
                      <th>Peminjam</th>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <form action="<?= base_url('log/kembali/add') ?>" method="post">
                <div class="form-group">
                  <label for="kode-buku">Kode Buku</label>
                  <input type="text" id="kode-buku" name="kode_buku" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="member">Kode Member</label>
                  <input type="text" list="members" name="kode_member" class="form-control" id="member" required>

                  <datalist id="members">
                    <option value="Edge">Mengapa</option>
                    <option value="Firefox">masih</option>
                    <option value="Chrome">ada</option>
                    <option value="Opera">cinta</option>
                    <option value="Safari">rasa</option>
                  </datalist>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">SUBMIT DATA</button>
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