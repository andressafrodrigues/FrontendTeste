	<div class="container">
		<div class="row">
			<div class="col-lg-12 ">
				<h3>Informações do Produto</h3>
				<form id="registerProducts" name="registerProducts" action="javascript:action();">
					<div class="form-group">
						<label for="itemName">Nome do Item: </label>
						<input type="hidden" id="idProduct"/>
						<input type="text" class="form-control" id="itemName">

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
							<input type="text" class="form-control" id="price"> 
						</div>
						<div class="col-lg-3">
							<div class="radio">
								<label> Produto perecível:</label> <Br>
								<input type="radio" name="yes_no" value="sim">Sim 
								<input type="radio" name="yes_no" value="nao"> Não
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-lg-3">
							<label for="dtProduction">Data de Fabricação: </label>
							<input type="date" class="form-control" id="dtProduction">
						</div>
						<div class="col-lg-3">
							<label for="dtValidity">Data de Validade: </label>
							<input type="date" class="form-control" id="dtValidity">
						</div>
					</div><br>
					<button class="btn btn-success" id="btnSubmit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
