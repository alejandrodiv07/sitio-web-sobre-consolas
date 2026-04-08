<input type="hidden" id="baseUrl" value="<?php echo $this->Html->url('/'); ?>" />

<main class="form-signin w-100 m-auto">
  <form id="formFace" name="formFace" enctype="multipart/form-data" novalidate>
    <h1 class="h3 mb-3 fw-normal">Agregar Usuario</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="data[Registro][cedula]" id="Cedula" placeholder="V-12.345.678">
      <label for="Cedula">Cédula</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" name="data[Registro][nombre]" id="floatingNombre" placeholder="Nombre">
      <label for="floatingNombre">Nombre</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" name="data[Registro][apellido]" id="Apellido" placeholder="Apellido">
      <label for="Apellido">Apellido</label>
    </div>

    <div class="form-floating">
      <input type="tel" class="form-control" name="data[Registro][numero_tlf]" id="Telefono" placeholder="0212-1234567">
      <label for="Telefono">Número de Teléfono</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" name="data[Registro][email]" id="Email" placeholder="nombre@ejemplo.com">
      <label for="Email">Correo Electrónico</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="button" id="submitbtn">Agregar</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
  </form>
</main>

<?php echo $this->Html->script('main.js'); ?>