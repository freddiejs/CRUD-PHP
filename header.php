<!DOCTYPE html>
<html>
  <head>
    <title>Cursos PHP e MySQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="Logo"></a>
          </div>
          <div class="col-sm-9">
            <div id="menu">
              <a href="?pagina=home">Home</a>
              <a href="?pagina=cursos">Cursos</a>
              <a href="?pagina=alunos">Alunos</a>
              <a href="?pagina=matriculas">Matrículas</a>
              <?php if (isset($_SESSION['login'])) { ?>
                <a href="logout.php"><?php echo $_SESSION['usuario']; ?> (sair)</a>
              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="conteudo" class="container">