<footer class="page-footer grey darken-2">
	<div class="container">
		<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large waves-effect waves-light red">
				<i class="large material-icons">add</i>
			</a>
			<ul>
				<li>
					<a class="btn-floating waves-effect waves-light red btn tooltipped"
						data-position="bottom" data-delay="50" data-tooltip="¡Comparte!">
						<i class="material-icons">share</i>
					</a>
				</li>
				<li>
					<a class="btn-floating waves-effect waves-light yellow darken-1 btn tooltipped"
					 	data-position="bottom" data-delay="50" data-tooltip="Reporta un error">
						<i class="material-icons">bug_report</i>
					</a>
				</li>
				<li>
					<a class="btn-floating waves-effect waves-light green btn tooltipped" 
						data-position="bottom" data-delay="50" data-tooltip="Añádeme a favoritos">
						<i class="material-icons">favorite</i>
					</a>
				</li>
				<li>
					<a class="btn-floating waves-effect waves-light blue btn tooltipped" 
						data-position="bottom" data-delay="50" data-tooltip="Contáctame">
						<i class="material-icons">drafts</i>
					</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col l3 s12">
				<div class="card-panel blue-grey darken-3 z-depth-2">
					<div class="card-content white-text">
						<span class="card-title"><h5 class="white-text">Mapa del sitio</h5></span>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">home</i> Inicio</a></li>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">web</i> Noticias</a></li>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">record_voice_over</i> Opiniones</a></li>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">note</i> Reseñas</a>
								<ul >
									<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">local_library</i> Libros</a></li>
									<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">tv</i> Series</a></li>
									<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">theaters</i> Películas</a></li>
									<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">library_books</i> Manga y comics</a></li>
								</ul>
							</li>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">school</i> Proyectos</a></li>
							<li><a class="grey-text text-lighten-3" href="#"><i class="material-icons">person</i> Sobre mi</a></li>
						</ul>
					</div>
				</div>
            </div>
			
            <div class="col l5 offset-l4 s12">
				<div class="row">
					<div class="col l12 s12">
						<div class="card-panel blue-grey z-depth-2">
							<div class="card-content center-align">
								<span class="card-title"><h5 class="white-text">¡Sígueme en las redes sociales!</h5></span>
								<a class="btn-floating btn-large waves-effect waves-light blue lighten-1 btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Twitter" id="Twitter">
									<i class="fa fa-twitter fa-4x" aria-hidden="true"></i>
								</a>
								<a class="btn-floating btn-large waves-effect waves-light indigo darken-3 btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Facebook" id="Facebook">
									<i class="fa fa-facebook-official fa-4x" aria-hidden="true"></i>
								</a>
								<a class="btn-floating btn-large waves-effect waves-light red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Google +" id="Google">
									<i class="fa fa-google-plus fa-4x" aria-hidden="true"></i>
								</a>
								<a class="btn-floating btn-large waves-effect waves-light red darken-2 btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="YouTube" id="YouTube">
									<i class="fa fa-youtube-square fa-4x" aria-hidden="true"></i>
								</a>
								<a class="btn-floating btn-large waves-effect waves-light blue accent-3 btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="LinkedIn" id="LinkedIn">
									<i class="fa fa-linkedin-square fa-4x" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col l12 s12">
						<div class="card-panel blue-grey darken-1 z-depth-3">
							<div class="card-content white-text">
								<span class="card-title"><h5>¡No olvides suscribirte!</h5></span>
								<div class="card-content">
								<p>Te enviaré un mensaje a tu correo para que recibas las últimas novedades y no te pierdas ninguna entrada.</p>
								</div>
								<div class="card-action">
								<form >
										<i class="material-icons left">email</i>
										<input id="icon_prefix" type="email" class="validate">
										<label for="icon_prefix"></label>
										<button class="btn waves-effect waves-light green right" type="submit" name="action">
												Enviar <i class="material-icons right">send</i>
										</button>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
    </div>
	<div class="footer-copyright">
		© 2016 <?php (date('Y') == "2016" ? $year = "" : $year = "- ".date('Y')); echo $year; ?> - Diseñado y creado por <a href="https://twitter.com/riverarodrigoa">Rodrigo Rivera</a>. Todos los derechos reservados.
	</div>
</footer>