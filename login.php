<?php
// session_start();
// $_SESSION['name'] = "please login";
include 'koneksi.php';

?>

<html>
    <head>
        <title>Pakaian Online</title>
    </head>
<style>
body{
    text-align: center;
    margin-top: 150px;
}
fieldset{
    width:300px;
    margin:auto;
    border: 2px solid black;
    border-radius: 12px;
}
.login{
    background:rgba(0, 0, 0, 0.39);
    box-shadow: 0px 0px 10px 10px;
    border-radius:10px;
    width: 300px;
    margin: auto;
    padding:40px;
}
</style>
    <?php
    session_start();
    include_once('functions.php');
    if (isset($_SESSION['is_logged_in'])) {
    }

    open_page('login');
    ?>
    
    <form action="login.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><h3 style="color:black">Silahkan Login</h3></legend>
        <div class="login">
        <div class="form-group">
      <label class="col-md-4 control-label">Username</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="username" placeholder="Username" class="form-control"  type="text">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" id="password">Password</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input name="password" placeholder="Password" class="form-control"  type="password">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
        <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember Me</label>
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4">
      <!-- <button><a href="halaman_utama.php">Sign in</a></button> -->
      <input type="submit" value="Login" name="submit">
      </div>
    </div>
    </fieldset>
    </form>
    </div>  
    </fieldset>
    </div>
    </form>
</body>
</html>

<?php

//BUTTON SUBMIT _clicked
  if (isset($_POST['submit'])) {
    // echo $_POST['username']." ".$_POST['password'];
    $iduser =  $_POST['username'];
    $pass =  $_POST['password'];

    if ($c->connect_errno) {
      echo "Failed to connect to MySQL: " . $c->connect_error;
    }

    $res = $c->query("SELECT * From user WHERE id_user = '$iduser' and password = '$pass'") 
            or die($mysqli->error);
    $row = $res->fetch_assoc();
    if($row['password'] == $pass){
      header("location: halaman_utama.php");
    }
    else{
      echo "kombinasi password dan username salah!";
    }
  }
?>