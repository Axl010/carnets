$(document).ready(function () {
    $('#table').DataTable({
        "pageLength": 25,
        "lengthMenu": [
            [5, 10, 25, 50, 100],
            [5, 10, 25, 50, 100]
        ],
        "order": [], // Desactiva el ordenamiento automático
        "responsive": true,
        "pagingType": "simple_numbers", // Evita los estilos de Bootstrap en la paginación
        language: {
            "url": "plugins/datatable/es-Es.json"
        }
    });
    
    // Evento para redirigir al hacer clic en una fila (evitar interceptar botones y filas child)
    $('#table tbody').on('click', 'tr', function (e) {
        // Ignorar si el click viene desde controles, botones o dentro de filas .child (responsive)
        if (
            $(e.target).closest('a, button, img, .btn-barcode, .dtr-control').length ||
            $(this).hasClass('child')
        ) {
            return;
        }

        const href = $(this).data('href');
        if (href) {
            window.location.href = href;
        }
    });
});
