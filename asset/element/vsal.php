<?php
	session_start();
	session_destroy();

	$intsalju=$_GET["intsalju"];

	if($intsalju==1){
		?>
			<script type='text/javascript'>window.location='../part1.php'</script>";
		<?php

	}else if($intsalju==2){
		?>
			<script type='text/javascript'>window.location='../part1.php'
		</script>";
		<?php
	}
	exit();
?>