<!--DOCTYPE html-->
<html lang="es">
<head>
    <link href="<?php echo base_url('public/css/bootstrap.css')?>" rel="stylesheet">
    <!--<link rel="stylesheet" href="public/css/bootstrap.min.css">-->

    <script src="<?php echo base_url('public/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>

    <script src="<?php echo base_url('public/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/jquery.dataTables.bootstrap.js')?>"></script>

    <script type="text/javascript">
        $(function(){
        $('table.data-table.full').dataTable( {
                "bPaginate": true,
                "aLengthMenu": [2,5, 8, 10],
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                "sPaginationType": "full_numbers",
                "sDom": '<""f>t<"F"lp>',
                "sPaginationType": "bootstrap"
            });
        });
    </script>
    
    <title>CRUD DE SEGURIDAD</title>
</head>
<body>
    <div id="container">
        <!-- aqui va el contenedor de la vista -->
        <div class="col-md-5">
            <?php
            #echo "hola como estas";
            $this->load->view($contenido);
            #print_r($listaUsuario);
            #$this->load->view($listaUsuario);
            ?> 
        </div>
    </div>
</body>
</html>