	<div class="container">
		<div class="col-lg-12 col-xs-12 col-md-12">
			<h3>Informações do Produto</h3>
			<div  id="messages" class="alert alert-info" role="alert">
				Preencha todos os itens *
			</div>
			<form id="registerProducts" name="registerProducts" action="javascript:action();">
				<div class="form-group">
					<label for="itemName">Nome do Item: </label>
					<input type="hidden" id="idProduct"/>
					<input type="text" is="p-inputtext" class="form-control" maxlength="50" id="itemName">
				</div>
				<div class="form-group">
					<div class="form-group">
						<label for="unitMeasure">Unidade de Medida</label>
						<select class="form-control" id="unitMeasure">
							<option value="litro">Litro</option>
							<option value="kg">Quilograma</option>
							<option value="uni">Unidade</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<label for="qty">Quantidade: </label>
						<input type="number" class="form-control" id="qty"> 
					</div>
					<div class="col-lg-3">
						<label for="price">Preço: </label>
						<input type="text" is="p-inputtext" class="form-control" id="price"> 

					</div>
					<div class="col-lg-3">
						<div class="radio">
							<label> Produto perecível:</label> <Br>
							<input type="radio" name="yes_no" is="p-radiobutton" is="p-radiobutton" value="sim">Sim 
							<input type="radio" name="yes_no" is="p-radiobutton" is="p-radiobutton" value="nao"> Não
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-3">
						<label for="dtValidity">Data de Validade: </label>
						<input type="date" is="p-inputtext" class="form-control" id="dtValidity">
					</div>

					<div class="col-lg-3">
						<label for="dtProduction">Data de Fabricação: </label>
						<input type="date" is="p-inputtext" class="form-control" id="dtProduction">
					</div>
				</div><br>
				<button class="btn btn-success" type="submit" is="p-button" id="btnSubmit">Submit</button>
			</form>
		</div>
	</div>
</div>