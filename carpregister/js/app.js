window.addEventListener('load',()=>{
  let button = document.getElementById('formulario');
  let usuario = document.getElementById('usuario');
  let email = document.getElementById('email');

  let password = document.getElementById('password');
  let copassword = document.getElementById('copassword');
  let alert = document.getElementById('alerta');



  function data() {
    let datos = new FormData();
    datos.append("usuario", usuario.value);
    datos.append("password", password.value);
    datos.append("email", email.value);
    datos.append("copassword", copassword.value);
    fetch('carpregister/validarLog.php', {
      method: 'POST',
      body: datos
    }).then(Response => Response.json())
    .then(({success}) => {
      if (success === 1) {
        location.href = 'inicia.php';

      }else if (success === 3) {
        alerta2();
      }else if (success === 2) {
        alerta1();
      }

    });
  }


  function alerta1() {
    alert.innerHTML= `
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>las contraseñas no son identicas</strong>
      <span type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span style="position: relative;
              left: 50%;
              " aria-hidden="true">&times;</span>
      </span>
    </div>
    `;
  }
  function alerta2() {
    alert.innerHTML= `
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Este correo ya esta registrado</strong>
      <span type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span style="position: relative;
              left: 50%;
              " aria-hidden="true">&times;</span>
      </span>
    </div>
    `;
  }


  button.addEventListener('submit',(e)=>{
    e.preventDefault();

    data();
  });
});
