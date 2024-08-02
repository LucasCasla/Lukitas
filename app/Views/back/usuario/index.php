<?= $this->include('front/header') ?>

<div class="container">
    <h1>Administración de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id'] ?></td>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['usuario'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td>
                    <a href="<?= base_url('admin/edit/'.$usuario['id']) ?>">Editar</a>
                    <a href="<?= base_url('admin/delete/'.$usuario['id']) ?>" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('front/footer') ?>

