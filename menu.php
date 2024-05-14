<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.scss">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .menu a.active {
            background-color: #4CAF50;
            color: white;
        }
        .menu a#sair {
            float: left;
            color: red;
        }
    </style>
</head>
<body>

<div class="menu">
    <a href="#home" class="active">Home</a>
    <a href="formProfessor.php">Professor</a>
    <a href="formAluno.php">Alunos</a>
    <a href="#disciplinas">Disciplinas</a>
    <a href="#sair" id="sair">Sair</a>
</div>

<div style="padding-left:16px">
    <h2>Conteúdo</h2>
    <p>Aqui você pode adicionar o conteúdo da página.</p>
</div>

</body>
</html>
