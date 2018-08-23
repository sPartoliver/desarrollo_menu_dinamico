
<!-- aqui esta el crud de usuario -->

<!-- CRUD DE USUARIOS -->
<h1> CRUD DE SEGURIDAD </h1>


<div>

<!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">CONSULTA</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRO</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- ****************************** LISTA DE USUARIO **************************************-->
        <div role="tabpanel" class="tab-pane active" id="home">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>PERFIL</th>
                    <th>DNI</th>
                    <th>CORREO</th>
                    <th>CONTRASENIA</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>CELULAR</th>
                    <th>ESTADO</th>
                    <th><center>Acciones</center></th>
                </thead>
                <body>
                    <?php foreach ($listaUsuario as $value) { ?><tr>
                        <td><?php echo $value->usuid; ?></td>
                        <td><?php echo $value->pernombre; ?></td>
                        <td><?php echo $value->usudni; ?></td>
                        <td><?php echo $value->usuemail; ?></td>
                        <td><?php echo $value->usucontrasenia; ?></td>
                        <td><?php echo $value->usunombres; ?></td>
                        <td><?php echo $value->usuapellidos; ?></td>
                        <td><?php echo $value->usucelular; ?></td>
                        <td><?php echo $value->usuestado; ?></td>
                        <td>
                            <a href="<?php echo base_url('usuario/delete')."/".$value->usuid; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url('usuario/edit')."/".$value->usuid; ?>" title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                </body>
            </table>
        </div>
        <!-- ***************************** REGISTRAR USUARIOS *********************************** -->
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="row">
                <div class="col-md-7">
                    <form method="POST" action="<?php echo base_url('usuario/insert') ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Perfil</label>
                            <select name="txtIdper" class="form-control">
                                <?php foreach ($listaPerfil as $value) { ?>
                                    <option value="<?php echo $value->perid ?>"><?php echo $value->pernombre ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dni</label>
                            <input type="text" name="txtDni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dni">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo</label>
                            <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contrasenia</label>
                            <input type="text" name="txtContrasenia" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="**************">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombres</label>
                            <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombres">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos</label>
                            <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="apellidos">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Celular</label>
                            <input type="text" name="txtCelular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="celular">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado</label>
                            <input type="text" name="txtEstado" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="estado">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-5">
                </div>
            </div>
            
        </div>
    </div>
</div>

