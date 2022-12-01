<!DOCTYPE html>
<html>
<head>
<title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
<?php

require "Clases.php";

$sem1 = new Semestre();
$sem2 = new Semestre();
$sem3 = new Semestre();
$sem4 = new Semestre();
$sem5 = new Semestre();
$sem6 = new Semestre();
$sem7 = new Semestre();
$sem8 = new Semestre();
$sem9 = new Semestre();
$sem10 = new Semestre();

$programa =array($sem1,$sem2,$sem3,$sem4,$sem5,$sem6,$sem7,$sem8,$sem9,$sem10);

$strJsonFileContents = file_get_contents("data.json");

$array= json_decode($strJsonFileContents, true);

for ($i=0;$i<count($array);$i++){
    $semestre=$array[$i];
    if(isset($semestre['estudiante'])){
    for($j=0;$j<count($semestre['estudiante']);$j++){
        $estudiante = $semestre['estudiante'][$j];
        $est = new Estudiante($estudiante['nombre'],$estudiante['cedula'],$estudiante['promedio']);
        $programa[$i]->agrega($est);
    }
}
}
?>  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #ffc0cb;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
        color: purple
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="color:purple">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Alumno registro</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class=""></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
      <h1>Bienvenido</h1>
      <p><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
Nombre: <input type="text" name ="nombre">
<br><br>
Cedula :<input type="text" name ="cedula">
<br><br>
Promedio: <input type="text" name= "promedio">
<br><br>
Semestre: <select name ="semestre">
<br><br>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
<br><br>
<input type="submit"><br><br>
</form></p>
      <br>
      <?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $nombre= $_POST['nombre'];
   $cedula= $_POST['cedula'];
   $promedio= floatval($_POST['promedio']);
   $semestre= intval($_POST['semestre']);

   $est=new Estudiante($nombre,$cedula,$promedio);
   $programa[$semestre-1]->agrega($est);

   for($i=0;$i<count($programa);$i++){
    echo "Semestre".($i+1).":".$programa[$i]->getPromedio()."<br>";
   }
   $fp = fopen('data.json', 'w');
   fwrite($fp, json_encode($programa));
   fclose($fp);
   }
?>
    </div>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background: white;
}
.wrapper{
  position: absolute;
  bottom: 30px;
  left: 30px;
  max-width: 365px;
  background: #fff;
  padding: 25px 25px 30px 25px;
  border-radius: 15px;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
}
.wrapper.hide{
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: all 0.3s ease;
}
::selection{
  color: #fff;
  background: #FCBA7F;
}
.wrapper img{
  max-width: 90px;
}
.content header{
  font-size: 25px;
  font-weight: 600;
}
.content{
  margin-top: 10px;
}
.content p{
  color: #858585;
  margin: 5px 0 20px 0;
}
.content .buttons{
  display: flex;
  align-items: center;
  justify-content: center;
}
.buttons button{
  padding: 10px 20px;
  border: none;
  outline: none;
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  background: #FCBA7F;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons button:hover{
  transform: scale(0.97);
}
.buttons .item{
  margin: 0 10px;
}
.buttons a{
  color: #FCBA7F;
}
  .window-notice {
    background: rgba(33, 41, 52, .85);
    left: 0;
    bottom: 0;
    right: 0;
    top: 0;
    display: flex;
    position: fixed;
    z-index: 999;
}
.window-notice .content {
    background: #fff;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(33, 41, 52, .75);
    box-sizing: content-box;
    display: flex;
    flex-direction: column;
    margin: auto;
    max-width: 600px;
    min-width: 320px !important;
    overflow: hidden;
    position: relative;
    width: 100%;
    padding: 2rem;
    font-size: 1.3rem;
}
  </style>
<footer class="container-fluid text-center">
  <p>Registro ™<br>2022</p>
</footer>
</body>
</html>