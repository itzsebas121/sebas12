<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="main.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container-header">

    </div>
    <header>
        <a href="#" class="logo"><img src="../Login/Resources/Images/logo_uta.png" alt=""><span>Administrador</span></a>
        <ul class="navbar">
            <li><a href="index.php" class="active"><i class="fa-solid fa-users"></i>Usuarios</a></li>
            <li><a href="managment_faculties.php"><i class="fa-solid fa-sliders"></i>Facultades</a></li>
        </ul>
        <ul class="main">
            <a href="" class="user"><i class="fa-solid fa-user"></i></>Mi perfil</a>
            <a href="../Login/logout.php" class="user"><i class="fa-solid fa-arrow-right-from-bracket"></i>Cerrar Sesión</a>
        </ul>
        <div class="fa-solid fa-bars" id="menu-icon"></div>
        <script src="JavaScript/scriptMenu.js"></script>

    </header>
    <div class="hero-body">
      
        <div class="pending-registrations">
            <h2><i class="fa-solid fa-user-clock"></i>Registros pendientes soy sebas</h2>
            <select name="" class="cmb-registration" onchange="filtrarPorTipo()">
                <option value="Todos los registros pendientes">Todos los registros pendientes</option>
                <option value="Profesor">Profesores</option>
                <option value="Estudiante">Estudiantes</option>
            </select>
            <div class="table-register">
                <table style="width:100%">
                    <tr>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                    <tr>
                        <td>Ana Rios</td>
                        <td>anarios@gamil.com</td>
                        <td>Estudiante</td>
                        <td>
                            <i class="fa-solid fa-eye view"></i>
                            <i class="fa-solid fa-check check-list"></i>
                            <i class="fa-solid fa-trash remove"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Juan Solis</td>
                        <td>juansolis@gamil.com</td>
                        <td>Profesor</td>
                        <td style="width: 20%;">
                            <i class="fa-solid fa-eye view"></i>
                            <i class="fa-solid fa-check check-list"></i>
                            <i class="fa-solid fa-trash remove"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Ana Rios</td>
                        <td>anarios@gamil.com</td>
                        <td>Profesor</td>
                        <td style="width: 20%;">
                            <i class="fa-solid fa-eye view"></i>
                            <i class="fa-solid fa-check check-list"></i>
                            <i class="fa-solid fa-trash remove"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Juan Solis</td>
                        <td>juansolis@gamil.com</td>
                        <td>Profesor</td>
                        <td style="width: 20%;">
                            <i class="fa-solid fa-eye view"></i>
                            <i class="fa-solid fa-check check-list"></i>
                            <i class="fa-solid fa-trash remove"></i>
                        </td>
                    </tr>
                </table>
            </div>
            <script src="JavaScript/filtro.js"></script>
        </div>
        <div class="create-user">
            <h2><i class="fa-solid fa-user-plus"></i>Crear usario</h2>
            <select name="" class="cmb-registration" id="typeUser">
                <option hidden>Seleccione...</option>
                <option>Profesores</option>
                <option>Estudiantes</option>
            </select>
            <form action="#" class="form">

                <div class="column">

                    <label class="label">
                        <input type="text" id="name1" class="input" placeholder=" " required>
                        <span class="label_name">Ingresa un nombre</span>

                    </label>
                    <label class="label">
                        <input type="text" class="input" placeholder=" " required>
                        <span class="label_name">Ingresa un apellido</span>

                    </label>
                </div>

                <div class="column">

                    <label class="label">
                        <input type="email" class="input" id="email" placeholder=" " required>
                        <span class="label_name">Correo electronico</span>

                    </label>

                </div>

                <div class="professor" id="typeProfessor">
                    <label class="label">
                        <input type="text" class="input" placeholder=" ">
                        <span class="label_name">Titulo academico</span>

                    </label>
                    <div class="input-box">
                        <h2>Facultad</h2>
                        <div class="select-box">
                            <select id="typeUser">
                                <option hidden>Seleccione</option>
                                <option>FISEI</option>
                                <option>FICM</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="student" id="typeStudent">
                    <div class="input-box">
                        <h2>Facultad</h2>
                        <div class="select-box">
                            <select id="typeUser">
                                <option hidden>Seleccione</option>
                                <option>FISEI</option>
                                <option>FICM</option>
                            </select>
                        </div>

                    </div>
                    <div class="input-box">
                        <h2>Carrera</h2>
                        <script src="scrip.js"></script>
                        <div class="select-box">
                            <select id="typeUser">
                                <option hidden>Seleccione</option>
                                <option>TI</option>
                                <option>TELECOMUNICACIONES</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="botones">
                    <button id="btnGuardar">Guardar</button>
                </div>
            </form>
        </div>
        <script src="JavaScript/scripRegistro.js"></script>
    </div>

</body>

</html>
