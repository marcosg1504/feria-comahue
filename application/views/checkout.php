


<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Informacion de Entrega</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Carga datos</a>
                    <span>Envio</span>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="<?= base_url("checkout/placeorder") ?>" method="POST">
<section class="shop spad">
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            Direccion
            <textarea id="direccion" name="direccion" class="form-control" required></textarea>
            Ciudad
            <input type="text" name="ciudad" class="form-control"  required/>
            Pais
            <input type="text" name="pais" class="form-control"  required/>
            Codigo Postal
            <input type="number" name="codigo_postal" class="form-control"  required/>
          </div>
          <div class="col-lg-6">
          <table class="table">
          <tr>
            <th>Producto</th>
            <th>Total</th>
          </tr>
        <?php
          $count = 0;
          $billamount = 0;
          $productids = $_COOKIE["productids"];
          $quantities = $_COOKIE["quantities"];
          $productids = explode(",", $productids);
          $quantities = explode(",", $quantities);

          foreach($productos as $producto){
            $count++;
            $quantity = 1;
            for($i = 0; $i < count($productids); $i++)
            {
              if($productids[$i] == $producto->id)
              {
                $quantity = $quantities[$i];
                break;
              }
            }
            $total = $quantity * $producto->precio;
        ?>
        <tr>
            <td>
              <img style="height:50px; width:auto;" src="<?= base_url("productpics/" . $producto->id . ".png"); ?>" alt="" />
              <?= $producto->nombre; ?> X <?= $quantity; ?>
            </td>
            <td><?= number_format($total, 2); ?>
            <input type="hidden" name="productoid<?= $count ?>" value="<?= $productids[$i]; ?>" />
            <input type="hidden" name="cantidad<?= $count ?>" value="<?= $quantity; ?>" />
            <input type="hidden" name="precio<?= $count ?>" value="<?= $producto->precio; ?>" />
            <input type="hidden" name="subtotal<?= $count ?>" value="<?= $total; ?>" />
          </td>
        </tr>
        <?php 
        
        $billamount += $total;
      } ?>
        </table>
        <input type="hidden" name="billamount" value="<?= $billamount; ?>" />
        <input type="hidden" name="count" value="<?= $count; ?>" />
        </div>
        <div class="col-lg-12 text-right">
          Total: <?= number_format($billamount, 2); ?><br />
          <input type="submit" class="btn btn-primary" value="Pagar" />
			

        </div>
        </div>
    </div>
</section>
</form>
