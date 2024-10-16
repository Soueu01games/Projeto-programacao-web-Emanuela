<h1>Cadastrar Consulta</h1>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Dia</label>
		<input type="date" name="dia_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora</label>
		<input type="text" name="hora_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<input type="text" name="descricao_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-sucess">Salvar</button>
	</div>
</form>
