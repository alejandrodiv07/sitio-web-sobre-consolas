<input type="hidden" id="baseUrl" value="<?php echo $this->Html->url('/'); ?>" />

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Lista de Usuarios</h2>
        <a href="<?php echo $this->Html->url(array('controller' => 'principal', 'action' => 'agregar')); ?>" class="btn btn-success">
            + Agregar Nuevo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($registros)): ?>
                    <?php foreach ($registros as $user): ?>
                        <tr id="fila-<?php echo $user['Registro']['id']; ?>">
                            <td><?php echo $user['Registro']['id']; ?></td>
                            <td><?php echo $user['Registro']['cedula']; ?></td>
                            <td><?php echo $user['Registro']['nombre']; ?></td>
                            <td><?php echo $user['Registro']['apellido']; ?></td>
                            <td><?php echo $user['Registro']['numero_tlf']; ?></td>
                            <td><?php echo $user['Registro']['email']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar"
                                    onclick="cargarDatosEditar(
                                        '<?php echo $user['Registro']['id']; ?>',
                                        '<?php echo $user['Registro']['cedula']; ?>',
                                        '<?php echo $user['Registro']['nombre']; ?>',
                                        '<?php echo $user['Registro']['apellido']; ?>',
                                        '<?php echo $user['Registro']['numero_tlf']; ?>',
                                        '<?php echo $user['Registro']['email']; ?>'
                                    )">
                                    Editar
                                </button>

                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="eliminarUsuario(<?php echo $user['Registro']['id']; ?>)">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="formEditar">
                    <input type="hidden" name="id" id="editarId">

                    <div class="mb-3">
                        <label for="editarCedula" class="form-label">Cédula</label>
                        <input type="text" class="form-control" name="cedula" id="editarCedula" required>
                    </div>

                    <div class="mb-3">
                        <label for="editarNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="editarNombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="editarApellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="editarApellido" required>
                    </div>

                    <div class="mb-3">
                        <label for="editarTelefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="numero_tlf" id="editarTelefono">
                    </div>

                    <div class="mb-3">
                        <label for="editarEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="editarEmail">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php echo $this->Html->script('main.js'); ?>