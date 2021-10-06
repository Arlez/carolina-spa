<?php
$titulo = 'Productos';
require_once('templates/header.php');
require_once('templates/navegacion.php');
include 'inc/funciones.php';
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="hero col-12">
          <img src="img/productos.jpg" alt="" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
        </div>
      </div>
    </div>
    <div class="container pt-4 productos">
        <div class="row no-gutters">
            <main class="col-lg-12 contenido-principal">
                <h2 class="dblock d-md-none text-uppercase text-center">Productos</h2>
                <div class="row">
                    <div class="card-columns">
                        <?php
                            $productos = obtenerProductos();
                            while($producto = $productos->fetch_assoc()){  
                        ?>
                            <div class="card">
                                <a href="producto.php?id=<?php echo $producto['id']?>">
                                    <img src="img/<?php echo $producto['imagen_mini'];?>" alt="" class="img-fluid card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title text-center text-uppercase">
                                            <?php echo $producto['nombre'];?>
                                        </h3>
                                        <p class="card-text text-uppercase">
                                            <?php echo $producto['descripcion_corta'];?>
                                        </p>
                                        <p class="precio lead text-center mb-0"><?php echo $producto['precio'];?></p>
                                    </div>
                                </a>
                            </div><!--.card-->
                        <?php } ?><!--.php-->
                    </div>
                </div>
            </main>
        </div>
    </div><!--.container--> 
<?php
require_once('templates/footer.php')
?>