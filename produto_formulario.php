<?php include 'cabecalho.php'; ?>

<div class="text-center m-5">
	<h1 class="text-center ">Fomulário de Produtos</h1>
	<img  src="https://img.icons8.com/office/60/000000/shopping-cart.png"/>
</div>
<div class="container" style="padding-bottom: 100px;">
	<p class="lead m-3 mb-4" style="font-weight: bold;">
		Faça o cadastro de seus produtos aqui.<br>
		Para vincular uma imagem a um produto você pode copiar o link da imagem
		no campo "Link da Imagem".<br>
	</p>
	<h5 class="m-3" style="font-weight: bold;">Informações do produto</h5>
	<form class=" m-3">
		<div class="row">
			<div class="col-4">
				<label class="form-label">Nome do produto</label>
				<input class="form-control border-3" name="nome" placeholder="Exemplo: Smartphone Galaxy" autocomplete="off">
			</div>
			<div class="col-2">
				<label class="form-label">Preço do produto</label>
				<input class="form-control border-3"type="number" name="nome" placeholder="Exemplo: 1500" autocomplete="off">
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<select class="form-select border-3" aria-label="Default select example">
					<option selected>Escolha a Categoria</option>
					<option value="1">Informática</option>
					<option value="2">Móveis</option>
					<option value="3">Smartphones</option>
				</select>
			</div>
			<div class="col-2">
				<input class="form-control border-3" list="datalistOptions" id="exampleDataList" placeholder="Fornecedor...">
				<datalist id="datalistOptions">
				  <option value="Casas Bahia">
				  <option value="Magazine Luiza">
				  <option value="Americanas">
				  <option value="Amazon">
				  <option value="Ponto Frio">
				</datalist>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<label for="" class="form-label">Descrição do Produto</label>
				<textarea class="form-control border-3" id="Textarea1" rows="4"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<input class="form-control border-3" type="text" name="url" placeholder="Insira aqui o link da imagem">
			</div>
		</div>
		<div class="form-group input-button" style="padding-top: 10px;">
			<button type="submit" class="btn btn-success btn-sm border=3" >Cadastrar</button>

		</div>
	</form>
</div>



<?php include 'rodape.php'; ?>