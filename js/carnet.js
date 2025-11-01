// Generar código de barras (delegación: funciona en filas responsive/child)
$(function () {
  $(document).on('click', '.btn-barcode', function (e) {
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
      height: 110,
    });
    $('#barcodeModal').modal('show');
  });
});

// Imprimir carnet
function imprimirCarnet() {
  var modalContent = document.querySelector('#barcodeModal .modal-body').cloneNode(true);
  var printWindow = window.open('', '_blank');

  printWindow.document.write(`
    <html>
      <head>
        <title>Imprimir Carnet</title>
        <style>
          @font-face {
            font-family: 'Nunito';
            src:  url('fonts/Nunito-Regular.ttf') format('truetype'),
                  url('fonts/Nunito-Bold.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
          }
          body { text-align: center; font-family: 'Nunito'; }
          .carnet { 
            width: 89mm; height: 60mm; background-image: url('images/fondo_carnet.png');
            background-size: cover; background-position: center; background-repeat: no-repeat;
            text-align: center; margin: auto; position: relative;
          }
          #modalNombre { font-size: 5mm; font-weight: 600; padding-bottom: 0; padding-top: 8.5mm; text-transform: uppercase; }
          h2 { font-size: 20mm; font-weight: 600; margin-bottom: 0 !important; padding-bottom: 0; padding-top: 8mm; }
          svg { height: 30mm; width: 89mm; }
          .carnet-header { position: absolute; top: 7mm; left: 5mm; }
          .carnet-logo { height: 10mm; }
          .carnet-logo-right { position: absolute; bottom: 6mm; right: 3mm; height: 11mm; }
          @media print { body { -webkit-print-color-adjust: exact; print-color-adjust: exact; } .carnet { page-break-inside: avoid; } }
        </style>
      </head>
      <body>
        ${modalContent.outerHTML}
        <script>
          window.onload = function() {
            setTimeout(function() { window.print(); window.close(); }, 500);
          };
        <\/script>
      </body>
    </html>
  `);
  printWindow.document.close();
}

