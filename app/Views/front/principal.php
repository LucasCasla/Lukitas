<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/miestilo.css') ?>">
    <link rel="icon" href="<?= base_url('assets/img/escudo.jpg') ?>" type="image/x-icon">
    <title>Aston Birra</title>
</head>
<body>
    <header>
        <img src="<?= base_url('assets/img/escudo.jpg') ?>" alt="Logo Aston Birra" class="logo">
        <nav aria-label="Navegación Principal" class="navbar">
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="hamburger">&#9776;</label>
            <ul class="nav-menu">
                <li><a href="<?= base_url('home') ?>">Inicio</a></li>
                <li><a href="<?= base_url('home/quienes_somos') ?>">Quiénes Somos</a></li>
                <li><a href="<?= base_url('home/contacto') ?>">Contacto</a></li>
                <li><a href="<?= base_url('home/registrarse') ?>">Registrarse</a></li>
                <li><a href="<?= base_url('home/login') ?>">Login</a></li>
            </ul>
            <form class="search-form">
                <input type="text" placeholder="Buscar...">
                <button type="submit">Buscar</button>
            </form>
        </nav>
    </header>
<main>
    <section>
        <h1>Bienvenidos a Aston Birra</h1>
        <p>Aston Birra te abre las puertas a un mundo de pasión, compañerismo y fútbol. Somos un equipo amateur 
            que busca más que victorias en la cancha: queremos 
            crear una comunidad donde el deporte, la amistad y el buen humor sean los protagonistas.</p>
    </section>
    <section class="carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="<?= base_url('assets/img/img7.jpg') ?>" alt="Imagen 1">
            </div>
            <div class="carousel-slide">
                <img src="<?= base_url('assets/img/imagen6.jpg') ?>" alt="Imagen 2">
            </div>
            <div class="carousel-slide">
                <img src="<?= base_url('assets/img/imagen5.jpg') ?>" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-prev">&#10094;</button>
        <button class="carousel-next">&#10095;</button>
    </section>
</main>
<footer>
        <p>&copy; <?= date('Y') ?> Aston Birra. Todos los derechos reservados.</p>
    </footer>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
</body>
</html>

