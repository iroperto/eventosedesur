<?php require "header.php";?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Areas <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive"  id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>Area</th>
                            <th>Estado</th>
                            
                          </thead>
                          <tbody></tbody>
                          <tfoot>                            
                            <th>Opciones</th>
                            <th>Area</th>
                            <th>Estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form method="$_POST" id="formulario" name="formulario" >
                        <div class="formgroup col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Area:</label>
                          <input type="hidden" id="idareas" name="idareas">
                          <input type="text" id="area" name="area" maxlength="255" placeholder="Area" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" class="btn btn-primary"><i class="fa save"></i> Guardar</button>
                          <button type="button" class="btn btn-danger"><i class="fa fa-arrow-circle-left" onclick="cancelarform()"></i> Cancelar</button>
                        </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
  <?php require "footer.php";?>
  <script src="scripts/areas.js"></script>