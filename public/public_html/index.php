<?php
 session_start();
  require '../includes/fEnd_init.php';
 
  
     if(isset($_GET['page'])){
      if($_GET['page']=='customerLogin'){
        require '../pageControllers/frontend/customerLogin.php';
      }
      else{
        require '../pageControllers/frontend/'.$_GET['page']. '.php';
      }
    }
    else{
      require '../pageControllers/frontend/homePage.php';
    }
    
    $varsOfViews = [
      'pageTitle' => $pageTitle,
      'pageContents' => $pageContents,
    ];
    
    echo loadsTemplate('../views/frontend/layoutForPages.php', $varsOfViews);
?>