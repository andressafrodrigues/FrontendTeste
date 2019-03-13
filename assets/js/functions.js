var actions;
var tbProduct;

$(function(){
	actions = 1; 
	console.log('');
	var idSelected = -1;
	tbProduct = localStorage.getItem("tbProduct");
	tbProduct = JSON.parse(tbProduct); 
	if(tbProduct == null) 
		tbProduct = [];

});

function addProduct() {

	var e = document.getElementById("unitMeasure");
	var unitSelected = e.options[e.selectedIndex].value;
	var rdPerishable = document.querySelector('input[name = "yes_no"]:checked').value;

	console.log(rdPerishable)
	
	var product = JSON.stringify({
		id            : $("#idProduct").val(),
		itemName      : $("#itemName").val(),
		quantity      : $("#qty").val(),
		price         : $("#price").val(),
		dtVal         : $("#dtValidity").val(),
		dtProd        : $("#dtProd").val(),
		unitMeasure   : unitSelected, 
		prodPerishable: rdPerishable, 
	});

	tbProduct.push(product);
	console.log(tbProduct);
	localStorage.setItem("tbProduct", JSON.stringify(tbProduct));
	return true;
}


function action() {
	if(actions == 1)
		return addProduct();
};
