window.addEventListener('load',()=>{
  let button = document.getElementById('formulario');
  let usuario = document.getElementById('usuario');
  let password = document.getElementById('password');
  let alert = document.getElementById('alerta');



  function data() {
    let datos = new FormData();
    datos.append("email", email.value);
    datos.append("password", password.value);
    fetch('carplog/validarLog.php', {
      method: 'POST',
      body: datos
    }).then(Response => Response.json())
    .then(({success}) => {
      if (success === 1) {
        location.href = 'index.php';
      }else {
        alerta();
      }
    });
  }

  function alerta() {
    alert.innerHTML= `
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Datos Inconrrectos</strong>
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
