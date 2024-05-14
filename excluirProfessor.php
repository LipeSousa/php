<!-- excluirProfessor.php -->
<?php require_once "ClassProfessor.php"; ?>
<?php require_once "ClassProfessorDAO.php"; ?>
<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $novoProfessor = new classProfessor();
    $novoProfessor->setId($id);
   
    $ClassProfessorDAO = new ClassProfessorDAO(); 
    $ClassProfessorDAO->excluirProfessor($novoProfessor);

    $array = $ClassProfessorDAO->excluirProfessor($novoProfessor);

    if ($array==TRUE) {
        header('Location:listarProfessor.php');
    } else {
        echo "Erro";
    }

?>