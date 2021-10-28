<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Mi Cuenta</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">inicio</a>
                    <span>Mi Cuenta</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Fecha de pedido</th>
                    <th>Total del pedido</th>
                </tr>
            <?php
                $count = 1;
                foreach($pedidos as $pedido)
                {
                ?>
                <tr>
                    <td><?= $count; ?></td>
                    <td>
                        <a href="<?= base_url("user/orderdetail/" . $pedido->id); ?>" style="color:blue;">
                            <?= date_format(date_create($pedido->fecha_pedido), "d/m/Y"); ?>
                        </a>
                    </td>
                    <td><?= number_format($pedido->total, 2); ?></td>
                </tr>
            <?php
                $count++;
                }
            ?>
            </table>
        </div>
        </div>
    </div>
</section>
