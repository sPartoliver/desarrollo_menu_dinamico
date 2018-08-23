
<form method="POST" action="<?php echo base_url('usuario/update') ?>">

    <?php foreach ($datosUsuario as $value) { ?>
        
    <input type="text" name="txtusuid" value = "<?php echo $value->usuid; ?>">
    <div class="form-group">
        <label for="exampleInputEmail1">Perfil</label>
        
        <?php 
        $lista = array();
        foreach ($listaPerfil as $registro) { 
            $lista[$registro->perid] = $registro->pernombre;
        } 
        echo form_dropdown('txtperid',$lista,$value->perid,'class="form-control"');
        ?>
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Dni</label>
        <input type="text" name="txtDni" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usudni; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo</label>
        <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usuemail; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Contrasenia</label>
        <input type="text" name="txtContrasenia" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usucontrasenia; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nombres</label>
        <input type="text" name="txtNombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usunombres; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Apellidos</label>
        <input type="text" name="txtApellidos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usuapellidos; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Celular</label>
        <input type="text" name="txtCelular" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usucelular; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Estado</label>
        <input type="text" name="txtEstado" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php  echo $value->usuestado; ?>">
    </div>
    <?php } ?>
    <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
</form>
