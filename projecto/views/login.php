<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Blog personal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
  <!-- Bulma Version 0.9.0-->
  <link rel="stylesheet" href="css/bulma.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-black">Login</h3>
          <hr class="login-hr">
          <p class="subtitle has-text-black">Inicia sesión para continuar.</p>
          <div class="box">
            <figure class="avatar">
              <img src="images/user-male-icon.png" width="128px" height="128px">
            </figure>
            <form>
              <div class="field">
                <div class="control">
                  <input class="input is-large is-rounded" type="email" placeholder="Tu correo" autofocus="">
                </div>
              </div>

              <div class="field">
                <div class="control">
                  <input class="input is-large is-rounded" type="password" placeholder="Tu contraseña" >
                </div>
              </div>
              <div class="field">
                <label class="checkbox">
                  <input type="checkbox">
                  Recuerdame
                </label>
              </div>
              <button class="button is-block is-info is-large is-fullwidth is-hovered" >Iniciar <i class="fa fa-sign-in"
                  aria-hidden="true"></i></button>
            </form>
          </div>
          <p class="has-text-grey">
            <a href="register.html">Registrate</a> &nbsp;·&nbsp;
            <a href="../">Recuperar contraseña</a> &nbsp;·&nbsp;
            <a href="../">Necesitas ayuda?</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <script async type="text/javascript" src="../js/bulma.js"></script>
</body>
</html>