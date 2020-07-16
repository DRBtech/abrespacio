<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Abrespacio | Contacto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="estilos.css" />
        <link rel="stylesheet" href="estilos/contacto.css" />
        <link rel="icon" type="image/png" href="recursos/Logo-Abrespacio.png" /> 
    </head>
    <body>
        <header>
            <figure>
                <img src="recursos/Logo-Abrespacio.png" alt="logo abrespacio" />
            </figure>
            <div class="menu">
                <i class="icon-menu"></i>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>
                            <a href="nosotros.html">Nosostros</a>
                        </li>
                        <li>
                            <a href="proyectos.html">Proyectos</a>
                        </li>
                        <li>
                            <a href="otros.html">Otros</a>
                        </li>
                        <li>
                            <a href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="hero">
            <h1>Contacto</h1>
        </section>
        <section class="formulario">
            <h2>Estemos en contacto</h2>
            <p>
                Email: contacto@abrespacio.cl 
            </p>
            <form method="POST">
                <input class="nombre text" type="text" placeholder="Nombre y Apellido" name="name" required="" />
                <input class="email text" type="email" placeholder="Tu dirección de email" name="email" required="" />
                <textarea class="mensaje text" placeholder="Escribenos tu mensaje y te responderemos" name="msg" required=""></textarea>
                <input type="submit" value="Enviar" name="enviar"/>
            </form>
            <?php 
                include("correo.php");
            ?>
        </section>
        <section class="Proyectos">
            <p>Tienes un proyecto en mente, revisa los nuestos</p>
            <a href="proyectos.html">Ver Proyectos</a>
        </section>
        <footer>
            <p>
                © 2019 Abrespacio. Todos los derechos reservados. Sitio web desarrollado por DRBTech.
            </p>
        </footer>
        
    </body>
</html>