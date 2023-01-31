  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y', time()) ?> <a href="https://google.com/">SPPD</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> development
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

  <!-- DataTables -->
  <!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script> -->
  <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

  <script>
    //  tinymce.init({
    //    selector: 'textarea',
    //    plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
    //    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
    //    toolbar_mode: 'floating',
    //    tinycomments_mode: 'embedded',
    //    tinycomments_author: 'Ilham Fajar Dev',
    // });
  </script>

  <script type="text/javascript">
    // $(function () {
    // Summernote
    // $('#summernote').summernote();
    $(document).ready(function() {
      $('#summernote').summernote({
        height: "500px",
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['color', ['color']],
          ['fontsize', ['fontsize']],
          ['para', ['ul', 'ol', 'paragraph']],
          // ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ],
        callbacks: {
          onImageUpload: function(image) {
            uploadImage(image[0]);
          },
          onMediaDelete: function(target) {
            deleteImage(target[0].src);
          }
        }
      });

      function uploadImage(image) {
        var data = new FormData();
        data.append("image", image);
        $.ajax({
          url: "<?php echo site_url('summernote/upload') ?>",
          cache: false,
          contentType: false,
          processData: false,
          data: data,
          type: "POST",
          success: function(url) {
            $('#summernote').summernote("insertImage", url);
          },
          error: function(data) {
            console.log(data);
          }
        });
      }

      function deleteImage(src) {
        $.ajax({
          data: {
            src: src
          },
          type: "POST",
          url: "<?php echo site_url('summernote/delete') ?>",
          cache: false,
          success: function(response) {
            console.log(response);
          }
        });
      }
    });

    $(document).ready(function() {
      $('#summernoteKI').summernote({
        height: "300px",
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['color', ['color']],
          ['fontsize', ['fontsize']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
      })

    });

    $(document).ready(function() {
      $('#summernoteKD').summernote({
        height: "300px",
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['color', ['color']],
          ['fontsize', ['fontsize']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
      })

      $('.summernoteSimple').summernote({
        height: "100px",
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
      })

    });
    // })
  </script>

  <script>
    $(function() {
      $("#tabel1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

      $(".custom-table").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

      $('#tabel-print').DataTable({
        "lengthChange": false,
        "responsive": true,
        "autoWidth": false,
        "paging": true,
        "info": true,
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            text: 'Cetak / Print',
            title: 'Laporan Dana Masuk',
          },
          {
            extend: 'excel',
            text: 'Export Excel',
            messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
          },
        ]
      });

      $('#tabel-print-2').DataTable({
        "lengthChange": false,
        "responsive": true,
        "autoWidth": false,
        "paging": true,
        "info": true,
        dom: 'Bfrtip',
        buttons: [{
            extend: 'print',
            text: 'Cetak / Print',
            title: 'Laporan Dana Keluar',
          },
          {
            extend: 'excel',
            text: 'Export Excel',
            messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
          },
        ]
      });

      $('#tabel2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  </body>

  </html>