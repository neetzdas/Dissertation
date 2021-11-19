<?php
	function loadsTemplate($nameOfFile, $varsOfViews){ 
		extract($varsOfViews); 
		ob_start(); 
		require $nameOfFile; 
		$pageContents = ob_get_clean(); 
		return $pageContents;
	}
?>