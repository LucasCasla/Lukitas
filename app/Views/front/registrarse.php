<?= $this->include('front/header') ?>

<main>
    <section>
        <h1>Registrarse</h1>
        <form class="register-form">
            <div>
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="button">Registrarse</button>
        </form>
    </section>
</main>

<?= $this->include('front/footer') ?>

