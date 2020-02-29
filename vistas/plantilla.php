<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SysPOS | Home</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <!-- <link rel="icon" href="component.html"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="vistas/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="vistas/plugins/toastr/toastr.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


    <!-- plugins JavaScript -->

    <!-- jQuery -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>

    <!-- DataTables -->
    <script src="vistas/plugins/datatables/jquery.dataTables.js"></script>
    <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- sweetAlert2 -->
    <script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- <script src="vistas/plugins/sweetalert2/sweetalert2.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <!-- Toastr -->
    <script src="vistas/plugins/toastr/toastr.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="vistas/dist/js/demo.js"></script>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <!-- <div class="wrapper"> -->
    <?php
    if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
        // <!-- Site wrapper -->
        echo '<div class="wrapper">';
        // <!-- Navbar -->
        // <!-- SECTION Barra de navegación - NavBar -->
        // <!-- NOTE Espacio para la barra de navegación superior -->

        include "vistas/modulos/navbar.php";
        // <!-- /.navbar -->

        // <!-- Main Sidebar Container -->
        // <!-- SECTION Barra de navegación lateral - SideBar -->
        include "vistas/modulos/sidebar.php";

        // <!-- Content Wrapper. Contains page content -->
        // <!-- SECTION contenedor principal - ContentWrapper -->
        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "inicio" ||
                $_GET["ruta"] == "usuarios" ||
                $_GET["ruta"] == "categorias" ||
                $_GET["ruta"] == "productos" ||
                $_GET["ruta"] == "clientes" ||
                $_GET["ruta"] == "ventas" ||
                $_GET["ruta"] == "crearVenta" ||
                $_GET["ruta"] == "reporteVentas" ||
                $_GET["ruta"] == "salir"
            ) {
                include "vistas/modulos/inicios/" . $_GET["ruta"] . ".php";
                // include"vistas/modulos/inicio/inicio.php";
            } else {
                include "modulos/404.php";
            }
        } else {
            include "modulos/inicios/inicio.php";
        }
        // include "vistas/modulos/contentWrapper.php";
        // <!-- /.content-wrapper -->

        // <!-- Footer  -->
        // <!-- SECTION pie de pagina - footer -->
        include "vistas/modulos/footer.php";
        // <!-- /. footer -->

        // <!-- Control Sidebar -->
        // <aside class="control-sidebar control-sidebar-dark">
        // <!-- Control sidebar content goes here -->
        // </aside>
        // <!-- /.control-sidebar -->
        echo '</div>';
    } else {
        include "modulos/login.php";
    }

    ?>
    </div>
    <!-- ./wrapper -->



    <script src="vistas/js/plantilla.js"></script>
    <script src="vistas/js/usuarios.js"></script>
    <script>
        $(function() {
            // $("#example1").DataTable();
            // $('#example2').DataTable({
            // "paging": true,
            // "lengthChange": true,
            // "searching": true,
            // "ordering": true,
            // "info": true,
            // "autoWidth": false,
            // "language": {
            //                 "sProcessing":     "Procesando...",
            //                 "sLengthMenu":     "Mostrar _MENU_ registros",
            //                 "sZeroRecords":    "No se encontraron resultados",
            //                 "sEmptyTable":     "Ningún dato disponible en esta tabla",
            //                 "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            //                 "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            //                 "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            //                 "sInfoPostFix":    "",
            //                 "sSearch":         "Buscar:",
            //                 "sUrl":            "",
            //                 "sInfoThousands":  ",",
            //                 "sLoadingRecords": "Cargando...",
            //                 "oPaginate": {
            //                     "sFirst":    "Primero",
            //                     "sLast":     "Último",
            //                     "sNext":     "Siguiente",
            //                     "sPrevious": "Anterior"
            //                 },
            //                 "oAria": {
            //                     "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            //                     "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            //                 }
            //             }
            // });
        });
    </script>
</body>

</html>
