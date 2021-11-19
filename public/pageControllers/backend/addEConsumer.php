<?php
	
$pageTitle = "BillPay - Electricity Consumers";

	if (isset($_POST['save_btn'])){
		$eConsumerCriteria =[
		            'fullName'=> $_POST['fullName'],
		            'email'=> $_POST['email'],
		            'contactNum' => $_POST['contactNum'],
		            'c_id' => $_POST['c_id'],
		            'sc_no' => $_POST['sc_no'],
		            'consumer_id' => $_POST['consumer_id']

		        ];
		          
			   	$eConsumerTbl->funcSave($eConsumerCriteria);
			   	echo '
					<script>
					alert("New Electricity Consumer Added!");
					document.location = "listOfEConsumers";
					</script>';
	}

	if (isset($_GET['removeId'])) {
			$removeEConsumerStmt = $eConsumerTbl->funcDelete('econsumer_id', $_GET['removeId']); 
			echo "<script>alert('Electricity Consumer Deleted!');
			window.location.href='listOfEConsumers';</script>";
		}

	
$varsCriteria = [
        
        
        'counterTbl'=>$counterTbl,
        'eConsumerTbl'=>$eConsumerTbl
    ];

$pageContents = loadsTemplate("../../views/backend/addEConsumer_v.php", $varsCriteria);

?>