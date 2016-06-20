<?php
	include ("includes/conection_db.php");
	$sql = "SELECT COUNT(id_articulo) FROM articulos";
	$query = mysqli_query($db, $sql);
	$row = mysqli_fetch_row($query);
	
	// Numero total de entradas
	$rows = $row[0];
	$page_rows = 5; // Resultados por pagina
	$last = ceil($rows/$page_rows); // Numero de la ultima pagina
		if($last < 1){
			$last = 1;
		}
	$pagenum = 1;
	
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
	// This makes sure the page number isn't below 1, or more than our $last page
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} else if ($pagenum > $last) { 
		$pagenum = $last; 
	}
	// This sets the range of rows to query for the chosen $pagenum
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	// This is your query again, it is for grabbing just one page worth of rows by applying $limit
	$sql = "SELECT * FROM articulos ORDER BY id_articulo DESC $limit";
	$query = mysqli_query($db, $sql);
	
	// Establish the $paginationCtrls variable
	$paginationCtrls = '';
	
	if($last != 1){
		/* First we check if we are on page one. If we are then we don't need a link to 
		   the previous page or the first page so we do nothing. If we aren't then we
		   generate links to the first page, and to the previous page. */
		if ($pagenum > 1) {
			$previous = $pagenum - 1;
			$paginationCtrls .= '<li class="waves-effect">
									<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">
										<i class="material-icons">chevron_left</i>
									</a>
								</li>';
			// Render clickable number links that should appear on the left of the target page number
			for($i = $pagenum-4; $i < $pagenum; $i++){
				if($i > 0){
					$paginationCtrls .= '<li class="waves-effect">
											<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a>
										</li>';
				}
			}
			
		}else{
			$paginationCtrls .= '<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>';
		}
		// Render the target page number, but without it being a link
		$paginationCtrls .= '<li class="active"><a>'.$pagenum.'</a></li>';
		
		// Render clickable number links that should appear on the right of the target page number
		for($i = $pagenum+1; $i <= $last; $i++){
			$paginationCtrls .= '<li class="waves-effect">
									<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a>
								</li>';
			if($i >= $pagenum+4){
				break;
			}
		}
		// This does the same as above, only checking if we are on the last page, and then generating the "Next"
		if ($pagenum != $last) {
			$next = $pagenum + 1;
			$paginationCtrls .= '
								<li class="waves-effect">
									<a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">
										<i class="material-icons">chevron_right</i>
									</a>
								</li>';
		}else{
			$paginationCtrls .= '<li class="disabled"><a><i class="material-icons">chevron_right</i></a></li>';
		}
	}else{
		$paginationCtrls .= '<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>';
		$paginationCtrls .= '<li class="active"><a>'.$pagenum.'</a></li>';
		$paginationCtrls .= '<li class="disabled"><a><i class="material-icons">chevron_right</i></a></li>';
	}
	
	$list = '';
	while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
		$id = $row['id_articulo'];
		$list .= '
				<div class="card large hoverable">
					<div class="card-image">
						<img src="img/'.$row['imagen'].'">
					<span class="card-title">'.$row['titulo'].'</span>
					</div>
					<div class="card-content">
						'.$row['contenido'].'
					</div>
					<div class="card-action">
						<a href="articulo.php?id='.$id.'">Leer más...</a>
						<div class="chip">
							'.$row['tags'].'
						</div>
					</div>
				</div>
			';
	}
	mysqli_close($db);
?>