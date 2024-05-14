<!-- listarProfessor.php -->
<head>
    <title>Listar Professor</title> 
    <link rel="stylesheet" href="css/style.scss">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php require_once "ClassProfessor.php"; ?> <!-- Getts e Setts -->
<?php require_once "ClassProfessorDAO.php";?>
<?php 

$ClassProfessorDAO = new ClassProfessorDAO(); 
$array=$ClassProfessorDAO->listarProfessor();
echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Email  </th> ";
    echo "      <th>Salário   </th>";
	echo "      <th>Nível   </th> ";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </tr>";
	echo "</center>";
    foreach ($array as $array) {
        echo "<tr>";
        echo "<td>". $array['id'] . "</td>";
        echo "<td>". $array['nome'] . "</td>";
        echo "<td>". $array['email'] . "</td>";
        echo "<td>". $array['salario'] . "</td>";
        echo "<td>". $array['nivel'] . "</td>";
        echo "<td>";
    
?>
    <center>
        <form action="excluirProfessor.php" method="GET" style="position: relative; top: 8px;">
            <input type="hidden" name="id" value=<?php echo $array['id']; ?>>
            <button><i class='bx bx-message-alt-x'></i></button>
        </form>
    </center>
<?php 
echo "</td>"; 
echo "<td>";
?>
 <center>
        <form action="alterarProfessor.php" method="GET" style="position: relative; top: 8px;">
            <input type="hidden" name="id" value=<?php echo $array['id']; ?>>
            <input type="hidden" name="id" value=<?php echo $array['nome']; ?>>
            <input type="hidden" name="id" value=<?php echo $array['email']; ?>>
            <input type="hidden" name="id" value=<?php echo $array['salario']; ?>>
            <input type="hidden" name="id" value=<?php echo $array['nivel']; ?>>
            <button class="btn"><i class='bx bx-recycle'></i></button>
        </form>
    </center>
<?php
echo "</td>";
echo "</tr>";
}
?>