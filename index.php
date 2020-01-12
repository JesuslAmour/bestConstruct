<!DOCTYPE html>
<html>
<head>
  <title>bestConstruct - index</title>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="vues/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vues/css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="vues/css/connection_admin.css" />
    <script src="main.js"></script>
</head>
<body>
  <h1 style="text-align: center;">Welcome to <strong>bestConstruct</strong></h1>
    <div class="box connect">
        <span style="text-align: center; color: orangered" class="error"><?php echo $message = (isset($alert)) ? $alert : '' ; ?></span>
        <img src="images/login.png" height="70px" width="70px" style="margin-left: 40%;">
        <h2>Login</h2>
        <form action="traitement.php" method="post" >
            <div class="inputbox">
                <input type="text" required="" name="username">
                <label for="username">Username</label>
            </div>
            <div class="inputbox">
                <input type="password" required="" name="password" min="8">
                <label for="password">Password</label>
            </div>
            <a href=""><input type="submit" value="Se Connecter"></a>
        </form><br>
        <a class="forget_password" style="color: #28a745; font-size: 12px; display: inline-block; float: right;">Forget password</a>
    </div>

    <div class="box restaure_password">
         <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close text-light" title="Clode login">&times;</span>

        <span style="text-align: center; color: orangered" class="eror"><?php echo $message = (isset($alert)) ? $alert : '' ; ?></span>
        <img src="images/forget_password.jpeg" height="70px" width="70px" style="margin-left: 40%;">
        <h2>Restaure password</h2>
        <form action="traitement.php" method="post">
            <div class="inputbox">
                <input type="text" required="" name="username">
                <label for="username">Username</label>
            </div>
            <div class="inputbox">
                <input type="text" required="" name="domaine" min="8">
                <label for="domaine">Domaine</label>
            </div>
            <a href=""><input type="submit" value="Valider"></a>
        </form><br>
    </div>

    <script src="vues/js/jquery-3.3.1.slim.min.js"></script>

    <script type="text/javascript">
      $(function () {
        $('.forget_password').click(function () {
          $('.connect').hide();
          $('.restaure_password').show();
        });
        $('.close').click(function () {
          $('.restaure_password').hide();
          $('.connect').show();
        });
      });
    </script>

</body>
</html>
