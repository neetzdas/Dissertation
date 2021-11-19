<?php 

$pageTitle = "BillPay - Update Drinking Water Consumer";

if (isset($_POST['save_btn'])) { 

			   	$dwConsumerCriteria =[
			   		'dconsumer_id' => $_POST['dconsumer_id'],
		            'fullName'=> $_POST['fullName'],
		            'email'=> $_POST['email'],
		            'contactNum' => $_POST['contactNum'],
		            'm_id' => $_POST['m_id'],
		            'consumer_id' => $_POST['consumer_id']

		        ];
		          
			   	$dwConsumerTbl->funcSave($dwConsumerCriteria, 'dconsumer_id');
			   	echo '
					<script>
					alert("Drinking Water  Consumer Updated!");
					document.location = "listOfDwConsumers";
					</script>';
			
		
	}

$varsCriteria = [
        'dwConsumerTbl'=>$dwConsumerTbl,
        'merchantTbl'=>$merchantTbl
    ];

$pageContents = loadsTemplate("../../views/backend/updateDwConsumer_v.php", $varsCriteria);

 ?>