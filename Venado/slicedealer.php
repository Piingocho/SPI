<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPI - DEALER</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">



</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Sistema de Asistencia de Univalle</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile img-thumbnail" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Indicaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Abrir Lista de Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Cerrar Lista de <Pedidos></Pedidos></a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Ver Pedidos</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">SPI
          <span class="text-primary">DEALER</span>
        </h1>
        <div class="subheading mb-5">Esta pestaña pertenece únicamente a usuarios con funcion de DEALER ·
          <a href="slicealumno.php">Otro usuario no podrá hacer nada en este sector</a>
        </div>
        <p class="lead mb-5">En este sector el dealer podra crear nuevas listas de pedido, inhabilitar listas y ver listas ya creadas previamente. Abajo estan los links del diseñador</p>
        <div class="social-icons">
          <a href="https://www.instagram.com/arispemedina/?hl=es-la ">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://api.whatsapp.com/send?phone=59179953799&text=Buenas hablo sobre el sitio web">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="https://t.me/PiInGoChO">
            <i class="fab fa-telegram"></i>
          </a>
          <a href="https://www.facebook.com/enrique.arispemedina.5">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
          <br>
        <h2 class="mb-5">Abrir Lista de Pedidos</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="container">
                <h3 class="mb-0">Para abrir una nueva lista de pedidos llene los siguientes espacios</h3>
                <br>
                <div class="cta-inner text-center rounded">
                    <div class="col-xl-9 mx-auto">
                        <div class="center">
                            <form name="form" action="agregar%20lista.php" method="post">
                                <!--form action="registrardb.php" method="post"-->
                                <label for="id" class="col-sm-2 control-label">ID del SIU</label>
                                <input type="text" name="login" placeholder="Ingrese su ID del SIU"  required>
                                <br>
                                <br>
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <input type="password" name="password" placeholder="Ingrese su password" required>
                                <br>
                                <br>
                                <label for="materia" class="col-sm-2 control-label">Elija la materia</label>
                                <select name="materia">
                                    <option value="CIRCUITOS">CIRCUITOS</option>
                                    <option value="ALGEBRA">ALGEBRA</option>
                                    <option value="CALCULO">CALCULO</option>
                                    <option value="ELECTRONICA BASICA">ELECTRONICA BASICA</option>
                                    <option value="MICROPROCESADORES">MICROPROCESADORES</option>
                                    <option value="TALLER">TALLER</option>
                                    <option value="OPTICAS">OPTICAS</option>
                                    <option value="SISTEMAS OPERATIVOS">SISTEMAS OPERATIVOS</option>
                                    <option value="ESTADISTICA">ESTADISTICA</option>
                                    <option value="REDES">REDES</option>
                                    <option value="DISENO ELECTRONICO">DISEÑO ELECTRONICO</option>
                                    <option value="COMPONENTES ELECTRONICOS">COMPONENETES ELECTRONICOS</option>
                                    <option value="INTRODUCCION">INTRODUCCION</option>
                                    <option value="INGLES">INGLES</option>
                                    <option value="ANTENAS">ANTENAS</option>
                                    <option value="ANALISIS DE SENAL">ANALISIS DE SEÑAL</option>
                                    <option value="SISTEMAS DE COMUNICACION">SISTEMAS DE COMUNICACION</option>
                                </select>
                                <br>
                                <br>
                                <label for="codigo" class="col-sm-2 control-label">Codigo Aleatorio</label>
                                <input type="text" name="codigo" placeholder="Ingrese Codigo a eleccion" required>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Abrir Lista</button>
                                <br>
                                <br>
                            </form>
                            <!--/form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-date text-md-right">
            <span class="text-primary">La lista se abrira al momento que el docente llene los datos requeridos y presione abrir</span>
              <br>
            <span class="text-secondary">Recuerde no tener la lista abierta mas de 5 min</span>
          </div>
        </div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <br>
            <h2 class="mb-5">Inhabilitar Lista</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container">
                    <h3 class="mb-0">Para inhabilitar una lista llene los siguientes espacios</h3>
                    <br>
                    <div class="cta-inner text-center rounded">
                        <div class="col-xl-9 mx-auto">
                            <div class="center">
                                <form name="form1" action="cerrar%20lista.php" method="post">
                                    <label for="id" class="col-sm-2 control-label">ID del SIU</label>
                                    <input type="text" name="login" placeholder="Ingrese su ID del SIU"  required>
                                    <br>
                                    <br>
                                    <label for="password" class="col-sm-2 control-label">Password</label>
                                    <input type="password" name="password" placeholder="Ingrese su password" required>
                                    <br>
                                    <br>
                                    <label for="codigo" class="col-sm-2 control-label">Codigo de la lista</label>
                                    <input type="text" name="codigo" placeholder="Código de la lista" required>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Cerrar Lista</button>
                                    <br>
                                    <br>
                                </form>
                                <!--/form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-date text-md-right">
                    <span class="text-primary">La lista se cerrará al momento que el docente llene los datos requeridos y presione abrir</span>
                    <br>
                    <span class="text-secondary">Recuerde una vez cerrada la lista los alumnos ya no podran ingresar su asistencia</span>
                </div>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Ver Lista</h2>

        <div class="subheading mb-3">Para Seleccionar una lista llene los siguientes espacios</div>
          <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="container">
                  <br>
                  <div class="cta-inner text-center rounded">
                      <div class="col-xl-9 mx-auto">
                          <div class="center">
                              <form name="form2" action="listas%20docente.php" method="post">
                                  <!--form action="registrardb.php" method="post"-->
                                  <label for="login" class="col-sm-2 control-label">ID del SIU</label>
                                  <input type="text" name="login" placeholder="Ingrese su ID del SIU"  required>
                                  <br>
                                  <br>
                                  <label for="password" class="col-sm-2 control-label">Password</label>
                                  <input type="password" name="password" placeholder="Ingrese su password" required>
                                  <br>
                                  <br>
                                  <label for="materia" class="col-sm-2 control-label">Elija la materia</label>
                                  <select name="materia">
                                      <option value="CIRCUITOS">CIRCUITOS</option>
                                      <option value="ALGEBRA">ALGEBRA</option>
                                      <option value="CALCULO">CALCULO</option>
                                      <option value="ELECTRONICA BASICA">ELECTRONICA BASICA</option>
                                      <option value="MICROPROCESADORES">MICROPROCESADORES</option>
                                      <option value="TALLER">TALLER</option>
                                      <option value="OPTICAS">OPTICAS</option>
                                      <option value="SISTEMAS OPERATIVOS">SISTEMAS OPERATIVOS</option>
                                      <option value="ESTADISTICA">ESTADISTICA</option>
                                      <option value="REDES">REDES</option>
                                      <option value="DISENO ELECTRONICO">DISEÑO ELECTRONICO</option>
                                      <option value="COMPONENTES ELECTRONICOS">COMPONENETES ELECTRONICOS</option>
                                      <option value="INTRODUCCION">INTRODUCCION</option>
                                      <option value="INGLES">INGLES</option>
                                      <option value="ANTENAS">ANTENAS</option>
                                      <option value="ANALISIS DE SENAL">ANALISIS DE SEÑAL</option>
                                      <option value="SISTEMAS DE COMUNICACION">SISTEMAS DE COMUNICACION</option>
                                  </select>
                                  <br>
                                  <br>
                                  <button type="submit">Buscar Lista</button>
                                  <br>
                                  <br>
                              </form>
                              <!--/form-->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    </section>

    <hr class="m-0">



  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
