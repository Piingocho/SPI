<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPI - LOGIN</title>

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
        <img class="img-fluid img-profile img-thumbnail" src="img/login.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Login</a>
        </li>


      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">SPI
          <span class="text-primary">LOGIN</span>
        </h1>
        <div class="subheading mb-5">Pestaña para logeo de usuario ·
          <a href="slicealumno.php">Para acceder llene los campos y presione ingresar</a>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="container">
                    <br>
                    <div class="cta-inner text-center rounded">
                        <div class="col-xl-9 mx-auto">
                            <div class="center">
                                <form name="form" action="pruebalogindealer.php" method="post">
                                    <!--form action="registrardb.php" method="post"-->
                                    <label for="id" class="col-sm-2 control-label">ID del USUARIO</label>
                                    <input type="text" name="login" placeholder="Ingrese su ID del SIU"  required>
                                    <br>
                                    <br>
                                    <label for="password" class="col-sm-2 control-label">PASSWORD</label>
                                    <input type="password" name="password" placeholder="Ingrese su password" required>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                    <br>
                                    <br>
                                </form>
                                <!--/form-->
                            </div>
                        </div>
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
