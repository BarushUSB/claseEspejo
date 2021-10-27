<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style media="screen">
      .form-control{
        width: 20%;
        margin: 10px;
      }

      .SubBot{
        margin: 10px;
        padding: 10px;
      }
    </style>

  </head>
  <body>
    <script src="js/bootstrap.bundle.min.js"></script>
    <form class="" action="VerifyLogIn.php" method = "post" autocomplete="off">
      <label for="lname">Username or email: </label>
      <input type="text" class="form-control" name="typeuser" required><br><br>
      <label for="lname">Password: </label>
      <input type="password" class="form-control" name="userpass" required><br><br>

      <input type="submit" value="Submit" class="SubBot">
    </form>

  </body>
</html>
