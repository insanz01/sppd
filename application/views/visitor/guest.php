<div class="container py-4">
  <div class="row py-4">
    <div class="col-5 mx-auto">
      <div class="card">
        <div class="card-body">
          <form action="<?= base_url("visitor/do_submit") ?>" method="post" onsubmit="return validate()">
            <h3 class="text-center mb-4">BUKU TAMU</h3>
            <hr>
            <div class="form-group">
              <label for="nama">
                <h4>Nama</h4>
              </label>
              <input type="text" id="nama" class="form-control" name="nama" autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="profesi">
                <h4>Profesi</h4>
              </label>
              <select name="profesi" class="form-control" id="profesi" onchange="selectProfession(this)">
                <option value="">- PILIH -</option>
                <option value="PELAJAR">PELAJAR / MAHASISWA</option>
                <option value="PENGAJAR">GURU / DOSEN</option>
                <option value="KARYAWAN">KARYAWAN</option>
                <option value="WIRAUSAHA">WIRAUSAHA</option>
                <option value="LAINNYA">LAINNYA</option>
              </select>
              <small id="profesi-error" class="text-danger hide">Kolom profesi wajib dipilih</small>
            </div>
            <div class="form-group">
              <label for="instansi">
                <h4>Instansi</h4>
                <small>(Nama Perusahaan / Nama Sekolah / Nama Kampus)</small>
              </label>
              <input type="text" id="instansi" class="form-control" autocomplete="off" name="instansi" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block">SUBMIT</button>
            </div>
          </form>

          <a class="mt-4" href="<?= base_url("visitor/member") ?>">Berkunjung sebagai member</a>
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

<script>
  const validate = () => {
    const profesiForm = document.getElementById('profesi');
    const profesiError = document.getElementById('profesi-error');

    if (profesiForm.value == "") {
      if (profesiError.classList.contains("hide")) {
        profesiError.classList.remove("hide");
      }

      return false;
    }

    return true;
  }

  const selectProfession = (target) => {
    const profesiError = document.getElementById('profesi-error');

    if (target.value != "") {
      if (!profesiError.classList.contains("hide")) {
        profesiError.classList.add("hide");
      }
    }
  }
</script>