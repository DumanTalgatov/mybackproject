
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

   <!--Font awesome-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

   <!--Main stylesheet-->
   <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

   <title>Food Store</title>
</head>
<body id="main">

   <!--Scroll up arrow-->
   <div class="up">
      <a href="#main"><i class="fas fa-chevron-up"></i></a>
   </div>


   <!--Header-->
   <header class="header">
      <div class="container">

         <!-- Hamburger menu -->
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

   <!--Promo-->
   <section class="promo">
      <div class="container">
         <div class="promo__content">
            <h2>Встречайте новинку в нашем меню! <span class="promo__word"></span></h2>
            <div class="divider"></div>
            <p>4 сезона (по особому рецепту)</p>

            <div class="promo__btns">
               <button>Заказать</button>
               <button data-modal>Подписаться</button>
            </div>
         </div>
      </div>
   </section>

   <!--Slider-->
   <section class="carousel">
      <div class="container">
      
         <div class="carousel__wrapper">

            <div class="slide_block slide_block_current">
               <img src="https://wallpapercave.com/wp/wp1929549.jpg" alt="Slide1">
            </div>

            <div class="slide_block">
               <img src="https://www.noreenhiskey.com/img/s/v-10/p3064441295-5.jpg" alt="Slide2">
            </div>

            <div class="slide_block">
               <img src="https://wallpaperaccess.com/full/462778.jpg" alt="Slide3">
            </div>

         </div>

         <div class="carousel__arrows">
            <button class="next"><i class="fas fa-chevron-right"></i></button>
            <button class="prev"><i class="fas fa-chevron-left"></i></button>
         </div>
      </div>
   </section>

   <!--Sneakers-->
   <section class="store">
      <div class="container">
         
         <div class="store__promo">
            
            <button class="store__tab store__tab-active" data-tab="#b1">Фаст-фуд</button>
            <button class="store__tab" data-tab="#b2">Супы</button>
            <button class="store__tab" data-tab="#b3">Десерты</button>
            
         </div>

         <!--First tab-->
         <div class="store__wrapper store__wrapper-active" id="b1">  

            <div class="store__block">
               <img src="https://e0.edimdoma.ru/data/posts/0002/2457/22457-ed4_wide.jpg?1541073008" alt="Food"/>
               <div class="block-info">
                  <h3>Мини сет ролл</h3>
                  <span class="price">2600тг</span>

                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>
            

            <div class="store__block">
               <img src="https://saveda.ru/wp-content/uploads/2020/07/Kurinye-krylyshki-KFC.-Nastoyashhij-recept.jpg" alt="Food">
               <div class="block-info">
                  <h3>Острые наггетсы</h3>
                  <span class="price">6990тг</span>
                  <span class="avail">Недоступен из-за птичьего гриппа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.gastronom.ru/binfiles/images/20180729/b8db6c6c.jpg" alt="Food">
               <div class="block-info">
                  <h3>Куриный донер</h3>
                  <span class="price">890тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.maggi.ru/data/images/recept/img640x500/recept_5112_nf2l.jpg" alt="Food">
               <div class="block-info">
                  <h3>Бургер обычный</h3>
                  <span class="price">1100тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://cdn22.img.ria.ru/images/98976/61/989766135_0:100:2000:1233_600x0_80_0_0_6d6bae20fceb464509076685137302b6.jpg" alt="Food">
               <div class="block-info">
                  <h3>Пицца грибная 30 см</h3>
                  <span class="price">1900тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>
            <div class="store__block">
               <img src="https://eda.ru/img/eda/c620x415i/s2.eda.ru/StaticContent/Photos/120213181923/120626165816/p_O.jpg" alt="Food">
               <div class="block-info">
                  <h3>Рибай стейк</h3>
                  <span class="price">3900тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

         </div>

         <!--Second tab-->
         <div class="store__wrapper" id="b2">
            <div class="store__block">
               <img src="https://www.maggi.ru/data/images/recept/img640x500/recept_3330_lu9l.jpg" alt="Food">
               <div class="block-info">
                  <h3>Супчик "Харчо"</h3>
                  <span class="price">400тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://img.povar.ru/main/ab/23/b4/9c/samii_vkusnii_borsh-404089.jpg" alt="Food">
               <div class="block-info">
                  <h3>Супчик "Борщ"</h3>
                  <span class="price">400тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.edim.tv/img/large/lentil-soup.jpg" alt="Food">
               <div class="block-info">
                  <h3>Суп Чечевичный</h3>
                  <span class="price">400тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://img.povar.ru/main/71/83/ad/3d/sup-solyanka_myasnaya-389672.jpg" alt="Food">
               <div class="block-info">
                  <h3>Суп Солянка</h3>
                  <span class="price">400тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://img.povar.ru/main/72/d3/04/44/russkie_shi_iz_svejei_kapusti-410100.jpg" alt="Food">
               <div class="block-info">
                  <h3>Супчик "Щи"</h3>
                  <span class="price">400тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://static.1000.menu/img/content/31343/sup-ramen-domashnii_1547388446_10_max.jpg" alt="Food">
               <div class="block-info">
                  <h3>Суп "Рамен"</h3>
                  <span class="price">1200тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>
         </div>

         <!--Third tab-->
         <div class="store__wrapper" id="b3">

            <div class="store__block">
               <img src="https://womanless.ru/wp-content/uploads/2019/09/s1200_result-500x375.jpg" alt="Food">
               <div class="block-info">
                  <h3>Десерт винартерта</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://samors.ru/wp-content/uploads/2019/11/Banoffi-paj-800x445.jpg" alt="Food">
               <div class="block-info">
                  <h3>Десерт баноффи</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://academy.oetker.ru/upload/iblock/278/2785a560f0c6cc6aa9a5e8d89d8fd905.png" alt="Food">
               <div class="block-info">
                  <h3>Десерт тирамису</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://domashniy.ru/upload/iblock/cc9/cc95e7ee4b30e39f9ab89dfe596dcc93.png" alt="Food">
               <div class="block-info">
                  <h3>Десерт кранахан</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://www.gastronom.ru/binfiles/images/00000245/00082101.jpg" alt="Food">
               <div class="block-info">
                  <h3>Десерт добош</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

            <div class="store__block">
               <img src="https://art-lunch.ru/content/uploads/2014/08/cheesecake-new-york-000b.jpg" alt="Food">
               <div class="block-info">
                  <h3>Десерт чизкейк</h3>
                  <span class="price">1500тг</span>
                  <span class="avail">Доступен для заказа</span>
               </div>
            </div>

         </div>

         <button class="btn-more">
            Смотреть больше <i class="fas fa-chevron-right"></i> 
         </button>
      </div>
   </section>

   <!-- Showcase -->
   <section class="showcase" id="showcase">
      <div class="container">

         <div class="showcase__descr">
            <h1>Закажите наши торты</h1>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores omnis velit suscipit iste ut at, vitae numquam expedita debitis sit praesentium. Reiciendis excepturi esse suscipit sequi iusto nam sunt obcaecati ab officiis, harum nobis impedit?
            </p>
            <button class="btn btn-primary">Заказать</button>
         </div>

         <img src="https://zira.uz/wp-content/uploads/2019/11/tort-kit-kat.jpg" alt="Food">

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
   <script src="js/script.js"></script>
   <script src="js/modal.js"></script>
   <script src="script/slider.js"></script>
   <script src="script/tabs.js"></script>
   <script src="js/hMenu.js"></script>
</body>
</html>