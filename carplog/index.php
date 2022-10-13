<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link type="text/css" style="width: 400px; height: 100px;" rel="shortcut icon" href="../../img/logo.jpg"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="carplog/style.css">

  </head>
  <body class="">
    <div align="center">
      <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
      <div class="col-10 col-sm-10 col-md-4 col-lg-6">
          <br><br><br><br>
        <form class="" id="formulario" method="post">
          <div class="log"><h1 class="text-center "><strong>Iniciar sesión</strong></h1></div>

          <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="true" maxlength="30" minlength="4">
          <br>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="true" maxlength="10" minlength="4">
          <br>

          <button style="width:50%;" id="validar" type="submit" name="button">Ingresar</button>
          <br><br>
          <small class="link-regis"><a href="registrarse.php">Registrarse</a></small>
          <div id="alerta">

          </div>
        </form>
      </div>
      <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
    </div>

    <script type="text/javascript" src="carplog/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
