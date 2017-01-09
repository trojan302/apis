<?php 

mysql_connect('localhost','root','')or die(mysql_errno());
mysql_select_db('APIs');

$url = 'http://ratnalinux/tutorial/';

if(isset($_GET['method']) && isset($_GET['id'])){
	
	$method = $_GET['method'];
	$id 	= $_GET['id'];

	if ($method == "user" && (int)$id) {
		
		$data = array();
	
		$sql = mysql_query("SELECT * FROM users WHERE id=$id");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}

		echo json_encode($data);

	} elseif ($method == "post" && (int)$id) {
		
		$data = array();
	
		$sql = mysql_query("SELECT * FROM posts WHERE id=$id");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}

		echo json_encode($data);

	} else {

		require '404.html';

	}
	

}elseif(isset($_GET['method']) && isset($_GET['limit'])){
	
	$limit 	= $_GET['limit'];
	$method = $_GET['method'];

	if ( $method == 'users' && (int)$limit ) {

		$data = array();

		$sql = mysql_query("SELECT id, first_name, last_name, email, gender, st_address, ct_address, con_address, ip_address FROM users LIMIT $limit ");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}
		echo json_encode($data);
		
	} elseif ( $method == 'posts' && (int)$limit ) {

		$data = array();

		$sql = mysql_query("SELECT * FROM posts LIMIT $limit ");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}
		echo json_encode($data);
		
	}else {

		require '404.html';

	}
	

}elseif(isset($_GET['method']) && empty($_GET['limit'])){

	if ($_GET['method'] == "users") {

		$data = array();

		$sql = mysql_query("SELECT id, first_name, last_name, email, gender, st_address, ct_address, con_address, ip_address FROM users");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}

		echo json_encode($data);

	} elseif ($_GET['method'] == "posts"){

		$data = array();

		$sql = mysql_query("SELECT * FROM posts");
		while($arr = mysql_fetch_assoc($sql)){

			$data[] = $arr;

		}

		echo json_encode($data);

	}else {

		require '404.html';

	}

}elseif(isset($_GET['type']) && isset($_GET['temp'])){

	if ($_GET['type'] == "view" && $_GET['temp'] == "documentations") {

		require 'templates/head-nav.php';
		require 'templates/documentation.php';
		require 'templates/footer.php';

	}else {

		require '404.html';

	}

}else{
	
	require 'templates/head-nav.php';
	require 'templates/slider-slogan.php';
	require 'templates/index.php';	
	require 'templates/footer.php';	

}

?>