<?php 
include 'E:/Xampp/htdocs/programaçaoweb/config.php';
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_REQUEST['nome_paciente'];
		$cpf = $_REQUEST['cpf_paciente'];
		$data_nascimento = $_REQUEST['data_nasc_paciente'];
		$sexo = $_REQUEST['sexo_paciente'];
		$fone = $_REQUEST['fone_paciente'];
		$email = $_REQUEST['email_paciente'];
		$endereco = $_REQUEST['endereco_paciente'];
		
		$sql = "INSERT INTO Paciente (
			nome_paciente, 
			cpf_paciente, 
			data_nasc_paciente, 
			sexo_paciente, 
			fone_paciente, 
			email_paciente, 
			endereco_paciente
		) VALUES (
			'{$nome}',
			'{$cpf}',
			'{$data_nascimento}',
			'{$sexo}',
			'{$fone}',
			'{$email}',
			'{$endereco}'
		)";
		$res = $conn->query($sql);	
		break;
	case 'editar':
		// código para editar
		break;
	case 'salvar':
		// código para salvar
		break;
	default:
		// código padrão
		break;
}
?>
