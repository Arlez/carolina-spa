<?php
$titulo = 'Servicios';
require_once('templates/header.php');
require_once('templates/navegacion.php');
?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="hero col-12">
          <img src="img/servicios.jpg" alt="" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div><!--.hero-->

    <div class="container pt-4">
      <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal">
          <h2 class="dblock d-md-none text-uppercase text-center">Servicios</h2>

          <div id="servicios">
            <div class="card">
                <div class="card-header" id="servicio1">
                    <h2 class="mb-0"></h2>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">Servicio 1</button>
                </div><!--.card-header-->

                <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed suscipit magnam hic magni labore eveniet quidem, sequi maxime veniam porro culpa et. Provident rerum commodi corporis distinctio voluptates enim, iste laudantium deleniti, ad dolor, doloremque suscipit quae assumenda sapiente!
                    </div>
                </div>
            </div><!--.card-->

            <div class="card">
                <div class="card-header" id="servicio2">
                    <h2 class="mb-0"></h2>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">Servicio 2</button>
                </div><!--.card-header-->

                <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed suscipit magnam hic magni labore eveniet quidem, sequi maxime veniam porro culpa et. Provident rerum commodi corporis distinctio voluptates enim, iste laudantium deleniti, ad dolor, doloremque suscipit quae assumenda sapiente!
                    </div>
                </div>
            </div><!--.card-->

            <div class="card">
                <div class="card-header" id="servicio3">
                    <h2 class="mb-0"></h2>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="true" aria-controls="#descripcion3">Servicio 3</button>
                </div><!--.card-header-->

                <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed suscipit magnam hic magni labore eveniet quidem, sequi maxime veniam porro culpa et. Provident rerum commodi corporis distinctio voluptates enim, iste laudantium deleniti, ad dolor, doloremque suscipit quae assumenda sapiente!
                    </div>
                </div>
            </div><!--.card-->

          </div><!--.servicios-->
        </main><!--.contenido-principal-->

        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar p=3">
                <h2 class="text-center text-uppercase mt-4">nuevos clientes</h2>
                <p class="lead text-center mt-4">
                    Recibe un 20% de descuento con este cupón
                </p>
                <div class="cupon p-1 mt-5">
                    <p class="text-uppercase text-center">
                        <span class="display-4">20% Descuento</span><br>
                        en todos los servicios
                    </p>
                </div>

            </div>
        </aside><!--.aside-->
      </div>
    </div>

<?php
require_once('templates/citas.php');
require_once('templates/footer.php')
?>