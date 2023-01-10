<div class="container py-4">
  <div class="row py-4">
    <div class="col-5 mx-auto">
      <div class="card">
        <div class="card-body">
          <form action="<?= base_url("visitor/do_submit") ?>" method="post">
            <h3 class="text-center mb-4">BUKU TAMU MEMBER</h3>
            <hr>
            <div class="form-group">
              <label for="identitas">
                <h4>Identitas</h4>
                <small>Nomor HP atau Email</small>
              </label>
              <input type="text" id="identitas" class="form-control" name="identitas" autocomplete="off" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block">SUBMIT</button>
            </div>
          </form>

          <a class="mt-4" href="<?= base_url("visitor") ?>">Saya tidak memiliki member</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if ($this->session->flashdata('success_message')) : ?>
  <script>
    window.addEventListener('load', () => {
      Swal.fire("Data Tersimpan", "<?= $this->session->flashdata('success_message') ?>", "success");
    });
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('error_message')) : ?>
  <script>
    window.addEventListener('load', () => {
      Swal.fire("Gagal Menyimpan", "<?= $this->session->flashdata('error_message') ?>", "warning");
    });
  </script>
<?php endif; ?>