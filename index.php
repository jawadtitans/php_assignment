<?php require 'config/db.php';?>
<?php require 'layouts/head.php'; ?>
<!-- navbar -->
 <?php require 'connect.php'; ?>


 <?php require 'layouts/navbar.php'; ?> 
<!-- ./wrapper -->
  <!-- the main content of the index and for each componet of teh dynamic accourding to the admin panel will cam in here -->


  <body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->

<?php
    // Load content dynamically based on 'page' parameter
    $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
    $file = "pages/{$page}.php";
    if (file_exists($file)) {
        require $file;
    } else {
        echo "Page not found.";
    }
    ?>

    <!-- /.content -->
  </div>


<!-- footer -->
 <?php require 'layouts/footer.php';?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
