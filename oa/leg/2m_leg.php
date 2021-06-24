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
total_len.inidcadores
FROM
nivel_eje ,
total_len
WHERE
nivel_eje.nivel = total_len.nivel AND
nivel_eje.objetivos = total_len.objetivos AND
nivel_eje.nivel='2do MEDIO'";

?>

<?php include('../includes/header.php');  ?>
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
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span> Educación general (EG)</span>
        </a>
        <?php
        include('../includes/menu_lateral.php');
        ?>
      </li>
       </ul>
  
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

        </nav>
      
         <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Eje: Lengua y literatura 2º Medio</h1>
<p>Su objetivo es que los alumnos adquieran las habilidades comunicativas que son 
indispensables para desenvolverse en el mundo y para integrarse en una sociedad democrática de manera activa e informada.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Ejes, objetivos e indicadores</h6>
  </div>
  <div class="card-body">
    <?php include('../includes/table1.php'); ?>
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
            <span aria-hidden="true">×</span>
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

 <?php
 include ('../includes/footer.php');
 ?>