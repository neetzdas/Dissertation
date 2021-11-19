<?php 

$pageTitle = "BillPay - Update Electricity Consumer";

if (isset($_POST['save_btn'])) { 

			   	$eConsumerCriteria =[
			   		'econsumer_id' => $_POST['econsumer_id'],
			   		'email'=> $_POST['email'],
		            'fullName'=> $_POST['fullName'],
		            'contactNum' => $_POST['contactNum'],
		            'c_id' => $_POST['c_id'],
		            'sc_no' => $_POST['sc_no'],
		            'consumer_id' => $_POST['consumer_id']

		        ];
		          
			   	$eConsumerTbl->funcSave($eConsumerCriteria, 'econsumer_id');
			   	echo '
					<script>
					alert("Electricity Consumer Updated!");
					document.location = "listOfEConsumers";
					</script>';
			
		
	}

$varsCriteria = [
        'eConsumerTbl'=>$eConsumerTbl,
        'counterTbl'=>$counterTbl
    ];

$pageContents = loadsTemplate("../../views/backend/updateEConsumer_v.php", $varsCriteria);

 ?>