<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
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
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
          <h1 class="text-center">
            Selamat Datang di SPPD
          </h1>
        </div>
        <div class="col-6">
          <div class="card bg-primary">
            <div class="card-body">
              <h3 class="text-center text-white">
                SURAT MASUK
              </h3>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card bg-danger">
            <div class="card-body">
              <h3 class="text-center text-white">
                SURAT KELUAR
              </h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  window.addEventListener('load', () => {
    var map = L.map('map').setView([-3.3089402, 114.6136443], 15);
  
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-3.3089402, 114.6136443]).addTo(map);
  })
</script>