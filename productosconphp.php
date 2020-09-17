<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estiloinicio.css">
    
</head>
<main>
        <div class="navestatico" alt="">
        <nav class="menu">
            <div class="logo">
                <img src="img/logo.jpg" alt="">
            </div>
            <ul>
                <li><a href="index2.php">Inicio</a></li>
                <li><a href="productosconphp.php">Productos</a></li>
				<li><a href="quienessomos.html">¿Quiénes somos?</a></li>
				<li><a href="cerrar.html">Cerrar sesión</a></li>
            </ul>
        </nav>
        </div>
    
<body>
<?php 
    include_once('functions/bd_conn.php');
    include_once('templates/head.php');
    include_once('templates/search.php');
    if(!empty($_GET['busqueda'])){
        $busqueda = $_GET['busqueda'];

        $sql = "SELECT * FROM productos WHERE name LIKE '%".$busqueda."%'";
     
        $result = mysqli_query($conn,$sql);
        while($item = mysqli_fetch_assoc($result)){
            echo '
            <div class="product">
                 <div class="img">
                     <img src="'.$item['img'].'">
                 </div>
                 <div class="title">
                     <h4>'.$item['name'].'</h4>
                 </div>
                 <div class="price">
                 <span>'.$item['name'].'</span>
             </div>
            </div>';
        }
     
    }

   include_once('templates/footer.php');
    
?>
