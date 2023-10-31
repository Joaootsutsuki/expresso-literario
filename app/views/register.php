<div class="sign-up-container">
  <form class="sign-up-box" action="/user/create" method="POST" autocomplete="off">
    <div class="register-box">

      <?php echo getFlash('message'); ?>

      <h1>Criar conta</h1>
      <input type="text" name="name" placeholder="Nome completo">
      <input type="text" name="cpf" placeholder="CPF">
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password" value="123">
      <input type="submit" value="Criar conta">
      <span>Você já tem uma conta? <a href="/login">Fazer Login</a></span>
    </div>

  </form>
</div>