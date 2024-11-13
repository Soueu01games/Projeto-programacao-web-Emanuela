<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" name="cpf_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Sexo</label>
		<input type="text" name="sexo_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<labelT>Telefone</label>
		<input type="text" name="fone_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" name="email_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco_paciente" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>
