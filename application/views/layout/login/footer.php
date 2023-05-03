 <!-- base:js -->
 <script src="<?= base_url('asset/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="<?= base_url('asset/js/off-canvas.js'); ?>"></script>
  <script src="<?= base_url('asset/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?= base_url('asset/js/template.js'); ?>"></script>
  <script src="<?= base_url('asset/js/settings.js'); ?>"></script>
  <script src="<?= base_url('asset/js/todolist.js'); ?>"></script>
  <!-- endinject -->
  <script>
    function togglepassword(){
      const passwordInput = document.getElementById('password');
      const classPassword = document.getElementById('iconnya');
      if(passwordInput.type === "password"){
        passwordInput.type = "text";
        classPassword.className = "mdi mdi-eye-off";
      } else {
        passwordInput.type = "password";
        classPassword.className = "mdi mdi-eye";
      }
    } 
  </script>
</body>

</html>