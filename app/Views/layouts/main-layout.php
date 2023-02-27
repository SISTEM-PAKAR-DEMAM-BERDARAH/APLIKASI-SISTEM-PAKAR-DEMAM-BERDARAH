<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>Sistem Pakar - DBD (Demam Berdarah Dengue)</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
   <meta content="Themesbrand" name="author" />
   <!-- App favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.ico">
   <!-- DataTables -->
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body data-layout="horizontal" data-topbar="colored">
   <div id="layout-wrapper">
      <header id="page-topbar">

         <?= $this->include('/layouts/header') ?>
         
         <?= $this->include('/layouts/nav-menu') ?>
      
      </header>
      
      <div class="main-content">

         <?= $this->renderSection('content') ?>
         
         <?= $this->include('/layouts/footer') ?>
      
      </div>
   
   </div>

   <!-- JAVASCRIPT -->
   <script src="assets/libs/jquery/jquery.min.js"></script>
   <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/libs/metismenu/metisMenu.min.js"></script>
   <script src="assets/libs/simplebar/simplebar.min.js"></script>
   <script src="assets/libs/node-waves/waves.min.js"></script>
   <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
   <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
   
   <!-- Required datatable js -->
   <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   
   <!-- Buttons examples -->
   <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
   <script src="assets/libs/jszip/jszip.min.js"></script>
   <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
   <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
   <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
   
   <!-- Responsive examples -->
   <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

   <!-- Datatable init js -->
   <script src="assets/js/pages/datatables.init.js"></script>
   
   <!-- apexcharts -->
   <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
   <script src="assets/js/pages/dashboard.init.js"></script>
   <!-- App js -->
   <script src="assets/js/app.js"></script>
</body>
</html>