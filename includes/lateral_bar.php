<?php
	include ("includes/conection_db.php");
	
	// Articulos mas recientes
	$limit_ar = 5;
	$sql = "SELECT * FROM articulos ORDER BY fecha DESC LIMIT $limit_ar";
	$query = mysqli_query($db, $sql);
	
	$articulos_recientes ='';
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
	
	//Artículos mas comentados
	
	mysqli_close($db);
?>