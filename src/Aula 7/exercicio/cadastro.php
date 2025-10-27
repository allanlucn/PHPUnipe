<h1>Cadastrar novo Usuário</h1>
<form action="salvarUsuario.php" method="POST">
  <label for="nome">Nome:</label><br />
  <input type="text" id="nome" name="nome" required /><br /><br />

  <label for="email">Email:</label><br />
  <input type="email" id="email" name="email" required /><br /><br />

  <label for="senha">Senha:</label><br />
  <input type="password" id="senha" name="senha" required /><br /><br />

  <button type="submit">Cadastrar</button>
</form>
