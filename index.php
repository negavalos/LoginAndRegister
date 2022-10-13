<?php session_start();
if (isset($_SESSION['user'])) {


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <h1>Iniciaste sesión</h1>
    <div class="">
      Bienvenido
      <div class="">
        <button onclick="cerrar()" class="boton_cerrarsesión">Cerrar sesión</button>
      </div>
    </div>
    <script type="text/javascript">
    function cerrar(){
        window.location.href = "carplog/cerrarsesion.php";

      }

    </script>
  </body>
</html>
<?php } else {
  header("Location: inicia.php");
} ?>
