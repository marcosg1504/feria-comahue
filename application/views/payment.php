<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Pago</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Home</a>
                    <span>Pago</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            Direccion:<?= $direccion->direccion; ?>,<br />
            Provincia:<?= $direccion->provincia; ?>,<br />
            Pais:<?= $direccion->pais; ?>,<br />
            Codigo Postal:<?= $direccion->codigo_postal; ?>,<br />
          </div>
          <div class="col-lg-6">
          <table class="table">
          <tr>
            <th>Prpducto</th>
            <th>Total</th>
          </tr>
        <?php
          $count = 0;
					// echo "acaaaa";
					// echo print_r($pedido_detalle);
					// echo print_r($pedido);
          foreach($pedido_detalle as $pd){
            $count++;
        ?>
			
        <tr>
            <td>
              <img style="height:50px; width:auto;" src="<?= base_url("productpics/" . $pd->productoid . ".png"); ?>" alt="" />
              <?= $pd->nombre; ?> X <?= $pd->cantidad; ?>
            </td>
            <td><?= number_format($pd->subtotal, 2); ?>
            </td>
        </tr>
        <?php 
      } ?>
        </table>
        </div>
        <div class="col-lg-12 text-right">
          Total: <?= number_format($pedido->total, 2); ?><br />

          <!-- rzp_test_QO19rRzBBQd86m -->
          <form action="<?= base_url('checkout/successrazorpayment');?>" methpd="POST">
                <input type="hidden" name="link_exito" value="<?= $pedido->link_exito; ?>" />
                <input type="hidden" name="link_dinamico" value="<?= $pedido->link_dinamico; ?>" />
                <script 
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="rzp_test_QO19rRzBBQd86m"
                    data-amount="<?= (2 * 100); ?>"
                    data-buttontext="Pay Now &#x20B9; <?= number_format($pedido->total, 2); ?>"
                    data-name="Abhijit Gatade"
                    data-description="Order Payment"
                    data-image="<?= base_url('assets/img/logo.png'); ?>"
                    data-prefill.name="<?= $usuario->nombre; ?>"
                    data-prefill.email="<?= $usuario->correo; ?>"
                    data-prefill.contact="<?= $usuario->telefono; ?>"
                    data-theme.color="#ff5f31"></script>
            </form>
        </div>
        </div>
    </div>
</section>
</form>
