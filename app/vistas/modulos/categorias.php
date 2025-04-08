<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #121212;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0" style="color: #ffffff;">Filtración de Categorías</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="categorias" style="color:#830015; text-decoration: none;">Inicio</a>
            </li>
            <li class="breadcrumb-item active" style="color: #ffffff;">Filtración de categorías</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulario centrado -->
  <section class="content">
    <div class="container-fluid">
      <div class="form-container" style="max-width: 600px; margin: 0 auto; background-color: #1e1e1e; color: #ffffff; border: 1px solid #5A5F5F; padding: 30px; border-radius: 10px;">
        <h2 style="color: #ffffff; text-align:center; margin-bottom: 25px;">
          <i class="fas fa-layer-group"></i> Registrar Categoría
        </h2>
        <form>
          <div class="mb-3">
            <label for="nombreCategoria" class="form-label" style="color: #848A8A;">
              <i class="fas fa-folder-open"></i> Nombre de la categoría
            </label>
            <input type="text" id="nombreCategoria" class="form-control" placeholder="Ej: Motos, Repuestos"
              style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
          </div>

          <div class="mb-3">
            <label for="descripcionCategoria" class="form-label" style="color: #848A8A;">
              <i class="fas fa-align-left"></i> Descripción
            </label>
            <textarea id="descripcionCategoria" class="form-control" rows="3"
              placeholder="Describe brevemente esta categoría"
              style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;"></textarea>
          </div>

          <div class="mb-3">
            <label for="estadoCategoria" class="form-label" style="color: #848A8A;">
              <i class="fas fa-toggle-on"></i> Estado
            </label>
            <select id="estadoCategoria" class="form-select"
              style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
              <option value="activo">Activo</option>
              <option value="inactivo">Inactivo</option>
            </select>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn" style="background-color: #830015; color: #ffffff;">
              <i class="fas fa-save"></i> Guardar Categoría
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
