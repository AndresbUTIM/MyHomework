<?php
require_once '../LOGGIN/includes/user_session.php';
$userSession = new userSession();                   //creamos el objeto
if(isset($_SESSION['user'])){                    //si la sesión existe
        //redirecciona a la página principal
    }else{ 
        echo "
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'> </script>
        <script> src = 'https://code.jquery.com/jquery-3.6.0.js'
            integrity = 'sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk='</script>
        <script>
        $(document).ready(function(){
            function sesionNegada(){
                $('header').addClass('session');
                $('div').addClass('session');
                $('footer').addClass('session');
            }
            sesionNegada();
        });
        </script>";
        echo "<p> No has Iniciado Sesión </p>";
        echo "<a href='../LOGGIN/index.php' >Volver a LOGIN</a>";
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CRUD-v2/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script> src = "https://code.jquery.com/jquery-3.6.0.js"
        integrity = "sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="</script>
    <script src="../CRUD-v2/index.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Usuarios</title>
    </head>
    <header class="header">
        <h1 class="header-text">Clinica Cristo Rey</h1>
        <a href="../LOGGIN/includes/logOut.php">Cerrar Sesión</a>
    </header>

<body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
    <div class="div">
        <h3>Usuarios Registrados</h3>
        
        <a onclick="obtenerUsuario()" class="boton-editar" id="boton-editar">Mostrar Usuarios </a>
        
        <table id="mytable">
            <tbody id="usuarios">
                <td class="tabla-td">ID</td>
                <td class="tabla-td">NOMBRE COMPLETO</td>
                <TD class="tabla-td">CORREO ELECTRONICO</TD>
                <TD class="tabla-td">TELÉFONO</TD>
                <TD class="tabla-td">AREA DE TRABAJO</TD>
            </tbody>
        </table>

        <p>Si deseas Agregar un nuevo Usuario </p>
        <a href="../CRUD-v2/Create/Create.php"> Click Aquí</a>
    </div>

</body>

<footer class="footer">
    <h6 class="footer-text">CODEVS tecnologies</h6>
</footer>

</html>
