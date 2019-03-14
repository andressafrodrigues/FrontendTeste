<h3>Informações do Produto</h3>
<div  id="messages" class="alert alert-info" role="alert">
	Preencha todos os itens *
</div>
<form id="registerProducts" name="registerProducts" action="javascript:action();">
	<div class="form-group">
		<div class="row">
			<div class="col-lg-12">
				<label for="itemName">Nome do Item: </label>
				<input type="hidden" id="idProduct"/>
				<input type="text" is="p-inputtext" class="form-control" maxlength="50" id="itemName" required>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row">	
			<div class="col-lg-4">
				<label for="qty">Quantidade: </label>
				<input type="number" class="form-control" id="qty"> 
			</div>
			<div class="col-lg-4">
				<label for="price">Preço: </label>
				<input type="text" is="p-inputtext" class="form-control" id="price" required>
			</div>
			<div class="col-lg-4">
				<div class="radio">
					<label> Produto perecível:</label> <Br>
					<input type="radio" name="yes_no" is="p-radiobutton" is="p-radiobutton" value="sim">Sim 
					<input type="radio" name="yes_no" is="p-radiobutton" is="p-radiobutton" value="nao"> Não
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-lg-3">
				<label for="dtProduction">Data de Fabricação: </label>
				<input type="date" is="p-inputtext" class="form-control" id="dtProduction">
			</div>
			<div class="col-lg-3">
				<label for="dtValidity">Data de Validade: </label>
				<input type="date" is="p-inputtext" class="form-control" id="dtValidity">
			</div>

			<div class="col-lg-3">
				<label for="unitMeasure">Unidade de Medida</label>
				<select class="form-control" id="unitMeasure">
					<option>Selecione...</option>
					<option value="litro">Litro</option>
					<option value="kg">Quilograma</option>
					<option value="uni">Unidade</option>
				</select>
			</div>
			<div class="col-lg-3">
				<Br>
				<input class=" btn btn-success" type="submit" value="Salvar" is="p-button" id="btnSubmit"> 
			</div>
		</div>
	</form>