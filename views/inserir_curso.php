<?php if (!isset($_GET['editar'])) { ?>
  <h1>Inserir novo curso</h1>

  <form method="post" action="processa_curso.php">
    <label class="form-label">Nome Curso</label><br>
    <input type="text" class="form-control" name="nome_curso" placeholder="Insira o nome do curso"><br>
    <label class="form-label">Carga horária</label><br>
    <input type="text" class="form-control" name="carga_horaria" placeholder="Insira a carga horária"><br>
    <input type="submit" class="btn btn-success" value="Inserir curso">
  </form>

<?php } else { ?>

  <?php while ($linha = mysqli_fetch_array($consulta_cursos)) { ?>
    <?php if ($linha['id_curso'] == $_GET['editar']) { ?>
      <h1>Editar curso</h1>

      <form method="post" action="edita_curso.php">
        <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
        <label class="form-label">Nome Curso</label><br>
        <input type="text" class="form-control" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>"><br>
        <label class="form-label">Carga horária</label><br>
        <input type="text" class="form-control" name="carga_horaria" placeholder="Insira a carga horária"  value="<?php echo $linha['carga_horaria']; ?>"><br>
        <input type="submit" class="btn btn-success" value="Editar curso">
      </form>
    <?php } ?>    
  <?php } ?>
<?php } ?>

