<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #121212;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0" style="color: #ffffff;">Administración de Perfiles</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="perfiles" style="color:#830015; text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" style="color: #ffffff;">Administración de Perfiles</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- FORMULARIO DE PERFILES -->
      <div class="card mx-auto" style="max-width: 600px; background-color: #1e1e1e; color: #ffffff; border: 1px solid #5A5F5F;">
        <div class="card-header" style="background-color: #830015; color: #ffffff;">
          <h3 class="card-title"><i class="fas fa-user-tag"></i> Registrar Perfil</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="nombrePerfil" class="form-label" style="color: #848A8A;">
                <i class="fas fa-id-badge"></i> Nombre del perfil
              </label>
              <input type="text" id="nombrePerfil" class="form-control" placeholder="Ej: Administrador, Vendedor"
                style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>

            <div class="mb-3">
              <label for="descripcionPerfil" class="form-label" style="color: #848A8A;">
                <i class="fas fa-align-left"></i> Descripción
              </label>
              <textarea id="descripcionPerfil" class="form-control" rows="3" placeholder="Describe brevemente el rol o sus funciones"
                style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;"></textarea>
            </div>

            <div class="mb-3">
              <label for="permisosPerfil" class="form-label" style="color: #848A8A;">
                <i class="fas fa-key"></i> Nivel de permisos
              </label>
              <select id="permisosPerfil" class="form-select"
                style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
                <option value="">Selecciona un permiso</option>
                <option value="lectura">Lectura</option>
                <option value="escritura">Lectura y Escritura</option>
                <option value="admin">Administrador</option>
              </select>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn" style="background-color: #830015; color: #ffffff;">
                <i class="fas fa-save"></i> Guardar Perfil
              </button>
            </div>
          </form>
        </div>
      </div>
      <!-- FIN DEL FORMULARIO -->
    </div>
  </section>
</div>



   