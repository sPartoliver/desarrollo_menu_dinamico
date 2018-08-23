<!DOCTYPE html>
<!-- CRUD DE LOGIN -->

<!DOCTYPE html>
<html lang="en">
<head>
  <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
  <script>
    $(document).ready(function (e) {
    $("#form-login").on('submit',(function(e) {
        e.preventDefault();
        $("#message").empty();
        $('#loading').show();
    $.ajax({
        url: "<?php echo base_url('login/validar')?>",
        type: "POST",
        data: new FormData(this),
        contentType:false,
        cache: false,
        processData:false,
        success: function(data)
        {
            if(data.length !== 0){
                $('#loading').hide();
                $("#message").html(data);
            }
            else{
                window.location.href='<?php echo base_url("menu") ?>';
                throw new Error('go');
            }
        }
    });
    }));
  });
</script>
</head>
<body>
<h3 class=".text-primary">
  Login
</h3>
<form id="form-login" action="" method="post">
  <div class="container">
    <div  class ="row">
      <div class = "col-md-3 col-md-offset-4"><br><br><br>
        <div class="panel panel-default" >
          <div class="panel-body">
            <h2>LOGIN</h2>
            
            <div class="form-group">
              <label for="exampleInputEmail1">CORREO ELECTRONICO</label>
              <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="example@seguridad.com">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">CONTRASENIA</label>
              <input type="text" name="txtContrasenia" class="form-control" id="exampleInputEmail1" placeholder="*********">
            </div>
            <button  type="submit" class="btn btn-success">INGRESAR</button>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>



