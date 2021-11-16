

<?php


require_once  'vendor/autoload.php' ;


//REPLACE WITH YOUR ACCESS TOKEN (vendedor) AVAILABLE IN: https://developers.mercadopago.com/panel/credentials
MercadoPago\SDK::setAccessToken("TEST-1435930968998447-111500-5bb7d34a82b6bd24a10232fc493deb85-1019164377");
 

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->id = 2;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();


?>

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
            <th id="nombre">Producto</th>
            <th>Total</th>
          </tr>
        <?php
          $count = 0;
					echo "acaaaa pedidooo";
					echo print_r($pedido_detalle);
				 echo print_r($pedido);
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

                <input type="hidden" name="link_exito" value="<?= $pedido->link_exito; ?>" />
					
                <input type="hidden" name="link_dinamico" value="<?= $pedido->link_dinamico; ?>" />
	

			
								
     
								<div class="cho-container">
								<input type="text" name="preferenceId" id="preferenceId" value="<?= $preference->id; ?>" />

								</div>


        
          

				



        </div>
        </div>
    </div>
</section>


