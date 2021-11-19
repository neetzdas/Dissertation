<?php
	
	if(isset($_GET['ebill_id'])) {
		$ebill_id = $_GET['ebill_id'];
		$paidDate = date('Y-m-d');

		$ebillDetails = $pdo->query("SELECT * FROM tb_ebills WHERE eBill_id = '$ebill_id'")->fetch();
		$paidAmt = $ebillDetails['bill_amt'];
		$payingCus = $_SESSION['customerId'];

		$epaymentDetails = $pdo->prepare("INSERT INTO tb_epayments (eBill_id, paid_date, paid_amt, paidBy) VALUES ('$ebill_id', '$paidDate', '$paidAmt', '$payingCus')");  
		$ePaySuccess = $epaymentDetails->execute();

		if ($ePaySuccess) {
			$eStatusStmt = $pdo->prepare("UPDATE tb_ebills SET 
				status = '1'
				WHERE eBill_id = '$ebill_id'
			");
			$eStatusStmt->execute();
			echo '<script>alert("Your Payment has been successfully done!")';
			header('location:ePayRecords');
		} else{
			echo '<script>alert("Your Payment has been failed!")';
			header('location:eSearch');
		}
	}
?>