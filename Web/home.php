<!DOCTYPE HTML>
<html lang="es">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    <script type="text/javascript" src="js/assisten.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <link rel="shortcut icon" href="img/5CLOVER.ico" />
    <title>5 leaf clover</title>
  </head>
  <script type="text/javascript">

  function hablar(){

  
  var inputForm = document.querySelector('desc');


 
	

  if (annyang) {
    // Definimos nuestro primer comando. Primero escribimos el comando y posteriormente la función a ejecutar.
    var commandos = {
      'hola': function() {
        alert("¡Hola!");
      },
      'Apagar': function() {
        alert("pausado!");
        annyang.pause();
      },
      'Gas': function() {
      	var synth = window.speechSynthesis;
        var inputForm = document.querySelector('desc');
        var voices = [];
    }

     
 }

 
// Agregamos nuestros comandos a annyang.
    annyang.addCommands(commandos);

    //Establecemos el lenguaje, en mi caso es español de México (puedes ver la lista completa de lenguajes soportados aquí).
    annyang.setLanguage("es-ES");

    // Empezmaos a escuchar.
    annyang.start();
  }
  
} 
hablar();
  </script>
  <body>
  	<nav class="navbar navbar-dark bg-dark" style=" position: fixed; padding-right: 23px;opacity: 94%;">
      <img src="img/logo.png" class="responsive" id="logo" ><a id="nom" class="navbar-brand" href="home.html"><h5>5 LEAF CLOVER</h5></a>

      <div  id="menus" >
        <a  id="a2" class="navbar-brand" href="home.html">Inici</a>
        <a  id="a1"class="navbar-brand" href="uniranking.html">Ranking</a>
		</select></a>
      </div>
      <div id = "btn">
        <button   class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#Modal1">Login</button>
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
        function login(){
        
          console.log("paso por aqui pol");
          $("#btnsubmit").hide();
          $("login_message").html("<img src='img/loading.gif'>");

          var username = $("#username").val();
          var password = $("#password").val();
          
          
        $.ajax({url: "php/login.php?username="+username+"&password="+password+"", success: function(result){
          console.log(result);
          if(result == "succes"){
                      console.log("entra");
                      window.location="homeLoguejat.php";
                   }
                  else{
                     $("#login_message").text("Invalid username or password! Try again.");
                     $("#btnsubmit").show();
                  }
        }});
}
  </script>
      </div>
      <div class="modal-body">
        <div id="SingIn" class="w3-container city">
          <form  id="formLg" action="javascript:login()" method="POST" >
            <h5 id="ini">Iniciar Sessió</h5>
            <ul id="form-messages"></ul>
            <label id="titleform">Username</label>
            <input type="text" class="form-control"  placeholder="First name" name="username" id="username" required></label>
            <label id="titleform">Password</label>
            <input type="password" class="form-control" aria-describedby="passwordHelpBlock" name="password" id="password" required="">
            <div id="login_message">
            </div>
            <small id="passwordHelpBlock" class="form-text text-muted">
               <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <input type="submit" class="btn btn-primary" id="btnsubmit"></input>
        </div>
          </form>
          <script type="text/javascript">
            function registre(){
        
          console.log("paso por aqui pol");
          $("#login_btn").hide();
          $("login_message").html("<img src='img/loading.gif'>");

          var username = $("#usuario").val();
          var password = $("#pass").val();
          var email = $("#mail").val();
          console.log(email);
          console.log(password);
          console.log(username);
          
          
        $.ajax({type: "POST",url: "php/prueba.php?username="+username+"&email="+email+"&password="+password+"", success: function(result){
          console.log(result);
          alert("T'has registrat correctament\nInicia sessió");
          if(result == "succes"){
                      console.log("entra");
                      window.location="homeLoguejat.php";
                      $("#login_message").text("T'has registrat correctament!");
                   }
                  else{
                     $("#login_message").text("Invalid username or password! Try again.");
                     $("#login_btn").show();
                  }
        }});

          
          $("#login_btn").show();
}
  
  </script>

         
      </div>
       <div id="SingUp" class="w3-container city">
          <form id="formLg1" action="javascript:registre()" method="POST">
            <h5 id="ini">Registrat si ets nou!</h5>
            <label id="titleform">Username</label>
            <input type="text" class="form-control"  placeholder="First name" name="username" id="usuario" required="">
            <label id="titleform" style="margin-right: 92%; padding-top: 10px;">Email</label>
            <input type="text" class="form-control"  placeholder="@gmail.com" name="email" id="mail" required>
            <label id="titleform">Password</label>
            <input type="password"  class="form-control" aria-describedby="passwordHelpBlock" id="pass" name="password" required>
            <small id="passwordHelpBlock" class="form-text text-muted">
            <div id="login_message">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               <button type="submit" class="btn btn-primary" id="btnsubmit">Registrarse</button>
           </div>
          </form>
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



    </div>
  </body>
</html