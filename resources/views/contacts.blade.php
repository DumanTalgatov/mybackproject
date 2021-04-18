
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Контакты</title>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">  

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
   
</head>
<body id="contacts">
   

   <!--Modal after submitting form-->
   <div class="modal">
      <div class="modal_info">
         <p>Спасибо,мы свяжемся с вами в ближайшее время!</p>
      </div>
   </div>

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#contacts"><i class="fas fa-chevron-up"></i></a>
   </div>

    <!--Header-->
    <header class="header" id="header">

      <div class="container">

         <div class="h-menu">
            <span></span>
            <span></span>
            <span></span>
         </div>

         <div class="header__logo"><i class="fas fa-utensils"></i></div>

         <nav class="header__nav">
            <ul class="header__list">
               <li class="header__item">
                  <a href="{{route('main')}}" class="header__link current">Главная</a>
               </li>
               
               <li class="header__item">
                  <a href="{{route('about')}}" class="header__link">О Компании</a>
               </li>

               <li class="header__item">
                  <a href="#showcase" class="header__link">Заказать</a>
               </li>

               <li class="header__item">
                  <a href="{{route('contacts')}}" class="header__link">Контакты</a>
               </li>
            </ul>
         </nav>

         <div class="header__log">
            <input type="text" placeholder="Поиск">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
            <a href="{{route('auth')}}" class="log">Войти</a>
            <a href="{{route('auth')}}" class="log">Регистрация</a>
         </div>
      </div>
   </header>

   <!-- Showcase -->
   <section class="contacts">
      <div class="container">
         <h1 class="contacts__header">Контакты</h1>
         <div class="divider"></div>
      </div>
   </section>


   <!-- Geo location -->
   <section class="location">
      <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3361.928246905637!2d80.23710152773155!3d50.3700579265542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42f265cad31f8db3%3A0x4c4c66be3dc795d6!2sForteBank!5e0!3m2!1sen!2skz!4v1618689708497!5m2!1sen!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
   </section>

    
   <!-- Contacts info -->
   <section class="contact-info">
      <div class="container">
         <div class="contact__wrapper">
            <h2>На Связи</h2>
            
            <form class="contact-form" action="{{route('contacts')}}" method="POST" enctype='multipart/form-data'>
            @csrf
               <div class="contact_block">
                  <input name="review" type="text" placeholder="Сообщение..." class = "message-input" style="width:800px; height:300px">
               </div>

               <div class="contact_block">
                  <input name = "name" type="text" placeholder="Ваше имя" id="mb-10">
                  <input name = "email" type="text" placeholder="Ваша почта">
               </div>
               
               <div class="contact_block">
                  <input name = "topic" type="text" placeholder="Enter topic">
               </div>
               <input type="file" name="image" class="form-controll" >

               <button class="btn send-btn">Send</button>
            </form>
         </div>

         <div class="contact__wrapper_2">
            <div class="home">
               <i class="fas fa-home"></i>
               <h4 class="descr">Semey, Kazakhstan</h4>
               <span class="index">Airport's Street</span>
            </div>

            <div class="phone">
               <i class="fas fa-mobile-alt"></i>
               <h4 class="descr">+7 (777) 777 77-77</h4>
               <span class="index">С  Пн - Пт 10:00</span>
            </div>

            <div class="email">
               <i class="far fa-envelope"></i>
               <h4 class="descr">support@gmail.com</h4>
               <span class="index">Мы ответим вам в ближайшее время!</span>
            </div>
         </div>
      </div>
   </section>

   <!-- Footer -->
   <footer class="footer">
      <div class="container">

         <div class="footer__logo">
            <h2>Food <span>Store</span> </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime beatae sapiente ex deserunt ipsum nihil.</p>

            <div>Copyright &copy; 2021</div>
         </div>

         <div class="footer__links">
            <h3>Меню</h3>
            <div class="divider"></div>
            <ul>
               <li><a href="#">О компании</a></li>
               <li><a href="#">Заказ & Скидки</a></li>
               <li><a href="#">Получить купон</a></li>
               <li><a href="#">Контакты</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>Новые продукты</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">Фаст-фуд</a></li>
               <li><a href="#">Супы</a></li>
               <li><a href="#">Десерты</a></li>
               <li><a href="#">Новинки</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>Помощь</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">Наша почта</a></li>
               <li><a href="#">Заказать звонок</a></li>
               <li><a href="{{route('auth')}}">Войти / Создать аккаунт</a></li>
               <li><a href="#">Контакты</a></li>
            </ul>
         </div>

      </div>
   </footer>

   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      $(function() {
         $(document).scroll(function() {
         let $nav = $(".header");
         $nav.toggleClass('header-scrolled', $(this).scrollTop() > $nav.height());
         });
      });
   </script>
   
   <script src="js/form_modal.js"></script>
   <script src="js/hMenu.js"></script>
</body>
</html>