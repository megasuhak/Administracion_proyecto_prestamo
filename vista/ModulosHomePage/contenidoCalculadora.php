<script>
function computeLoan(){
	var amount = document.getElementById('amount').value;
	var interest_rate = document.getElementById('interest_rate').value;
	var months = document.getElementById('months').value;
	var interest = (amount * (interest_rate * .01)) / months;
	var payment = ((amount / months) + interest).toFixed(2);
	payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	document.getElementById('payment').innerHTML = "Pagara cada mes= $"+payment;
}
</script>
<body>
<hr>
<p>Cantidad a solicitar: $ <input id="amount" type="number" min="1" max="1000000" onchange="computeLoan()"></p>
<p>Tasa de Interes: <input id="interest_rate" type="number" min="0" max="100" value="10" step=".1" onchange="computeLoan()">%</p>
<p>Meses a pagar: <input id="months" type="number" min="1" max="72" value="1" step="1" onchange="computeLoan()"></p>
<h2 id="payment"></h2>
</body>