 <!-- partial:partials/_footer.html -->
 <footer class="footer">
 <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © bem udb surakarta</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="<?= base_url('asset/vendors/js/vendor.bundle.base.js');?>"></script>
    <script>
  function jenisFormChanged() {
    var jenisForm = document.querySelector('input[name="jenis-form"]:checked').value;
    if (jenisForm === "keuangan") {
      document.getElementById("keuangan-form").style.display = "block";
      document.getElementById("proker-form").style.display = "none";
    } else if (jenisForm === "proker") {
      document.getElementById("keuangan-form").style.display = "none";
      document.getElementById("proker-form").style.display = "block";
    }
  }
</script>
    <!-- inject:js -->
    <script src="<?= base_url('asset/js/hoverable-collapse.js');?>"></script>
    <script src="<?= base_url('asset/js/template.js');?>"></script>
    <script src="<?= base_url('asset/js/settings.js');?>"></script>
    <script src="<?= base_url('asset/ckeditor/ckeditor.js');?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url('asset/js/dashboard.js');?>"></script>
    <!-- End custom js for this page-->
  </body>
</html>