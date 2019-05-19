<?php 
	include'../conexion/conexion.php';
	// Variables de configuración
	$titulo="Catálago de Usuarios";
	$opcionMenu="A";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('../header.php');?>
	</head>
	<body>
		<header>
			<?php include('../layout/encabezado.php');?>
		</header><!-- /header -->	
		<div class="container-fluid" >
			<div class="row">
				<div class="col-xs-0 col-sm-3 col-md-2 col-lg-2 vertical">
					<?php include('menuv.php');?>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-10 col-lg-10 cont">
			  	<div class="titulo borde sombra">
			      <h3><?php echo $titulo; ?></h3>
			   	</div>	
			   	<div class="contenido borde sombra">
				    <div class="container-fluid">
				      <section id="alta" style="display: none">
          			<form id="frmAlta">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
											<div class="form-group">
												<label for="nombre">Nombre de la Persona:</label>
												<input type="text" id="nombre" class="form-control " autofocus="" required="" placeholder="Escribe el nombre">
											</div>
										</div>
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
											<div class="form-group">
												<label for="paterno">Apellido Paterno:</label>
												<input type="text" id="paterno" class="form-control " required="" placeholder="Escribe el apellido">
											</div>
										</div>
										<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
											<div class="form-group">
												<label for="materno">Apellido Materno:</label>
												<input type="text" id="materno" class="form-control " required="" placeholder="Escribe el apellido">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<label for="direccion">Dirección:</label>
												<input type="text" id="direccion" class="form-control " required="" placeholder="Escribe la dirección completo">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
											<div class="form-group">
												<label for="sexo">Sexo:</label>
												<select  id="sexo" class="select2 form-control " style="width: 100%">
													<option value="M">Masculino</option>
													<option value="F">Femenino</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
											<div class="form-group">
												<label for="Telefono">Teléfono:</label>
												<input type="text" id="telefono" class="form-control " required="" placeholder="Escribe el telefono">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
											<div class="form-group">
												<label for="fecha_nac">Fecha de Nacimiento:</label>
												<input type="date" id="fecha_nac" class="form-control " required="" placeholder="yyyy-mm-dd">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
											<div class="form-group">
												<label for="correo">Correo:</label>
												<input type="text" id="correo" class="form-control " required="" placeholder="email">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
											<div class="form-group">
												<label for="tipo">Tipo de persona:</label>
												<select  id="tipo" class="select2 form-control " style="width: 100%">
													<option value="estudiante">Estudiante</option>
													<option value="trabajador">Trabajador</option>
												</select>
											</div>
										</div>
										<hr class="linea">
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="btnLista" class="btn btn-login  btn-flat  pull-left">Lista de Personas</button>
											<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Guardar Información">										
										</div>
									</div>
            		</form>
				      </section>
				      <section id="lista"></section>
				    </div>
			   	</div>	
				</div>			
			</div>
		</div>
		<footer class="fondo">
			<?php include('../layout/pie.php');?>			
		</footer>
		<!-- Modal -->
		<div id="modalEditar" class="modal fade" role="dialog">
	  	<div class="modal-dialog modal-lg">
	    	<!-- Modal content-->
	    	<form id="frmActuliza">
	    		<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Editar datos personas</h4>
	      		</div>
	      		<div class="modal-body">
							<input type="hidden" id="idE">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
									<div class="form-group">
										<label for="nombreE">Nombre de la Persona:</label>
										<input type="text" id="nombreE" class="form-control " autofocus="" required="" placeholder="Escribe el nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="form-group">
										<label for="paternoE">Apellido Paterno:</label>
										<input type="text" id="paternoE" class="form-control " required="" placeholder="Escribe el apellido">
									</div>
								</div>
								<div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
									<div class="form-group">
										<label for="maternoE">Apellido Materno:</label>
										<input type="text" id="maternoE" class="form-control " required="" placeholder="Escribe el apellido">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group">
										<label for="direccionE">Dirección:</label>
										<input type="text" id="direccionE" class="form-control " required="" placeholder="Escribe la dirección completo">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="form-group">
										<label for="sexoE">Sexo:</label>
										<select  id="sexoE" class="select2 form-control " style="width: 100%">
											<option value="M">Masculino</option>
											<option value="F">Femenino</option>
										</select>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
									<div class="form-group">
										<label for="telefonoE">Teléfono:</label>
										<input type="text" id="telefonoE" class="form-control " required="" placeholder="Escribe el telefono">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
									<div class="form-group">
										<label for="fecha_nacE">Fecha de Nacimiento:</label>
										<input type="date" id="fecha_nacE" class="form-control " required="" placeholder="yyyy-mm-dd">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-7 col-lg-8">
									<div class="form-group">
										<label for="correoE">Correo:</label>
										<input type="text" id="correoE" class="form-control " required="" placeholder="email">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
									<div class="form-group">
										<label for="tipoE">Tipo de persona:</label>
										<select  id="tipoE" class="select2 form-control " style="width: 100%">
											<option value="estudiante">Estudiante</option>
											<option value="trabajador">Trabajador</option>
										</select>
									</div>
								</div>
								<hr class="linea">
							</div>
	      		</div>
	      		<div class="modal-footer">
							<div class="row">
								<div class="col-lg-12">
									<button type="button" id="btnCerrar" class="btn btn-login  btn-flat  pull-left" data-dismiss="modal">Cerrar</button>
									<input type="submit" class="btn btn-login  btn-flat  pull-right" value="Actualizar Información">	
								</div>
							</div>
	      		</div>
	    		</div>
				</form>
	  	</div>
		</div>
		<!-- Modal -->
		<?php include('../footer.php');?>
	</body>
</html>