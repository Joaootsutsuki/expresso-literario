<div class="sign-up-container">
  <form class="sign-up-box" action="/login" method="POST" autocomplete="off">
    <div class="login-box">

      <?php echo getFlash('message'); ?>

      <h1>Login</h1>
      <input type="text" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Password" value="123">
      <div class="options">
        <div class="login-checkbox">
          <input type="checkbox" name="checkbox" value="rememberme">
          <label for="rememberme">Lembrar-me</label>
        </div>
        <a>Esqueceu a senha?</a>
      </div>
      <input type="submit" value="Entrar">
      <span>É novo aqui? <a href="/user/create">Crie sua conta</a></span>
    </div>


  </form>
</div>