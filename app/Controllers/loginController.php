<?php

namespace App\Controllers;
use App\Models\usuario_model;

class loginController extends BaseController
{
    public function index()
    {
        $mensaje= session('mensaje');
        return view('login', ["mensaje"=>$mensaje]);
    }

    public function inicio()
    {
        return view('catalogo');
    }


        public function login()
    {
        $correo=$this->request->getPost('correo');
        $contrasena=$this->request->getPost('contrasena');
        //$id_usuario=$this->request->getPost('id_usuario');
        
        $usuario_obj=new usuario_model();
        $datosUsuario=$usuario_obj->obtener_usuario(['correo'=>$correo]);

        if (count ($datosUsuario) > 0 && 
        
        password_verify($contrasena,$datosUsuario[0]['contrasena'])) {
            
            $data=[
                    'id_usuario'=>$datosUsuario[0]['id_usuario'],
                    'nombre' => $datosUsuario[0]['nombre'],
                    'id_domicilio' => $datosUsuario[0]['id_domicilio'],
                    'apellido' => $datosUsuario[0]['apellido'],
                    'contrasena' => $datosUsuario[0]['contrasena'],
                    'cuil' => $datosUsuario[0]['cuil'],
                    'celular' => $datosUsuario[0]['celular'],
                    'nombre_emprendimiento' => $datosUsuario[0]['nombre_emprendimiento'],
                    'descripcion_emprendimiento' => $datosUsuario[0]['descripcion_emprendimiento'],
                    'url_imagen_portada' => $datosUsuario[0]['url_imagen_portada'],
                    'url_imagen_logo' => $datosUsuario[0]['url_imagen_logo'],
                    'estado' => $datosUsuario[0]['estado'],
                    'id_rol' => $datosUsuario[0]['id_rol'],

                    'calle' =>  $datosUsuario[0]['calle'],
                    'numero' =>  $datosUsuario[0]['numero'],
                    'barrio' => $datosUsuario[0]['barrio'],
                    'piso' =>  $datosUsuario[0]['piso'],
                    'num_depto' => $datosUsuario[0]['num_depto'],
                    'desc_adicional' =>  $datosUsuario[0]['desc_adicional'],
                    'provincia' =>  $datosUsuario[0]['provincia'],
                    'localidad' =>  $datosUsuario[0]['localidad'],
                ];
            $session=session();
            $session->set($data);

        

        //        if (session('id_rol') == 3)  { 
                                
          return redirect()->to(base_url('/home'))->with('mensaje','3');

        // }elseif (session('id_rol') == 2) {
        //     return redirect()->to(base_url('/home/2'))->with('mensaje','2');

        // }elseif (session('id_rol') == 1) {
        //     return redirect()->to(base_url('/home/1'))->with('mensaje','1');

        // }

        }else {
           return redirect()->to(base_url('/'))->with('mensaje','0');
        }
    }


    
     public function salir(){
$session=session();
$session->destroy();
return redirect()->to(base_url('/'));
     }



     public function registro()
     {
         // return view('contacto/index.php');
      
 
         $vistas = view('/registro') ;
          
         return $vistas;
     }

     public function usuario_crear()
     {

        if ($this->validate('usuario')){
             $datos= [
                         "nombre" => $_POST['nombre'],
                         "contrasena" =>password_hash($_POST['contrasena'], PASSWORD_DEFAULT),
                         "correo" => $_POST['correo'],
                         "id_rol" => "3",
                   
             ];
             $crear_usuario=new usuario_model();
             //llama al metodo insert del producto_model, si ponemos echo, muestra el ultimo id
             $respuesta=$crear_usuario->insertar($datos);
 
             if ($respuesta > 0) {
                 return  redirect()->to(base_url().'/')->with('mensaje','1');
             }else {
                 
                 return  redirect()->to(base_url().'/')->with('mensaje','0');
             }
            }else {
                return redirect()->back();
            }
         
        
     }

 
  
}
