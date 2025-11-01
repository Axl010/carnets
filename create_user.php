<?php 
    include("crud_user.php");
    include("header.php");
?>
    <section class="content py-4">   
        <div class="container" style="max-width: 1200px;">
            <!-- ACTION AGREGADO: El formulario debe enviarse a un archivo PHP -->
            <form id="form_create_user" method="POST" action="crud_user.php" enctype="multipart/form-data" class="needs-validation" novalidate>
                <!-- Encabezado alineado con el formulario -->
                <div class="col-lg-10 col-md-12 page-header-form fade-in">
                    <a href="index.php" class="button-back">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div class="header-content-form">
                        <h2 class="h3 fw-bold text-arabito mb-1">Agregar Usuario</h2>
                        <p class="text-muted mb-0">Complete la información para crear un nuevo usuario en el sistema</p>
                    </div>
                </div>
                
                <div class="row justify-content-center fade-in">
                    <!-- Columna izquierda -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card card_form fade-in"> 
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-arabito mb-4">Información Personal</h3>
                                <div class="form-group">
                                    <label for="nombre" class="form-label">Nombre Completo *</label>
                                    <input type="text" class="form-control form-control-md mb-3" name="nombre" id="nombre" tabindex="1" required placeholder="Ingrese el nombre completo"/>
                                    <div class="invalid-feedback">
                                        Por favor ingrese el nombre del usuario
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card card_form mt-4 fade-in"> 
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-arabito mb-4">Datos de Autenticación</h3>
                                <div class="form-group">
                                    <label for="usuario" class="form-label">Nombre de Usuario *</label>
                                    <input type="text" class="form-control form-control-md mb-3" name="usuario" id="usuario" tabindex="2" required placeholder="Ingrese el nombre de usuario"/>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un nombre de usuario
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control form-control-md" name="contrasena" id="contrasena" pattern="^[A-Za-z0-9]{15}$" tabindex="3" placeholder="Contraseña automática"/>
                                        <button type="button" class="btn btn-arabito" id="generarContrasena" title="Generar contraseña automática">
                                            <i class="fas fa-key me-1"></i> Generar
                                        </button>
                                    </div>
                                    <div id="passwordFeedback" class="form-text text-muted">
                                        La contraseña se generará automáticamente con 15 caracteres (letras y números)
                                    </div>
                                    <div class="invalid-feedback">
                                        La contraseña debe contener exactamente 15 caracteres alfanuméricos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Columna derecha -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card card_form fade-in">
                            <div class="card-body">
                                <h3 class="h5 fw-bold text-arabito mb-4">Información Laboral</h3>
                                <div class="form-group">
                                    <label for="cargo" class="form-label">Cargo *</label>
                                    <select class="form-select form-select-md mb-3" id="cargo" name="cargo" tabindex="4" required>
                                        <option value="" selected disabled>Seleccione un cargo</option>
                                        <option value="Gerente">Gerente</option>
                                        <option value="Dici">Dici</option>
                                        <option value="Supervisora">Supervisora</option>
                                        <option value="Cajera">Cajera</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione un cargo
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sucursal" class="form-label">Sucursal *</label>
                                    <select class="form-select form-select-md mb-3" id="sucursal" name="sucursal" tabindex="5" required>
                                        <option value="" selected disabled>Seleccione una sucursal</option>
                                        <option value="turen">Turen</option>
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
                                        <option value="araguadebarcelona">Aragua de Barcelona</option>
                                        <option value="puntademata">Punta de Mata</option>
                                        <option value="altagraciadeorituco">Altagracia de Orituco</option>
                                        <option value="cedianaco">Cedi Anaco</option>
                                        <option value="cedisanjuandelosmorros">Cedi San Juan</option>
                                        <option value="administracion">Administración</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Por favor seleccione una sucursal
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3 mt-4 fade-in">
                            <a href="index.php" role="button" class="btn btn-secondary btn-md flex-fill" tabindex="7">
                                <i class="fas fa-times me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-arabito btn-md flex-fill" name="create_usuario" tabindex="6">
                                <i class="fas fa-save me-2"></i> Guardar Usuario
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php
    include("footer.php");
?>