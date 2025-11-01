<?php 
    include("crud_user.php");
    include("header.php");
?>
<div class="container-fluid py-4" style="max-width:1920px; margin:auto;">
    <div class="page-header fade-in">
        <div class="page-header-content d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h1 class="page-title">Gestión de Usuarios</h1>
                <p class="page-subtitle">Administra los usuarios del sistema</p>
            </div>
            <a href="create_user.php" class="btn btn-agregar">
                <i class="fas fa-plus-circle"></i> Nuevo Usuario
            </a>
        </div>
    </div>

    <div class="card fade-in">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span><i class="fas fa-users me-2"></i>Lista de Usuarios</span>
            <div class="d-flex align-items-center" style="gap: 0.5rem;">
                <!-- Select de Sucursal -->
                <div class="input-group input-group-sm" style="max-width: 200px;">
                    <span class="input-group-text bg-light border-0"><i class="fas fa-store"></i></span>
                    <select class="form-select border-0 bg-light" id="filterSucursal">
                        <option value="">Todas las sucursales</option>
                        <option value="turen">Turen</option>
                        <option value="altagraciadeorituco">Altagracia de Orituco</option>
                        <option value="sansebastian">San Sebastian</option>
                        <option value="elsombrero">El Sombrero</option>
                        <option value="galponvalencia1">Galpon Valencia 1</option>
                        <option value="tinaquillo">Tinaquillo</option>
                        <option value="tocuyito">Tocuyito</option>
                        <option value="guacara">Guacara</option>
                        <option value="maracay">Maracay</option>
                        <option value="sanjuandelosmorros">San Juan de los Morros</option>
                        <option value="sanjuandelosmorros2">San Juan de los Morros 2</option>
                        <option value="valledelapascua">Valle de la Pascua</option>
                        <option value="valledelapascua2">Valle de la Pascua 2</option>
                        <option value="zaraza">Zaraza</option>
                        <option value="anaco">Anaco</option>
                        <option value="calabozo">Calabozo</option>
                        <option value="camaguan">Camaguan</option>
                        <option value="sanfernando1">San Fernando 1</option>
                        <option value="sanfernando2">San Fernando 2</option>
                        <option value="sanfernando3">San Fernando 3</option>
                        <option value="achaguas">Achaguas</option>
                        <option value="elsaman">El Saman</option>
                        <option value="mantecal">Mantecal</option>
                        <option value="elorza">Elorza</option>
                        <option value="bruzual">Bruzual</option>
                        <option value="carora">Carora</option>
                        <option value="pariaguan">Pariaguan</option>
                        <option value="cantaura">Cantaura</option>
                        <option value="sancarlos">San Carlos</option>
                        <option value="aragua">Aragua</option>
                        <option value="altagracia">Altagracia de Orituco</option>
                        <option value="puntademata">Punta de Mata</option>
                        <option value="administracion">Administración</option>
                    </select>
                </div>
                
                <!-- Select de Cargo -->
                <div class="input-group input-group-sm" style="max-width: 200px;">
                    <span class="input-group-text bg-light border-0"><i class="fas fa-briefcase"></i></span>
                    <select class="form-select border-0 bg-light" id="filterCargo">
                        <option value="">Todos los cargos</option>
                        <option value="Supervisora">Supervisora</option>
                        <option value="Gerente">Gerente</option>
                        <option value="Dici">Dici</option>
                        <option value="Cajera">Cajera</option>
                    </select>
                </div>
                
                <!-- Buscador existente -->
                <div class="input-group input-group-sm me-2" style="max-width: 250px;">
                    <span class="input-group-text bg-light border-0"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control border-0 bg-light" placeholder="Buscar usuario..." id="searchInput">
                </div>
                
                <button class="btn btn-sm btn-light" title="Filtrar" id="btnResetFilters">
                    <i class="fas fa-sync-alt"></i>
                </button>
            </div>
        </div>
        <div class="table-container">
            <div class="table-responsive">
                <table id="userTable" class="table custom-table nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Sucursal</th>
                            <th>Fecha Registro</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista_usuarios as $usuario): ?>
                            <?php 
                                $fecha = date('d-m-Y', strtotime($usuario['fecha_creacion']));
                                $hora = date('H:i:s', strtotime($usuario['fecha_creacion']));
                            ?>
                            <tr class="fade-in" data-href="update_user.php?id_usuario=<?= $usuario['id'] ?>">
                                <td class="fw-medium"><?= $usuario['usuario'] ?></td>
                                <td><?= $usuario['nombre'] ?></td>
                                <td><?= $usuario['cargo'] ?></td>
                                <td><?= $usuario['sucursal'] ?></td>
                                <td>
                                    <div><?= $fecha ?></div>
                                    <div class="small text-muted"><?= $hora ?></div>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center pointer-button" style="gap: 0.5rem;">
                                        <button class="btn btn-action btn-barcode" 
                                                data-usuario="<?= $usuario['usuario'] ?>" 
                                                data-password="<?= $usuario['password'] ?>" 
                                                data-nombre="<?= $usuario['nombre'] ?>"
                                                data-cargo="<?= $usuario['cargo'] ?>">
                                            <i class="fas fa-id-card"></i>
                                        </button>
                                        <a class="btn btn-action btn-light" href="update_user.php?id_usuario=<?= $usuario['id'] ?>" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-action btn-delete" onclick="eliminar(<?= $usuario['id'] ?>)" title="Eliminar">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Código de barras -->
