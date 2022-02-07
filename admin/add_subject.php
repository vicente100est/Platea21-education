<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Agregar Curso</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php"><i class="icon-arrow-left"></i> Atrás</a>
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Codigo Curso</label>
											<div class="controls">
											<input type="text" name="subject_code" id="inputEmail" placeholder="Codigo Curso">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Titulo Curso</label>
											<div class="controls">
											<input type="text" class="span8" name="title" id="inputPassword" placeholder="Titulo Curso" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Número de Unidades</label>
											<div class="controls">
											<input type="text" class="span1" name="unit" id="inputPassword" required>
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="inputPassword">Semestre</label>
											<div class="controls">
												<select name="semester">
													<option></option>
													<option>1st</option>
													<option>2nd</option>
												</select>
											</div>
										</div>
								
										<div class="control-group">
											<label class="control-label" for="inputPassword">Descripcion</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full"></textarea>
											</div>
										</div>
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Guardar</button>
										</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){
										$subject_code = $_POST['subject_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
										$description = $_POST['description'];
										$semester = $_POST['semester'];
										
										
										$query = mysqli_query($con,"select * from subject where subject_code = '$subject_code' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Ya existe ese curso');
										</script>
										<?php
										}else{
										mysqli_query($con,"insert into subject (subject_code,subject_title,description,unit,semester) values('$subject_code','$title','$description','$unit','$semester')");
										
										
										mysqli_query($con,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Agregar Curso $subject_code')")or die(mysqli_error());
										
										
										?>
										<script>
										window.location = "subjects.php";
										</script>
										<?php
										}
										}
										
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>