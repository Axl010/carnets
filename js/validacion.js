// Activar la validación personalizada de Bootstrap
(function () {
    'use strict';

    window.addEventListener('load', function () {
        // Selecciona todos los formularios a los que queremos aplicar la validación de Bootstrap
        var forms = document.getElementsByClassName('needs-validation');

        // Itera sobre los formularios y evita su envío si no son válidos
        Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });

        // Funcionalidad para generar contraseña automática
        const generarContrasenaBtn = document.getElementById('generarContrasena');
        const contrasenaInput = document.getElementById('contrasena');
        
        if (generarContrasenaBtn && contrasenaInput) {
            generarContrasenaBtn.addEventListener('click', function() {
                const contrasena = generarContrasena();
                contrasenaInput.value = contrasena;
                
                // Validar la contraseña generada
                if (contrasenaInput.checkValidity()) {
                    contrasenaInput.classList.remove('is-invalid');
                    contrasenaInput.classList.add('is-valid');
                    
                    // Mostrar mensaje de confirmación
                    mostrarMensajeExito('Contraseña generada exitosamente');
                } else {
                    contrasenaInput.classList.remove('is-valid');
                    contrasenaInput.classList.add('is-invalid');
                }
                
                // Enfocar el campo de contraseña
                contrasenaInput.focus();
            });
        }
    }, false);

    // Función para generar contraseña de 15 caracteres
    function generarContrasena() {
        const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789ñÑáéíóúÁÉÍÓÚ';
        let contrasena = '';
        
        for (let i = 0; i < 15; i++) {
            const indice = Math.floor(Math.random() * caracteres.length);
            contrasena += caracteres[indice];
        }
        
        return contrasena;
    }

    // Función para mostrar mensaje de éxito
    function mostrarMensajeExito(mensaje) {
        // Crear un elemento de notificación temporal
        const notificacion = document.createElement('div');
        notificacion.className = 'alert alert-success alert-dismissible fade show position-fixed';
        notificacion.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
        notificacion.innerHTML = `
            <i class="fas fa-check-circle me-2"></i>
            ${mensaje}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        document.body.appendChild(notificacion);
        
        // Remover la notificación después de 3 segundos
        setTimeout(() => {
            if (notificacion.parentNode) {
                notificacion.parentNode.removeChild(notificacion);
            }
        }, 3000);
    }
})();

