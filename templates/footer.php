<footer class="footer-sitio pt-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-uppercase text-center pb-4">nosotros</h3>
                <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio omnis sed nam sint! Veritatis, ad dolor. Nihil amet harum dolore similique accusantium minus aliquid fuga.</p>
            </div><!--.col-md-4-->
            <div class="col-md-4 text-center ">
                <h3 class="text-uppercase pb-4">horarios</h3>
                <p>Lun-Vi: 9AM - 7PM</p>
                <p>Sábado: 10am - 2pm</p>
                <p>Domingo: Cerrado</p>
            </div><!--.col-md-4-->
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase pb-4">Contacto</h3>
                <p>66 East Sunnyslope Avenue</p>
                <p>Lansdowne,PA 19050</p>
                <nav class="sociales text-center">
                    <ul>
                    <li><a href="https://facebook.com/"> <span class="sr-only"> Facebook</span> </a></li>
                    <li><a href="https://twitter.com/"> <span class="sr-only"> Twitter</span> </a></li>
                    <li><a href="https://instagram.com/"> <span class="sr-only"> Instagram</span> </a></li>
                    <li><a href="https://pinterest.com/"> <span class="sr-only"> Pinteres</span> </a></li>
                    <li><a href="https://youtube.com/"> <span class="sr-only"> YouTube</span> </a></li>
                    </ul>
                </nav>
            </div><!--.col-md-4-->

            <hr class="w-100">
            <p class="text-center copyright w-100">Carolina Spa & Salon 2021. Todos los derechos reservados</p>
        </div><!--.row-->
    </div>
</footer>
<script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php
$fp = fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
ob_end_flush();
?>