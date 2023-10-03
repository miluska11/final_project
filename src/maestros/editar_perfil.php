<?php
include "../config/conexiondatabs.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"])) {
    // Obtener el email del maestro desde la URL
    $email_maestro = $_GET["email"];

    // Conectar a la base de datos (reemplaza con tus propios datos de conexión)

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Verificar si se ha proporcionado un email de maestro válido a través de la URL
    if (isset($_GET["email"])) {
        $email_maestro = $_GET["email"];

        // Consulta SQL para obtener los datos del maestro con el email proporcionado
        $sql = "SELECT id, email, contrasena, nombre, direccion, fecha_nacimiento FROM maestros WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Vincular el parámetro con el valor del email del maestro
            $stmt->bind_param("s", $email_maestro);

            // Ejecutar la consulta
            $stmt->execute();

            // Obtener el resultado de la consulta
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Obtener los datos del maestro
                $row = $result->fetch_assoc();
                $id_maestro = $row["id"];
                $email = $row["email"];
                $contrasena = $row["contrasena"];
                $nombre = $row["nombre"];
                $direccion = $row["direccion"];
                $fecha_nacimiento = $row["fecha_nacimiento"];
            } else {
                echo "No se encontró el maestro con el email proporcionado.";
                exit();
            }

            // Cerrar la consulta preparada
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
            exit();
        }
    } else {
        echo "Email de maestro no proporcionado.";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad XYZ</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <!-- Link your external CSS file -->
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <style>
    /* Estilos CSS personalizados aquí */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #34393f;
        color: white;
        text-align: center;
        padding: 10px;
    }

    .icon__menu {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar {
        width: 20%;
        background-color: #34393f;
        color: white;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    .logo {
        text-align: center;
        padding: 20px 0;
    }

    .logo img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }

    .links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .links li {
        padding: 10px 0;
        border-top: 1px solid #51575e;
        border-bottom: 1px solid #51575e;
    }

    .links h4 {
        margin: 0;
        padding: 10px;
    }

    .links a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    .main-content {
        margin-left: 20%;
        padding: 20px;
    }

    .main-content h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .table-container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        width: 70%;
        margin: 0 auto;
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #3498db;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #2980b9;
    }
    </style>

</head>

<body>
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
            <h1 class="li">Home</h1>
            <div class="flex gap-2 justify-end">
                <p>Administrador</p>


    </header>
    <aside class="sidebar">
        <div class="logo">
            <img src="../../../img/logo.jpg" alt="logo">
            <h2 class="lu">Universidad</h2>
        </div>
        <ul class="links">
            <li class="separator-horizontal"></li>
            <li>
                <h4>Maestro</h4>
            </li>
            <div class="text-white font-medium flex">
                <p>Maestro</p>
            </div>


            <h4>MENU MAESTROS</h4>


            <li>
                <span class="material-symbols-outlined">group</span>
                <a href="admin_maestro/crud_maestros.php">Maestros</a>
            </li>

        </ul>
    </aside>
    <div class="main-content">
        <div class="p-5 h-[80%] flex flex-col gap-6 mt-[70px]">
            <div class="flex justify-between">



            </div>



            <body>


                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Editar Estudiante</title>
                </head>

                <body>
                    <h1>Editar Perfil de Maestro</h1>
                    <form action="edit_profile_maestro.php" method="POST">
                        <input type="hidden" name="id_maestro" value="<?php echo $id_maestro; ?>">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br>

                        <label for="contrasena">Contraseña:</label>
                        <input type="password" name="contrasena" id="contrasena" value="<?php echo $contrasena; ?>"
                            required><br>

                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required><br>

                        <label for="direccion">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" value="<?php echo $direccion; ?>"><br>

                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                            value="<?php echo $fecha_nacimiento; ?>"><br>

                        <input type="submit" value="Guardar Cambios">
                    </form>
                </body>

        </div>
    </div>
    </div>
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>