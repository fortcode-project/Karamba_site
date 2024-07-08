<!DOCTYPE html>
<html lang="pt-ao">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords" class="">

  <link rel="shortcut icon" type="image/png" href="{{asset("site/assets/img/logo.ico")}}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./chat_xandria/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- Vendor CSS Files -->
  <link href="{{asset("site/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("site/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("site/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("site/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("site/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("site/assets/css/main.css")}}" rel="stylesheet">
  @livewireStyles
</head>

<body>

    @yield("content")

    {{-- chat --}}
    <div class="chatbot-container" id="chatbot-container">
      <div class="chatbot-header">
          <div class="" style="display: flex;gap:5px;align-items: center;">
              <img width="30" src="../chat_xandria/icone.png" alt="">
              <h3>Xándria</h3>
          </div>
          <button id="close-chatbot">X</button>
      </div>
      <div class="chatbot-body" id="chatbot-body">
          <div class="message bot-message">Olá! Como posso ajudar você hoje?</div>
      </div>
      <div class="chatbot-footer">
          <input type="text" id="user-input" placeholder="Digite sua mensagem...">
          <button id="send-message"><img width="20" src="../chat_xandria/send.png" alt=""></button>
      </div>
  </div>
  <button id="chatbot-button"><img width="40" src="./chat_xandria/icone.png" alt=""></button>





  <script src="./chat_xandria/script.js"></script>

    <script>
      window.embeddedChatbotConfig = {
      chatbotId: "eQkr0qi5DTgSZfzdFQLWi",
      domain: "www.chatbase.co"
      }
      </script>
      <script
      src="https://www.chatbase.co/embed.min.js"
      chatbotId="eQkr0qi5DTgSZfzdFQLWi"
      domain="www.chatbase.co"
      defer>
    </script>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <a href="{{route("loja.get.cart.total")}}" style="color: #fff;background: #F4C400;" class="cartcout d-flex align-items-center justify-content-center">      
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
      </svg>
    </a>
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="{{asset("site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("site/assets/vendor/aos/aos.js")}}"></script>
    <script src="{{asset("site/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
    <script src="{{asset("site/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
    <script src="{{asset("site/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
    <script src="{{asset("site/assets/vendor/php-email-form/validate.js")}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{asset("site/assets/js/main.js")}}"></script>
    @livewireScripts
  </body>
  </html>