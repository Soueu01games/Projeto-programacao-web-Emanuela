<?php 
include 'E:/Xampp/htdocs/programaçaoweb/config.php';//Essa linha é o arquivo de config, susbtitua de 
//acordo com a localização do arquivo na sua máquina
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_REQUEST['nome_medico'];
		$crm = $_REQUEST['crm_medico'];
		$especialidade = $_REQUEST['especialidade_medico'];
		$sql = "INSERT INTO médico (
			nome_medico, 
			crm_medico, 
			especialidade_medico
		) VALUES (
			'{$nome}',
			'{$crm}',
			'{$especialidade}'
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
