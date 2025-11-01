<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de Usuarios</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/all.min.css">
    
    <!-- JsBarcode -->
    <script src="plugins/JsBarcode/JsBarcode.all.min.js"></script>
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="plugins/datatable/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="plugins/datatable/responsive.bootstrap5.min.css">
    
    <!-- Personal Style -->
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        /* Estilos personalizados para el header */
        .navbar-custom {
            background: linear-gradient(135deg, #2c3e50 0%, #4a6580 100%);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
        }
        
        .brand-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }

        .brand-center i {
            color: #ff9f43;
            font-size: 1.8rem;
        }

        .navbar-brand-custom {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff !important;
            letter-spacing: 0.5px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .navbar-brand-custom i {
            color: #ff9f43;
            font-size: 1.8rem;
        }
        
        .logo-img {
            height: 38px;
            transition: all 0.3s ease;
        }
        
        .logo-img:hover {
            transform: scale(1.05);
        }
        
        .nav-divider {
            width: 1px;
            height: 30px;
            background: rgba(255, 255, 255, 0.2);
            margin: 0 15px;
        }
        
        .nav-link-custom {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .nav-link-custom:hover {
            color: #fff !important;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }
        
        .nav-link-custom i {
            margin-right: 5px;
            font-size: 0.9rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.9rem;
        }
        
        .user-info i {
            margin-right: 5px;
            color: #ff9f43;
        }

        .fondo-logo {
            position: absolute;
            top: 7px;
            left: 10px;
            background-color: #fff !important;
            width: 115px;
            height: 34px;
            border-radius: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        @media (max-width: 991.98px) {
            .nav-divider {
                display: none;
            }
            
            .navbar-nav {
                padding: 1rem 0;
            }
            
            .nav-link-custom {
                margin: 0.2rem 0;
            }
            
            .user-info {
                padding: 0.5rem 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                margin-top: 0.5rem;
            }
            .fondo-logo {
                width: 115px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid position-relative" style="max-width: 1920px;">
            <!-- Logo a la izquierda -->
            <a class="navbar-brand position-relative" href="#">
                <div class="fondo-logo"></div>
                <img src="images/titanio_logo.png" alt="Logo Titanio" class="logo-img" style="z-index: 10 !important; position: relative;">
            </a>
            
            <!-- Texto centrado -->
            <div class="brand-center d-none d-md-flex">
                <i class="fas fa-id-card-alt"></i>
                SISTEMA CARNET
            </div>
            
            <!-- Botón para menú móvil -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Versión móvil del texto centrado -->
            <div class="brand-center d-md-none mx-auto">
                <i class="fas fa-id-card-alt"></i>
                SISTEMA CARNET
            </div>
        </div>
    </nav>