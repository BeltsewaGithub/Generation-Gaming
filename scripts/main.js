const imports = document.getElementById('imports');
  const importContent = `
      <!--бутстрап-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      
          <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
      <link rel="stylesheet" href="Styles/HeaderFooterStyles.css" type="text/css" />
  `;
  imports.innerHTML += importContent;

const header = document.getElementById('header');
const headerContent = `
<div id="logo">
  <a href=".">
    <img src="source/logo.png" alt="Generation Gaming">
  </a>
</div>
    
<div class="search-field">
  <form action="" target="">
    <input type="search" name="search">
      <button class="button">Поиск</button>
  </form>
</div>
            
<div class="header-right-container">

<nav>
  <ul class="references">
    <li><a class="ref createItem" href="CreateItem.php">Создать товар</a></li>
    <li><a class="ref" href="">Каталог</a></li>
    <li><a class="ref" href="">Чат-бот</a></li><!-- TODO: создать пустой чат-бот -->
    <li><a class="ref" href="https://t.me/GenerationGaming24">Наш тгк</a></li>
  </ul>
</nav>
        
<div class="sign-in">
  <form action="other-pages/SignUp.HTML" target="_blank">
    <button class="button" class="sign-in-button">Войти</button>
  </form>
</div>
                
<div class="basket">
  <form action="other-pages/Basket.HTML" target="_blank">
    <button id="basketButton"><img src="source/shopping-cart.png" alt="Корзина"></button>
  </form>
</div>

</div>
 `;
header.innerHTML += headerContent;

const footer = document.getElementById('footer');
const footerContent = `
<footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
<div class="col mb-3">
  <div class="logo-footer">
    <img src="source/logo.png" alt="Generation Gaming">
  </div>
</div>
        
<div class="col mb-3">
  <h5>Аккаунты для игр</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">CS2</a></li>
       <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">DOTA2</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Dead By Daylight</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Assasin's Creed</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">GTA</a></li>
    </ul>
</div>
        
<div class="col mb-3">
  <h5>Контакты</h5>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Telegram</a></li>
   </ul>
</div>
</footer>
<p class="text-center text-body-secondary">© 2024 Generation Gaming. Все права защищены</p>
`;
footer.innerHTML += footerContent;