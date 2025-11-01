$(document).ready(function() {
    // Inicializar DataTable
    var table = $('#userTable').DataTable({
        "pageLength": 25,
        "lengthMenu": [
            [5, 10, 25, 50, 100],
            [5, 10, 25, 50, 100]
        ],
        "order": [],
        "responsive": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
        },
        "columnDefs": [
            {
                "targets": -1,
                "orderable": false,
                "searchable": false
            }
        ],
        "dom": 'rtip'
    });

    // Integrar búsqueda personalizada
    $('#searchInput').on('keyup', function() {
        table.search(this.value).draw();
    });

    // Filtro por sucursal (columna 3)
    $('#filterSucursal').on('change', function() {
        applyFilters();
    });

    // Filtro por cargo (columna 2)
    $('#filterCargo').on('change', function() {
        applyFilters();
    });

    // Función para aplicar ambos filtros
    function applyFilters() {
        var sucursal = $('#filterSucursal').val();
        var cargo = $('#filterCargo').val();
        
        // Limpiar filtros anteriores
        table.columns().search('');
        
        // Aplicar filtro de sucursal si hay valor
        if (sucursal !== '') {
            table.columns(3).search(sucursal);
        }
        
        // Aplicar filtro de cargo si hay valor
        if (cargo !== '') {
            table.columns(2).search(cargo);
        }
        
        // Redibujar la tabla
        table.draw();
    }

    // Botón para resetear filtros
    $('#btnResetFilters').on('click', function() {
        $('#filterSucursal').val('');
        $('#filterCargo').val('');
        $('#searchInput').val('');
        
        table.columns().search('');
        table.search('').draw();
    });

    // Generar código de barras
    document.querySelectorAll('.btn-barcode').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
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
            
            $('#barcodeModal').modal('show');
        });
    });
});