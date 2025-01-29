<h1>Inserir matrícula</h1>

<form method="post" action="processa_matricula.php">
  <div class="row">
    <div class="col-sm-4">
      <!-- <p>Selecione o aluno</p> -->
      <select class="form-select" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
          echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
        }
        ?>
      </select>
    </div>

    <div class="col-sm-4">
      <!-- <p>Selecione o curso</p> -->
      <select class="form-select" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php
        while ($linha = mysqli_fetch_array($consulta_cursos)) {
          echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
        }
        ?>
      </select>
    </div>

    <div class="col-sm-4">
      <input type="submit" class="btn btn-success" value="Matricular aluno no curso">
    </div>
  </div>
  
</form>

