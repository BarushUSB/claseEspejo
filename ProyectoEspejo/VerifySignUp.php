<?php
  $host="127.0.0.1";
  $user="root";
  $password="";

  $connect = mysqli_connect($host,$user,$password);
  mysqli_select_db($connect,"biblioteca");
  mysqli_query($connect,"SET NAMES 'utf8'");

  $name = strip_tags($_POST ['name']);
  $apPa = strip_tags($_POST['apePa']);
  $apMa = strip_tags($_POST ['apeMa']);
  $dire = strip_tags($_POST['direccion']);
  $usrna = strip_tags($_POST ['userna']);
  $psswd = $_POST ['passw'];
  $cpswd = $_POST ['confpass'];
  $usmai = strip_tags($_POST ['email']);
  $newURL = "Menu.php";
  $size = strlen($psswd);
  $mailChar = strpos($usmai,"@");

  if ($mailChar != true) {
    echo "Incorrect email!";
    echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
    die();
  }

  if ($size < 8){
    echo "The password is very short!";
    echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
    die();
  }

  $quer1 = "SELECT username FROM usuario WHERE username = '$usrna';";
  $consult = mysqli_fetch_assoc(mysqli_query($connect,$quer1));
  $verifyUser = $consult['username'];
  if ($verifyUser == $usrna) {
    echo "This user already exists";
    echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
    die();
  }

    $quer2 = "SELECT email FROM usuario WHERE email = '$usmai';";
    $consult2 = mysqli_fetch_assoc(mysqli_query($connect,$quer2));
    $verifyMail = $consult2['email'];
    if ($verifyMail == $usmai) {
      echo "This mail was used before!";
      echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
      die();
    }


      if($cpswd == "" || $psswd == ""){
        echo "Passwords doesn't match!";
        echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
        die();
      }elseif ($cpswd != $psswd) {
        echo "Passwords doesn't match!";
        echo "<form action=SignUp.php> <input type=submit value=Back class=BackBut> </form>";
        die();
      }elseif ($cpswd == $psswd) {
        $psswd = sha1(strip_tags($_POST ['passw']));
        $cpswd = sha1(strip_tags($_POST ['confpass']));
        $query1 = "INSERT INTO usuario (nombre,apellido_paterno,apellido_materno,direccion,username,email,contrasena) VALUES ('$name','$apPa','$apMa','$dire','$usrna','$usmai','$psswd');";
        $answ = mysqli_query($connect,$query1);

        echo "Completed new register, welcome $name";
        header('Location: '.$newURL);
        mysqli_close($connect);
      }





?>
