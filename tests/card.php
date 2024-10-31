<!DOCTYPE html>
<html>
<head>
    <title>ItemCard</title>
    <meta charset="UTF-8" />

    <div id="imports">
        <!--<link rel="stylesheet" href="cardStyle.scss" type="text/css" />-->
        <link rel="stylesheet" href="stylecard.scss" type="text/css" />
        
        <script type="importmap">
            {
              "imports": {
                "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
              }
            }
          </script>
        <script type="module" src="./main.js"></script>
       
    </div>
</head>
<body>
<!--<section class="product">
  <div class="product__photo">
    <div class="photo-container">
      <div class="photo-main">
        <div class="controls">
          <i class="material-icons">share</i>
          <i class="material-icons">favorite_border</i>
        </div>
        <img src="https://res.cloudinary.com/john-mantas/image/upload/v1537291846/codepen/delicious-apples/green-apple-with-slice.png" alt="green apple slice">
      </div>
    </div>
  </div>
  <div class="product__info">
    <div class="title">
      <h1>Delicious Apples</h1>
      <span>COD: 45999</span>
    </div>
    <div class="price">
      R$ <span>7.93</span>
    </div>
    <div class="description">
      <h3>BENEFITS</h3>
      <ul>
        <li>Apples are nutricious</li>
        <li>Apples may be good for weight loss</li>
        <li>Apples may be good for bone health</li>
        <li>They're linked to a lowest risk of diabetes</li>
      </ul>
    </div>
    <button class="buy--btn">ADD TO CART</button>
  </div>
</section>

<footer>
  <p>Design from <a href="https://dribbble.com/shots/5216438-Daily-UI-012">dribbble shot</a> of <a href="https://dribbble.com/rodrigorramos">Rodrigo Ramos</a></p>
</footer>-->


<div class="card">
  <nav>
    <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 " stroke="#727272"/></svg>
    Back to all Plants
    <svg class="heart" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" stroke="#727272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z" stroke="#727272"/></svg>
  </nav>
  <div class="photo">
    <img src="https://s-media-cache-ak0.pinimg.com/236x/3b/36/ca/3b36ca3afe0fa0fd4984b9eee2e154bb.jpg">
  </div>
  <div class="description">
    <h2>Classic Peace Lily</h2>
    <h4>Popular House Plant</h4>
    <h1>$18</h1>
    <p>Classic Peace Lily is a spathiphyllum floor plant arranged in a bamboo planter with a blue & red ribbom and butterfly pick.</p>
    <button>Add to Cart</button>
    <button>Wishlist</button>
  </div>
</div>
</body>

</body>