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
                                <input type="password" class="form-control form-control-sm mb-2" name="contrasena" id="contrasena" tabindex="3"/>
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