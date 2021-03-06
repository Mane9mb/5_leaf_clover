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
    <link rel="stylesheet" type="text/css" href="style/juego.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- *************** -->
  <!--  Config   RC    -->
  <!-- *************** -->
  <script type="text/javascript" src="app/js/rce/Game.js"></script>
  <script type="text/javascript" src="app/js/CustomGame.js"></script>
  <script type="text/javascript" src="app/js/rce/Overlay.js"></script>
  <script type="text/javascript" src="app/js/rce/Player.js"></script>
  <script type="text/javascript" src="app/js/rce/Map.js"></script>
  <script type="text/javascript" src="app/js/rce/RCEngine.js"></script>
  <script type="text/javascript" src="app/js/rce/Intersection.js"></script>
  <script type="text/javascript" src="app/js/rce/Texture.js"></script>
  <script type="text/javascript" src="app/js/rce/Object.js"></script>
  <script type="text/javascript" src="app/js/rce/Room.js"></script>
  <script type="text/javascript" src="app/js/rce/Map2dview.js"></script>
  <script type="text/javascript" src="app/js/rce/Keyboard.js"></script>
  <script type="text/javascript" src="app/js/rce/Mouse.js"></script>
  <script type="text/javascript" src="app/js/rce/Data.js"></script>
  <script type="text/javascript" src="app/js/CustomData.js"></script>
  <script type="text/javascript" src="app/main.js"></script>
  <style type="text/css">
    @font-face {
      font-family: 'slkscre';
      src: url('app/fonts/slkscre.ttf');
    }

    #juego { margin:0; padding:0; font-family:'slkscre';
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;user-select: none; 
  overflow:auto;}
    html, body { width:100%; height:100%; }
    
    #info{
      border:black solid 5px;
    padding-bottom: 0px;
    border-bottom-width: 5px;
    width: 700px;
    height: 272px;
    margin-left: 306px;
    display: inline-block;
    }
    #pgame{
      color:green;font-size:20px;
    }
    
    #rc{
      top:0px;
      left:0px;
    }

  </style>
  <!-- *************** -->
  <!-- Fin Config RC   -->
  <!-- *************** -->

    <title>Juego</title>
  </head>
  <nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="homeLoguejat.php"><h5>5 LEAF CLOVER</h5></a>

      <div  id="menus" >

      <a  id="a2" class="navbar-brand" href="homeLoguejat.php">Inici</a>
        <a  id="a1"class="navbar-brand" href="ranking.php" >Ranking</a>
        <a  id="a1"class="navbar-brand" href="lliga.php" >Lliga</a>
       <a  id="a1"class="navbar-brand" href="perfil.php" ><?php echo $nom_usuari;?></a>
       <a  id="a1"class="navbar-brand" href="php/logout.php">Logout</a>
      </div>
      <div id = "btn">
      <form method="get" action="juego.html">
        <button   class="btn btn-outline-success my-2 my-sm-0" type="submit">Jugar</button>
      </form>
  </div>
  
</nav>

  <div>
      <h1 id="load">EN PROCESO</h1>
      
    </div>

    <div id="juego">
<!-- *************** -->
  <!--  Config   RC    -->
  <!-- *************** -->
  <canvas id="rc"  width ="800" height="600" style="
    position: initial;
    margin-left: 306px;
"></canvas>
  <div id="info">
    <h2 id="pgame">How to play:<h2>
    <p id="pgame">[a] left</p>
    <p id="pgame">[d] right</p>
    <p id="pgame">[w] forward </p>
    <p id="pgame">[s] backward</p>
    <p id="pgame">[mouse] look left/right</p>
    <p id="pgame">[mouse left click] fire</p>
  </div>
  <canvas id="miCanvas" style="border: 1px solid; display: block; display: inline"></canvas>
  <!-- *************** -->
  <!-- Fin Config RC   -->
  <!-- *************** -->

</div>

  </body>
</html
