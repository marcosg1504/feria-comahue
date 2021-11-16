<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class session_admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
     //   $session_id=session('id_producto');
       if (session('id_rol')=='3')  {
        return redirect()->to(base_url('/home'));
       }elseif ((session('id_rol')=='2')) {
           return redirect()->to(base_url('/home'));
        }elseif ((session('id_rol')=='1')) {
            return redirect()->to(base_url('/catalogo'));
       }else {
              return redirect()->to(base_url('/'));
       }


       

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}