<?php

namespace App\Controllers;
use App\Models\producto_model;
use App\Models\usuario_model;
use PhpParser\Node\Expr\PreDec;

class usuarioController extends BaseController
{

    
    public function index()
    {

        $vistas = view('home') ;
         
        return $vistas;
    }

    
///////////////////////////////SECCION PRODUCTOS////////////////////////////////////////////////


    public function catalogo_cliente()
    {
        // return view('contacto/index.php');
     $productos= new producto_model();
     $datos_productos=$productos->mostrarProductos();
        //print_r($datos_productos);
        $mensaje= session('mensaje');

        //transformamos en array los datos_productos para mostrarlo en la vista a travez de un print_r o foreach
        $productos_array = ["datos_productos" => $datos_productos, 
                            "mensaje" => $mensaje ];
        $vistas =// view('contacto/header.php') .
          //  view('contacto/menu.php') .
            view('home.php', $productos_array) ;
         //   view('contacto/footer.php');
        return $vistas;
    }

    public function crear_producto_vista()
    {  

        $vistas = view('crear_producto_vista') ;
         
        return $vistas;

    }
    public function crear_producto()
    {
        
            $datos= [
              //  "id_producto" => $_POST['id_producto'],
                "nombre" => $_POST['nombre'],
                "descripcion" => $_POST['descripcion'],
                "otros_detalles" => $_POST['otros_detalles'],
                "id_categoria" => $_POST['id_categoria'],
                "precio" => $_POST['precio'],
                "url_imagen_1" => $_POST['url_imagen_1'],
                "url_imagen_2" => $_POST['url_imagen_2'],
                "url_imagen_3" => $_POST['url_imagen_3'],
                "stock" => $_POST['stock'],
                "estado" => $_POST['estado'],
   
            ];
            $crud=new producto_model();
            //llama al metodo insert del producto_model, si ponemos echo, muestra el ultimo id
            $respuesta=$crud->insertar($datos);

            if ($respuesta > 0) {
                return  redirect()->to(base_url().'/home')->with('mensaje','1');
            }else {
                
                return  redirect()->to(base_url().'/')->with('mensaje','0');
            }
    }

    public function producto_actualizar()
    {
         $datos= [
            "id_producto" => $_POST['id_producto'],
             "nombre" => $_POST['nombre'],
             "descripcion" => $_POST['descripcion'],
             "otros_detalles" => $_POST['otros_detalles'],
             "precio" => $_POST['precio'],
             "url_imagen_1" => $_POST['url_imagen_1'],
             "url_imagen_2" => $_POST['url_imagen_2'],
             "url_imagen_3" => $_POST['url_imagen_3'],
             "stock" => $_POST['stock'],
             "estado" => $_POST['estado'],

         ];
       $id_producto=$_POST['id_producto'];

         $crud=new producto_model();
         $crud->actualizar($datos,$id_producto);
         //poner respuesta
    }

    public function obtener_nombre($id_producto)
    {
        $mensaje= session('mensaje');
         $datos= ["id_producto"=>$id_producto];
         $crud=new producto_model();
         $respuesta=$crud->obtener_nombre($datos);
         $productos_array = ["datos_productos" => $respuesta, 
                            "mensaje" => $mensaje ];
         return view('editar_producto',$productos_array);
    }

    public function eliminar($id_producto)    {
       $crud=new producto_model();
       $datos=['id_producto' => $id_producto];
       $crud->eliminar($datos);  
    }
    //funciona si se paasaa un numero por url
    public function catalogourl($numero)
    {
        // return view('contacto/index.php');
     
        $datosurl= [ "numero" => $numero ];
        $vistas = view('contacto/header.php') .
            view('contacto/menu.php') .
            view('contacto/catalogo.php', $datosurl) .
            view('contacto/footer.php');
        return $vistas;
    }
///////////////////////////////SECCION PRODUCTOS FINNNNNNNN////////////////////////////////////////////////

// muestro lo q hay en la vista /contacto/formulario
    public function formulario()
    {
        // return view('contacto/index.php');
     

        $vistas = view('contacto/formulario') ;
         
        return $vistas;
    }

    //envio los datos del formulario 
    public function enviar_post()
    {
        // return view('contacto/index.php');
     

     print_r($_POST);
    }
}