<div class="modal fade" id="barcodeModal" tabindex="-1" aria-labelledby="barcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold text-modal" id="barcodeModalLabel">CARNET</h5>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hacer las filas clickeables para editar
        document.querySelectorAll('tr[data-href]').forEach(row => {
            row.addEventListener('click', function(e) {
                // Verificar que el clic no fue en un botón de acción
                if (!e.target.closest('.btn-action')) {
                    window.location.href = this.dataset.href;
                }
            });
        });
        
        // Búsqueda en tiempo real
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('userTable');
        const rows = table.getElementsByTagName('tr');
        
        searchInput.addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            
            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;
                
                for (let j = 0; j < cells.length; j++) {
                    const cellText = cells[j].textContent.toLowerCase();
                    if (cellText.indexOf(searchText) > -1) {
                        found = true;
                        break;
                    }
                }
                
                rows[i].style.display = found ? '' : 'none';
            }
        });

        // Generar código de barras
        document.querySelectorAll('.btn-barcode').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation(); // Prevenir que el evento se propague a la fila
                
                const usuario = this.dataset.usuario;
                const password = this.dataset.password;
                const nombre = this.dataset.nombre;
                const cargo = this.dataset.cargo;

                document.getElementById('modalNombre').textContent = nombre;
                document.getElementById('barcode').innerHTML = '';

                JsBarcode('#barcode', String(password), {
                    format: 'CODE128',
                    displayValue: false,
                    lineColor: '#000',
                    width: 3,
                    height: 110
                });
                
                // Usando jQuery para mostrar el modal (compatible con código original)
                $('#barcodeModal').modal('show');
            });
        });
        
        // Prevenir que los botones de acción disparen el evento de la fila
        document.querySelectorAll('.btn-action').forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation(); // Detener la propagación del evento
            });
        });
    });

    // Función de impresión
    function imprimirCarnet() {
    let modalContent = document.querySelector("#barcodeModal .modal-body").cloneNode(true);
    let printWindow = window.open("", "_blank");
    
    // Obtener la ruta base absoluta
    const fullPath = window.location.href;
    const baseUrl = fullPath.substring(0, fullPath.lastIndexOf('/'));
    
    printWindow.document.write(`
        <html>
            <head>
                <title>Imprimir Carnet</title>
                <style>
                @font-face {
                    font-family: 'Nunito';
                    src: url('${baseUrl}/fonts/Nunito-Regular.ttf') format('truetype'),
                        url('${baseUrl}/fonts/Nunito-Bold.ttf') format('truetype');
                    font-weight: normal;
                    font-style: normal;
                }
                body { 
                    text-align: center; 
                    font-family: 'Nunito', sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f5f7f9;
                }
                .carnet { 
                    width: 90mm;
                    height: 60mm;
                    background-image: url('..   /images/fondo_carnet.png') !important; 
                    background-size: cover !important;
                    background-position: center !important;
                    background-repeat: no-repeat !important;
                    text-align: center;
                    margin: 0 auto;
                    position: relative;
                    border: 2px solid #000000b1;
                    border-radius: 10px;
                    -webkit-print-color-adjust: exact !important;
                    print-color-adjust: exact !important;
                }
                #modalNombre {
                    font-size: 5mm;
                    font-weight: 600;
                    padding-bottom: 0;
                    padding-top: 8.5mm;
                    text-transform: uppercase;
                    color: #000;
                    margin: 0;
                }
                .carnet-barcode svg {
                    height: 30mm;
                    width: 89mm;
                    margin: 0 auto;
                    display: block;
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
                .carnet-content {
                    width: 100%;
                    height: 100%;
                    position: relative;
                }
                .carnet-info {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                }
                .carnet-barcode {
                    position: absolute;
                    bottom: 15mm;
                    width: 100%;
                }
                @media print {
                    body {
                        -webkit-print-color-adjust: exact !important;
                        print-color-adjust: exact !important;
                        margin: 0 !important;
                        padding: 0 !important;
                        background: none !important;
                    }
                    .carnet {
                        -webkit-print-color-adjust: exact !important;
                        print-color-adjust: exact !important;
                        page-break-inside: avoid;
                        box-shadow: none !important;
                        border: none !important;
                    }
                }
                </style>
            </head>
            <body>
                ${modalContent.outerHTML}
                <script>
                    window.onload = function() {
                        // Asegurar que las imágenes se carguen con rutas absolutas
                        const carnet = document.querySelector('.carnet');
                        if (carnet) {
                            const logos = carnet.querySelectorAll('img');
                            if (logos[0]) logos[0].src = '${baseUrl}/images/titanio-center.png';
                            if (logos[1]) logos[1].src = '${baseUrl}/images/arabito-center.png';
                            
                            // También establecer el fondo con JavaScript por si acaso
                            carnet.style.backgroundImage = 'url("${baseUrl}/images/fondo_carnet.png")';
                        }
                        
                        setTimeout(function() {
                            window.print();
                            setTimeout(function() {
                                window.close();
                            }, 500);
                        }, 1000);
                    };
                <\/script>
            </body>
        </html>
    `);
    printWindow.document.close();
}
function verificarImagenFondo() {
    const fullPath = window.location.href;
    const baseUrl = fullPath.substring(0, fullPath.lastIndexOf('/'));
    const imagenUrl = baseUrl + '/images/fondo_carnet.png';
    
    console.log('Verificando imagen en:', imagenUrl);
    
    const img = new Image();
    img.src = imagenUrl;
    img.onload = function() {
        console.log('✅ La imagen de fondo existe y se puede cargar');
        console.log('Tamaño:', img.width + 'x' + img.height);
    }
    img.onerror = function() {
        console.log('❌ La imagen de fondo NO se puede cargar:', imagenUrl);
        
        // Probar rutas alternativas
        const rutasAlternativas = [
            'images/fondo_carnet.png',
            '../images/fondo_carnet.png',
            './images/fondo_carnet.png',
            window.location.origin + '/images/fondo_carnet.png'
        ];
        
        console.log('Probando rutas alternativas:');
        rutasAlternativas.forEach((ruta, index) => {
            const testImg = new Image();
            testImg.onload = function() {
                console.log('✅ Ruta alternativa funciona:', ruta);
            }
            testImg.onerror = function() {
                console.log('❌ Ruta alternativa falla:', ruta);
            }
            testImg.src = ruta;
        });
    }
}

// Llamar a la verificación cuando se cargue la página
document.addEventListener('DOMContentLoaded', function() {
    verificarImagenFondo();
});

    // Eliminar Usuario
    function eliminar(id) {
        // Prevenir que el evento se propague
        event.stopPropagation();
        
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