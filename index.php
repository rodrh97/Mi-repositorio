<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Abarrotes OPEN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/abarrotes-icon-index_2x.jpg">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                    <span><img src="assets/images/abarrotes-icon-index_2x.jpg" height="50" width="50" alt="" height="30"></span>
                                        LOGIN  ABARROTES OPEN
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="#">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Usuario</label>
                                                <input class="form-control" name="us" type="user" id="emailaddress" required="" placeholder="Escribe tu usuario">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <a href="pages-forget-password.html" class="text-muted pull-right font-14">Olvidaste tu contraseña</a>
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" name="pas" type="password" required="" id="password" placeholder="Escribe tu contraseña">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-30">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Recuerdame
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                               <button class="btn btn-lg btn-warning btn-block" type="submit" name="login">Iniciar Sesión</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">No tengo una cuenta? <a href="pages-register.html" class="text-dark m-l-5">Dar de alta</a></p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->
        <div class="alert alert-warning">
        <?php
           if(isset($_REQUEST["login"])){
              $usuario=$_REQUEST["us"]; 
              $contra=$_REQUEST["pas"]; 
              require("./conexion.php");
              require("./logear.php");
              $obj = new Login();
             if($obj->conectar()){
                  if($obj->logear($usuario,$contra)){
                    $_SESSION['usuario'] = $usuario;
                    echo"<script>window.location='menu.php';</script>";
                  }else{
                    print'Error en el usuario o contraseña';
                   }
             }else{
                  echo"Error de conexion";
             }
            }
        ?></div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>