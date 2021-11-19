<?php
	
$pageTitle = "BillPay - Drinking Water Consumers";

	if (isset($_POST['save_btn'])){
		$dwConsumerCriteria =[
		            'fullName'=> $_POST['fullName'],
		            'email'=> $_POST['email'],
		            'contactNum' => $_POST['contactNum'],
		            'm_id' => $_POST['m_id'],
		            'consumer_id' => $_POST['consumer_id']
		        ];
		          
			   	$dwConsumerTbl->funcSave($dwConsumerCriteria);
			   	echo '
					<script>
					alert("New Drinking Water Consumer Added!");
					document.location = "listOfDwConsumers";
					</script>';
	}

	if (isset($_GET['removeId'])) {
			$removeDwConsumerStmt = $dwConsumerTbl->funcDelete('dconsumer_id', $_GET['removeId']); 
			echo "<script>alert('Drinking Water Consumer Deleted!');
			window.location.href='listOfDwConsumers';</script>";
		}

	
$varsCriteria = [
        
        
        'merchantTbl'=>$merchantTbl,
        'dwConsumerTbl'=>$dwConsumerTbl
    ];

$pageContents = loadsTemplate("../../views/backend/addDwConsumer_v.php", $varsCriteria);

?>