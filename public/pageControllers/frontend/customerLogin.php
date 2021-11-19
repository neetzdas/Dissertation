<?php
    
    $pageTitle = "BillPay - Customer Login";

    $errorMsg = array();

    if(isset($_POST['btnLogin'])){
        $customerLogger = $customerTbl->funcSelect('email',$_POST['email']);

        if($customerLogger->rowCount()>0){
            $customerRow=$customerLogger->fetch();
            if(password_verify($_POST['password'], $customerRow['password'])){
                if($customerRow['verification_num'] == 1){
                    $_SESSION['customerId']=$customerRow['customer_id'];
                    $_SESSION['dwConsumerId']=$customerRow['dw_consumer_id'];
                    $_SESSION['eConsumerId']=$customerRow['e_consumer_id'];
                    $_SESSION['sc_no']=$customerRow['sc_no'];
                    $_SESSION['name']=$customerRow['fullName'];
                    $_SESSION['email']=$customerRow['email'];
                    $_SESSION['image']=$customerRow['image'];
                    $_SESSION['contact_num']=$customerRow['contactNum'];
                    $_SESSION['userType']=$customerRow['type'];
                    $_SESSION['signedIn']=true;
                    header('Location:customer/customerHome');
                }
                else{
                    $errorMsg = "Your account is not verified!<br> Please confirm your email first through the verification link which we had sent you during registration process!";
                }
            }
            else{
                $errorMsg = "Incorrect password, Please enter the right one!";
            }
        }
        else{
            $errorMsg = "Incorrect email address, Please enter the right one!";
        }
    }


    if (isset($_GET['errorMsg'])) echo $_GET['errorMsg'];

    $varsCriteria = [
        'customerTbl'=>$customerTbl,
        'errorMsg'=> $errorMsg
    ];

    $pageContents = loadsTemplate("../views/customer/customerLayout.php", $varsCriteria);
?>