
<div class="container-fluid" style="background-color: #0d0d0d; min-height: 100vh;">
  <div class="container py-5">
    <div class="d-flex justify-content-center text-center py-3">
      <form class="p-5" method="post" style="background-color: #1e1e1e; border: 1px solid #5A5F5F; border-radius: 8px;">
        <h1 style="color:#ffffff">Inicio de sesion</h1>
        <div class="form-group">
          <label for="nombre" style="color: #ffffff;">Ingrese el correo:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #5A5F5F; border-color: #5A5F5F;">
                <i class="fas fa-user" style="color: #ffffff;"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="nombre" name="ingresoCorreo"
              style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <div class="form-group">
          <label for="pwd" style="color: #ffffff;">Ingrese la contraseña:</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" style="background-color: #5A5F5F; border-color: #5A5F5F;">
                <i class="fas fa-lock" style="color: #ffffff;"></i>
              </span>
            </div>
            <input type="password" class="form-control" id="pwd" name="ingresoClave"
              style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>
        </div>

        <?php 
          $ingresar = new ControladorRegistro();
          $ingresar->ctrIngresar();
        ?>

        <button type="submit" class="btn mt-2" style="background-color: #830015; color: #ffffff;">Ingresar</button>
      </form>
    </div>
  </div>
</div>
