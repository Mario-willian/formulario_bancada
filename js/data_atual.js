/*==================================================================
Puxando a Data atual */

const dateInput = document.getElementById('data_retirada');
	
	// ✅ Using the visitor's timezone
	dateInput.value = formatDate();
	
	console.log(formatDate());
	
	function padTo2Digits(num) {
	  return num.toString().padStart(2, '0');
	}
	
	function formatDate(date = new Date()) {
	  return [
		date.getFullYear(),
		padTo2Digits(date.getMonth() + 1),
		padTo2Digits(date.getDate()),
	  ].join('-');
	}
	
	// ✅ Using UTC (universal coordinated time)
	// dateInput.value = new Date().toISOString().split('T')[0];
	
	// console.log(new Date().toISOString().split('T')[0]);