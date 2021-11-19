<?php
session_start();
require '../../includes/cus_init.php';
  
  if(isset($_GET['page'])){
      if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true){
        require '../../pageControllers/customer/'.$_GET['page']. '.php';
      }
      else{
        require '../../pageControllers/customer/customerHome.php';
      }
    }
    else{
      require '../../pageControllers/customer/customerHome.php';
    }
    
    $varsOfViews = [
      'pageTitle' => $pageTitle,
      'pageContents' => $pageContents
    ];
    
    echo loadsTemplate('../../views/customer/customerLayout.php', $varsOfViews);
?>