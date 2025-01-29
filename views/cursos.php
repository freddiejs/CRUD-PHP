<h1>Cursos</h1>

<a href="?pagina=inserir_curso" class="btn btn-success">Inserir novo curso</a>

<table id="cursos" class="display">
  <thead>
    <tr>
      <th>Nome Curso</th>
      <th>Carga Horária</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
    <tr>
  </thead>

  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta_cursos)) {
      echo '<tr><td>'.$linha['nome_curso'].'</td>';
      echo '<td>'.$linha['carga_horaria'].'</td>'; ?>
      <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>" class="btn btn-secondary">Editar</a></td>
      <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>" class="btn btn-danger">Deletar</a></td></tr>
    <?php } ?>
      <td></td>
    </tr>
  </tbody>
</table>