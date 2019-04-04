<?php
	$link = mysqli_connect("localhost","root","");
	$connection = mysqli_select_db($link, "dienthoai");
	mysqli_set_charset($link, 'UTF8');
?>