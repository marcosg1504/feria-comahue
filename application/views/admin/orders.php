
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Orders</h1>
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
            <table class="table table-bordered">
              <tr>
                <th>Nro</th>
                <th>Fecha Pedido</th>
                <th>Nombre</th>
                <th>Monto</th>
              </tr>
              <?php
                $count = 1;
                foreach($result as $row)
                {
                  ?>
                  <td><?= $count; ?></td>                  
                  <td>
                    <a href="<?= base_url("admin/orderdetail/" . $row->id) ?>">
                    <?= date_format(date_create($row->fecha_pedido), "d/m/Y"); ?>
                    </a>
                  </td>
                  <td><?= $row->name; ?></td>
                  <td><?= number_format($row->total, 2); ?></td>
                  </tr>
                  <?php
                }
              ?>

            </table>
          </div>
        </div>
      </div>
    </section>
  </div>
