<?php
	session_start();
	require'../../includes/bEnd_init.php';
	
	
		if(isset($_GET['page'])){
			if (isset($_SESSION['signedIn1']) && $_SESSION['signedIn1'] == true) 
				require '../../pageControllers/backend/'.$_GET['page']. '.php';
			else
				require '../../pageControllers/backend/adminHome.php';
		}
		else{
			require '../../pageControllers/backend/adminHome.php';
		}

		$varsOfViews = [
			'pageTitle' => $pageTitle,
			'pageContents' => $pageContents
		];
		
		echo loadsTemplate('../../views/backend/adminLayout.php', $varsOfViews);		
?>