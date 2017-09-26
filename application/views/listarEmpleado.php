
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">


            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                        <th><h4><p class="text-light-blue">apellido</p></h4></th>
                        <th><h4><p class="text-light-blue">avatar</p></h4></th>
                        <th><h4><p class="text-light-blue">fecha De Nacimiento</p></h4></th>
                        <th><h4><p class="text-light-blue">email</p></h4></th>
                        <th><h4><p class="text-light-blue">foto</p></h4></th>
                       
                    </tr>
                    <?php foreach ($informacion as $informacion_item) { ?>
                        <tr>
        
                            <td><?php echo $informacion_item['nombre']; ?></td>
                            <td><?php echo $informacion_item['apellido']; ?></td>
                            <td><?php echo $informacion_item['avatar']; ?></td>
                            <td><?php echo $informacion_item['fechaDeNacimiento']; ?></td>
                            <td><?php echo $informacion_item['email']; ?></td>
                            <td><img src="<?php echo base_url('fotos/'.$informacion_item['foto']); ?>" alt="logo" width="100" height="100"></td>
                            <td><a href="<?php echo site_url('datos/eliminarEmpleados/'.$informacion_item['id']);?>"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                            <td><a href="<?php echo site_url('datos/verDetalle/'.$informacion_item['id']);?>"><button type="button" class="btn btn-primary">Ver detalle</button></a></td>
                
                        
                    <?php } ?>

                </table>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
