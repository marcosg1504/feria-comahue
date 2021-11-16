<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_api extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
		$this->load->model("CookieModel", "cookie");

    }


	function index()
	{
		$usertype = $this->cookie->getCookie("usertype");
		if($usertype == "admin")
		{
			$this->load->view('api_view');
			
		}else {
			redirect(base_url());
		}	
	
	}
//esta funcion recibe la solicitud ajax
	function action()
	{
		if($this->input->post('data_action'))
		{
			$data_action = $this->input->post('data_action');

			if($data_action == "Delete")
			{
				$api_url = "http://localhost/feria-comahue/api/delete";

				$form_data = array(
					'id'		=>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;




			}

			if($data_action == "Edit")
			{
				$api_url = "http://localhost/feria-comahue/api/update";

				$form_data = array(
					'nombre'		=>	$this->input->post('nombre'),
					'apellido'			=>	$this->input->post('apellido'),
					'id'				=>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;







			}

			if($data_action == "fetch_single")
			{
				$api_url = "http://localhost/feria-comahue/api/fetch_single";

				$form_data = array(
					'id'		=>	$this->input->post('id')
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);

				curl_close($client);

				echo $response;






			}

			if($data_action == "Insert")
			{
				$api_url = "http://localhost/feria-comahue/api/insert";
			

				$form_data = array(
					
					'nombre'		=>	$this->input->post('nombre'),
					'apellido'			=>	$this->input->post('apellido'),
					'correo'			=>	$this->input->post('correo'),
					'id_rol'			=>	$this->input->post('id_rol'),
					'contrasena'			=>	$this->input->post('contrasena'),
				);

				$client = curl_init($api_url);

				curl_setopt($client, CURLOPT_POST, true);

				curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

				$response = curl_exec($client);
					
				curl_close($client);

				echo $response;


			}





			if($data_action == "fetch_all")
			{
				//api url que recupera todos los datos en  formato JSON
				$api_url = "http://localhost/feria-comahue/api";

				//inicia el recurso curl
				$client = curl_init($api_url);
				//ejecuta y recibe los datos en format json almacenando
				//en la variable response y luego cerramos el recurs curl
				curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($client);

				curl_close($client);
				//convertimos la respuesta json en un array
				$result = json_decode($response);

				$output = '';

				if(count($result) > 0)
				{
					foreach($result as $row)
					{
						$output .= '
						<tr>
							<td>'.$row->nombre.'</td>
							<td>'.$row->apellido.'</td>
							<td>'.$row->correo.'</td>
							<td>'.$row->id_rol.'</td>
							<td><button type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Editar</button></td>
							<td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Borrar</button></td>
						</tr>

						';
					}
				}
				else
				{
					$output .= '
					<tr>
						<td colspan="4" align="center">No se encontro informacion</td>
					</tr>
					';
				}
				//muestro la salida en la vista
				echo $output;
			}
		}
	}
	
}

?>
