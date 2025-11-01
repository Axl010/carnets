<?php 
    include("crud_user.php");
    include("header.php");
?>
<!-- Main content -->
<section class="content py-4">   
    <div class="container" style="max-width: 1200px;">
        <form id="form_update_user" method="POST" action="update_user.php?id_usuario=<?= $id_usuario ?>" enctype="multipart/form-data" class="needs-validation" novalidate>
            <!-- Encabezado alineado con el formulario -->
            <div class="col-lg-10 col-md-12 page-header-form fade-in">
                <a href="index.php" class="button-back">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="header-content-form">
                    <h2 class="h3 fw-bold text-arabito mb-1">Editar Usuario</h2>
                    <p class="text-muted mb-0">Complete la información para actualizar el usuario</p>
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
                                <input type="text" class="form-control form-control-md mb-3" name="nombre" id="nombre" value="<?= $usuario_data['nombre'] ?>" tabindex="1" required/>
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
                                <input type="text" class="form-control form-control-md mb-3" name="usuario" id="usuario" value="<?= $usuario_data['usuario'] ?>" tabindex="2" required/>
                                <div class="invalid-feedback">
                                    Por favor ingrese un nombre de usuario
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control form-control-md" name="contrasena" id="contrasena" value="<?= $usuario_data['password'] ?>" pattern="^[A-Za-z0-9]{15}$" tabindex="3" placeholder="Contraseña automática"/>
                                    <button type="button" class="btn btn-arabito" id="generarContrasena" title="Generar contraseña automática">
                                        <i class="fas fa-key me-1"></i> Generar
                                    </button>
                                </div>
                                <div class="form-text text-muted">
                                    La contraseña se generará automáticamente con 15 caracteres (letras y números)
                                </div>
                                <div class="invalid-feedback">
                                    La contraseña debe contener exactamente 15 caracteres alfanuméricos
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.col -->
                
                <!-- Columna derecha -->
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card card_form fade-in">
                        <div class="card-body">
                            <h3 class="h5 fw-bold text-arabito mb-4">Información Laboral</h3>
                            <div class="form-group">
                                <label for="cargo" class="form-label">Cargo *</label>
                                <select class="form-select form-select-md mb-3" id="cargo" name="cargo" tabindex="4" required>
                                    <option value="Gerente" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Gerente') ? 'selected' : '' ?>>Gerente</option>
                                    <option value="Dici" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Dici') ? 'selected' : '' ?>>Dici</option>
                                    <option value="Supervisora" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Supervisora') ? 'selected' : '' ?>>Supervisora</option>
                                    <option value="Cajera" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Cajera') ? 'selected' : '' ?>>Cajera</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor seleccione un cargo
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sucursal" class="form-label">Sucursal *</label>
                                <select class="form-select form-select-md mb-3" id="sucursal" name="sucursal" tabindex="5" required>
                                    <option value="turen" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'turen') ? 'selected' : '' ?>>Turen</option>
                                    <option value="sansebastian" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sansebastian') ? 'selected' : '' ?>>San Sebastian</option>
                                    <option value="elsombrero" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elsombrero') ? 'selected' : '' ?>>El Sombrero</option>
                                    <option value="galponvalencia1" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'galponvalencia1') ? 'selected' : '' ?>>Galpon Valencia 1</option>
                                    <option value="tinaquillo" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'tinaquillo') ? 'selected' : '' ?>>Tinaquillo</option>
                                    <option value="tocuyito" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'tocuyito') ? 'selected' : '' ?>>Tocuyito</option>
                                    <option value="guacara" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'guacara') ? 'selected' : '' ?>>Guacara</option>
                                    <option value="maracay" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'maracay') ? 'selected' : '' ?>>Maracay</option>
                                    <option value="sanjuandelosmorros" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanjuandelosmorros') ? 'selected' : '' ?>>San Juan de los Morros</option>
                                    <option value="sanjuandelosmorros2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanjuandelosmorros2') ? 'selected' : '' ?>>San Juan de los Morros 2</option>
                                    <option value="valledelapascua" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'valledelapascua') ? 'selected' : '' ?>>Valle de la Pascua</option>
                                    <option value="valledelapascua2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'valledelapascua2') ? 'selected' : '' ?>>Valle de la Pascua 2</option>
                                    <option value="zaraza" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'zaraza') ? 'selected' : '' ?>>Zaraza</option>
                                    <option value="anaco" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'anaco') ? 'selected' : '' ?>>Anaco</option>
                                    <option value="calabozo" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'calabozo') ? 'selected' : '' ?>>Calabozo</option>
                                    <option value="camaguan" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'camaguan') ? 'selected' : '' ?>>Camaguan</option>
                                    <option value="sanfernando1" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando1') ? 'selected' : '' ?>>San Fernando 1</option>
                                    <option value="sanfernando2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando2') ? 'selected' : '' ?>>San Fernando 2</option>
                                    <option value="sanfernando3" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando3') ? 'selected' : '' ?>>San Fernando 3</option>
                                    <option value="achaguas" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'achaguas') ? 'selected' : '' ?>>Achaguas</option>
                                    <option value="elsaman" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elsaman') ? 'selected' : '' ?>>El Saman</option>
                                    <option value="mantecal" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'mantecal') ? 'selected' : '' ?>>Mantecal</option>
                                    <option value="elorza" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elorza') ? 'selected' : '' ?>>Elorza</option>
                                    <option value="bruzual" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'bruzual') ? 'selected' : '' ?>>Bruzual</option>
                                    <option value="carora" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'carora') ? 'selected' : '' ?>>Carora</option>
                                    <option value="pariaguan" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'pariaguan') ? 'selected' : '' ?>>Pariaguan</option>
                                    <option value="cantaura" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'cantaura') ? 'selected' : '' ?>>Cantaura</option>
                                    <option value="sancarlos" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sancarlos') ? 'selected' : '' ?>>San Carlos</option>
                                    <option value="araguadebarcelona" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'araguadebarcelona') ? 'selected' : '' ?>>Aragua de Barcelona</option>
                                    <option value="puntademata" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'puntademata') ? 'selected' : '' ?>>Punta de Mata</option>
                                    <option value="altagraciadeorituco" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'altagraciadeorituco') ? 'selected' : '' ?>>Altagracia de Orituco</option>
                                    <option value="cedianaco" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'cedianaco') ? 'selected' : '' ?>>Cedi Anaco</option>
                                    <option value="cedisanjuandelosmorros" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'cedisanjuandelosmorros') ? 'selected' : '' ?>>Cedi San Juan</option>
                                    <option value="administracion" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'administracion') ? 'selected' : '' ?>>Administración</option>
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
                        <button type="submit" class="btn btn-arabito btn-md flex-fill" name="update_user" tabindex="6">
                            <i class="fas fa-save me-2"></i> Actualizar Usuario
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><!-- /.content -->
<?php include("footer.php")?>