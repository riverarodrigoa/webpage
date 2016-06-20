<div class="col s12 m8 l9">
	<!--Contenido principal, estas tarjetas tienen una vista previa del artículo -->
		<?php
			include ("includes/show_articles_home.php");
			 echo $list;
		?>
	<!-- Hasta aqui se termina el contenido dinámico de las tarjetas -->
	
	<!-- Aqui inicia la paginacion -->
	<div class="container center-align">
		 <ul class="pagination">
		 	<?php echo $paginationCtrls; ?>
		</ul>
	</div>
	<!-- fin de la paginacíon -->
</div>