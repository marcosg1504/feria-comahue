    
               

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CREAR PRODUCTO</title>
  </head>

  <?php // echo print_r($datos_productos)?>
  <body>
    <div class="container">
   
      <div class="row">

            <div class="col-sm-4"> </div>
            <div class="col-sm-4"> 

            <form method="post" class="form-control" action="<?php echo base_url().'/crear_producto' ?>">                <h1>CREAR PRODUCTO</h1>
            <label for="id_producto"></label>
                    <label for="nombre">Nombre de producto</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"   ></input>
                    <label for="descripcion">Descripcion</label>
                    <input type="descripcion" name="descripcion" id="descripcion" class="form-control"   ></input>
                 
                    <label for="precio">Precio</label>
                    <input type="precio" name="precio" id="precio" class="form-control" ></input>
                    <br>

                    <label for="id_categoria">Categoria</label>
                    <input type="number" name="id_categoria" id="id_categoria" class="form-control" ></input>
                    <br>
                    <label for="otros_detalles">Otros Detalles</label>
                    <input type="otros_detalles" name="otros_detalles" id="otros_detalles" class="form-control"   ></input>
                    <br>
                    <label for="url_imagen_1">Imagen 1</label>
                    <input type="url_imagen_1" name="url_imagen_1" id="url_imagen_1" class="form-control"   ></input>
                    <br>
                    <label for="url_imagen_2">Imagen 2</label>
                    <input type="url_imagen_2" name="url_imagen_2" id="url_imagen_2" class="form-control"   ></input>
                    <br>
                    <label for="url_imagen_3">Imagen 3</label>
                    <input type="url_imagen_3" name="url_imagen_3" id="url_imagen_3" class="form-control"  ></input>
                    <br>
                    <label for="stock">Stock</label>
                    <input type="stock" name="stock" id="stock" class="form-control"   ></input>
                    <br>
                    <label for="estado">Estado</label>
                    <input type="estado" name="estado" id="estado" class="form-control"" ></input>
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

<input type="text" name="usuario" id="usuario" placeholder="usuario">
<br>
<input type="text" name="password" id="password" placeholder="password">
<br>
<input type="text" name="mail" id="mail" placeholder="mail">
<br>
<button>Enviar</button>


</form> -->



