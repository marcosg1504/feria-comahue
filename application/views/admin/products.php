
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a class="btn btn-success" href="<?= base_url("admin/product/0"); ?>">+ Product</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <table class="table table-bordered">
              <tr>
                <th></th>
                <th>Numero</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Mayor Precio</th>
                <th>Precio</th>
              </tr>
              <?php
                $count = 1;
                foreach($result as $row)
                {
								if 	(($row->usuarioid) == ($_COOKIE["userid"])) {
                  ?>
                  <td style="width:100px;">
                    <a href="<?= base_url("admin/product/" . $row->id); ?>">Edit</a>
                    <a href="<?= base_url("admin/borrar_producto/" . $row->id); ?>" onclick="return confirm('Sure to delete?')">Delete</a>
                  </td>
                  <td><?= $count; ?></td>
                  <td><img src="<?= base_url("productpics/" . $row->nombre_imagen); ?>" style="height:100px;" /></td>
                  <td><?= $row->nombre; ?></td>
                  <td><?= number_format($row->mayor_precio, 2); ?></td>
                  <td><?= number_format($row->precio, 2); ?></td>
                  </tr>
                  <?php
                }
							}
              ?>

            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
