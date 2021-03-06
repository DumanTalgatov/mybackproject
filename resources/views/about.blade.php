
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О компании</title>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
   
</head>
<body id="about">
   

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#about"><i class="fas fa-chevron-up"></i></a>
   </div>

    <!--Header-->
    <header class="header">

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
         <h1 class="contacts__header" style="text-transform: unset;">О компании</h1>
         <div class="divider"></div>
      </div>
   </section>

   <!-- Company goals & info -->
   <section class="about">
      <div class="container">

         <div class="about__info">
            <h1>Какие у нас сильные стороны?</h1>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vel laboriosam, dolorem, neque voluptatum incidunt ipsa quo aspernatur eaque voluptates, eum facere debitis laborum sed.</p>

            <div class="icon-descr">
               <i class="fas fa-fire-alt"></i>
               <span class="strong">У нас самые вкусные блюда</span>
            </div>
            
            <div class="icon-descr">
               <i class="fas fa-users"></i>
               <span class="strong">У нас самая дружная команда</span>
            </div>

            <div class="icon-descr">
               <i class="fas fa-globe-americas"></i>
               <span class="strong">Мы по всему городу</span>
            </div>

            <div class="icon-descr">
               <i class="fas fa-bolt"></i>
               <span class="strong">Мы доставим быстро</span>
            </div>
            
         </div>

         <div class="about__img">
            <img src="https://astana.restoran.kz/neofiles/serve/5d5fa7dbd062915156c0c535" alt="About">
         </div>

      </div>
   </section>

   <!-- Цифры -->
   <section class="numbers">
      <div class="container">

         <div>
            <i class="fas fa-hamburger"></i>
            <span class="amount">100+ Блюд</span>
         </div>

         <div>
            <i class="fas fa-building"></i>
            <span class="amount">3 кафешки</span>
         </div>

         <div>
            <i class="fas fa-user-tie"></i>  
            <span class="amount">100+ Сотрудников</span>
         </div>

         <div>
            <i class="fas fa-money-bill-alt"></i>
            <span class="amount">Достойная цена</span>
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
               <li><a href="{{route('contacts')}}">Контакты</a></li>
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
               <li><a href="index.html">Главная</a></li>
               <li><a href="#">Заказать звонок</a></li>
               <li><a href="#">Войти / Создать аккаунт</a></li>
               <li><a href="{{route('contacts')}}">Контакты</a></li>
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
   <script src="js/hMenu.js"></script>
</body>
</html>