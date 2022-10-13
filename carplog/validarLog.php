<?php
  include('config/conexion.php');
  session_start();

  error_reporting(0);



  if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) ){
    $usuario = $_POST['email'];
    $pass = md5($_POST['password']);





    $jquery = "SELECT * FROM login WHERE email = '$usuario' AND password = '$pass'";
    $result = mysqli_query($conn, $jquery);
    if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user'] = $row['user'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];

    }



    if(mysqli_num_rows($result) ==  1){

      echo json_encode(array('success' => 1));

    }else{
      echo json_encode(array('succcess' => 0));
    }
  }
?>
