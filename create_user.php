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
                        <h2 class="h4 ms-1 fw-bold text-arabito">Agregar Usuario</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-12 mb-3">
                    <div class="card"> 
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre *</label>
                                <input type="text" class="form-control form-control-sm mb-2" name="nombre" id="nombre" tabindex="1" required/>
                                <div class="invalid-feedback">
                                    Ingresa tu nombre
                                </div>
                            </div>
                        </div><!--/.card body -->
                    </div>    
                    <div class="card mt-4"> 
                        <div class="card-body">
                            <h2 class="h5 fw-bold text-arabito">Datos de Autenticación</h2>
                            <div class="form-group">
                                <label for="usuario" class="form-label">Usuario *</label>
                                <input type="text" class="form-control form-control-sm" name="usuario" id="usuario" tabindex="2" required/>
                                <div class="invalid-feedback">
                                    Ingresa un nombre de usuario
                                </div>
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
                                    <option value="Gerente" selected>Gerente</option>
                                    <option value="Supervisora">Supervisora</option>
                                    <option value="Cajera">Cajera</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sucursal" class="form-label bold">Sucursal *</label>
                                <select class="form-select form-select-sm mb-2" id="sucursal" name="sucursal" tabindex="4" required>
                                    <option value="turen">turen</option>
                                    <option value="altagraciadeorituco">altagraciadeorituco</option>
                                    <option value="sansebastian">sansebastian</option>
                                    <option value="elsombrero">elsombrero</option>
                                    <option value="galponvalencia1">galponvalencia1</option>
                                    <option value="tinaquillo">tinaquillo</option>
                                    <option value="tocuyito">tocuyito</option>
                                    <option value="guacara">guacara</option>
                                    <option value="maracay">maracay</option>
                                    <option value="sanjuandelosmorros">sanjuandelosmorros</option>
                                    <option value="sanjuandelosmorros2">sanjuandelosmorros2</option>
                                    <option value="valledelapascua">valledelapascua</option>
                                    <option value="valledelapascua2">valledelapascua2</option>
                                    <option value="zaraza">zaraza</option>
                                    <option value="anaco">anaco</option>
                                    <option value="calabozo">calabozo</option>
                                    <option value="camaguan">camaguan</option>
                                    <option value="sanfernando1">sanfernando1</option>
                                    <option value="sanfernando2">sanfernando2</option>
                                    <option value="sanfernando3">sanfernando3</option>
                                    <option value="achaguas">achaguas</option>
                                    <option value="elsaman">elsaman</option>
                                    <option value="mantecal">mantecal</option>
                                    <option value="elorza">elorza</option>
                                    <option value="bruzual">bruzual</option>
                                    <option value="administracion">administracion</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-4">
                        <input type="submit" class="btn btn-arabito btn-sm btn-submit" name="create_usuario" value="Guardar" tabindex="5">
                        <a href="index.php" role="button" class="btn btn-secondary btn-sm btn-reset me-2" tabindex="6">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><!-- /.content -->


<?php include("footer.php")?>