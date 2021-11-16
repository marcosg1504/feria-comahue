<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
protected $table = 't_usuarios';
protected $primaryKey = 'id';

protected $returnType = 'array';
protected $allowedFields = ['id_rol','nombre','apellido'.'correo','telefono'];

protected $useTimestamps = true;
protected $createField = 'created_at';
protected $updateField = 'update_at';

protected $validationRules = [
	'nombre' => 'required|alpha_space|min_lengt|[3]|max_length[75]',
	'apellido' => 'required|alpha_space|min_lengt|[3]|max_length[75]',
	'telefono' => 'required|alpha_space|min_lengt|[8]|max_length[8]',
	'correo' => 'permit_empty|valid_email|max_length[85]',
];

protected $validationMessages = [
	'correo' => [
			'valid_email' => 'Estimado usuario, debe ingresar un email valido'
	]
	];

	protected $skipValidation = false;
}
