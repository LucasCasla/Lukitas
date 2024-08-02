<!-- app/Views/back/usuario/login.php -->

<div class="container">
    <h1>Login</h1>
    <form action="<?= base_url('login') ?>" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?= set_value('usuario') ?>">
            <?php if (isset($validation) && $validation->hasError('usuario')): ?>
                <div class="alert alert-danger"><?= $validation->getError('usuario') ?></div>
            <?php endif; ?>
        </div>

        <div>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass">
            <?php if (isset($validation) && $validation->hasError('pass')): ?>
                <div class="alert alert-danger"><?= $validation->getError('pass') ?></div>
            <?php endif; ?>
        </div>

        <button type="submit" class="button">Login</button>
    </form>
</div>
