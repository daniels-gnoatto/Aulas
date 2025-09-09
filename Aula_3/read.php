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

$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['name']} </td>
                <td> {$row['email']} </td>
                <td> {$row['created_at']} </td>
                <td> 
                    <a href='update.php?id={$row['id']}'>Editar<a>
                    <a href='delete.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$conn -> close();

echo "<a href='create.php'>Inserir novo Registro</a>";
read.php
Exibindo read.php…