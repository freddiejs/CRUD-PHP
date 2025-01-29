<?php

include 'db.php';
$id_matricula = $_GET['id_aluno_curso'];

$query = "DELETE FROM alunos_cursos WHERE id_aluno_curso = $id_matricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');
