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
    <link rel="stylesheet" type="text/css" href="style/ranking.css">
    <link rel="stylesheet" type="text/css" href="style/tabla.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- assisten de veu -->
    <script type="text/javascript" src="js/asisten.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Icons!-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Ranking</title>
  </head>
  <body style="background-image: url(img/desc.jpg);">
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
<script type="text/javascript"> </script>

  <br>
  <script type="text/javascript">
    finalResult='';
$(document).ready(function() {

    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.lang = "es-ES";
 
    $('#audio').click(function(event) {
        recognition.start();
        $("#audio").focus(false);
    });
 
    recognition.onresult = function (event) {
       $('#searchTerm').val("");
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
                $('#searchTerm').val(finalResult);
                recognition.stop();
                doSearch(finalResult);
               

            }
        }
    };
});


     function doSearch()
        {
            const tableReg = document.getElementById('datos');
            const finalResult = document.getElementById('searchTerm').value.toLowerCase();
            let total = 0;
 
            // Recorremos todas las filas con contenido de la tabla
            for (let i = 1; i < tableReg.rows.length; i++) {
                // Si el td tiene la clase "noSearch" no se busca en su cntenido
                if (tableReg.rows[i].classList.contains("noSearch")) {
                    continue;
                }
 
                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                // Recorremos todas las celdas
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (finalResult.length == 0 || compareWith.indexOf(finalResult) > -1) {
                        found = true;
                        total++;
                    }
                }
                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
 
            // mostramos las coincidencias
            const lastTR=tableReg.rows[tableReg.rows.length-1];
            const td=lastTR.querySelector("td");
            lastTR.classList.remove("hide", "red");
            if (finalResult == "") {
                lastTR.classList.add("hide");
            } else if (total) {
                td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
                console.log(finalResult);
            } else {
                lastTR.classList.add("red");
                td.innerHTML="No se han encontrado coincidencias";
            }
        }

  </script>
  <script type="text/javascript">

</script>
<div id="texto"></div>   
  <input style="margin-top: 4%; width:35%; display: inline; margin-left: 30%;" type="text" class="form-control" id="searchTerm" placeholder="Search.." aria-label="Username" aria-describedby="addon-wrapping" onkeyup="doSearch()">
  <button type="button" class="btn btn-dark" id="audio" style="display: inline-block;"><span class="fa fa-microphone"></span></button>
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
      <tr>
        <td style="background-color:#00cc00 opacity 20%">5</td><td style="background-color: #00cc00 opacity 20%;">akarbol</td><td style="background-color: #00cc00 opacity 20%;">8</td>
      </tr>
      <tr>
        <td  style="background-color: #00cc00 opacity 20%;">6</td><td style="background-color: #00cc00 opacity 20%;">Xexi11</td><td style="background-color: #00cc00 opacity 20%;">8</td>
      </tr>
      <tr>
        <td  style="background-color: #00cc00 opacity 20%;">7</td><td style="background-color: #00cc00 opacity 20%;" >Marfelip</td style="background-color: #00cc00 opacity 20%;" > <td style="background-color: #00cc00 opacity 20%;">7</td>
      </tr>
      <tr>
        <td style="background-color: #00cc00 opacity 20%;">8</td><td style="background-color: #00cc00 opacity 20%;">Sagui</td><td style="background-color: #00cc00 opacity 20%;" >6</td>
      </tr>
      <tr>
        <td style="background-color: #00cc00 opacity 20%;">9</td><td style="background-color: #00cc00 opacity 20%;">Vivó</td><td style="background-color: #00cc00 opacity 20%;" >5</td>
      </tr>
      <tr>
        <td style="background-color: #00cc00 opacity 20%;" >10</td><td style="background-color: #00cc00 opacity 20%;">strixZombis</td><td style="background-color: #00cc00 opacity 20%;">1</td>
      </tr>
      <tr class='noSearch hide'>
                <td colspan="5"></td>
            </tr>
    </table>
    </div>
  </body>
</html