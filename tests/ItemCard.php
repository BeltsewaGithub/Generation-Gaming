<!DOCTYPE html>
<html>
<head>
    <title>ItemCard</title>
    <meta charset="UTF-8" />

    <div id="imports">
        <link rel="stylesheet" href="./Styles/itemCardStyle.css" type="text/css" />
        <link rel="stylesheet" href="stylecard.scss" type="text/css" />
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
    <div id="wrapper">
    
    <div id="header"></div>

    <?php
        $itemId = $_GET['id'];
        $dbUser="root";
        $dbPass= "7359";
        $dbName= "generation-gaming";
        $mysqli = mysqli_connect('localhost', $dbUser, $dbPass, $dbName);
        $query = "set names utf8";
        $mysqli -> query($query);
        $query = "select * from items where idItems = ${itemId}";
        $results = $mysqli->query($query);
          
        $row = $results -> fetch_assoc();
        $itemName = $row["ItemName"];
        $itemPrice = $row["ItemPrice"];
        $itemLabel = $row["ItemLabelText"];
        $itemImage = $row["ItemPicture"];
        $itemInfo = $row["ItemDescription"];
        $sellerName = $row["ItemSellerNickname"];
        $sellerAvatar = $row["ItemSellerAvatarPath"];


        $content = "
            <div class='card'>
                <nav>
                    <a href = './'>
                        <svg class='arrow' version='1.1' viewBox='0 0 512 512' width='512px' xml:space='preserve' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><polygon points='352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 ' stroke='#727272'/></svg>
                        Вернуться на главную
                    </a>
                    <svg class='heart' version='1.1' viewBox='0 0 512 512' width='512px' xml:space='preserve' stroke='#727272' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'><path d='M340.8,98.4c50.7,0,91.9,41.3,91.9,92.3c0,26.2-10.9,49.8-28.3,66.6L256,407.1L105,254.6c-15.8-16.6-25.6-39.1-25.6-63.9  c0-51,41.1-92.3,91.9-92.3c38.2,0,70.9,23.4,84.8,56.8C269.8,121.9,302.6,98.4,340.8,98.4 M340.8,83C307,83,276,98.8,256,124.8  c-20-26-51-41.8-84.8-41.8C112.1,83,64,131.3,64,190.7c0,27.9,10.6,54.4,29.9,74.6L245.1,418l10.9,11l10.9-11l148.3-149.8  c21-20.3,32.8-47.9,32.8-77.5C448,131.3,399.9,83,340.8,83L340.8,83z' stroke='#727272'/></svg>
                </nav>
                <div class='photo'>
                    <img src=${itemImage}>
                </div>
                <div class='description'>
                    <h2>${itemName}</h2>
                    <h4>category</h4>
                    
                    <div class='price'>${itemPrice}</div>
                    <p>${itemInfo}</p>
                    <button>Add to Cart</button>
                    <button>Wishlist</button>
                </div>
            </div>
        ";

        /*$content = "
            <section class='product'>
                <div class='product__photo'>
                    <div class='photo-container'>
                        <div class='photo-main'>
                            <img src=${itemImage}>
                        </div>
                    </div>
                </div>
                
                <div class='product__info'>
                    <div class='title'>
                        ${itemName}
                    </div>
                    
                    <div class='price'>
                        ${itemPrice}
                    </div>
                    
                    <div class='description'>
                        ${itemInfo}
                    </div>
                    <button class='buy--btn'>ADD TO CART</button>
                </div>
            </section>

        ";


        $content = "
            <!--ITEM CARD-->
            <div class='item-card'>

                <div class='item-pic'>
                    <img src=${itemImage}>
                </div>

                <div class='item-info'>
                    <div class='description'>
                    ${itemInfo}
                    </div>
                
                    <div class='sellerNickname'>${sellerName}</div>
                </div>
                <div class='item-name'>${itemName}</div>
                <div class='price'>${itemPrice}</div>
            </div>
            ";*/

            echo $content;
?>     
        <div id="footer"></div>
    </div>
    
</body>
</html>