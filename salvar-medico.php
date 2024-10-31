<?php 
include 'E:\Xampp\htdocs\programaçaoweb\config.php';//Diretório do arquivo config
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_POST['nome_medico'];
		$crm = $_POST['crm_medico'];
		$especialidade = $_POST['especialidade_medico'];
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

		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}

		break;
	case 'editar':
		$nome = $_POST['nome_medico'];
		$crm = $_POST['crm_medico'];
		$especialidade = $_POST['especialidade_medico'];
		$sql = "UPDATE médico SET
					nome_medico='{$nome}', 
					crm_medico='{$crm}', 
					especialidade_medico='{$especialidade}'
				WHERE
					id_medico=".$_POST['id_medico'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM médico WHERE id_medico=".$_REQUEST['id_medico'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-medico';</script>";
		}
		break;

	default:
		// código padrão
		break;
}
?>
