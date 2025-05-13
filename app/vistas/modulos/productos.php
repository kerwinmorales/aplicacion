<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: #121212;">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-white">Administración de Productos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="productos" style="color: #830015;">Inicio</a></li>
            <li class="breadcrumb-item active text-white">Administración de productos</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid d-flex justify-content-center">
      <div class="card col-md-6" style="background-color: #1e1e1e; border: 1px solid #5A5F5F;">
        <div class="card-header text-center">
          <a href="#" class="h3" style="color: #ffffff;"><b>ADSO</b>SENA</a>
        </div>
        <div class="card-body">
          <p class="text-center" style="color: #ffffff;">Registrar un producto</p>
          <form action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Categoría (Ej: moto o repuesto)"  name="productoCategoria"  style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre del producto" name="productoNombre" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Marca (Ej: Honda, Suzuki)" name="productoMarca" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Modelo (Ej: 2024)" name="productoModelo" style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Precio"  name="productoPrecio"  style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" placeholder="cantidad"  name="productoCantidad"  style="background-color: #121212; color: #ffffff; border-color: #5A5F5F;">
            </div>



            <?php

                    /*=============================================
                    FORMA EN QUE SE INSTA­NCIA LA CLASE DE UN MÉTODO ESTÁTICO
                    =============================================*/

                    $producto = ControladorProducto::ctrProducto();

                    if ($producto === 'ok') {
                        // Aquí sí entra cuando el método devuelve "ok"
                        echo '<script>
                            if (window.history.replaceState) {
                                window.history.replaceState(null, null, window.location.href);
                            }
                        </script>';
                        echo '<div class="alert alert-success">El producto ha sido guardado</div>';
                    }

                ?>


            <div class="text-center">
              <button type="submit" class="btn" style="background-color: #830015; color: #ffffff;">Registrar producto</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>

