<!DOCTYPE html>
<html>
<head>
    <title>ItemCard</title>
    <meta charset="UTF-8" />

    <div id="imports">
        <link rel="stylesheet" href="./Styles/itemCardStyle.css" type="text/css" />
        <script type="importmap">
            {
              "imports": {
                "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
              }
            }
          </script>
        <script type="module" src="js/main.js"></script>
       
    </div>
</head>


<body>
    <div id="header"></div>
   
    <div id="wrapper">
        <div class='back-to-main'>
            <a href='./'>
            <svg class='arrow' version='1.1' viewBox='0 0 512 512' width='512px' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><polygon points='352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 ' stroke='#727272'/></svg>
            Вернуться на главную
            </a>
        </div>

        <div class='item-card'>
            <div class='left-container'>
                <div class='photo-container'>
                    <img src='${itemImage}'/>
                </div>
            </div>
            <div class='right-container'>
                <div class='right-top'>
                    <div class='name'>
                        ${itemName} <br>
                        ${itemLabel}
                    </div>
                    <div class='price'>${itemPrice}</div>
                </div>
                <div class='seller-info'>
                    <img src='source/user-icon.png'/>
                    ${sellerName}
                </div>
                <div class='category'>${itemCategory}</div>
                <div class='description'>
                    <p>${itemInfo}</p>
                </div>
                <div class='buttons'>
                    <div class='button' id='buy-button'>Купить</div>
                    <div class='button' id='add-to-cart-button'>Добавить в корзину</div>
                </div>
            </div>
        </div>
    </div>  
    
    <div id="footer"></div>
</body>
</html>