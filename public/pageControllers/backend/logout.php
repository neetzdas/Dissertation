<?php
	session_unset(); 
	session_destroy(); 
	echo '<script> 
			alert("You are logged out!");
			document.location = "../backend/adminHome";
		  </script>';
?>