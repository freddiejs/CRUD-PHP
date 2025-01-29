<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];

$query = "INSERT INTO alunos(nome_aluno, data_nascimento) VALUES('$nome_aluno', '$data_nascimento')"; //Campos do tipo varchar usam apostrofes entre a variavel

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos'); //Redireciona de volta para página cursos