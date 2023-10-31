<nav class="no-select">
  <a href="/" class="logotipo"><img src="/assets/images/logotipo.png" alt="Logotipo"></a>
  <div class="menuButtons">
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <li>
        <a href="/shop">Shop</a>
      </li>
      <li>
        <a href="/about">About</a>
      </li>
    </ul>

    <div class="searchBox">
      <input type="text" id="searchBox">
      <img src="assets/images/lupa.svg" alt="lupa" class="lupaIcon">
      <label for="searchBox">Buscar</label>
    </div>

    <a href="/user/cart" class="carrinho"><img src="/assets/images/carrinho.svg" alt="Carrinho de Compras"></a>

    <?php if(logged()) : ?>
    <?php echo '<img src="/assets/images/user.svg" alt="Ícone do Usuário" class="userIcon">'; ?>

    <?php else: ?>
    <?php echo '<a class="loginButton" href="/login">Entar</a>'; ?>

    <?php endif; ?>

  </div>

  <div class="drop-down">
    <a href="/user/profile">Minha Conta</a>
    <a href="/user/cart">Meu Carrinho</a>
    <a href="/logout">Sair</a>
  </div>

</nav>
<hr class="menu-divider">