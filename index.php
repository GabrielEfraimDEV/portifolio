<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redes Sociais</title>
  <!-- Link para o Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Link para o Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
  <!-- Link para particles-js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js" integrity="sha512-jq8sZI0I9Og0nnZ+CfJRnUzNSDKxr/5Bvha5bn7AHzTnRyxUfpUArMzfH++mwE/hb2efOo1gCAgI+1RMzf8F7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
    body {
      background-color: #333;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding-top: 250px; /* Espaço para a navbar fixa */
    }
    #navv {
      list-style: none;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 2rem;
      height: 100px;
    }
    .nav-item a {
      color: blueviolet;
      font-size: 3rem;
      text-decoration: none;
      transition: transform 0.3s, color 0.3s;
    }
    .nav-item a:hover {
      color: #ccc;
      transform: scale(1.2); /* Expande o ícone */
    }
    .nav-item a i {
      display: block;
    }
  </style>
</head>
<body>
<div id="particles-js" style="height: 300px;"></div>



  <ul class="nav justify-content-center h2 fixed-top" id="navv">
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://www.linkedin.com/in/gabriel-efraim-70607922a/" title="Perfil no LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
    </li>
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://api.whatsapp.com/send?phone=5521987618501" title="Envie uma mensagem por Whatsapp"><i class="fa-brands fa-square-whatsapp"></i></a>
    </li>
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://github.com/paulogmello" title="Perfil no GitHub"><i class="fa-brands fa-github"></i></a>
    </li> 
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://www.flickr.com/photos/paulogmello/" title="Flickr"><i class="fa-brands fa-flickr"></i></a>
    </li> 
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://sketchfab.com/paulogmello" title="Sketchfab"><i class="fa-solid fa-cube"></i></a>
    </li> 
    <li class="nav-item">
      <a target="_blank" class="nav-link" href="https://instagram.com/paulogmello" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" href="mailto:efraimgabriel042@gmail.com" title="Enviar Email"><i class="fa-solid fa-envelope"></i></a>
    </li> 
  </ul>

  <!-- Scripts necessários para o Bootstrap -->
   
   
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js" integrity="sha512-jq8sZI0I9Og0nnZ+CfJRnUzNSDKxr/5Bvha5bn7AHzTnRyxUfpUArMzfH++mwE/hb2efOo1gCAgI+1RMzf8F7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('callback - particles.js config loaded');
});
</script>
</body>
</html>
