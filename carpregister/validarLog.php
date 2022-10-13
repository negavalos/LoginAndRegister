<?php
  include('config/conexion.php');



  if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['copassword']) && !empty($_POST['copassword'])  ){
      $email = $_POST['email'];
      $email_validacion = "SELECT * FROM login WHERE email = '$email'";
      $email_verification = mysqli_query($conn, $email_validacion);
      if (mysqli_num_rows($email_verification)<1){
        if($_POST['password']==$_POST['copassword']){

          $usuario = preg_replace('/[<\>;\" "]+/', '', $_POST['usuario']);
          $pass = md5($_POST['password']);

          $jquery = "INSERT INTO login (user,  password, email) VALUES ('$usuario',  '$pass','$email')";
          $result = mysqli_query($conn, $jquery);
          $verificar_registracion = "SELECT * FROM login WHERE email = '$email' AND user = '$usuario'";
          $verificado_usuario = mysqli_query($conn, $verificar_registracion );
          if(mysqli_num_rows($verificado_usuario)>0){
            echo json_encode(array('success' => 1));
          }

        }else{
            echo json_encode(array('success' => 2));
        }
      }else{
        echo json_encode(array('success' => 3));
      }



  }
?>
