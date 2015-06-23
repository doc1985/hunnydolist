<!DOCTYPE html>
<html>
	<head>
		<title>Hunny Do List</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<?php
			if(isset($data["style"]) && count($data["style"])){
				foreach($data["style"] as $style ){
					echo '<link type="text/css" rel="stylesheet" href="css/'.$style.'" />';
				}
			}
		?>
	</head>
	<body>