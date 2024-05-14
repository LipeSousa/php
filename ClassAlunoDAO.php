<!-- ControleAlunoDAO -->
<?php require_once "Conexao.php"; ?>
<?php
Class ClassAlunoDAO {
    public function cadastrarAluno($novoAluno) {
        try {
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO alunos (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
         $stmt->bindValue(1,$novoAluno->getNome());
         $stmt->bindValue(2,$novoAluno->getCpf());
         $stmt->bindValue(3,$novoAluno->getEmail());
         $stmt->bindValue(4,$novoAluno->getTelefone());

         $stmt->execute();
         echo "<center><h1>Cadastro Realizado com sucesso!</h1><center><br>";
         echo "<a href='listarAluno.php'>Listar</a>";
    } catch(PDOException $erro) {
        echo $erro->getMessage();
    }
    }//fechamento do método cadastrarAluno

    public function listarAluno() {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM alunos";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }//fechamento do método listarAluno

    public function excluirAluno($novoAluno) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM alunos WHERE id = :id";
            $stmt->bindValue(':id',$novoAluno->getId());
            $stmt->execute();
            return true;
        } catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }//fechamento do método excluirAluno

}//fim da classe
?>