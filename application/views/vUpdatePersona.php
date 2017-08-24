<div class="row">
	<div class="col-md-12">
	          <!-- Horizontal Form -->
	    <div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title"><?php echo "Usuario: ".$this->session->userdata('s_usuario') ?></h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	           <form action="<?php echo base_url();?>cPersona/actualizarDatos" method="post">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="nombrePersona" placeholder="">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="usuarioUsuario" placeholder="">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>

	                  <div class="col-sm-10">
	                    <input type="password" class="form-control" name="passUsuario" placeholder="">
	                  </div>
	                </div>
	               
	              </div>
	              <!-- /.box-body -->
	              <div class="box-footer">
	                
	                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>

	             <form action="<?php echo base_url();?>cPersona/eliminarUsuario" method="post">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">ID</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="txtidpersona" placeholder="">
	                  </div>
	                </div>

	              </div>
	              <!-- /.box-body -->
	              <div class="box-footer">
	                
	                <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
		</div>
		Profesión: <select name="selProfesiones">
					<?php foreach ($arrProfesiones as $i => $profesion)    
					echo '<option value="',$i,'">',$profesion,'</option>'; 
					?> 
					</select>


	          <!-- /.box -->
	          <!-- general form elements disabled -->
	       
	          <!-- /.box -->
	</div>
</div>



