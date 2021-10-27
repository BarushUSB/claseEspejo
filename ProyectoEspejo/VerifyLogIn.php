<?php
  $host="127.0.0.1";
  $user="root";
  $password="";

  $connect = mysqli_connect($host,$user,$password);
  mysqli_select_db($connect,"biblioteca");

  $userna = $_POST ['typeuser'];
  $passwd = sha1($_POST ['userpass']);
  $verifier = strpos($userna,"@");
  $word = "";

  if ($verifier == true) {
    $word = "email";
  }elseif ($verifier == false){
    $word = "username";
  }

  $query1 = "SELECT $word FROM users WHERE $word = '$userna';";
  $query2 = "SELECT Pssword FROM users WHERE $word = '$userna';";

  $answ1 = mysqli_fetch_assoc(mysqli_query($connect,$query1));
  $answ2 = mysqli_fetch_assoc(mysqli_query($connect,$query2));
  $querUser = $answ1[$word];
  $querPass = $answ2['Pssword'];

  if ($userna == "" && $passwd == ""){
    echo "Username or Password are wrong!";
    echo "<form action=Login.php method=post> <input type=submit value=Back class=BackBut> </form>";
  }elseif ($userna != $querUser && $passwd == $querPass){
    echo "Username or Password are wrong!";
    echo "<form action=Login.php method=post> <input type=submit value=Back class=BackBut> </form>";
  }elseif ($userna == $querUser && $passwd != $querPass) {
    echo "Username or Password are wrong!";
    echo "<form action=Login.php method=post> <input type=submit value=Back class=BackBut> </form>";
  }elseif ($userna != $querUser && $passwd != $querPass) {
    echo "Username or Password are wrong!";
    echo "<form action=Login.php method=post> <input type=submit value=Back class=BackBut> </form>";
  }elseif ($userna == $querUser && $passwd == $querPass) {
    header('Location: '.'Menu.php');
  }


  mysqli_close($connect);
?>
