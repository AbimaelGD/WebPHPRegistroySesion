<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Blog personal</title>
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
                    <h3 class="title has-text-black">Registro</h3>
                   
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Registrate para continuar.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="images/user-male-icon.png" width="128px" height="128px">
                        </figure>
                        <form action="controller/registroquery.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium is-rounded" type="text" placeholder="Tu nombre" autofocus="" name="Nombre">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium is-rounded" type="text" placeholder="Tus apellidos" autofocus="" name="Apellidos">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label class="label">Tu fecha nacimiento</label>
                                    <input class="input is-medium is-rounded" type="date" placeholder="Tu fecha nacimiento" autofocus="" name="Fecha_nacimiento">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium is-rounded" type="email" placeholder="Tu correo" autofocus="" name="Correo">
                                </div>
                            </div>
                            <div class="control">
                                <div class="select  is-medium is-rounded">
                                    <select name="Sexo">
                                        <option>Sexo</option>
                                        <option>Hombre</option>
                                        <option>Mujer</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium is-rounded" type="password" placeholder="Tu contraseña" name="Contraseña">
                                </div>
                            </div>

                            <button class="button is-block is-info is-medium is-fullwidth is-hovered" name="Registrar">Registrar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="login.html">Iniciar sesion</a> &nbsp;·&nbsp;
                        <a href="../">Necesitas ayuda?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>