<!-- excluirAluno.php -->
<?php require_once "ClassAluno.php"; ?>
<?php require_once "ClassAlunoDAO.php"; ?>
<?php 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $novoAluno = new classAluno();
    $novoAluno->setId($id);

    $ClassAlunoDAO = new ClassAlunoDAO();
    $ClassAlunoDAO->excluirAluno($novoAluno);

    $array = $ClassProfessorDAO->excluirAluno($novoAluno);

    if ($array==TRUE) {
        header('Location:listarAluno.php');
    } else {
        echo "Erro";
    }

?>