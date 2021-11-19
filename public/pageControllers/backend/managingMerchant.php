<?php
	
	$pageTitle = "BillPay - Manage Merchants";

	if(isset($_GET['updateId'])){ 
		$currentMerchant = $merchantTbl->funcSelect('m_id' , $_GET['updateId']); 
		$dataOfMerchant=$currentMerchant->fetch();
	}
	else{
		$dataOfMerchant =[];
	}

	if(isset($_POST['save_btn'])){
		$merchantData=[
			'm_id'=>$_POST['m_id'],
			'name'=>$_POST['name']
		];

		$givenCri = $merchantTbl->funcSave($merchantData,'m_id');
		if($givenCri == true){
			echo '
				<script>
				alert("Merchant Successfuly Saved!");
				document.location = "managingMerchant";
				</script>';
		}else{
			echo '
				<script>
				alert("Merchant Not Saved!");
				</script>';
		}
	}

	if(isset($_GET['removeId'])) {
		$removeMerchantStmt = $merchantTbl->funcDelete('m_id', $_GET['removeId']); 
		echo "<script>alert('Merchant Successfuly Deleted!');
			window.location.href='managingMerchant';</script>";
	}
	
	$merchant_records=$merchantTbl->funcAllSelect();
	$recordsOfMerchant=$merchant_records->fetchAll();

	$varsCriteria = [
        'recordsOfMerchant'=>$recordsOfMerchant,
        'dataOfMerchant'=>$dataOfMerchant
    ];

	$pageContents = loadsTemplate("../../views/backend/merchant_v.php", $varsCriteria);
?>