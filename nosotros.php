<?php
$titulo = 'Nosotros';
require_once('templates/header.php');
require_once('templates/navegacion.php');
?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="hero col-12">
          <img src="img/nosotros.jpg" alt="" class="img-fluid">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal">
          <h2 class="dblock d-md-none text-uppercase text-center">nosotros</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eos soluta ducimus voluptatibus ab atque, earum minima officiis repellat non eveniet fugiat omnis. Sunt velit quaerat placeat et, beatae doloremque praesentium ad nisi tempora provident, libero nobis iste aut explicabo, dolorem dicta? Cupiditate, quis? Sapiente excepturi adipisci et vel porro?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eos soluta ducimus voluptatibus ab atque, earum minima officiis repellat non eveniet fugiat omnis. Sunt velit quaerat placeat et, beatae doloremque praesentium ad nisi tempora provident, libero nobis iste aut explicabo, dolorem dicta? Cupiditate, quis? Sapiente excepturi adipisci et vel porro?</p>

          <h1 class="text-center text-uppercase mt-4 encabezado">
            <span class="text-lowercase d-block">conoce nuestras</span>instalaciones
          </h1>

          <div class="imagenes pt-4">
            <a href="#" data-target="#imagen_1" data-toggle="modal">
                <img src="img/galeria_mini_01.jpg" alt="" class="img-fluid">
            </a>
            <a href="#" data-target="#imagen_2" data-toggle="modal">
                <img src="img/galeria_mini_02.jpg" alt="" class="img-fluid">
            </a>
            <a href="#" data-target="#imagen_3" data-toggle="modal">
                <img src="img/galeria_mini_03.jpg" alt="" class="img-fluid">
            </a>

            <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/galeria_grande_01.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!--.modal-->
            <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/galeria_grande_02.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!--.modal-->
            <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="img/galeria_grande_03.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div><!--.modal-->
          </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
            <h2 class="text-center text-uppercase mt-4">Horarios</h2>
            <p class="text-center lead mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et temporibus doloribus porro inventore tenetur sequi ea ullam fugiat accusamus. Non.</p>

            <table class="table table-hover text-center mt-5">
            <thead>
                <tr>
                    <th class="text-center">Día</th>
                    <th class="text-center">De</th>
                    <th class="text-center">Hasta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lunes</td>
                    <td>09:00</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td>09:00</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Miércoles</td>
                    <td>09:00</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td>09:00</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td>09:00</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Sábado</td>
                    <td>10:00</td>
                    <td>14:00</td>
                </tr>
                <tr>
                    <td>Domingo</td>
                    <td>Cerrado</td>
                    <td>Cerrado</td>
                </tr>
            </tbody>
        </table>
          </div>
        </aside>
      </div>
    </div>

<?php
require_once('templates/footer.php')
?>