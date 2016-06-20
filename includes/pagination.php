<?php
	include("conection_db,php");
	$item_per_page = 5;
	$results = mysqli_query($db,"SELECT COUNT(*) FROM articulos");
	$get_total_rows = mysqli_fetch_array($results); //total records
	
	//break total records into pages
	$pages = ceil($get_total_rows[0]/$item_per_page);
	
	
?>



<div class="col s12 m8 l9">
	<div class="card large hoverable">
		<div class="card-image">
			<img src="img/test.jpg">
		<span class="card-title"></span>
		</div>
		<div class="card-content">
			
		</div>
		<div class="card-action">
			<a href="">Leer más...</a>
			<div class="chip">
				
			</div>
		</div>
	</div>
	<div class="container center-align">
		 <ul class="pagination">
		 	<li class="disabled"><a><i class="material-icons">chevron_left</i></a></li>
			<li class="active"><a></a></li>
			<li class="disabled"><a><i class="material-icons">chevron_right</i></a></li>
		</ul>
	</div>
</div>








/////////////////
$limit_ac = 5;
	$sql = "SELECT COUNT(*) FROM comentarios GROUP BY id_articulo ORDER BY count(*) DESC LIMIT $limit_ac";
	$query = mysqli_query($db, $sql);
	$row = mysqli_fetch_row($query);
	
	$sql = "SELECT * FROM articulos WHERE 'id_articulo' == $row";
	$query = mysqli_query($db, $sql);
	
	while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		$date = $row['fecha'];
		$date = strftime("%d %b %Y", strtotime($date));
		$articulos_recientes .= '
			<li class="collection-item avatar">
				<img src="img/'.$row['imagen'].'" alt="" class="circle">
				<span class="title truncate"><b>'.$row['titulo'].'</b></span>
				<span class="badge"><i class="material-icons right">today</i>
					'.$date.'
				</span>
			</li>
			';
	
	}