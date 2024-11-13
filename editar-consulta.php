<h1>Editar Consulta</h1>
<?php
include 'E:\Xampp\htdocs\programacaoweb\config.php';# - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
?>
<form action="?page=salvar-consulta" method="POST">
	<input type="hidden" name="acao" value="editar">
	<div class="mb-3">
		<!--Paciente-->
		<label>Nome do Paciente</label>
		<select name="paciente_id_paciente" class="form-control">
			<option> -= Escolha um Paciente =- </option>
			<?php
				$sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";
				$res_1 = $conn->query($sql_1);
				$qtd_1 = $res_1->num_rows;
				if($qtd_1 > 0){
					while($row_1 = $res_1->fetch_object()){
						if($row_1->id_paciente == $row->paciente_id_paciente){
							print "<option value='".$row_1->id_paciente."'>".$row_1->nome_paciente."</option>";
						}
					}
				}
				else{print "<option>Não há pacientes</option>";}
			?>
		</select>
	</div>

		<!--Médico-->
	<div class="mb-3">
		<label>Nome do Médico</label>
		<select name="medico_id_medico" class="form-control">
			<option> -= Escolha um Médico =- </option>
			<?php
				$sql_2 = "SELECT id_medico, nome_medico FROM medico";
				$res_2 = $conn->query($sql_2);
				$qtd_2 = $res_2->num_rows;
				if($qtd_2 > 0){
					while($row_2 = $res_2->fetch_object()){
						if($row_1->id_medico == $row->medico_id_medico){
							print "<option value='".$row_1->id_medico."'>".$row_1->nome_medico."</option>";
						}
					}
				}
				else{print "<option>Não há pacientes</option>";}
			?>
		</select>
	</div>


		<!--Consulta-->
	<div class="mb-3">
		<label>Data da Consulta</label>
		<input type="date" name="data_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Hora da Consulta</label>
		<input type="time" name="hora_consulta" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<textarea name="descricao_consulta" class="form-control"></textarea>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>