<?php if (!isset($_GET['editar'])) { ?>
  <h1>Inserir novo aluno</h1>

  <form method="post" action="processa_aluno.php">
    <label class="form-label">Nome Aluno</label><br>
    <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome do aluno"><br>
    <label class="form-label">Data de nascimento</label><br>
    <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento"><br>
    <input type="submit" class="btn btn-success" value="Inserir Aluno">
  </form>

<?php } else { ?>

  <?php while ($linha = mysqli_fetch_array($consulta_alunos)) { ?>
    <?php if ($linha['id_aluno'] == $_GET['editar']) { ?>
      <h1>Editar aluno</h1>

      <form method="post" action="edita_aluno.php">
        <input type="hidden" class="form-control" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
        <label class="form-label">Nome Aluno</label><br>
        <input type="text" class="form-control" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>"><br>
        <label class="form-label">Carga horária</label><br>
        <input type="text" class="form-control" name="data_nascimento" placeholder="Insira a data de nascimento"  value="<?php echo $linha['data_nascimento']; ?>"><br>
        <input type="submit" class="btn btn-success" value="Editar aluno">
      </form>
    <?php } ?>    
  <?php } ?>
<?php } ?>

