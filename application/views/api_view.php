<html>
<head>
    <title>CURD REST API in Codeigniter</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <br />
        <h3 align="center">Panel Encargado</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">CRUD REST API</h3>
                    </div>
                    <div class="col-md-6" align="right">
                        <button type="button" id="add_button" class="btn btn-info btn-xs">Agregar nuevo usuario</button>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <span id="success_message"></span>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
							<th>Correo</th>
							<th>Rol</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

<div id="userModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="user_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Usuario</h4>
                </div>
                <div class="modal-body">
                    <label>Ingresar Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" />
                    <span id="nombre_error" class="text-danger"></span>
                    <br />
                    <label>Ingresar Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" />
                    <span id="apellido_error" class="text-danger"></span>
                    <br />
					<label>Ingresar Correo</label>
                    <input type="email" name="correo" id="correo" class="form-control" />
                    <span id="correo_error" class="text-danger"></span>
                    <br />
					<br />
					<label>Rol</label>
                    <input type="number" name="id_rol" id="id_rol" class="form-control" />
                    <span id="rol_error" class="text-danger"></span>
					<br />
					<label>Contraseña</label>
                    <input type="text" name="contrasena" id="contrasena" class="form-control" />
                    <span id="contrasena_error" class="text-danger"></span>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="data_action" id="data_action" value="Insert" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
    //funcion busqueda de datos, esta funcion muestra datos de la tabla, usando el servicio 
    function fetch_data()
    {
		 //solicitudes ajax
        $.ajax({
			 //envia solicitud al metodo action de la clase test_api
            url:"<?php echo base_url(); ?>test_api/action",
            method:"POST",
            data:{data_action:'fetch_all'},
            success:function(data)
            {
                $('tbody').html(data);
            }
        });
    }
	
//llamams a la funcin para cargar la tabla
    fetch_data();

	//cuando hagamos click en el boton agrega usuario, se mostrara el panel
    $('#add_button').click(function(){
        $('#user_form')[0].reset();
        $('.modal-title').text("Agregar Usuario");
        $('#action').val('Guardar');
        $('#data_action').val("Insert");
        $('#userModal').modal('show');
    });

	
    $(document).on('submit', '#user_form', function(event){
        event.preventDefault();
		//solicitud ajax, metodo post del envio del formulario
        $.ajax({
            url:"<?php echo base_url() . 'test_api/action' ?>",
            method:"POST",
			//convierte los datos en una cadena codificada en URL
            data:$(this).serialize(),
			//indicamos que reciba los datos en JSON
            dataType:"json",
			//
            success:function(data)
            {
                if(data.success)
                {
					//resetamos y escndemos el modal
                    $('#user_form')[0].reset();
                    $('#userModal').modal('hide');
					//llamamos a la funcion para volver a cargar la tabla
                    fetch_data();
                    if($('#data_action').val() == "Insert")
                    {
                        $('#success_message').html('<div class="alert alert-success">Usuario Agregado</div>');
                    }
                }

                if(data.error)
                {
                    $('#nombre_error').html(data.nombre_error);
                    $('#apellido_error').html(data.apellido_error);
                }
            }
        })
    });

	
//mismo procedimiento para editar y borrar usuarios
    $(document).on('click', '.edit', function(){
        var id = $(this).attr('id');
        $.ajax({
            url:"<?php echo base_url(); ?>test_api/action",
            method:"POST",
            data:{id:id, data_action:'fetch_single'},
            dataType:"json",
            success:function(data)
            {
                $('#userModal').modal('show');
                $('#nombre').val(data.nombre);
                $('#apellido').val(data.apellido);
                $('.modal-title').text('Editar Usuario');
                $('#id').val(id);
                $('#action').val('Edit');
                $('#data_action').val('Edit');
            }
        })
    });

    $(document).on('click', '.delete', function(){
        var id = $(this).attr('id');
        if(confirm("Estas seguro que desea borrar este usuario?"))
        {
            $.ajax({
                url:"<?php echo base_url(); ?>test_api/action",
                method:"POST",
                data:{id:id, data_action:'Delete'},
                dataType:"JSON",
                success:function(data)
                {
                    if(data.success)
                    {
                        $('#success_message').html('<div class="alert alert-success">Usuario Borrado</div>');
                        fetch_data();
                    }
                }
            })
        }
    });
    
});
</script>
