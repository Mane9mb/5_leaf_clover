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
}

}
else{
  header("Location: home.php");
  exit;
}

?>
<!DOCTYPE HTML>

<html lang="es">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/logejat.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Bootsraap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- icons!-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JS boostraap 4-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/assisten.js"></script>
    <script type="text/javascript">
      
    </script>
 <link rel="shortcut icon" href="img/5CLOVER.ico" />
    <title>Inici</title>
  </head>
  <body>
    
  	<nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="homeLoguejat.php"><h5>5 LEAF CLOVER</h5></a>

  		<div  id="menus" >
        <a  id="a1"class="navbar-brand" href="homeLoguejat.php">Inici</a>
        <a  id="a1"class="navbar-brand" href="ranking.php">Ranking</a>
        <a  id="a1"class="navbar-brand" href="lliga.php">Lliga</a>
         <a  id="a1"class="navbar-brand" href="perfil.php"><?php echo $nom_usuari;?></a>
          <a  id="a1"class="navbar-brand" href="php/logout.php">Logout <i style="font-size:24px" class="fa">&#xf08b;</i></a>
        </div>
         <div id = "btn" action="juego.php">
         <button   class="btn btn-outline-success my-2 my-sm-0" type="submit">Jugar</button>
      </div>
</nav>
  <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="
    margin-top: 2.2%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/as.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/kimetsu.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/desc1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div id = conten1>
    <h1>Què és 5 LEAF CLOVER?</h1>
    <div id="contentDesc"><p id="desc">Et donem la benvinguda a 5 Leaf CLover, un videojoc animat en 3d on hauràs de passar nivells i millorar per aconseguir completa el joc!
        Podràs aconseguir 2 habilitats, la primera l'hauràs de triar al comensament de la partida, i l'altra et sortirà en un nivell aleatori que t'ajudarà a obtenir la victoria. Hi ha un total de 5 habilitats, escull bé i molta sort!</p>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          info+
  </button>
</div>
    <div class="container">
  <!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="admins" src="img/elements.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
</div>
  <div class="container1">
  <!-- Trigger the modal with a button -->
<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="w3-bar w3-border-bottom" style="margin-left: 32%;">
   <button class="tablink btn btn-light" onclick="openEvent(event, 'SingIn')">Sing in</button>
   <button class="tablink btn btn-light" onclick="openEvent(event, 'SingUp')" >Sing up</button>
   
  </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span  id="cruz" aria-hidden="true">&times;</span>
        </button>
        <script type="text/javascript">

            function validateForm() {
                  var username= document.getElementById("username").value
                if (x == "") {
                  document.getElementById("mess").value
                  return false;
                  }
            }
           messages:document.getElementById("form-messages")

        </script>
      </div>
      <div class="modal-body">
        <div id="SingIn" class="w3-container city">

          <form action="logejat.php" method="post">
            <h5 id="ini">Iniciar Sessió</h5>
            <ul id="form-messages"></ul>
            <label id="titleform">Username</label>
            <input type="text" class="form-control"  placeholder="First name" name="username">
            <label id="titleform">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="pass">
            <small id="passwordHelpBlock" class="form-text text-muted">
            <input type="text" class="form-control"  placeholder="First name" name="username" id="username"></label>
            <span id="error">Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
            
            <label id="titleform">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="pass" id="password">
            <span id="error">Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
            <small id="passwordHelpBlock" class="form-text text-muted">
               <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id="btn-submit">Iniciar Sesion</button>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/main.js"></script>
          </form>

         
      </div>
       <div id="SingUp" class="w3-container city">
          <form action="php/prueba.php"  method="post">
            <h5 id="ini">Registrat si ets nou!</h5>
            <label id="titleform">Username</label>
            <input type="text" class="form-control"  placeholder="First name" name="username">
            <label id="titleform" style="margin-right: 92%; padding-top: 10px;">Email</label>
            <input type="text" class="form-control"  placeholder="@gmail.com" name="email">
            <label id="titleform">Password</label>
            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="pass">
            <small id="passwordHelpBlock" class="form-text text-muted">
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary">Registrarse</button>
           </div>
          </form>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
</div>


  </div>
  <div id = conten2>
      <h1>Equip</h1>
      <div id="sub2">
      <img id="admins" src="img/hombre.png">
      <img id="admin2" src="img/hombre.png"></div>
      <div>
        <h5 id="ferr">Ferran Roman</h5>
        <h5 id="man">Manel Moreno</h5>
      
      </div>

    </div>
    <script>
document.getElementsByClassName("tablink")[0].click();

function openEvent(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("btn-secondary");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("btn-secondary");
  

}


</script>
  </body>
</html