<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url('public/dist/css/skins/_all-skins.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">
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
        <table width="50" class="table table-hover">
            <tr>
                <th><h4><p class="text-light-blue">Nombre</p></h4></th>
                <th><h4><p class="text-light-blue">apellido</p></h4></th>
                <th><h4><p class="text-light-blue">avatar</p></h4></th>
                <th><h4><p class="text-light-blue">fecha De Nacimiento</p></h4></th>
                <th><h4><p class="text-light-blue">email</p></h4></th>

            </tr>
                <tr>

                    <td><?php echo $informacion['nombre']; ?></td>
                    <td><?php echo $informacion['apellido']; ?></td>
                    <td><?php echo $informacion['avatar']; ?></td>
                    <td><?php echo $informacion['fechaDeNacimiento']; ?></td>
                    <td><?php echo $informacion['email']; ?></td>
                  </tr>
        </table>
        <br><br><br>
        <div class="box-body table-responsive no-padding">
            <img src="<?php echo base_url('fotos/'.$informacion['foto']); ?>" alt="logo" width="500" height="300">


        <section class="content" >
          <div class="row" >
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Comentarios </h3>
                  <!-- tools box -->
                  
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <input type="text" id="fullname">
                <button type="button" id="bttHello">Click Me!</button>
              </div>
              <!-- /.box -->
              <span id="result1"></span>


            </div>
            <!-- /.col-->
          </div>
          <!-- ./row -->
        </section>

        </div>
    </div>
</div>

</div>
    <!-- /.box -->

</section>
<!-- /.content -->



<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('public/plugins/jQuery/jquery-2.2.3.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('public/plugins/fastclick/fastclick.js');?>"></script>

<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>


    
    <script type="text/javascript">
                $('#bttHello').click(function () {
                    var fullname=$('#fullname').val();
                    $.ajax({
                        dataType:'json',
                        url:'<?php echo site_url('datos/hello');?>'+'/'+fullname,
                        success: function(result){
                            $('#result1').html(result);                            
                        }
                    });

                });
            </script>