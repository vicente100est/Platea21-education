<div class="span3" id="sidebar">
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dashboard_student.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Volver</a></li>
				<li class=""><a href="my_classmates.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Mis Compañeros</a></li>
				<li class=""><a href="progress.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-bar-chart"></i>&nbsp;Mi Progreso</a></li>
				<li class=""><a href="subject_overview_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-file"></i>&nbsp;Descripción de Curso</a></li>
				<li class=""><a href="downloadable_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-download"></i>&nbsp;Material Descargable</a></li>
				<li class="active"><a href="video_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-download"></i>&nbsp;Videos</a></li>
				<li class=""><a href="assignment_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Practicas</a></li>
				<li class=""><a href="announcements_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Avisos</a></li>
				<li class=""><a href="class_calendar_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-calendar"></i>&nbsp;Horario de Clases</a></li>
				<li class=""><a href="student_quiz_list.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-reorder"></i>&nbsp;Examenes</a></li>
		</ul>
	<?php/*  include('search_other_class.php'); */ ?>	
</div>