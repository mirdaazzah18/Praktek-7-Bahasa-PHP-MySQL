<?php
	//tag untuk mengecek apakah session sudah diinisalisasi
    	if (!isset($_SESSION['username'])){
    		header("Location: index.php");
    	}
?>