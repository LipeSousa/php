<!-- ControleAluno -->
<?php require_once "ClassAluno.php"; ?> <!-- Getts e Setts -->
<?php require_once "ClassAlunoDAO.php";?>
<?php 

$nome =     $_POST['nome'];
$email =    $_POST['email'];
$cpf =  $_POST['cpf'];
$telefone =    $_POST['telefone'];

$novoAluno = new classAluno();
$novoAluno->setNome($nome);
$novoAluno->setEmail($email);
$novoAluno->setCpf($cpf);
$novoAluno->setTelefone($telefone);

$ClassAlunoDAO = new ClassAlunoDAO(); 
$ClassAlunoDAO->cadastrarAluno($novoAluno);

?>