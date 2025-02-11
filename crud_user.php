<?php 
    include("database/conexion.php");
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $read_users = $conexion->prepare("SELECT * FROM usuarios");
    $read_users->execute();
    $lista_usuarios = $read_users->fetchAll(PDO::FETCH_ASSOC);

    // Generar contraseña aleatoria de 15 caracteres (letras y números)
    function generarContrasena() {
        return substr(bin2hex(random_bytes(8)), 0, 15);
    }

    // Agregar Usuario
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_usuario'])){
        try {
            $nombre = $_POST['nombre']; 
            $usuario = $_POST['usuario'];
            $contrasena = generarContrasena();
            $cargo = $_POST['cargo'];

            $insert_user = $conexion->prepare("INSERT INTO usuarios(nombre, usuario, password, cargo) 
                                                VALUES (:nombre, :usuario, :contrasena, :cargo)");
            $insert_user->bindParam(":nombre", $nombre);
            $insert_user->bindParam(":usuario", $usuario);
            $insert_user->bindParam(":contrasena", $contrasena);
            $insert_user->bindParam(":cargo", $cargo);
            $insert_user->execute();
            $mensaje = "Usuario agregado exitosamente";
        } catch(Exception $e) {
            $mensaje = "Error: " . $e->getMessage(); 
        }
        header("Location: index.php?mensaje=" . urlencode($mensaje));
        exit();
    }

    // Obtener el id del usuario desde la URL
    $id_usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : null;
    $usuario_data = [];

    if ($id_usuario) {
        // Obtener los datos del usuario
        $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE id = :id");
        $consulta->bindParam(":id", $id_usuario);
        $consulta->execute();
        $usuario_data = $consulta->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar Usuario
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_user'])) {
        try {
            $nombre = $_POST['nombre'];
            $usuario = $_POST['usuario'];
            $cargo = $_POST['cargo'];

            $update_user = $conexion->prepare("UPDATE usuarios SET nombre = :nombre, usuario = :usuario, cargo = :cargo WHERE id = :id");
            $update_user->bindParam(":nombre", $nombre);
            $update_user->bindParam(":usuario", $usuario);
            $update_user->bindParam(":cargo", $cargo);
            $update_user->bindParam(":id", $id_usuario);
            $update_user->execute();

            $mensaje = "Usuario actualizado exitosamente";
        } catch(Exception $e) {
            $mensaje = "Error al editar el usuario";
        }

        header("Location: index.php?mensaje=" . urlencode($mensaje));
    }
    
    // Eliminar Usuario
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_user'])) {
        try {
            $id_usuario = $_POST['id_user'];
            $delete_user = $conexion->prepare("DELETE FROM usuarios WHERE id = :id_usuario");
            $delete_user->bindParam(":id_usuario", $id_usuario);
            $delete_user->execute();
            $mensaje = "Usuario eliminado exitosamente";
        } catch(Exception $e) {
            $mensaje = "Error al eliminar: " . $e->getMessage();
        }
        header("Location: index.php?mensaje=" . urlencode($mensaje));
        exit();
    }

    //Eliminar Usuario
    if(isset($_GET['userId'])){
        try {
            $userId=(isset($_GET['userId']))?$_GET['userId']:"";
            $sentencia=$conexion->prepare("DELETE FROM usuarios WHERE id=:id");
            $sentencia->bindParam(":id",$userId);
            $sentencia->execute();
            $mensaje="Usuario eliminado";
        } catch(Exception $e) {
            $mensjae = "Error al eliminar: " . $e->getMessage();
        }
        header("Location: index.php?mensaje=" . urlencode($mensaje));
        exit();
    }
?> 