<?php
include("php/conexio.php");

$sql = "SELECT * FROM usuaris WHERE username ='"$_POST["username"]"'";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
?>
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

    <title>Inici</title>
  </head>
  <body>
    
  	<nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="home.html"><h5>5 LEAF CLOVER</h5></a>

  		<div  id="menus" >
        <a  id="a2" class="navbar-brand" href="#"><span class="fa fa-microphone"></span></a>
  		  <a  id="a2" class="navbar-brand" href="home.html">Inici</a>
        <a  id="a1"class="navbar-brand" href="ranking.html">Ranking</a>
        <a  id="a1"class="navbar-brand" href="ranking.html"></a>
        <img src="img/user.png" width="40" height="40">
      </div>
  
</nav>
<div>
<img src="img/as.png" class="responsive" id="elements">

</div>
<div id = conten1>
    <h1>Què és 5 LEAF CLOVER?</h1>
    <div id="contentDesc"><p id="desc">Et donem la benvinguda a 5 Leaf CLover, un videojoc animat en 3d on hauràs de passar nivells i millorar per aconseguir completa el joc!
        Podràs aconseguir 2 habilitats, la primera l'hauràs de triar al comensament de la partida, i l'altra et sortirà en un nivell aleatori que t'ajudarà a obtenir la victoria. Hi ha un total de 5 habilitats, escull bé i molta sort!</p>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          info+
  </button>
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
        <input  type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  </div>
  <div id = conten2>
      <h1>Equipo</h1>
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