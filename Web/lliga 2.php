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
<!doctype html>
<html lang="es">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/lliga.css">
        <link rel="stylesheet" type="text/css" href="style/tabla1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <link rel="shortcut icon" href="img/5CLOVER.ico" />
    <title>Lliga</title>
  </head>
  <body style="background-image: url(img/desc.jpg);">
    <nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="homeLoguejat.php"><h5>5 LEAF CLOVER</h5></a>

      <div  id="menus" >

      <a  id="a2" class="navbar-brand" href="homeLoguejat.php">Inici</a>
        <a  id="a1"class="navbar-brand" href="ranking.php" >Ranking</a>
        <a  id="a1"class="navbar-brand" href="lliga.php" >Lliga</a>
       <a  id="a1"class="navbar-brand" href="perfil.php" ><?php echo $nom_usuari;?></a>
       <a  id="a1"class="navbar-brand" href="php/logout.php">Logout <i style="font-size:24px" class="fa">&#xf08b;</i></a>
      </div>
      <div id = "btn" action="juego.php">
      <form method="get" action="juego.html">
        <button   class="btn btn-outline-success my-2 my-sm-0" type="submit">Jugar</button>
      </form>
  </div>
  
</nav>
  <div>
    <div>
      <h1 id="load" style="margin-left: 42%;font-size: 40px; color: white;">Tus ligas</h1></div>
      <table style="width: 59%; text-align: center; margin-left: 20%;margin-top: 2%;" id="datos">
      <thead>
        <tr>
          <th>Nom de la lliga</th><th>usuari</th><th>Posición</th>
        </tr>
      </thead>

      <tr>
        <td style="background-color: #ffcc33;" data-toggle="modal" data-target="#exampleModal">Lliga_catalana</td><td style="background-color: #ffcc33;">Mane9mb</td><td style="background-color: #ffcc33;">1</td>
      </tr>
      <tr>
        <td style="background-color: #b3b3b3;" data-toggle="modal" data-target="#exampleModal1">Lliga_bages</td><td style="background-color: #b3b3b3;">Mane9mb</td><td style="background-color: #b3b3b3;">2</td>
      </tr>
      <tr>
        <td style="background-color:#cc8800" data-toggle="modal" data-target="#exampleModal2">Lliga_Manresa</td><td style="background-color: #cc8800;">Mane9mb</td><td style="background-color: #cc8800;"d>3</td>
      </tr>
      <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>

          </div>
        </a>
      
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Lliga_catalana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="width: 59%; text-align: center; margin-left: 20%;margin-top: 2%;" id="datos">
      <thead>
        <tr>
          <th>Posició</th><th>Nom d'usuari</th><th>Nivell</th>
        </tr>
      </thead>

      <tr>
        <td style="background-color: #ffcc33;">1</td><td style="background-color: #ffcc33;">Mane9mb</td><td style="background-color: #ffcc33;">15</td>
      </tr>
      <tr>
        <td style="background-color: #b3b3b3;">2</td><td style="background-color: #b3b3b3;">Froman</td><td style="background-color: #b3b3b3;">14</td>
      </tr>
      <tr>
        <td style="background-color:#cc8800">3</td><td style="background-color: #cc8800;">Junkki</td><td style="background-color: #cc8800;"d>10</td>
      </tr>
      <tr>
        <td style="background-color:#00cc00 opacity 20%">4</td><td style="background-color: #00cc00 opacity 20%;">RIALP</td><td style="background-color: #00cc00 opacity 20%;">9</td>
      </tr>
      <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel" style="color: white;">Lliga_bages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <table style="width: 59%; text-align: center; margin-left: 20%;margin-top: 2%;" id="datos">
      <thead>
        <tr>
          <th>Posició</th><th>Nom d'usuari</th><th>Nivell</th>
        </tr>
      </thead>

      <tr>
        <td style="background-color: #ffcc33;">1</td><td style="background-color: #ffcc33;">Froman</td><td style="background-color: #ffcc33;">15</td>
      </tr>
      <tr>
        <td style="background-color: #b3b3b3;">2</td><td style="background-color: #b3b3b3;">Mane9mb</td><td style="background-color: #b3b3b3;">14</td>
      </tr>
      <tr>
        <td style="background-color:#cc8800">3</td><td style="background-color: #cc8800;">Junkki</td><td style="background-color: #cc8800;"d>10</td>
      </tr>
      <tr>
        <td style="background-color:#00cc00 opacity 20%">4</td><td style="background-color: #00cc00 opacity 20%;">RIALP</td><td style="background-color: #00cc00 opacity 20%;">9</td>
      </tr>
      <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel2" style="color: white;">Lliga_Manresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <table style="width: 59%; text-align: center; margin-left: 20%;margin-top: 2%;" id="datos">
      <thead>
        <tr>
          <th>Posició</th><th>Nom d'usuari</th><th>Nivell</th>
        </tr>
      </thead>

      <tr>
        <td style="background-color: #ffcc33;">1</td><td style="background-color: #ffcc33;">Junkki</td><td style="background-color: #ffcc33;">15</td>
      </tr>
      <tr>
        <td style="background-color: #b3b3b3;">2</td><td style="background-color: #b3b3b3;">Froman</td><td style="background-color: #b3b3b3;">14</td>
      </tr>
      <tr>
        <td style="background-color:#cc8800">3</td><td style="background-color: #cc8800;">Mane9mb</td><td style="background-color: #cc8800;"d>10</td>
      </tr>
      <tr>
        <td style="background-color:#00cc00 opacity 20%">4</td><td style="background-color: #00cc00 opacity 20%;">RIALP</td><td style="background-color: #00cc00 opacity 20%;">9</td>
      </tr>
      <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
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