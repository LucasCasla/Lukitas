<?= $this->include('front/header') ?>

<div class="container">
    <h1>Editar Usuario</h1>
    <form action="<?= base_url('admin/update/'.$usuario['id']) ?>" method="post">
        <?= csrf_field() ?>
        
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= $usuario['nombre'] ?>" required>
        </div>

        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="<?= $usuario['apellido'] ?>" required>
        </div>

        <div>
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" value="<?= $usuario['usuario'] ?>" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $usuario['email'] ?>" required>
        </div>

        <div>
            <label for="pass">Contraseña (dejar en blanco para mantener la actual):</label>
            <input type="password" id="pass" name="pass">
        </div>

        <button type="submit" class="button">Actualizar</button>
    </form>
</div>

<?= $this->include('front/footer') ?>

