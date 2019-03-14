var actions;
var tbProduct;
var date;

$(function(){
	actions = 1; 
	var idSelected = -1;

	tbProduct = localStorage.getItem("tbProduct");
	tbProduct = JSON.parse(tbProduct); 
	if(tbProduct == null) 
		tbProduct = [];
	listData();
	setInputFilter(document.getElementById("price"), function(value) {
		return /^-?\d*[.,]?\d*$/.test(value); });
});


function addProduct() {
	
	var e = document.getElementById("unitMeasure");
	var unitSelected = e.options[e.selectedIndex].value;
	var rdPerishable = document.querySelector('input[name = "yes_no"]:checked').value;
	var product = JSON.stringify({
		id            : $("#idProduct").val(),
		itemName      : $("#itemName").val(),
		quantity      : $("#qty").val(),
		price         : $("#price").val(),
		dtVal         : $("#dtValidity").val(),
		dtProd        : $("#dtProduction").val(),
		unitMeasure   : unitSelected, 
		prodPerishable: rdPerishable, 
	});
	if (formValidations()) {
		tbProduct.push(product);
		console.log(tbProduct);
		localStorage.setItem("tbProduct", JSON.stringify(tbProduct));
	} else {
		alert('Erro ao salvar os dados!');
	}

	return true;
}


function action() {
	if(actions == 1) {
		return addProduct();
	} else if (actions == 2) {}
}

function listData() { 
	console.log('list');
	for (var i = tbProduct.length - 1; i >= 0; i--) {
		console.log(tbProduct[i]);
	}
}

function formValidations() {
	var dateValidity = $("#dtValidity").val();
	var dateProduction = $("#dtProduction").val();
	var e = document.getElementById("unitMeasure");
	var unitMeasure = e.options[e.selectedIndex].index;
	var rdPerishable = $("input[name='yes_no']").val();
	var currentDate = new Date();
	currentDate = currentDate.getFullYear() + "-"
	+ "0" + (currentDate.getMonth()+1)  + "-" 
	+ currentDate.getDate();

	if (dateProduction > dateValidity) {
		alert("Data de Fabricação deve ser inferior a data de validade");
		return false;
	}else if (dateProduction == "" || dateValidity == "") {
		alert("Data de Fabricação ou Validade Inválida");
		return false;
	}else if (unitMeasure <= 0 ) {
		alert("Deve ser Selecionada alguma Unidade de Medida");
		return false;
	}else if (rdPerishable == null) {
		alert("Informe se o Produto é Perecível");
		return false;
	} else if (dateValidity < currentDate ) {	
		alert('O produto já está vencido!');
		return false;
	} else {
		return true;
	}
}

function onlyNumbers()
{
	var k = window.event.keyCode;
	k = String.fromCharCode(k);
	if(!((k >= "0") && (k <= "9"))) {
		window.event.keyCode = 0;
	}
}

function setInputFilter(textbox, inputFilter) {
	["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
		textbox.addEventListener(event, function() {
			if (inputFilter(this.value)) {
				this.oldValue = this.value;
				this.oldSelectionStart = this.selectionStart;
				this.oldSelectionEnd = this.selectionEnd;
			} else if (this.hasOwnProperty("oldValue")) {
				this.value = this.oldValue;
				this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
			}
		});
	});
}

function listData(){
	$("#tbProductsInfo").html("");
	$("#tbProductsInfo").html(
		"<thead>"+
		"   <tr>"+
		"   <th>Código</th>"+
		"   <th>Nome</th>"+
		"   <th>Quantidade</th>"+
		"   <th>Preço</th>"+
		"   <th></th>"+
		"   <th></th>"+
		"   </tr>"+
		"</thead>"+
		"<tbody>"+
		"</tbody>"
		);
	for(var i in tbProduct){
		var prod = JSON.parse(tbProduct[i]);
		$("#tbProductsInfo tbody").append("<tr>");
		$("#tbProductsInfo tbody").append("<td>"+prod.id+"</td>");
		$("#tbProductsInfo tbody").append("<td>"+prod.itemName+"</td>");
		$("#tbProductsInfo tbody").append("<td>"+prod.quantity+"</td>");
		$("#tbProductsInfo tbody").append("<td>"+prod.price+"</td>");
		$("#tbProductsInfo tbody").append("<td><input type='button' class='btn btn-primary btn-sm btnEditar' alert-info' value='editar' disabled> </td>  ");
		$("#tbProductsInfo tbody").append("<td><input type='button' class='btn btn-primary btn-sm btnExcluir' alert-info' value='excluir' disabled> </td>");
		$("#tbProductsInfo tbody").append("</tr>");
	}
}

