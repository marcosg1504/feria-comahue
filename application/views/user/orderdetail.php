<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Detalles del pedido</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Inicio</a>
                    <span>Mi cuenta - Detalles de orden</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            Nombre: <?= $customer->name; ?><br />
            Telefono: <?= $customer->mobileno; ?><br />
            Email: <?= $customer->email; ?><br />
            ID pedido: <?= $order->id; ?><br />
            Fecha de pedido: <?= date_format(date_create($order->orderdate), "d/m/Y"); ?><br />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Estado</th>
                </tr>
            <?php
                $count = 1;
                foreach($orderetail as $od)
                {
                ?>
                <tr>
                    <td><?= $count; ?></td>
                    <td><?= $od->name; ?> </td>
                    <td style="text-align:center;"><?= number_format($od->price, 2); ?> </td>
                    <td style="text-align:center;"><?= $od->quantity; ?> </td>
                    <td style="text-align:center;"><?= number_format($od->subtotal, 2); ?> </td>
                    <td><?= ($od->status == "pendiente" ? "No enviado  " : "Enviado"); ?> </td>
                </tr>
            <?php
                $count++;
                }
            ?>
            </table>
            Total del pedido <?= number_format($order->total, 2) ?>
        </div>
        </div>
    </div>
</section>
