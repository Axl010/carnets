<?php 
    include("crud_user.php");
    include("header.php");
?>
<!-- Main content -->
<section class="content">   
    <div class="container mt-5">
        <form id="form_create_user" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12 my-3">
                    <div class="d-flex align-items-center"> 
                        <a href="index.php" class="button-back">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <h2 class="h4 ms-1 fw-bold text-arabito">Editar Usuario</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-12 mb-3">
                    <div class="card"> 
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text" class="form-control form-control-sm mb-2" name="nombre" id="nombre" value="<?= $usuario_data['nombre'] ?>" tabindex="1" required/>
                            </div>
                        </div><!--/.card body -->
                    </div>    
                    <div class="card mt-4"> 
                        <div class="card-body">
                            <h2 class="h5 fw-bold text-arabito">Datos de Autenticación</h2>
                            <div class="form-group">
                                <label for="usuario" class="form-label">Usuario *</label>
                                <input type="text" class="form-control form-control-sm" name="usuario" id="usuario" value="<?= $usuario_data['usuario'] ?>" tabindex="2" required/>
                            </div>
                            <div class="form-group">
                                <label for="contrasena" class="form-label mt-2">Contraseña</label>
                                <input type="password" class="form-control form-control-sm mb-2" name="contrasena" id="contrasena" pattern="^[A-Za-z0-9ñÑáéíóúÁÉÍÓÚ]{15}$" tabindex="3"/>
                                <div id="passwordFeedback" class="invalid-feedback">
                                    Debe contener 15 caracteres(letras y números).
                                </div>
                            </div>
                        </div><!--/.card body -->
                    </div>    
                </div><!--/.col -->

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="cargo" class="form-label bold">Cargo *</label>
                                <select class="form-select form-select-sm mb-2" id="cargo" name="cargo" tabindex="4" required>
                                    <option value="Gerente" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Gerente') ? 'selected' : '' ?>>Gerente</option>
                                    <option value="Supervisora" <?= (isset($usuario_data['cargo']) && $usuario_data['cargo'] == 'Supervisora') ? 'selected' : '' ?>>Supervisora</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sucursal" class="form-label bold">Sucursal *</label>
                                <select class="form-select form-select-sm mb-2" id="sucursal" name="sucursal" tabindex="4" required>
                                    <option value="turen" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'turen') ? 'selected' : '' ?>>turen</option>
                                    <option value="altagraciadeorituco" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'altagraciadeorituco') ? 'selected' : '' ?>>altagraciadeorituco</option>
                                    <option value="sansebastian" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sansebastian') ? 'selected' : '' ?>>sansebastian</option>
                                    <option value="elsombrero" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elsombrero') ? 'selected' : '' ?>>elsombrero</option>
                                    <option value="galponvalencia1" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'galponvalencia1') ? 'selected' : '' ?>>galponvalencia1</option>
                                    <option value="tinaquillo" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'tinaquillo') ? 'selected' : '' ?>>tinaquillo</option>
                                    <option value="tocuyito" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'tocuyito') ? 'selected' : '' ?>>tocuyito</option>
                                    <option value="guacara" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'guacara') ? 'selected' : '' ?>>guacara</option>
                                    <option value="maracay" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'maracay') ? 'selected' : '' ?>>maracay</option>
                                    <option value="sanjuandelosmorros" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanjuandelosmorros') ? 'selected' : '' ?>>sanjuandelosmorros</option>
                                    <option value="sanjuandelosmorros2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanjuandelosmorros2') ? 'selected' : '' ?>>sanjuandelosmorros2</option>
                                    <option value="valledelapascua" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'valledelapascua') ? 'selected' : '' ?>>valledelapascua</option>
                                    <option value="valledelapascua2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'valledelapascua2') ? 'selected' : '' ?>>valledelapascua2</option>
                                    <option value="zaraza" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'zaraza') ? 'selected' : '' ?>>zaraza</option>
                                    <option value="anaco" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'anaco') ? 'selected' : '' ?>>anaco</option>
                                    <option value="calabozo" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'calabozo') ? 'selected' : '' ?>>calabozo</option>
                                    <option value="camaguan" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'camaguan') ? 'selected' : '' ?>>camaguan</option>
                                    <option value="sanfernando1" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando1') ? 'selected' : '' ?>>sanfernando1</option>
                                    <option value="sanfernando2" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando2') ? 'selected' : '' ?>>sanfernando2</option>
                                    <option value="sanfernando3" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'sanfernando3') ? 'selected' : '' ?>>sanfernando3</option>
                                    <option value="achaguas" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'achaguas') ? 'selected' : '' ?>>achaguas</option>
                                    <option value="elsaman" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elsaman') ? 'selected' : '' ?>>elsaman</option>
                                    <option value="mantecal" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'mantecal') ? 'selected' : '' ?>>mantecal</option>
                                    <option value="elorza" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'elorza') ? 'selected' : '' ?>>elorza</option>
                                    <option value="bruzual" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'bruzual') ? 'selected' : '' ?>>bruzual</option>
                                    <option value="administracion" <?= (isset($usuario_data['sucursal']) && $usuario_data['sucursal'] == 'administracion') ? 'selected' : '' ?>>administracion</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-4">
                        <input type="submit" class="btn btn-arabito btn-sm btn-submit" name="update_user" value="Guardar" tabindex="5">
                        <a href="index.php" role="button" class="btn btn-secondary btn-sm btn-reset me-2" tabindex="6">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><!-- /.content -->
<?php include("footer.php")?>