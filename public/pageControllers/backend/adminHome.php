<?php
	
    $pageTitle = "BillPay - Admin Dashboard";
    
    if(isset($_POST['btnLogin2'])){
        $adminLogger = $adminTbl->funcSelect('email',$_POST['email']);

        if($adminLogger->rowCount()>0){
            $adminRow=$adminLogger->fetch();

            if(password_verify($_POST['password'], $adminRow['password'])){
                $_SESSION['admin_id']=$adminRow['admin_id'];
                $_SESSION['email']=$adminRow['email'];
                $_SESSION['fullName']=$adminRow['fullName'];
                $_SESSION['adminType']=$adminRow['type'];
                $_SESSION['signedIn1']=true;
                    
                echo '<script>
                        document.location = "../backend/adminHome";
                      </script>';
            }
            else{
                echo '<script>
                        alert("Incorrect password!");
                        document.location = "../backend/adminHome";
                      </script>';
            }
        }
        else{
            echo '<script>
                    alert("Incorrect email!");
                    document.location = "../backend/adminHome";
                  </script>';
        }
    }

    $totalECustomers = $pdo->query("SELECT COUNT(customer_id) as totalREc FROM tb_customers WHERE type IN ('Both', 'Electricity')")->fetch();

    $totalEConsumers = $pdo->query('SELECT COUNT(econsumer_id) as totalEc FROM tb_econsumers')->fetch();

    $totalDwCustomers = $pdo->query("SELECT COUNT(customer_id) as totalRDwc FROM tb_customers WHERE type IN ('Both', 'Drinking Water')")->fetch();
 
    $totalDwConsumers = $pdo->query('SELECT COUNT(dconsumer_id) as totalDwc FROM tb_dwconsumers')->fetch();

    $ePayGross = $pdo->query('SELECT SUM(paid_amt) as totalEAmt FROM tb_epayments')->fetch();

    $dwPayGross = $pdo->query('SELECT SUM(paid_amt) as totalDAmt FROM tb_dwpayments')->fetch();

    $varsCriteria = [
        'adminTbl'=>$adminTbl,
        'totalECustomers'=>$totalECustomers,
        'totalDwCustomers'=>$totalDwCustomers,
        'totalEConsumers'=>$totalEConsumers,
        'totalDwConsumers'=>$totalDwConsumers,
        'ePayGross'=>$ePayGross,
        'dwPayGross'=>$dwPayGross
    ];

    $pageContents = loadsTemplate("../../views/backend/adminDashboard.php", $varsCriteria);
?>