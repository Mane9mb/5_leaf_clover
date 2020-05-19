<?php
  session_start();

if(isset($_SESSION["user_id"])){
  $user_id= $_SESSION["user_id"];
$servername = "localhost";
$serverusername = "5leaf";
$serverpassword = "manelferran";

// Create connection
$conn = new mysqli($servername, $serverusername, $serverpassword);
$conn->select_db('5leafclover');
$data = mysqli_query($conn,"SELECT * FROM `usuaris`WHERE `id_usuario`='{$user_id}'");

$row_cnt=mysqli_num_rows($data);
if($row_cnt == 1){
  $row = mysqli_fetch_array($data);
  $nom_usuari = $row['username'];
    $email = $row['email'];
  $password = $row['password']; 
}

}
else{
  header("Location: home.php");
  exit;
}

?>
<!doctype html>
<html lang="es">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/perfil.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/5CLOVER.ico" />
    <title>5 Leaf Clover</title>
  </head>
  <body style="background-image: url(img/desc.jpg);">
    <nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="homeLoguejat.php"><h5>5 LEAF CLOVER</h5></a>

      <div  id="menus" >

      <a  id="a2" class="navbar-brand" href="homeLoguejat.php">Inici</a>
        <a  id="a1"class="navbar-brand" href="ranking.php" >Ranking</a>
        <a  id="a1"class="navbar-brand" href="lliga.php" >Lliga</a>
       <a  id="a1"class="navbar-brand" href="perfil.php" ><? echo $nom_usuari;?></a>
       <a  id="a1"class="navbar-brand" href="php/logout.php">Logout <i style="font-size:24px" class="fa">&#xf08b;</i></a>
      </div>
      <div id = "btn">
      <form method="get" action="juego.php">
        <button   class="btn btn-outline-success my-2 my-sm-0" type="submit">Jugar</button>
      </form>
  </div>
  
</nav>
<br><br>
  <div style="margin-left: 30%;";>
      <form id="contact" action="" method="post">
        <h3>Editar Perfil</h3>
          <div class="profile-pic" style="background-image: url('https://s3-eu-west-1.amazonaws.com/lynks-blog/wp-content/uploads/2016/10/11153439/rsz_1shutterstock_325243652.jpg'); z-index: 2; position: relative; margin-bottom: -14%;margin-top: 0px; margin-left: 34%;" >

              <span class="glyphicon glyphicon-camera"></span>
              <span>Canvia l'imatge</span>
          </div>
          <img src="img/user.png" alt="foto" class="profile-pic" style="position: relative; margin-top: -17%; margin-left: 34%;">
        </a>
        <fieldset>
          <label>Nom</label>
          <input  type="text" tabindex="1" autofocus id="dadess" style="width: 59%; margin-left: 29%; margin-top: 7%;" value="<? echo $nom_usuari;?>" disabled>  
        </fieldset>
        <fieldset>
          <label>Email</label>
          <input  type="email" tabindex="2" id="dadess" value="<?echo $email;?>" style="width: 59%; margin-left: 28.3%;" disabled> 
        </fieldset>
        <fieldset>
          <label>Contrasenya</label>
          <input  type="password" tabindex="3" id="dadess" value="<?echo $password;?>" style="width: 59%; margin-left: 18%;"disabled> 
        </fieldset>
        <fieldset>
          <label>Confirmar Contrasenya</label>
          <input  type="password" tabindex="3" id="dadess" value="<?echo $password;?>" style="width: 59%; margin-left: 2.3%;"disabled> 
        </fieldset>
      
            <button name="cancel" type="cancel" class="btn btn-danger" style="width: 37%;margin-right: 74px;margin-left: 23px;
             margin-top: 25px;">Cancelar</button> 
          
          
            <button name="submit" type="submit" class="btn btn-primary" style="width: 37%; margin-top: 25px;" data-submit="...Guardant">Guardar</button>    
        
      </form>
  </div>

  </body>
</html