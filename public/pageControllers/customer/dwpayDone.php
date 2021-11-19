<?php
	
	if(isset($_GET['dwbill_id'])) {
		$dwbill_id = $_GET['dwbill_id'];
		$paidDate = date('Y-m-d');

		$dwbillDetails = $pdo->query("SELECT * FROM tb_dwbills WHERE dwBill_id = '$dwbill_id'")->fetch();
		$paidAmt = $dwbillDetails['bill_amt'];
		$payingCus = $_SESSION['customerId'];

		$dwpaymentDetails = $pdo->prepare("INSERT INTO tb_dwpayments (dwBill_id, paid_date, paid_amt, paidBy) VALUES ('$dwbill_id', '$paidDate', '$paidAmt', '$payingCus')");  
		$dwPaySuccess = $dwpaymentDetails->execute();

		if ($dwPaySuccess) {
			$dwStatusStmt = $pdo->prepare("UPDATE tb_dwbills SET 
				status = '1'
				WHERE dwBill_id = '$dwbill_id'
			");
			$dwStatusStmt->execute();
			echo '<script>alert("Your Payment has been successfully done!")';
			header('location:dwPayRecords');
		} else{
			echo '<script>alert("Your Payment has been failed!")';
			header('location:dwSearch');
		}
	}
?>