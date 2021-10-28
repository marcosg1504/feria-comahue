<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Productos</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Inicio</a>
                    <span>Productos</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
        <?php
          foreach($productos as $producto){
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a href="<?= base_url('products/view/' . $producto->id); ?>">
            <div class="product__item">
              <div class="product__item__pic set-bg" data-setbg="<?= base_url("productpics/" . $producto->id . ".png"); ?>">
              </div>
              <div class="product__item__text">
                <h6><a href="#"><?= $producto->nombre; ?></a></h6>
                <div class="product__item__price">
                  $<?= number_format($producto->precio, 2); ?>
                  <del style="color:red;"><small>$;<?= number_format($producto->mayor_precio, 2); ?></small></del>
                </div>
                <div class="cart_add">
                  <a href="<?= base_url('products/view/' . $producto->id); ?>">Ver productos</a>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php } ?>
        </div>
    </div>
</section>
