<?php 
include 'E:\Xampp\htdocs\programacaoweb\config.php'; # - pc casa
#include 'C:\xampp\htdocs\Emanuela\Projeto\config.php';# - pc faculdade
switch (@$_REQUEST['acao']) {
	case 'cadastrar':
		$nome = $_POST['nome_paciente'];
		$cpf = $_POST['cpf_paciente'];
		$data_nascimento = $_POST['data_nasc_paciente'];
		$sexo = $_POST['sexo_paciente'];
		$fone = $_POST['fone_paciente'];
		$email = $_POST['email_paciente'];
		$endereco = $_POST['endereco_paciente'];
		
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

		if($res==true){
		print"<script>alert('Cadastrou com sucesso');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}
		
		break;
	case 'editar':
		$nome = $_POST['nome_paciente'];
		$cpf = $_POST['cpf_paciente'];
		$data_nascimento = $_POST['data_nasc_paciente'];
		$sexo = $_POST['sexo_paciente'];
		$fone = $_POST['fone_paciente'];
		$email = $_POST['email_paciente'];
		$endereco = $_POST['endereco_paciente'];
		
		$sql = "UPDATE paciente SET
			nome_paciente='{$nome}', 
			cpf_paciente='{$cpf}', 
			data_nasc_paciente='{$data_nascimento}', 
			sexo_paciente='{$sexo}', 
			fone_paciente='{$fone}', 
			email_paciente='{$email}', 
			endereco_paciente='{$endereco}'
		WHERE id_paciente=".$_POST['id_paciente'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Editou com sucesso');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}
		break;
	case 'excluir':
		$sql = "DELETE FROM paciente WHERE id_paciente=".$_REQUEST['id_paciente'];

		$res = $conn->query($sql);	
		if($res==true){
		print"<script>alert('Excluiu com sucesso');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}	
		else{
		print"<script>alert('Deu errado');</script>";
		print"<script>location.href='?page=listar-paciente';</script>";
		}

		break;
	default:
		// código padrão
		break;
}
?>
