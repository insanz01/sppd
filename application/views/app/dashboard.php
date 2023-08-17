<style>
  .bg-warna-1 {
    background-color: #AAE3E2;
  }
  .bg-warna-2 {
    background-color: #D9ACF5;
  }
  .bg-warna-3 {
    background-color: #7286D3;
  }
  .bg-warna-4 {
    background-color: #FD8A8A;
  }
</style>

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
        <div class="col-12 mb-4 text-center">
          <img src="<?= base_url('assets/bahan/icon1.png') ?>" width="250px" alt="">
          <h2 class="text-center">
            Selamat Datang di SPPD Dinas Ketahanan Pangan, Pertanian dan Perikanan (DKP3) Banjarmasin
          </h2>
        </div>
        
        <div class="col-lg-3 col-6">

          <div class="small-box bg-warna-1">
            <div class="inner">
              <h3><?= $total_lpd ?></h3>
              <p>Total LPD</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-lg-3 col-6">

          <div class="small-box bg-warna-2">
            <div class="inner">
              <h3><?= $total_sppd ?></h3>
              <p>Total SPPD</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-lg-3 col-6">

          <div class="small-box bg-warna-3">
            <div class="inner">
              <h3><?= $total_spt ?></h3>
              <p>Total SPT</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-lg-3 col-6">

          <div class="small-box bg-warna-4">
            <div class="inner">
              <h3><?= $total_bpd ?></h3>
              <p>Total BPD</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>

        <div class="col-lg-12 col-6">

          <div class="small-box bg-warna-4">
            <div class="inner">
              <h3><?= $total_npd ?></h3>
              <p>Total NPD</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="row">
        <!-- <div class="col-5 mx-auto">
          <div id="map"></div>
        </div> -->
        <div class="col-12 mx-auto">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const getChartJabatan = async () => {
    return await axios.get(`<?= base_url('api/jabatan/chart') ?>`).then(res => res.data);
  }

  window.addEventListener('load', async () => {
    const ctx = document.getElementById('myChart');

    let labels = [''];
    let data = [''];

    const result = await getChartJabatan();

    if(result.success) {
      result.data.forEach(res => {
        console.log(res);
        labels.push(res.jabatan);
        data.push(res.jumlah);
      })
    }
 
    labels.push('');
    data.push('');
    
    new Chart(ctx, {
      type: 'bar',
      data: {
        // labels: ['', 'Blue', 'Yellow', 'Green', 'Purple', ''],
        labels: labels,
        datasets: [{
          label: '# of Jabatan',
          // data: [0, 19, 3, 5, 2, 0],
          data: data,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>

<!-- <script>
  window.addEventListener('load', () => {
    var map = L.map('map').setView([-3.3089402, 114.6136443], 17);
  
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var marker = L.marker([-3.3089402, 114.6136443]).addTo(map);
  })
</script> -->