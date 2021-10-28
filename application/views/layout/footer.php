<footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <!--h6>WORKING HOURS</h6>
                    <ul>
                        <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                        <li>Saturday: 10:00 am – 16:30 pm</li>
                        <li>Sunday: 10:00 am – 16:30 pm</li>
                    </ul>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#"><img src="<?= base_url("assets/"); ?>img/footer-logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about">
                    <h5>Subscribe</h5>
                    <p>Get latest updates and offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit"><i class="fa fa-send-o"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                          
                           <a href="#" target="_blank"> </a>

</p>
</div>
<div class="col-lg-5">
<div class="copyright__widget">
<ul>
<li><a href="#"> </a></li>
<li><a href="#"></a></li>
<li><a href="#"> </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>


<div class="search-model">
<div class="h-100 d-flex align-items-center justify-content-center">
<div class="search-close-switch">+</div>
<form class="search-model-form">
<input type="text" id="search-input" placeholder="Search here.....">
</form>
</div>
</div>


<script src="<?= base_url("assets/"); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/jquery.barfiller.js"></script>
<script src="<?= base_url("assets/"); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url("assets/"); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url("assets/"); ?>js/main.js"></script>


<script>
function showSnackbar(message) {
  var x = document.getElementById("snackbar");
  x.innerHTML = message;
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}


function setCookie(cname, cvalue)
  {
    var d = new Date();
    d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }

  function refreshCart()
  {
    var products = JSON.parse(localStorage.getItem("products"));
    if(products != null)
    {
      var spnCartMobile = document.getElementById("spnCartMobile");
      var spnCartWeb = document.getElementById("spnCartWeb");
      spnCartMobile.innerText = products.length;
      spnCartWeb.innerText = products.length;
    }    
  }

  refreshCart();
</script>
</body>
</html>