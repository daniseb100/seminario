<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="css/styles.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
    <h1 class="text-center w-100">Biblioteca</h1>
    <body bgcolor="#FFFFFF">


<?php
$archivo = "alumnos.txt";//creamos un archivo llamado 'alumnos'
$gestor = @fopen("alumnos.txt", "w");//abrimos este archivo

fclose($gestor);//cerramos el archivo de alumnos
?>
</FORM>
</body>
</html>




    <FORM method="post" name="formulario">
    





    
        <form id="form-registro">
            <h3 class="text-center w-100">&nbsp; Datos Personales </h3>
            
             <div class="row w-100 py-3 text-center">
                 <center><button type="button" name="butper1" id="butper1" class="btn btn-outline-primary w-25" onclick="opc1()">Opcion 1</button>
               <button type="button" name="butper2" id="butper3" class="btn btn-outline-primary w-25" onclick="nuevoImp()">Opcion 2</button>
               <button type="submit" name="butper3" id="butper3" class="btn btn-outline-primary w-25" onclick="opc3()">Opcion 3</button></center>  
            </div>
            
            <div class="row">
                <div class="col-6 form-group">
                    <label for="nom" class="form-label">Id</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>

                <div class="col-6 form-group">
                    <label for="id" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
            </div>


            <div class="row">
            
                <div class="col-6 form-group">
                    <label for="dir" class="form-label">Cantidad</label>
                    
                    <input type="number" class="form-control" id="can" name="can">
                </div>

                <div class="col-6 form-group">
                    <label for="estatura" class="form-label">Precio</label><br>
                    <input type="number" class="form-control" id="prec" name="prec">
                </div>
            </div>
            
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="js/funciones.js"></script>

  
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/pages/dashboard.js"></script>

<?php

$nombre="";
if (!empty($_REQUEST['id'])){
$nombre=$_REQUEST['id'];
}
 
$apellido="";
if (!empty($_REQUEST['nom'])){
$apellido=$_REQUEST['nom'];
}
 
$carrera="";
if (!empty($_REQUEST['cant'])){
$carrera=$_REQUEST['cant'];
}
 
$materia="";
if (!empty($_REQUEST['prec'])){
$materia=$_REQUEST['prec'];
}
 
//Luego sobrescribo el txt
 
$archivo="datos.txt";
  $file=fopen($archivo,"w");
     fwrite($file,$nombre,$apellido,$carrera,$materia);
?>

</body>
</html>
