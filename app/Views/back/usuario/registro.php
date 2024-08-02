<!-- app/Views/back/usuario/registro.php -->

<div class="container">
    <h1>Registrarse</h1>
    <form action="<?= base_url('register') ?>" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= set_value('nombre') ?>">
            <?php if (isset($validation) && $validation->hasError('nombre')): ?>
                <div class="alert alert-danger"><?= $validation->getError('nombre') ?></div>
            <?php endif; ?>
        </div>

        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?= set_value('apellido') ?>">
            <?php if (isset($validation) && $validation->hasError('apellido')): ?>
                <div class="alert alert-danger"><?= $validation->getError('apellido') ?></div>
            <?php endif; ?>
        </div>

        <div>
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?= set_value('usuario') ?>">
            <?php if (isset($validation) && $validation->hasError('usuario')): ?>
                <div class="alert alert-danger"><?= $validation->getError('usuario') ?></div>
            <?php endif; ?>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= set_value('email') ?>">
            <?php if (isset($validation) && $validation->hasError('email')): ?>
                <div class="alert alert-danger"><?= $validation->getError('email') ?></div>
            <?php endif; ?>
        </div>

        <div>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="pass">
            <?php if (isset($validation) && $validation->hasError('pass')): ?>
                <div class="alert alert-danger"><?= $validation->getError('pass') ?></div>
            <?php endif; ?>
        </div>

        <button type="submit" class="button">Registrarse</button>
    </form>
</div>
