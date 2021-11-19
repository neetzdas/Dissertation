<?php
	
    $pageTitle = "BillPay - List of Enquiries";

    $enquiryList=$enquiryTbl->funcAllSelect();
    $recordsOfEnquiry=$enquiryList->fetchAll();

    if(isset($_GET['readId'])){ 
		$criteriaForRead = [
            'status' => 1,
            'enquiry_id' =>$_GET['readId']
        ];

        $enquiryTbl->funcUpdate($criteriaForRead,'enquiry_id'); 
        header("refresh: 3;");
    }

	if(isset($_GET['removeId'])){
		$removeEnquiryStmt = $enquiryTbl->funcDelete('enquiry_id', $_GET['removeId']);
        echo "<script>alert('Enquiry Deleted!');
			window.location.href='listOfEnquiries';</script>";
	}
 

    $varsCriteria = [
        'recordsOfEnquiry'=>$recordsOfEnquiry,
        'enquiryTbl'=>$enquiryTbl
    ];

    $pageContents = loadsTemplate("../../views/backend/listOfEnquiries_v.php", $varsCriteria);
?>