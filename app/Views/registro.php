
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
    <div class="container">
   
      <div class="row">

            <div class="col-sm-4"> </div>
            <div class="col-sm-4"> 

            <form method="post" class="form-control" action="<?php echo base_url().'/crear_registro' ?>">                <h1>Registro</h1>
                    <label for="nombre">Nombre de nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"  ></input>
                    <label for="contrasena">contrasena</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" ></input>
                 
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control" ></input>
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>

            </div>
            <div class="col-sm-4"> </div>
      </div> 


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<br>

<!-- <form method="post" class="form-control" action="<?php echo base_url() ?>/crear_registro">

<input type="text" name="nombre" id="nombre" placeholder="nombre">
<br>
<input type="text" name="contrasena" id="contrasena" placeholder="contrasena">
<br>
<input type="text" name="mail" id="mail" placeholder="mail">
<br>
<button>Enviar</button>


</form> -->



