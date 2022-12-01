<!DOCTYPE html>
<html>
<head>
<title>FastFood</title>
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
      background-color: #yellow;
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
      <a class="navbar-brand" href="#">FastFood</a>
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
    <div class="col-sm-2 sidenav">
      <p><img src="Imagen/echo.jfif" width="180" height="600"></a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Bienvenido</h1>
      <p> <img src="imagen/burger-logo_1366-144.webp" width="200" heighy ="150"> <h2>   Las mejores Hamburguesas </h2></p>
      <hr>
      <h3>¿Que deseas ordenar?</h3>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Tipo Hamburguesa: <select name="tipo">
            <option> Todo Terreno </option>
            <option> Cuartel </option>
            </select>
            <br><br>
            <input type="checkbox" name="Tocineta">Tocineta<br>
            <input type="checkbox" name="Queso">Queso<br>
            <input type="checkbox" name="Cebolla">Cebolla grille<br> <br>
            <input type="submit" value="Ordenar"> <br> <br>
    </form>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p><img src="imagen/todoterreno.jpg" width="100" height="135"></p>
      </div>
      <div class="well">
        <p><img src="imagen/Cuartel.jfif" width="100" height="135"></p>
      </div>
      <div class="well">
        <p><img src="imagen/chef.webp" width="100" height="135"></p>
      </div>
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
  background: #CB4225;
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
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require "Clases.php";
        $tipo = $_POST['tipo'];
        $burguer = null;
        if($tipo == "Cuartel"){
            $burguer = new Cuartel();
        }else{
            $burguer = new TodoTerreno();
        }
        if(isset($_POST['Tocineta'])){
            $burguer = new Tocineta ($burguer);
        }
        if(isset($_POST['Queso'])){
            $burguer = new Queso ($burguer);
        }
        if(isset($_POST['Cebolla'])){
            $burguer = new Cebolla ($burguer);
        }
    echo "<div class='window-notice' id='window-notice'>
    <div class='content'>
        <div class='content-text'>".$burguer->getDescription()."<br>Precio: ".$burguer->getPrecio()."</div>
        <div class='content-buttons'><a href='index.php' id='close-button'>Aceptar</a></div>
    </div>
</div>
  ";
    }
    ?>
<footer class="container-fluid text-center">
  <p>Fast Food ™<br>2022</p>
</footer>
</body>
</html>