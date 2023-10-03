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


    /* Estilo para el botón arriba de la tabla */
    .btn-container {
        text-align: center;
        margin-bottom: 20px;
    }

    /* Estilo para los botones de editar y eliminar */
    .edit-btn,
    .delete-btn {
        padding: 5px 10px;
        margin: 0 5px;
        background-color: #3498db;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .edit-btn:hover,
    .delete-btn:hover {
        background-color: #2980b9;
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
                <h4>Admin</h4>
            </li>
            <div class="text-white font-medium flex">
                <p>Administrador</p>
            </div>
            <li class="separator-horizontal"></li>
            <li>
                <h4>MENU ADMINISTRATIVO</h4>
            </li>
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="#">Personas</a>
            </li>
            <li>
                <span class="material-symbols-outlined">group</span>
                <a href="../admin_maestro/crud_maestros.php">Maestros</a>
            </li>
            <li>
                <span class="material-symbols-outlined">ambient_screen</span>
                <a href="../admin_estudiantes/crud_alumnos.php">Alumnos</a>
            </li>
            <li>
                <span class="material-symbols-outlined">pacemaker</span>
                <a href="clases/clases_vista.php">Clases</a>
            </li>
        </ul>
    </aside>
    <div class="main-content">
        <div class="p-5 h-[80%] flex flex-col gap-6 mt-[70px]">
            <div class="flex justify-between">
                <h1 class="text-2xl font-medium text-gray-700">Lista de Alumnos</h1>

                <div class="flex gap-1">
                    <a href="./vAdmin.php">
                        <p class="text-blue-500">Home</p>
                    </a>/ <p>Alumno</p>
                </div>
            </div>


            <div class="table-container">



                <body>

                    <h1>Agregar Clase</h1>

                    <form action="agregar_action.php" method="POST">
                        <label for="clase">Nombre de la Clase:</label>
                        <input type="text" id="clase" name="clase" required><br><br>

                        <label for="maestro">Nombre del Maestro:</label>
                        <input type="text" id="maestro" name="maestro" required><br><br>

                        <label for="alumno_inscrito">Alumno Inscrito:</label>
                        <input type="text" id="alumno_inscrito" name="alumno_inscrito"><br><br>

                        <input type="submit" value="Guardar">
                    </form>
                </body>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>