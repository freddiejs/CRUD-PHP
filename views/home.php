<h1>Bem-vindos à RatWeb</h1>

<form method="POST" action="login.php">
    <label class="badge text-bg-secondary">Usuário:</label>
    <input type="text" name="usuario" placeholder="Nome de usuário" class="form-control">

    <label class="badge text-bg-secondary">Senha:</label>
    <input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
    <input type="submit" value="Entrar" class="btn btn-success">
</form>

<?php if (isset($_GET['erro'])) { ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos.
    </div>
<?php } ?>
