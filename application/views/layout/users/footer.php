</div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url(); ?>asset/vendors/js/vendor.bundle.base.js"></script>
    
    <!-- inject:js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="<?= base_url(); ?>asset/js/ajax.js"></script>

    <script src="<?= base_url(); ?>vendor\sweetalert2\dist\sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>asset/js/off-canvas.js"></script>
    <script src="<?= base_url(); ?>asset/js/hoverable-collapse.js"></script>
    <script src="<?= base_url(); ?>asset/js/template.js"></script>
    <script src="<?= base_url(); ?>asset/js/settings.js"></script>
    <script src="<?= base_url(); ?>asset/js/todolist.js"></script>
    <script src="<?= base_url(); ?>asset/ckeditor/ckeditor.js"></script>
  
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="<?= base_url(); ?>asset/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="<?= base_url(); ?>asset/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="<?= base_url(); ?>asset/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script>
      const absenURL = "<?= site_url('absensi/input_absen') ?>";
      const laporanS = "<?= site_url('laporan/input_laporan') ?>";
      const prokerS = "<?= site_url('proker/input_proker') ?>";
    </script>
  </body>
</html>
