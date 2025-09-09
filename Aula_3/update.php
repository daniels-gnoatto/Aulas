Pular para o conteúdo principal
Google Sala de Aula
Sala de Aula
DS 2023/1 M1 - Téc. 23 M1 (Norte - 80918)
3ª Série.
Início
Agenda
Minhas inscrições
Pendentes
D
DS 2023/1 M1 - Téc. 23 M1 (Norte - 80918)
3ª Série.
Turmas arquivadas
Configurações

摘要
翻译
扩写
重写
解释说明
语法
问答
解释代码
Explicar
Atividade 4 - Introdução a CRUD em PHP
Ícaro Botelho
•
12:25 (editado: 12:26)
100 pontos
Data de entrega: 13:00
Bom dia, pessoal.

Rodar o código e montar o seu Code Review (CR) em um arquivo DOC's.

create.php
PHP

db.php
PHP

delete.php
PHP

read.php
PHP

update.php
PHP

database_setup.sql
SQL
Comentários da turma
Seus trabalhos
Atribuído

Daniel Erick Gnoatto - Code Review
Documentos Google
Não é possível entregar atividades após a data de entrega
Comentários particulares
Detalhes da atividade
<?php

include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET name ='$name',email ='$email' WHERE id=$id";

    if ($conn->query($sql) === true) {
        echo "Registro atualizado com sucesso.
        <a href='read.php'>Ver registros.</a>
        ";
    } else {
        echo "Erro " . $sql . '<br>' . $conn->error;
    }
    $conn->close();
    exit(); 
}

$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();


?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>

    <form method="POST" action="update.php?id=<?php echo $row['id'];?>">

        <label for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>" required>

        <input type="submit" value="Atualizar">

    </form>

    <a href="read.php">Ver registros.</a>

</body>

</html>
update.php
Exibindo update.php…