<?php
include ("../conx/cn.php");

$ejes = "SELECT
nivel_eje.nivel,
nivel_eje.unidad,
nivel_eje.horas,
nivel_eje.proposito,
nivel_eje.leccion,
nivel_eje.objetivos,
nivel_eje.Ejes,
total_cn.inidcadores
FROM
nivel_eje ,
total_cn
WHERE
nivel_eje.nivel = total_cn.nivel AND
nivel_eje.objetivos = total_cn.objetivos AND
nivel_eje.nivel='7mo BASICO' AND
nivel_eje.leccion like '%CN0%'";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEC4-OA</title>

 <!-- Custom fonts for this template-->
 <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PEC4<sup>OA</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Curriculum</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span> Educaci??n general (EG)</span>
        </a>
        <?php
        include('../includes/menu_lateral.php');
        ?>
      </li>



      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      

      <!-- Sidebar Toggler (Sidebar) -->
      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
         

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
         <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Eje: Ciencias Naturales 7?? b??sico</h1>
<p class="mb-4">Esta asignatura agrupa a varias disciplinas -la Biolog??a, la Qu??mica, la F??sica, la Bot??nica, la Geolog??a y la Astronom??a- que abordan una amplia variedad de fen??menos naturales: los seres vivos, la materia, la energ??a y sus transformaciones, el Sistema Solar y la Tierra.
<div class="col-sm-12 margen-abajo-sm text-right" style="font-size:0.92em;">
<span class="fa fa-star " aria-hidden="true" style="margin-left:10px"></span> = Objetivos priorizados (nivel 1) <span style="margin:0 10px"> | </span>
    <span class="fa fa-star-o" aria-hidden="true"></span> = Objetivos semi priorizados (nivel 2).
  </div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ejes, objetivos e indicadores</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px;">
        <thead>
        <tr>
            
            <th>Unidad</th>
            <th>Horas</th>
            <th>Proposito</th>
            <th>OA</th>
            <th>Ojetivos</th>
            <th>Inidcadores</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
         
            <th>Unidad</th>
            <th>Horas</th>
            <th>Proposito</th>
            <th>OA</th>
            <th>Ojetivos</th>
            <th>Indicadores</th>
          </tr>
        </tfoot>
        
        <tbody>
        <?php $resultado = mysqli_query($conexion, $ejes);
        
        while($row=mysqli_fetch_assoc($resultado)){ ?>
          <tr>
          
            <td><?php echo $row["unidad"];?></td>
            <td><?php echo $row["horas"];?></td>
            <td width="50%"><?php echo $row["proposito"];?></td>
            <td><?php echo $row["leccion"];?></td>
            <td><?php echo $row["objetivos"];?></td>
            <td width="100%"><?php echo $row["inidcadores"];?></td>
          </tr>
          <?php } ?> 
        </tbody>
      
      </table>
    </div>
  </div>
</div>



</div>
<!-- /.container-fluid -->

</div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          <span>Copyright &copy; PEC4 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Bootstrap core JavaScript-->
   <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>

