<?php
session_start();

if ($_SESSION) {
  header("Location: http://localhost:8888/clases_php_adsi_2104630/ejercicios/inicio.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Ajax</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: -webkit-box;
      display: flex;
      -ms-flex-align: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      align-items: center;
      -webkit-box-pack: center;
      justify-content: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>

      <label for="inputEmail" class="sr-only">Correo electrónico</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ingrese su correo" required autofocus>

      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Ingrese su contraseña" required>

      <button class="btn btn-lg btn-primary btn-block" type="button" id="entrar">Entrar</button>

      <p class="mt-5 mb-3 text-muted" id="message"></p>
    </form>

    <script>
      const btnEntrar = document.getElementById('entrar');

      btnEntrar.addEventListener('click', function(event) {
        const email = document.getElementById('inputEmail').value;
        const password = document.getElementById('inputPassword').value;

        const url = 'http://localhost:8888/clases_php_adsi_2104630/ejercicios/sesionAjax.php';
        const data = {
          email,
          password
        }

        fetch(url, {
          method: 'POST',
          body: JSON.stringify(data),
          headers: {
            'Content-Type': 'application/json'
          }
        }).then(res => {
          res.json().then(response => {
            const msg = response.msg;
            document.getElementById('message').innerHTML = msg;
            console.log(response)
          })
        })
        .catch(error => console.log('Error ->', error));

        // console.log(email, password);
      });
    </script>
  </body>
</html>
