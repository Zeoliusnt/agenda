<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar citas</title><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
   
    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu"  />
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis at fuga officia 
                    omnis accusamus! Dolores aut sequi, rerum nobis voluptate vel fugit aspernatur harum 
                    impedit! Enim quam vero officia in!

                </p>
                <a href="#" class="btn-1">Informacion</a>

            </div>
            <div class="header-img">
                <img src="imagenes/left.png" alt="">
            </div>
        </div>

    </header>
    <section class="about container">

        <div class="about-img">
            <img src="imagenes/about.jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, voluptas ea dolor perferendis natus reprehenderit iure expedita odit. Minima laudantium dignissimos, dolorum eveniet aliquid nostrum. Quod rem commodi perferendis. Non.
            </p>
            <br>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iure ex, qui consequuntur odit suscipit minus neque quo explicabo, excepturi nostrum, corrupti animi totam itaque quibusdam est maiores iusto magni?
            </p>
        </div>

    </section>
    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatra</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Dermatologia</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>
        </div>
    </main>

        <section class="formulario container">
            <form method="post" autocomplete="off">
                <h2>Agenda consulta</h2>
                <div class="input-group">

                    <div class="input-container">
                        <input type="text" name="name" placeholder="Nombre y Apellido">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div class="input-container">
                        <input type="tel" name="phone" placeholder="Telefono celular">
                        <i class="fa-solid fa-phone"></i>
                    </div>

                    <div class="input-container">
                        <input type="email" name="email" placeholder="Correo">
                        <i class="fa-solid fa-envelope"></i>
                    </div>

                    <div class="input-container">
                        <textarea name="menssage" placeholder="Detalles de la consulta"></textarea>
                    </div>
                    <input type="submit" name="send" class="btn" onClick="myFunction()">

                </div>

            </form>
        </section>

        <footer class="footer">
            <div class="footer-content container">
                <div class="link">
                    <a href="#" class="logo">logo</a>
                </div>

                <div class="link">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <?php
            include("send.php");
        ?>
        <script>
            function myFunction() {
                Window.location.href="http//localhost/Pagina%20Consulta"
            }
        </script>
</body>
</html>