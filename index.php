<!DOCTYPE html>
<html>
    <p id="test"></p>
<head>
    <title>Generation Gaming</title>   
    <meta charset="UTF-8" />
 
    <div id="imports">
      <link rel="stylesheet" href="styles.css" type="text/css" />
      <script type="importmap">
        {
          "imports": {
            "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
          }
        }
      </script>
      <script type="module" src="js/main.js"></script>
      <!--<script type="module" src="js/catalog.js"></script>-->
    </div>
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php //phpinfo(); ?> 
    <div id="wrapper">

        <div id="header"></div>


        <div id="catalog-popular">
          <?php

          $dbUser="root";
          $dbPass= "7359";
          $dbName= "generation-gaming";
          $mysqli = mysqli_connect('localhost', $dbUser, $dbPass, $dbName);
          $query = "set names utf8";
          $mysqli -> query($query);
          $query = "select * from items";
          $results = $mysqli->query($query);

          while ($row = $results -> fetch_assoc()) 
          {
            $itemName = $row["ItemName"];
            $itemPrice = $row["ItemPrice"];
            $itemLabel = $row["ItemLabelText"];
            $itemImage = $row["ItemPicturePath"];
            $itemInfo = $row["ItemDescription"];
            $sellerName = $row["ItemSellerNickname"];
            $idx = $row["idItems"];
            $content = "
            <div class='item-card'>
              <div class='card-top' id='heading-${idx}'>
                <div class='item-pic'>
                  <img src=${itemImage} alt=${itemName}></img>
                </div>
                <div class='card-label'>${itemLabel}</div>
              </div>
              <div class='collapse show' id='collapse-${idx}' aria-labelledby='heading-${idx}' data-parent='#catalog-popular'>
                <div class='card-bottom'>
                  <div class='card-info'>
                    <a class='ref' href='./ItemCard.php?id=${idx}'>${itemName}</a>
                    <div class='price'>${itemPrice}</div>
                  </div>
                          
                  <div class='user'>
                    <img src='source/user-icon.png' alt='Ник продавца'>
                    <a class='user'>${sellerName}</a>
                  </div>
                </div>
              </div>
              <div class='item-info'>${itemInfo}</div>
              <button class='card-add'>Купить</button>
            </div>
            ";
            echo $content;
          };
          ?>;
        </div>

        <div id="footer"></div>

    </div>


</body>
</html>
