
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <form action="<?= base_url("admin/guardar_producto") ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?= $id ?>" />
							<input type="hidden" name="usuarioid" value="<?= $_COOKIE["userid"] ?>" />
              <div class="col-lg-12">
                Nombre Producto
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $id == 0 ? "" : $producto->nombre; ?>" required/>
              </div>
              <div class="col-lg-12">
                Imagen Producto
                <input type="file" id="nombre_imagen" name="nombre_imagen" class="form-control" accept="image/*" <?= $id == 0 ? "required" : ""; ?> />
              </div>              
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-lg-6">
                    Producto Mayor Precio
                    <input type="number" id="mayor_precio" name="mayor_precio" class="form-control" value="<?= $id == 0 ? "" : $producto->mayor_precio; ?>" min=0 required/>
                  </div>
                  <div class="col-lg-6">
                    Precio Producto
                    <input type="number" id="precio" name="precio" class="form-control" value="<?= $id == 0 ? "" : $producto->precio; ?>" min=0 required/>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                Producto Descripcion
                <textarea id="decripcion" name="decripcion" class="form-control" required><?= $id == 0 ? "" : $producto->descripcion; ?></textarea>
              </div>
              <div class="col-lg-12">
                Producto Categoria
                <textarea id="categoria" name="categoria" class="form-control"><?= $id == 0 ? "" : $producto->categoria; ?></textarea>
              </div>
              <div class="col-lg-12">
                <br />
                <input type="submit" class="btn btn-success" value="Save" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
