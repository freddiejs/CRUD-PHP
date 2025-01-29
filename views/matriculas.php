<h1>Matrículas</h1>

<a href="?pagina=inserir_matricula" class="btn btn-success">Inserir matrícula</a>

<table id="matriculas" class="display">
  <thead>
    <tr>
      <th>Nome Aluno</th>
      <th>Nome Curso</th>
      <th>Deletar</th>
    </tr>
    <tr>
  </thead>

  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta_matriculas)) {
      echo '<tr><td>'.$linha['nome_aluno'].'</td>';
      echo '<td>'.$linha['nome_curso'].'</td>'; ?>
      <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>" class="btn btn-danger">Deletar</a></td></tr>
    <?php } ?>
      <td></td>
    </tr>
  </tbody>
</table>