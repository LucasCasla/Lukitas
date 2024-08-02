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
