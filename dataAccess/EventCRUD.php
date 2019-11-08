<?php

/**
* Conexion a la base de datos y funciones
* Autor: nicolas
**/
include "dataAccess/DBcon.php";

function insert_event($title, $folder, $image){
	$con = con();
	$con->query("insert into event_photos (id_event, url ) value ($title,\"$image\"");
}

function get_events(){
	$events = array();
	$con = con();
	$query=$con->query("select i.url img, e.name title, e.id_user author from event_photos i
	join events e on i.id_event=e.id group by i.id_event");
	while($r=$query->fetch_object()){
		$events[] = $r;
	}
	while($row = $query->fetch_object()){
		echo "<div class=\"row\">";
		echo "<div class=\"col-md-4\">";
		echo   " <div class=\"flat-iconbox style3\">";
		echo "       <div class=\"icon-image\">";
				echo "<img src=".$row["img"]." alt=\"image\">";
		echo "       </div>";
				echo"<div class=\"content\">";
					echo "<h6 class=\"title\"><a href=\"#\">".$row["title"]."</a></h6>";            
					echo "<p>".$row["author"]."</p>"; 
				echo"</div>";
			echo"</div><!-- /.flat-iconbox -->";
		echo"</div><!-- /.col-md-4 -->";
	}
	return $events;
}
function get_categories($id){
	$categories = array();
	$con = con();
	$query=$con->query("select c.name from categoryxevent ce join category c on id_category where ce.id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}
function get_event($id){
	$image = null;
	$con = con();
	$query=$con->query("select * from image where id=$id");
	while($r=$query->fetch_object()){
		$image = $r;
	}
	return $image;
}

function del_event($id){
	$con = con();
	$con->query("delete from image where id=$id");
}

?>