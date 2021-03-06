<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Регистрация & Логин</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{asset('css/style.css') }}">
   
</head>
<body id="auth">
   

    <!--Scroll up arrow-->
    <div class="up">
      <a href="#auth"><i class="fas fa-chevron-up"></i></a>
   </div>

    <!--Header-->
    <header class="header" id="header" style="border-bottom: 1px solid #ccc;">

      <div class="container">

         <div class="h-menu">
            <span></span>
            <span></span>
            <span></span>
         </div>

         <div class="header__logo"><i class="fab fa-monero"></i></div>

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


   <!-- Form -->
   <main class="main">
      <div class="container">

         <div id="main-wrapper">
            <nav class="form-nav">
               <button id="login" class="tab active-btn" data-tab="login" action="{{route('auth')}}" method="POST">Войти</button>
               <button id="signup" class="tab" data-tab="signup" action="{{route('customer')}}" method="POST">Создать аккаунт</button>
            </nav>
            
            <div class="sign-form sign-form_active" id="login-form">
               <form action="{{route('auth')}}" method="POST" enctype='multipart/form-data'>
               @csrf
                  <div class="form-block">
                     <label for="email">Почта: </label>
                     <input type="email" name="email">
                  </div>
   
                  <div class="form-block">
                     <label for="password">Пароль: </label>
                     <input type="password"  name="password">
                  </div>
   
                  <div class="d-flex">
                     <div>
                        <input type="checkbox">
                        <p>Запомнить меня</p>
                     </div>
                     <a href="#">Забыли пароль?</a>
                  </div>
   
                  <button class="sign-btn">Войти</button>
               </form>
            </div>
   
            <div class="sign-form" id="signup-form">
               <form action="{{route('customer')}}" method="POST" enctype='multipart/form-data'>
               @csrf
                  <div class="form-block">
                     <label for="first_name">Имя: </label>
                     <input type="text" name="first_name">
                  </div>
   
                  <div class="form-block">
                     <label for="last_name">Фамилия: </label>
                     <input type="text"  name="last_name">
                  </div>

                  <div class="form-block">
                     <label for="email">Почта: </label>
                     <input type="email"  name="email">
                  </div>

                  <div class="form-block">
                     <label for="password">Пароль: </label>
                     <input type="password"  name="password">
                  </div>
   
                  <button class="sign-btn">Создать аккаунт</button>
               </form>

               <ul id="reqs">
                  <h4>Пароль должен состоять из:</h4>
                  <li>Минимум 2 цифр</li>
                  <li>Минимум 1 заглавная буква</li>
                  <li>Не меньше 10 символов</li>
               </ul>
            </div>
         </div>

         

      </div>
   </main>  

   <!-- Footer -->
   <footer class="footer">
      <div class="container">

         <div class="footer__logo">
            <h2>Sneaker <span>Store</span> </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime beatae sapiente ex deserunt ipsum nihil.</p>

            <div>Copyright &copy; 2020</div>
         </div>

         <div class="footer__links">
            <h3>Меню</h3>
            <div class="divider"></div>
            <ul>
               <li><a href="about.html">О компании</a></li>
               <li><a href="#">Заказ & Скидки</a></li>
               <li><a href="#">Получить купон</a></li>
               <li><a href="contacts.html">Контакты</a></li>
            </ul>
         </div>

         <div class="footer__links">
            <h3>Новые продукты</h3>
            <div class="divider"></div>

            <ul>
               <li><a href="#">Для женщин</a></li>
               <li><a href="#">Для мужчин</a></li>
               <li><a href="#">Для детей</a></li>
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
               <li><a href="contacts.html">Контакты</a></li>
            </ul>
         </div>

      </div>
   </footer>

   <script src="js/hMenu.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      $(function() {
         $(document).scroll(function() {
         let $nav = $(".header");
         $nav.toggleClass('header-scrolled', $(this).scrollTop() > $nav.height());
         });
      });
      const tabs = document.querySelectorAll('.tab')
      const blocks = document.querySelectorAll('.sign-form')
      
      tabs.forEach(tab => {
         tab.addEventListener('click', () => {
            let currentTab = tab
            let attr = currentTab.getAttribute('data-tab')
            let currentBlock = document.getElementById(`${attr}-form`)
            
            tabs.forEach(tab => tab.classList.remove('active-btn'))
            blocks.forEach(block => block.classList.remove('sign-form_active'))
            currentTab.classList.add('active-btn')
            currentBlock.classList.add('sign-form_active')
         });
      });
   </script>
</body>
</html>