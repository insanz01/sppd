<div class="row">
  <div class="col-12 login-page">
    <div class="login-box">
      <div class="login-logo">
        <a class="text-white" href="<?= base_url() ?>"><b>Login</b> | SPPD</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <?php if($this->session->flashdata('pesan')): ?>
            <div class="text-center">
              <?= $this->session->flashdata('pesan') ?>
            </div>
          <?php endif; ?>
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="<?= base_url('auth/do_login') ?>" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" autocomplete="off" name="username" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mb-1 mt-3">
            <!-- <a href="<?= base_url('visitor') ?>" target="_blank">Beralih ke halaman buku tamu pengunjung</a> -->
          </p>
          <!-- <p class="mb-0">
            <a href="<?= base_url('signup') ?>" class="text-center">Registrasi pengguna baru</a>
          </p> -->
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
  </div>
</div>
