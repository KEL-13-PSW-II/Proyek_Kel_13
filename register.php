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

    open_page('Register');
    ?>
    
    <form action="login_proses.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend><h3 style="color:black">Silahkan Registrasi</h3></legend>
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
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail" class="form-control"  type="text">
            </div>
          </div>
        </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Password</label> 
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
      <button><a href="login.php">Submit</a></button>
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
