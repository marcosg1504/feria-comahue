
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pedido Detalle</h1>
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
            Nombre: <?= $customer->nombre; ?><br />
            Telefono: <?= $customer->telefono; ?><br />
            Correo: <?= $customer->correo; ?><br />
            Pedido Id: <?= $order->id; ?><br />
            Pedido Fecha: <?= date_format(date_create($order->fecha_pedido), "d/m/Y"); ?><br />
            <table class="table table-bordered">
                <tr>
                    <th>Nro</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            <?php
                $count = 1;
                foreach($orderetail as $od)
                {
                ?>
                <tr>
                    <td><?= $count; ?></td>
                    <td><?= $od->nombre; ?> </td>
                    <td style="text-align:center;"><?= number_format($od->precio, 2); ?> </td>
                    <td style="text-align:center;"><?= $od->quantity; ?> </td>
                    <td style="text-align:center;"><?= number_format($od->subtotal, 2); ?> </td>
                    <td><?= ($od->estado == "pending" ? "Not yet delivered" : "Delivered"); ?> </td>
                    <td>
                      <?php
                        if($od->estado == "pending")
                        {
                          echo '<a href="' . base_url("admin/updatestatus/" . $od->pedidoid . '/' . $od->id) . '">Delivered</a>';
                        }
                      ?>
                      
                    </td>
                </tr>
            <?php
                $count++;
                }
            ?>
            </table>
            Order Amount: <?= number_format($order->total, 2) ?>
        </div>
        </div>
      </div>
    </section>
  </div>
