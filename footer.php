    <!-- DataTable JS/Responsive -->
    <script src="plugins/datatable/jquery-3.5.1.js"></script>
    <script src="plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="plugins/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="plugins/datatable/responsive.bootstrap5.min.js"></script>
    <!--DataTables-->
    <script src="js/dataTable.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--Sweet Alert-->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Mensaje -->
    <?php                  
        //Verificar si se ha enviado un mensaje
        if(isset($_GET['mensaje'])){
            //verificar si es la primera vez que se envia un mensaje
            if(!isset($_SESSION['mensaje_mostrado']) || $_SESSION['mensaje_mostrado']) {
                $_SESSION['mensaje_mostrado'] = $_GET['mensaje'];
                $icono = "success"; // Por defecto
                // Verificar el tipo de mensaje y asignar el icono correspondiente
                if(strpos($_GET['mensaje'],'Error') !== false){
                    $icono = "error";
                } elseif(strpos($_GET['mensaje'], 'existe') !== false){
                    $icono = "warning";
                } 
    ?>
    <script>
        Swal.fire({
            icon:"<?php echo $icono; ?>", 
            title:"<?php echo $_GET['mensaje']; ?>",
            timer: 1500,
            showConfirmButton: false,
            customClass: {
                popup: "style-swal"
            }
        }).then(() => {
            window.location.href = "<?php echo $_SERVER['PHP_SELF']; ?>";
        });
    </script> 
    <?php }}?>
</body>
</html>