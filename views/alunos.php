<h1>Alunos</h1>

<a href="?pagina=inserir_aluno" class="btn btn-success">Inserir novo aluno</a>

<table id="alunos" class="display">
  <thead>
    <tr>
      <th>Nome Aluno</th>
      <th>Data de Nascimento</th>
      <th>Editar</th>
      <th>Deletar</th>
    </tr>
    <tr>
  </thead>

  <tbody>
    <?php
    while ($linha = mysqli_fetch_array($consulta_alunos)) {
      echo '<tr><td>'.$linha['nome_aluno'].'</td>';
      echo '<td>'.$linha['data_nascimento'].'</td>'; ?>
      <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>" class="btn btn-secondary">Editar</a></td>
      <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>" class="btn btn-danger">Deletar</a></td></tr>
    <?php } ?>
      <td></td>
    </tr>
  </tbody>
</table>