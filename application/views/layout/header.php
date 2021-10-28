<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feria Comahue </title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url("assets/"); ?>css/style.css" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>

</head>
<body>
    <div id="snackbar">....</div>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="offcanvas-menu-overlay">
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__item">
                <a href="<?= base_url("cart"); ?>"><img src="<?= base_url("assets/"); ?>img/icon/cart.png" alt="" style="color:black;">
                <span id="spnCartMobile"> 0 </span>
                Mi Carrito
                </a>                
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="<?= base_url("home"); ?>"><img src="<?= base_url("assets/"); ?>img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <?php
                    if(isset($_COOKIE["userid"]))
                    {
                        echo '<li><a href="' . base_url("user") . '">Mi cuenta</a></li>';
                        echo '<li><a href="' . base_url("logout") . '">Salir</a></li>';
                    }
                    else{
                        echo '<li><a href="' . base_url("login") . '">Ingresar</a></li>';
                        echo '<li><a href="http://localhost/wordpress/">Ir al Blog</a></li>';
                    }
                ?>
                
            </ul>
    </div></div>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>                                   
                                    <?php
                                        if(isset($_COOKIE["userid"]))
                                        {
                                            echo '<li><a href="' . base_url("user") . '">Mi cuenta</a></li>';
                                            echo '<li><a href="' . base_url("logout") . '">Salir</a></li>';
                                        }
                                        else{
                                            echo '<li><a href="' . base_url("login") . '">Ingresar</a></li>';
                                            echo '<li><a href="http://localhost/wordpress/">Ir al Blog</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="<?= base_url("home"); ?>"><img src="<?= base_url("assets/"); ?>img/" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                </div>
                                <div class="header__top__right__cart">
                                    <a style="color:blue;" href="<?= base_url("cart"); ?>"><img src="<?= base_url("assets/"); ?>img/icon/cart.png" alt="">
                                        <span id="spnCartWeb">0</span>
                                        Mi Carrito
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="<?= base_url("home"); ?>">Inicio</a></li>
                            <li><a href="<?= base_url("about"); ?>">Nosotros</a></li>
                            <li><a href="<?= base_url("products"); ?>">Productos</a></li>
                            <li><a href="<?= base_url("contact"); ?>">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
</header>
