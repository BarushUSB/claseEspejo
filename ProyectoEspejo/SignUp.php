<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <style media="screen">
      .form-control{
        width: 20%;
        margin: 5px;
      }

      .SubBot{
        margin: 10px;
        padding: 10px;
      }

      .BackBut{
        margin: 10px;
        padding: 10px;
      }
    </style>

  </head>
  <body>
    <script src="js/bootstrap.bundle.min.js"></script>

    <form class="" action="VerifySignUp.php" method = "post" autocomplete="off">
      <label for="fname">Nombre: </label>
      <input type="text" class="form-control" name="name" required><br><br>
      <label for="lname">Apellido paterno: </label>
      <input type="text" class="form-control" name="apePa" required><br><br>
      <label for="lname">Apellido Materno: </label>
      <input type="text" class="form-control" name="apeMa" required><br><br>
      <label for="lname">Dirección: </label>
      <input type="text" class="form-control" name="direccion" required><br><br>
      <label for="lname">Email: </label>
      <input type="text" class="form-control" name="email" placeholder="user@example.com" required><br><br>
      <label for="lname">Username: </label>
      <input type="text" class="form-control" name="userna" required><br><br>
      <label for="lname">Password: </label>
      <input type="password" class="form-control" name="passw" required><br><br>
      <label for="lname">Confirm Password: </label>
      <input type="password" class="form-control" name="confpass" required><br><br>
      <label for="lname">Terminos y condiciones: </label>
      <input type="checkbox" name="terms" required><br><br>
      <input type="submit" value="Submit" class="SubBot">
    </form>
    <form class="" action="Login.php" method="post">
      <input type="submit" value="Back" class="BackBut">
    </form>

  </body>
</html>
