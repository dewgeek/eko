<?php
	session_start();
	if (!isset($_SESSION['username'])) {
		header('Location: login.php');
		exit(0);
	}
	$username = $_SESSION['username'];
	include('config.php');
	include('security.php');
	$node = make_safe($_POST['node']);
	$start_date = make_safe($_POST['startDate']);
	$end_date = make_safe($_POST['endDate']); 
	
	#$query = "select * from readings where id_plot_inf='".$node."' order by date";
	$query = "select * from readings where id_plot_inf='".$node."' and date >= '".$start_date."' and date <= '".$end_date."'";
	
	$result = mysql_query($query) or die(mysql_error());
	$i = 0;

	while ($row = mysql_fetch_array($result)) {
		
		$response[$i]["date"] = $row["date"];
		$response[$i]["port1"] = $row["port1"];
	
		$response[$i]["port2"] = $row["port2"];
		$response[$i]["port3"] = $row["port3"];
		$response[$i]["port4"] = $row["port4"];
		$i = $i+1;
	}


	$res = array("Response" => $response);
	echo json_encode($response);

?>