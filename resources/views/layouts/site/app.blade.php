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

</head>

<body>

    @yield("content")

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
  </body>
  </html>