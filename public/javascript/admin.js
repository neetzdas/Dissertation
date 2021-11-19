function displayBillAmount() {
	var n1 = document.getElementById('consumed_unit').value;
    var n2 = document.getElementById('per_unit_price').value;
    document.getElementById('bill_amt').value = (n1*n2);
}
