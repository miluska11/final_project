<?php
session_start();

// Verificar si la sesión existe y si hay un email almacenado en ella
if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    // Aquí puedes utilizar el email para cualquier propósito necesario
    // Por ejemplo, mostrarlo en la página o realizar otras operaciones
} else {
    // Si no hay sesión o email en la sesión, puedes manejarlo de acuerdo a tus necesidades
    // Por ejemplo, redireccionar al usuario a una página de inicio de sesión
}

// ...

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
    <script src="https://cdn.tailwindcss.com"></script>
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

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px auto;
}

th,
td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

.actions {
    text-align: center;
}
</style>

<body>
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
            <h1 class="li">Home</h1>
            <div class="flex gap-2 justify-end">
                <p>Alumno</p>


    </header>
    <aside class="sidebar">
        <div class="logo">
            <img src="../../../img/logo.jpg" alt="logo">
            <h2 class="lu">Universidad</h2>
        </div>
        <ul class="links">
            <li class="separator-horizontal"></li>
            <li>
                <h4>ALUMNO</h4>
            </li>
            <div class="text-white font-medium flex">
                <p>ALUMNO</p>
            </div>
            <li class="separator-horizontal"></li>
            <li>
                <h4>MENU ALUMNO</h4>
            </li>

            <li>
                <span class="material-symbols-outlined">ambient_screen</span>
                <a href="alumnos_read.php">ver calificaciones</a>
            </li>
            <li>
                <span class="material-symbols-outlined">ambient_screen</span>
                <a href="admin_estudiantes/crud_ALUMNO.php">Administra tus clases</a>
            </li>

        </ul>
    </aside>
    <div class="main-content">
        <div class="p-5 h-[80%] flex flex-col gap-6 mt-[70px]">
            <div class="flex justify-between">
                <h1 class="text-2xl font-medium text-gray-700">Lista de Alumno</h1>

                <div class="flex gap-1">
                    <a href="./vAdmin.php">
                        <p class="text-blue-500">Home</p>
                        <li><a href="editar_perfil.php?email=<?php echo $email; ?>">Perfil</a></li>

                </div>
            </div>


            <div class="table-container">


                <body>
                    <h1>Tabla Clase Guarani</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Alumno</th>
                            <th>Calificación</th>
                            <th>Mensajes</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                        // Conectar a la base de datos (reemplaza con tus propios datos de conexión)
                        include "../config/conexiondatabs.php";

                        if ($conn->connect_error) {
                            die("Error de conexión a la base de datos: " . $conn->connect_error);
                        }

                        // Consulta SQL para obtener los datos de la tabla "clase_guarani"
                        $sql = "SELECT * FROM clase_guarani";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nombre_alumno"] . "</td>";
                                echo "<td>" . $row["calificacion"] . "</td>";
                                echo "<td>" . $row["mensajes"] . "</td>";
                                echo "<td class='actions'>";
                                echo "<a href='#'><i class='fas fa-edit'></i></a>";
                                echo "<a href='#'><i class='far fa-envelope'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No se encontraron registros en la tabla.</td></tr>";
                        }

                        // Cerrar la conexión a la base de datos
                        $conn->close();
                        ?>
                    </table>
                </body>
            </div>
        </div>
    </div>
    </div>


</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>