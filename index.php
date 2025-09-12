<?php 
include("crud_user.php");
include("header.php");
?>
<section class="col-md-10 mx-auto my-4">
    <div class="d-flex justify-content-center align-items-center" style="gap:.75rem;">
        <h2 class="h3 fw-bold text-arabito mb-0">Usuarios</h2>
        <a href="create_user.php" class="btn btn-agregar btn-sm" tabindex="1"><i class="fa fa-plus me-1"></i>Agregar Usuario</a>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card my-2">
                <div class="container-fluid my-3">
                    <div class="table-responsive">
                        <table id="table" class="table table-hover nowrap custom-table" cellspacing="0" style="width:100%">
                            <thead class="table-danger">
                                <tr>
                                    <th class="text-center">Usuario</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Cargo</th>
                                    <th class="text-center">Sucursal</th>
                                    <th class="text-center">Fecha Registro</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista_usuarios as $usuario): ?>
                                    <?php 
                                        $fecha = date('d-m-Y', strtotime($usuario['fecha_creacion']));
                                        $hora = date('H:i:s', strtotime($usuario['fecha_creacion']));
                                    ?>
                                    <tr class='text-center tr_edit' data-href="update_user.php?id_usuario=<?= $usuario['id'] ?>">
                                        <td style="vertical-align: middle;"> <?= $usuario['usuario'] ?> </td>
                                        <td style="vertical-align: middle;"> <?= $usuario['nombre'] ?> </td>
                                        <td style="vertical-align: middle;"> <?= $usuario['cargo'] ?> </td>
                                        <td style="vertical-align: middle;"> <?= $usuario['sucursal'] ?> </td>
                                        <td style="vertical-align: middle;">
                                            <div><?= $fecha ?></div>
                                            <div class="hora"><?= $hora ?></div>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <button class="btn btn-arabito btn-sm btn-barcode" 
                                                    data-usuario="<?= $usuario['usuario'] ?>" 
                                                    data-password="<?= $usuario['password'] ?>" 
                                                    data-nombre="<?= $usuario['nombre'] ?>"
                                                    data-cargo="<?= $usuario['cargo'] ?>">
                                                <i class="fas fa-id-badge"></i> Generar Carnet
                                            </button>
                                            <a class="btn btn-danger btn-sm" href="javascript:eliminar(<?= $usuario['id'] ?>);" role="button">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal Código de barras -->
<div class="modal fade" id="barcodeModal" tabindex="-1" aria-labelledby="barcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-arabito" id="barcodeModalLabel">CARNET</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="carnet" id="carnet">
                    <div class="carnet-content">
                        <div class="carnet-header">
                            <img src="images/titanio-center.png" alt="Logo Izquierdo" class="carnet-logo">
                        </div>
                        <div class="carnet-info">
                            <h2 id="modalNombre"></h2>
                        </div>
                        <div class="carnet-barcode">
                            <svg id="barcode"></svg>
                        </div>
                        <img src="images/arabito-center.png" alt="Logo Derecho" class="carnet-logo-right">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-arabito" onclick="imprimirCarnet()">Imprimir Carnet</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Generar código de barras (delegación para filas responsive/child)
    $(function(){
        $(document).on('click', '.btn-barcode', function(e){
            e.preventDefault();
            e.stopPropagation();

            const usuario = $(this).data('usuario');
            const password = $(this).data('password');
            const nombre = $(this).data('nombre');
            const cargo = $(this).data('cargo');

            $('#modalNombre').text(nombre);
            $('#barcode').empty();

            JsBarcode('#barcode', String(password), {
                format: 'CODE128',
                displayValue: false,
                lineColor: '#000',
                width: 3,
                height: 110
            });
            $('#barcodeModal').modal('show');
        });
    });
    function imprimirCarnet() {
    let modalContent = document.querySelector("#barcodeModal .modal-body").cloneNode(true);
    let printWindow = window.open("", "_blank");

    printWindow.document.write(`
        <html>
            <head>
                <title>Imprimir Carnet</title>
                <style>
                @font-face {
                    font-family: 'Nunito';
                    src: url('fonts/Nunito-Regular.ttf') format('truetype'),
                        url('fonts/Nunito-Bold.ttf') format('truetype');
                    font-weight: normal;
                    font-style: normal;
                }
                body { 
                    text-align: center; 
                    font-family: 'Nunito';
                }
                .carnet { 
                    width: 89mm;
                    height: 60mm;
                    background-image: url('images/fondo_carnet-recor.png'); 
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    text-align: center;
                    margin: auto;
                    position: relative;
                }
                
                #modalNombre {
                    font-size: 5mm;
                    font-weight: 600;
                    padding-bottom: 0;
                    padding-top: 8.5mm;
                    text-transform: uppercase;
                }
                h2 {
                    font-size: 20mm;
                    font-weight: 600;
                    margin-bottom: 0 !important;
                    padding-bottom: 0;
                    padding-top: 8mm;
                }
                svg {
                    height: 30mm;
                    width: 89mm;
                }
                .carnet-header {
                    position: absolute;
                    top: 7mm;
                    left: 5mm;
                }
                .carnet-logo {
                    height: 10mm;
                }
                .carnet-logo-right {
                    position: absolute;
                    bottom: 6mm;
                    right: 3mm;
                    height: 11mm;
                }
                @media print {
                    body {
                        -webkit-print-color-adjust: exact;
                        print-color-adjust: exact;
                    }
                    .carnet {
                        page-break-inside: avoid;
                    }
                }
                </style>
            </head>
            <body>
                ${modalContent.outerHTML}
                <script>
                    window.onload = function() {
                        setTimeout(function() {
                            window.print();
                            window.close();
                        }, 500);
                    };
                <\/script>
            </body>
        </html>
    `);
    printWindow.document.close();
}
    // Eliminar Usuario
    function eliminar(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar el usuario?',
            showCancelButton: true,
            confirmButtonColor: "#eb6f22",
            confirmButtonText: 'Aceptar',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "crud_user.php?userId=" + id;
            }
        });
    }
</script>
<?php include("footer.php") ?>