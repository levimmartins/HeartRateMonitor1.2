<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
  </head>

  <body class="body_atualizado--home--login">

    <div class="container" align="center">
        <div class="jumbotron" style="width: 50%; background-color: #b6d7a8ff;">
              
                    <form class="form-signin" action="loginAction.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="inputEmail" >  Email: </label>
                            </div>   
                            <div class="col">
                                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            </div>         
                        </div>
                        <div class="row">
                            <div class="col">
                            <label for="inputPassword">Password: </label>
                            </div>
                            <div class="col">
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            </div>
                        </div>

                      <button class="btn btn-lg btn-primary btn-block btn-success" type="submit" name="login">Entrar</button>
                    </form>
      
        </div>
    </div> <!-- /container -->
  </body>
</html>
