<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace('.php', '', $archivo);

if(isset($_GET['id'])){
    $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
}else{
    $archivoCache = 'cache/'.$pagina.'.html';
}

$tiempo = 36000;

if(file_exists($archivoCache) && time() - $tiempo<filemtime($archivoCache)){
    include($archivoCache);
    exit;
}
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5dee76c536.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italianno|Lato:400,700,900|Relaway:400,700,900">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $titulo;?> | Carolina Spa</title>
  </head>
  <body>

    <header class="encabezado-sitio container">
    <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
            <a href="index.php">
                <img src="img/logo.svg" alt="logo" class="img-fluid mx-auto d-block pt-4 pb-4">
            </a>
        </div>
        <div class="col-lg-4">
            <nav class="sociales text-lg-right text-center">
                <ul>
                <li><a href="https://facebook.com/"> <span class="sr-only"> Facebook</span> </a></li>
                <li><a href="https://twitter.com/"> <span class="sr-only"> Twitter</span> </a></li>
                <li><a href="https://instagram.com/"> <span class="sr-only"> Instagram</span> </a></li>
                <li><a href="https://pinterest.com/"> <span class="sr-only"> Pinteres</span> </a></li>
                <li><a href="https://youtube.com/"> <span class="sr-only"> YouTube</span> </a></li>
                </ul>
            </nav>
        </div>
    </div>
</header><!--.header-->