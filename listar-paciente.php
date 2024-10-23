<h1>Listar Paciente</h1>
<?php
include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';
$sql = "SELECT * FROM `paciente`";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
	print"<p>Encontrou <b>$qtd</b> resultado(s).</p>";
	print"<table class='table table-bordered table-striped table-hover'>";
	print"<tr>";
	print"<th>#</th>";
	print"<th>Nome</th>";
	print"<th>CPF</th>";
	print"<th>Data</th>";
	print"<th>Sexo</th>";
	print"<th>Telefone</th>";
	print"<th>E-mail</th>";
	print"<th>Endereço</th>";
	print"</tr>";
	while($row=$res->fetch_object()){
		print"<tr>";
		print "<td>".$row->id_paciente."</td>";
		print "<td>".$row->nome_paciente."</td>";
		print "<td>".$row->cpf_paciente."</td>";
		print "<td>".$row->data_nasc_paciente."</td>";
		print "<td>".$row->sexo_paciente."</td>";
		print "<td>".$row->fone_paciente."</td>";
		print "<td>".$row->email_paciente."</td>";
		print "<td>".$row->endereco_paciente."</td>";
		print"</tr>";
	}
	print"</table>";
	}
else{
	print"<p>Não foram encontrados <b>$qtd</b> resultado(s).</p>";
	}	

?>
