const imports = document.getElementById('imports');
  const importContent = `
      <!--бутстрап-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  `;
  imports.innerHTML += importContent;

const header = document.getElementById('header');
const headerContent = `
<div id="logo">
  <img src="source/logo.png" alt="Generation Gaming">
</div>
    
<div class="search-field">
  <form action="" target="">
    <input type="text" name="search">
      <button class="button">Поиск</button>
  </form>
</div>
            
<div class="header-right-container">

<nav>
  <ul class="references">
<<<<<<< Updated upstream
    <li><a class="ref" href="other-pages/Catalog.HTML">Каталог</a></li>
    <li><a class="ref" href="">Чат-бот</a></li><!-- TODO: создать пустой чат-бот -->
=======
    <li><a class="ref createItem" href="CreateItem.php">+</a></li>
    <li><a class="ref" href="">Каталог</a></li>
    <li><a class="ref" href="">Чат-бот</a></li>
>>>>>>> Stashed changes
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

<style>
html * {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 18pt;
}

input {
    height: 30px;
    width: 300px;
}

#Wrapper {
    display: flex;
    flex-wrap: wrap;
}

.button {
    background-color: rgba(255, 0, 0, 0.384);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: grey;
    font-size: 18pt;
    border: 1px solid rgba(255, 0, 0, 0.781);
    border-radius: 4px;
    height: auto;
    width: auto;
    align-content: center;
    align-items: center;
}

.button:hover {
    /*transform: scale(1.2);*/
    color: black;
}

.ref:link, .ref:visited {
    text-decoration: none;
    color: black;
}

body {
    margin: 0%;
}


#header {
    display: flex;
    flex-direction: row;
    height: 30%;
    margin: 0;
    align-content: center;
    align-items: center;
}

#logo {
    display: block;
    top: 0;
    left: 0;
    width: 10%;
}

#logo img {
    object-fit: contain;
    width: 100%;
    height: 100%;
}

.search-field {
    width: 40%;
    display: flex;
    margin: 5%;
    position: relative;
    right: 5%;
}

ul.references {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 0;
    list-style: none;
}

.header-right-container *{
    margin-left: 10px;
}

.header-right-container {
    margin: 0;
    padding: 5%;
    display: flex;
    position: relative;
    float: right;
    justify-content: end;
    width: 50%;
}

ul.references a {
	color: #000000;
	display: block;
	padding: 0;
	text-align: center;
	text-decoration: none;
	width: 100%;
    
}

.sign-in-button {
    position: relative;
    margin: 0;
}

#basketButton {
    background-color: rgba(255, 255, 255, 0);
    border: none;
    margin: 0;
}

.basket img {
    width: 30px;
    height: 30px;
}
</style>
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
<style>
  h5 {
      font-size: 30pt !important;
  }

  .logo-footer {
      display: block;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
  }

  .logo-footer > img {
      object-fit: contain;
      width: 100%;
      height: 100%;
  }
</style>
`;
footer.innerHTML += footerContent;