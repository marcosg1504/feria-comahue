<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, woadrld!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo session('nombre')?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url() ?>/catalogo">Catalogo <span class="sr-only">(current)</span></a>
    

      </li>
      <li class="nav-item active">

        <a class="nav-link" href="<?php echo base_url() ?>/salir">Salir <span class="sr-only">(current)</span></a>

      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Search</button>
    </form> -->
  </div>
</nav>

  

    
<td><a href="<?php echo base_url().'/crear_producto_vista'?>" class="btn btn-danger btn-sm">Agregar</a></td>


<table border="1">
  <tr>
    <th>id_producto</th>
    <th>nombre_producto</th>
    <th>descripcion</th>
    <th>categori</th>
    <th>editar</th>
    <th>eliminar</th>
  </tr>
  <!--  if ($key->id_rol == session('id_rol')) -->
  

  <?php echo ($datos_productos[7]->id_categoria); ?>
  <?php //echo print_r ($datos_productos); ?>

  <?php foreach ($datos_productos as $key) :?>

    <?php if (session('id_rol') == 3)  { ?>
     
      <?php if ($key->id_categoria == 1)  { ?>
    <tr>
   
      <td><?php echo $key->id_producto ?></td>
      <td><?php echo $key->nombre ?></td>
      <td><?php echo $key->descripcion ?></td>
      <td><?php echo $key->id_categoria ?></td>
      <td><a href="<?php echo base_url().'/obtener_nombre/'.$key->id_producto ?>" class="btn btn-danger btn-sm">Coomprar</a></td>

    </tr>
    <?php  }   ?>  
   
    <?php  } else  ?> 
      <?php  if (session('id_rol') == 2)  { ?>

        <tr>
      <td><?php echo $key->id_producto ?></td>
      <td><?php echo $key->nombre ?></td>
      <td><?php echo $key->descripcion ?></td>
      <td><a href="<?php echo base_url().'/obtener_nombre'.$key->id_producto ?>" class="btn btn-warning btn-sm">Editar</a></td>
      <td><a href="<?php echo base_url().'/eliminar'.$key->id_producto ?>" class="btn btn-danger btn-sm">Eliminar</a></td>

    </tr>

      <?php   } ?>
    
  <?php endforeach; ?>

</table>
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