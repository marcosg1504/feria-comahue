<?php
  $from = "";
  if(isset($_GET["from"]))
  {
    $from = $_GET["from"];
  }
?>
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__text">
                    <h2>Iniciar Sesion</h2>
                    <?php
                      if(isset($_GET["status"]))
                      {
                        if($_GET["status"] == "failed")
                        {
                          echo "<span style='color:red;'>Invalid Credentials.</span>";
                        }
                      }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="breadcrumb__links">
                    <a href="<?= base_url(); ?>">Home</a>
                    <span>Iniciar Sesion</span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="shop spad">
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="col-lg-12" style="border:solid 1px gray; border-radius:10px;padding:20px;">
            <form action="<?= base_url("login/checklogin"); ?>" method="POST">
              <input type="hidden" name="from" value="<?= $from; ?>" />
              Correo	
              <input type="email" name="correo" class="form-control" required />
              Contraseña
              <input type="password" name="contrasena" class="form-control" required />
              <br />
              <input type="submit" value="Login" class="btn btn-success" />
            </form>
            </div>
          </div>
          <div class="col-lg-6">
          <div class="col-lg-12" style="border:solid 1px gray; border-radius:10px;padding:20px;">
					<h2>REGISTRO USUARIO</h2>
            <form action="<?= base_url("login/registro"); ?>" method="POST">
              <input type="hidden" name="from" value="<?= $from; ?>" />
							<input type="hidden" name="id_rol_usuario" value="3" />
              Nombre
              <input type="text" name="nombre" class="form-control" required />
              Telefono Celular
              <input type="number" name="telefono" class="form-control" required />
              Email
              <input type="email" name="correo" class="form-control" required />
              Contraseña
              <input type="password" name="contrasena" class="form-control" required />
              <br />
              <input type="submit" value="Registro" class="btn btn-success" />
            </form>
					
            </div>
						<br>
						<div class="col-lg-12" style="border:solid 1px gray; border-radius:10px;padding:20px;">
						<h2>REGISTRO FERIANTE</h2>
						<form action="<?= base_url("login/registro_feriante"); ?>" method="POST">
						<input type="hidden" name="id_rol_feriante" value="2" />
              <input type="hidden" name="from" value="<?= $from; ?>" />
              Nombre
              <input type="text" name="nombre" class="form-control" required />
              Telefono Celular
              <input type="number" name="telefono" class="form-control" required />
              Email
              <input type="email" name="correo" class="form-control" required />
              Contraseña
              <input type="password" name="contrasena" class="form-control" required />
              <br />
              <input type="submit" value="Registro" class="btn btn-success" />
            </form>
          </div>
					</div>
        </div>
    </div>
</section>
