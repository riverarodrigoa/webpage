<div class="col s12 m8 l9">
	<!--Contenido principal, estas tarjetas tienen una vista previa del artícul.
		Aquí se tiene que aplicar una conexion con mysql para la web dinamica (jquery) -->
	<div>
		<?php
			if($connected){
				'
				<div class="card-panel blue-grey darken-1 z-depth-3">
					<div class="card-content white-text">
						<span class="card-title"><h5>Estado de la conexion con la base de datos</h5></span>
						<div class="card-content">
							<a class="btn-large">Conectado</a>
						</div>
					</div>
				</div>';
			}
			else{
				'<div class="card-panel blue-grey darken-1 z-depth-3">
					<div class="card-content white-text">
						<span class="card-title"><h5>Estado de la conexion con la base de datos</h5></span>
						<div class="card-content">
							<a class="btn-large disabled">Desconectado</a>
						</div>
					</div>
				</div>';
			}
		?>
	</div>	
	<div class="card large hoverable">
		<div class="card-image">
			<img src="/img/test.jpg">
		<span class="card-title">Título</span>
		</div>
		<div class="card-content">
			Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
			Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
			Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
			Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
			Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
			Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui.
			Donec non enim in turpis pulvinar facilisis. Ut felis.
			Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.
			Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
		</div>
		<div class="card-action">
			<a href="#">Leer más...</a>
			<div class="chip">
				Tags
			</div>
		</div>
	</div>
	
	<!-- Hasta aqui se termina el contenido dinámico de las tarjetas -->
	
	<!-- Aqui inicia la paginacion que tiene que ser tambien de manera dinámica -->
	<div class="container center-align">
		 <ul class="pagination">
			<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>
			<li class="active"><a>1</a></li>
			<li class="waves-effect"><a class=""  href="#!">2</a></li>
			<li class="waves-effect"><a href="#!">3</a></li>
			<li class="waves-effect"><a href="#!">4</a></li>
			<li class="waves-effect"><a href="#!">5</a></li>
			<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</div>
	<!-- fin de la paginacíon -->
</div>