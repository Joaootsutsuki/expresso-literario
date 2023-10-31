<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Este site é uma loja de livros online chamada Expresso Literário">
  <meta name="keywords" content="loja, livros, expresso literário">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="shortcut icon" href="/assets/images/logotipo.png" type="image/x-icon">

  <title>Expresso Literário | <?php echo $title; ?></title>
</head>

<body>
  <?php 

    // Se tiver noNavbar no data ele não chama o require.
    if(!in_array('noNavbar', $data['data'])){
        require VIEWS.'navbar.php';
    };

    // Se tiver yesHeader no data ele chama o require.
    if(in_array('yesHeader', $data['data'])){
        require VIEWS.'header.php';
    };

    // Se tiver noFooter no data ele não chama o require.
    if(!in_array('noFooter', $data['data'])){
        require VIEWS.'footer.php';
    };

    require VIEWS.$view; 
    ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="/assets/javascript/index.js"></script>
</body>

</html>