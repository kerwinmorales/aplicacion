<div class="container-fluid" style="background-color: #0d0d0d; min-height: 100vh;">
  <div class="container py-5">

    <div class="d-flex justify-content-center text-center py-3">

      <form class="p-5" method="post" style="background-color: #1e1e1e; border: 1px solid #5A5F5F; border-radius: 10px; width: 100%; max-width: 600px; color: #ffffff;">
      <h1>Registrar un usuario</h1>
        <div class="form-group text-left">
          <label for="nombre">Nombre:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #121212; border-color: #5A5F5F; color: #ffffff;">
                <i class="fas fa-user"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="nombre" name="registroNombre" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <div class="form-group text-left">
          <label for="telefono">Teléfono:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #121212; border-color: #5A5F5F; color: #ffffff;">
                <i class="fas fa-phone"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="telefono" name="registroTelefono" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <div class="form-group text-left">
          <label for="email">Correo electrónico:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #121212; border-color: #5A5F5F; color: #ffffff;">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
            <input type="email" class="form-control" id="email" name="registroCorreo" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <div class="form-group text-left">
          <label for="pwd">Contraseña:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #121212; border-color: #5A5F5F; color: #ffffff;">
                <i class="fas fa-lock"></i>
              </span>
            </div>
            <input type="password" class="form-control" id="pwd" name="registroClave" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <?php
          $registro = ControladorRegistro::ctrRegistro();

          if ($registro === 'ok') {
            echo <<<HTML
              <script>
                if (window.history.replaceState) {
                  window.history.replaceState(null, null, window.location.href);
                }
              </script>
              <div class="alert alert-success mt-3">El usuario ha sido registrado</div>
            HTML;
          }
        ?>

        <button type="submit" class="btn mt-3" style="background-color: #830015; color: #ffffff;">Registrar</button>

      </form>

    </div>

  </div>
</div>
