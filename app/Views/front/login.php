<?= $this->include('front/header') ?>

<main>
    <section>
        <h1>Login</h1>
        <form class="login-form">
            <div>
                <label for="username">Nombre de Usuario:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" class="button">Login</button>
        </form>
    </section>
</main>

<?= $this->include('front/footer') ?>

