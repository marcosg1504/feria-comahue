<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Mi Carrito</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Inicio</a>
                    <span>Carrito</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad" style="display:<?= count($productos) > 0 ? "none" : "block" ?>;">
    <div class="container">
        <div class="row">
        <h1>El carrito esta vacio</h1>
        </div>
    </div>
</section>
<section class="shop spad" style="display:<?= count($productos) > 0 ? "block" : "none" ?>;">
    <div class="container">
        <div class="row">
          <table class="table">
          <tr>
            <th></th>
            <th>Texto</th>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
          </tr>
        <?php
          $count = 0;
          $billamount = 0;
          $productids = $_COOKIE["productids"];
          $quantities = $_COOKIE["quantities"];
          $productids = explode(",", $productids);
          $quantities = explode(",", $quantities);

          foreach($productos as $product){
            $count++;
            $quantity = 1;
            for($i = 0; $i < count($productids); $i++)
            {
              if($productids[$i] == $product->id)
              {
                $quantity = $quantities[$i];
                break;
              }
            }
            $total = $quantity * $product->precio;
        ?>
        <tr>
            <td>
              <span class="btn btn-danger" onclick="removeproduct(<?= $product->id; ?>)">Eliminar</span>
            </td>
            <td><?= $count; ?></td>
            <td>
            <img style="height:100px; width:auto;" src="<?= base_url("productpics/" . $product->id . ".png"); ?>" alt="" />
            </td>
            <td><?= $product->nombre; ?></td>
            <td><?= $quantity; ?></td>
            <td><?= number_format($product->precio, 2); ?></td>
            <td><?= number_format($total, 2); ?></td>
        </tr>
        <?php 
        
        $billamount += $total;
      } ?>
        </table>
        <div class="col-lg-12 text-right">
          Total <?= number_format($billamount, 2); ?><br />
          <a class="btn btn-primary" href="<?= base_url("checkout");?>">Verificar</a>
        </div>
        </div>
    </div>
</section>
<script>
  function removeproduct(productid)
  {
    var products = [];
    var addedproducts = JSON.parse(localStorage.getItem("products"));
    for(var i = 0; i < addedproducts.length; i++)
    {
      if(addedproducts[i].productid != productid)
      {
        products.push(addedproducts[i]);
      }
    }
    var productids = "";
    var quantities = "";
    for(var i = 0; i < products.length; i++)
    {
      productids += (i == 0 ? "" : ",") + products[i].productid;
      quantities += (i == 0 ? "" : ",") + products[i].quantity;
    }
    setCookie("productids", productids);
    setCookie("quantities", quantities);
    localStorage.setItem("products", JSON.stringify(products));
    window.location.href = "<?= base_url("cart"); ?>";
  }
</script>
