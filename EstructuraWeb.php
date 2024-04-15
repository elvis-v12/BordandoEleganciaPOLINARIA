<?php
session_start();

if(!isset($_SESSION['usuario'])){
  header("location: IngresoLoginIngreso.php");
  exit(); // Asegúrate de salir del script después de la redirección
}
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Estilos/EstilosBLue.css" />
    <link rel="shortcut icon" href="Imagenes/Logo.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <title>Bordando Elegancia POLINARIA</title>
  </head>
  <body>

    <header id="inicio" class="header">
      <div class="menu container">
        <a href="#" class="logo">Logo</a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="Imagenes/menu.png" class="menu-icono" alt="menu" />
        </label>
        <nav class="navbar">
          <ul>
          <li><a href="#inicio">Inicio</a></li>
<li><a href="#servicios">Servicios</a></li>
<li><a href="#producto">Producto</a></li>
<li><a href="#calificacion">Calificacion</a></li>
<li><a href="#contacto">Contacto</a></li>

          </ul>
        </nav>
        <div>
          <ul>
            <li class="submenu">
              <img id="img-carrito" src="Imagenes/carrito-de-compras.png" alt="carrito">
              <div id="carrito">
                <table id="lista-carrito">
                  <thead>
                    <tr>
                      <th>Imagen</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
                <a href="#" id="vaciar-carrito" class="btn-3">Vaciar Carito</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="header-content container">
        <div class="header-txt">
          <span>Bienvenido a nuestra tienda</span>
          <h1>Ofertas Especiales</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, magni quisquam voluptas obcaecati laboriosam dignissimos odit? Cum sit nemo culpa.</p>
          <div class="butons">
            <a href="#" class="btn-1">Informacion</a>
            <a href="#" class="btn-1">Leer Mas</a>
          </div>
        </div>
        <div class="header-img">
          <img src="Imagenes/Repet01.png" alt="" />
        </div>
      </div>
    </header>
    

    
     <section id="ofertas" class="oferts conteiner">
        <div class="ofert-1 b1">
            <div class="ofert-txt">
            <h3>Lorem ipsum dolor sit.</h3>
            <a href="#"Leer mas></a>
        </div>
        <div class="ofert-img">
            <img src="Imagenes/Repet02.jpeg" alt="">
        </div>
    </div>
        
        <div class="ofert-1 b2">
            <div class="ofert-txt">
            <h3>Lorem ipsum dolor sit.</h3>
            <a href="#"Leer mas></a>

        </div>
        <div class="ofert-img">
            <img src="Imagenes/Repet03.jpeg" alt="">
        </div>
        </div>
        <div class="ofert-1 b3">
            <div class="ofert-txt">
            <h3>Lorem ipsum dolor sit.</h3>
            <a href="#"Leer mas></a>

        </div>
        <div class="ofert-img">
            <img src="Imagenes/Repet04.png" alt="">
        </div>
        </div>
     </section>

     <main id="productos" class="products container">
         <h2>Productos Destacados</h2>
         <div class="box-container " id="lista-1">
            <div class="box">
                <img src="Imagenes/Repet01.png" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet02.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet03.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet04.png" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet05.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet06.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet07.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet08.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet09.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar al carrito</a>
                </div>
            </div>
            <div class="box">
                <img src="Imagenes/Repet10.jpeg" alt="">
                <div class="product-txt">
                    <h3>Elisom</h3>
                    <p>Calidad Premium</p>
                    <p class="precio">s/500</p>
                    <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar al carrito</a>
                </div>
            </div>
         </div> 
         <div class="btn-2" id="load-more"> Cargar Mas </div>
     </main>



     <section id="Testimonio" class="testimonial container">
       <span>testimoniales</span>
       <h2>Que opinan nuestros clientes</h2>
       <div class="testimonial-content">
        <div class="testimonial-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat temporibus doloremque tempore 
                fugiat excepturi alias dolor cupiditate corporis inventore voluptatem, fuga quasi natus perspiciatis
                 sequi. Eveniet tempora harum voluptatum obcaecati.</p>
                 <img src="Imagenes/cinco-estrellas.png" alt="">
                 <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi assumenda 
                    error perferendis enim quasi voluptates aut unde?</h4>
        </div>
        <div class="testimonial-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat temporibus doloremque tempore 
                fugiat excepturi alias dolor cupiditate corporis inventore voluptatem, fuga quasi natus perspiciatis
                 sequi. Eveniet tempora harum voluptatum obcaecati.</p>
                 <img src="Imagenes/cinco-estrellas.png" alt="">
                 <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi assumenda 
                    error perferendis enim quasi voluptates aut unde?</h4>
        </div>
        <div class="testimonial-1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat temporibus doloremque tempore 
                fugiat excepturi alias dolor cupiditate corporis inventore voluptatem, fuga quasi natus perspiciatis
                 sequi. Eveniet tempora harum voluptatum obcaecati.</p>
                 <img src="Imagenes/cinco-estrellas.png" alt="">
                 <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi assumenda 
                    error perferendis enim quasi voluptates aut unde?</h4>
        </div>
       </div>
     </section>



     <footer id="otros" class="footer">
      <div class="footer-content container">
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>
      </div>
     </footer>


     <section class="contactos-card container" id="contacto">
        
        <div class="contactos">
          <div class="box-info">
            <h1>CONTACTATE CON NOSOTROS</h1>
          <div class="data">
             <p><i class="fa-solid fa-phone"></i>+51 900 263 168</p>
             <p><i class="fa-solid fa-envelope"></i>elvisantoniovegamiranda@gmail.com</p>
             <p><i class="fa-solid fa-location-dot"></i>Peru, Ancash, Pomabamba giron huaraz </p>
          </div>
          <div class="links">
            <a href="#"><i class="fa-brands  fa-facebook"></i></a>
            <a href="#"><i class="fa-brands  fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          </div>
        </div>
        <form action="">
            <div class="input-box">
                <input type="text" required placeholder="Nombre  y Apellido"/>
            </div>
            <div class="input-box">
                <input type="text" required placeholder="Correo Electronico"/>
            </div>
            <div class="input-box">
                <input type="text" required placeholder="Asunto"/>
            </div>
            <div class="input-box">
                <textarea name="" id="" cols="30" rows="10" class="input-box" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>
        </div>
     </section> 
    <script src="Scripts/Componentes.js"></script>
  </body>
</html>
