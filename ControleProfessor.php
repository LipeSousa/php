<!-- ControleProfessor -->
<?php require_once "ClassProfessor.php"; ?> <!-- Getts e Setts -->
<?php require_once "ClassProfessorDAO.php";?>
<?php 

$nome =     $_POST['nome'];
$email =    $_POST['email'];
$salario =  $_POST['salario'];
$nivel =    $_POST['nivel'];

$novoProfessor = new classProfessor();
$novoProfessor->setNome($nome);
$novoProfessor->setEmail($email);
$novoProfessor->setSalario($salario);
$novoProfessor->setNivel($nivel);

$ClassProfessorDAO = new ClassProfessorDAO(); 
$ClassProfessorDAO->cadastrarProfessor($novoProfessor);

?>