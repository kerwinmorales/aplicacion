<link rel="stylesheet" href="css/background.css">

<main class="content-wrapper" style="background-color: #121212; color: #ffffff;">

  <header class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        
        <div class="col-sm-6">
          <h1 class="m-0 text-white">Panel de Control</h1>
        </div>

        <div class="col-sm-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="inicio" style="color: #830015; text-decoration: none;">Inicio</a>
              </li>
              <li class="breadcrumb-item active text-white" aria-current="page">Panel de control</li>
            </ol>
          </nav>
        </div>

      </div>
    </div>
  </header>

  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <!-- Usuarios -->
        <article class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #5A5F5F; color: #ffffff;">
            <div class="inner">
              <h3>150</h3>
              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="personas" class="small-box-footer" style="color: #ffffff;">
              Más info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </article>

        <!-- Productos -->
        <article class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #848A8A; color: #ffffff;">
            <div class="inner">
              <h3>53</h3>
              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="fas fa-box-open"></i>
            </div>
            <a href="productos" class="small-box-footer" style="color: #ffffff;">
              Más info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </article>

        <!-- Puedes agregar más tarjetas aquí -->

      </div>

      <!-- Botones -->
      <div class="mt-4">
        <a href="productos" class="btn btn-lg" style="background-color: #830015; color: #ffffff;">
          <i class="fas fa-plus"></i> Nuevo Producto
        </a>
        <a href="personas" class="btn btn-lg" style="background-color: #5A5F5F; color: #ffffff;">
          <i class="fas fa-user-plus"></i> Nuevo Usuario
        </a>
      </div>

    </div>
  </section>

</main>
