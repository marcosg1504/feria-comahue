<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Producto - <?= $producto->nombre; ?></h2>
                    <input type="hidden" id="productid" value="<?= $producto->id; ?>" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url("products"); ?>">Productos</a>
                    <span><?= $producto->nombre; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="product-details spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="product__details__img">
          <div class="product__details__big__img">
            <img class="big_img" src="<?= base_url("productpics/" . $producto->id . ".png"); ?>" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="product__details__text">
          <h4><?= $producto->nombre; ?></h4>
          <h5>$<?= number_format($producto->precio, 2); ?>
                  <del style="color:red;"><small>$;<?= number_format($producto->mayor_precio, 2); ?></small></del></h5>
          <b>Descripcion:</b>
          <p><?= $producto->descripcion; ?></p>
          <b>Categoria:</b>
          <p><?= $producto->categoria; ?></p>
          <div class="product__details__option">
            <div class="quantity">
              <div class="pro-qty">
                <input type="text" id="quantity" value="1" />
              </div>
            </div>
          <button class="primary-btn" onclick="addproducttocart()">Añadir al carrito</button>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
   function addproducttocart()
  {

    var productid = document.getElementById("productid").value;
    var quantity = document.getElementById("quantity").value;
    
    var productids = "";
    var quantities = "";

    var product = {
      "productid" : productid,
      "quantity" : quantity,
    };
    var products = JSON.parse(localStorage.getItem("products"));
    if(products == null)
    {
      products = [];
      products.push(product);
    }
    else{
      var foundproduct = false;
      for(var i = 0; i < products.length; i++)
      {
        if(products[i].productid == productid)
        {
          products[i].quantity = quantity;
          foundproduct = true;
        }
      }
      if(foundproduct == false)
      {
        products.push(product);
      }
    }
    for(var i = 0; i < products.length; i++)
    {
      productids += (i == 0 ? "" : ",") + products[i].productid;
      quantities += (i == 0 ? "" : ",") + products[i].quantity;
    }
    setCookie("productids", productids);
    setCookie("quantities", quantities);
    localStorage.setItem("products", JSON.stringify(products));
    console.log(products);    
    showSnackbar("Producto agregado al carrito");
    refreshCart();
  }

  var productid = document.getElementById("productoid").value;
  var products = JSON.parse(localStorage.getItem("products"));
  if(products != null)
  {
    for(var i = 0; i < products.length; i++)
      {
        if(products[i].productid == productid)
        {
          document.getElementById("quantity").value = products[i].quantity;
        }
      }
  }

  
</script>
