<!DOCTYPE html>
<html>
<head>
    <title>ItemCard</title>
    <meta charset="UTF-8" />

    <div id="imports">
        <link rel="stylesheet" href="itemCardStyle.css" type="text/css" />
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

    <?php
//$parts = parse_url($url);
//parse_str($parts['query'], $query);
$itemId = $_GET['id'];

/*$dbUser="root";
$dbPass= "7359";
$dbName= "generation-gaming";
$db = mysqli_connect('localhost', $dbUser, $dbPass, $dbName);

$stmt = $db->prepare("select * from items WHERE idItems = ?");
$stmt->bind_param("i", $itemId);
$stmt->execute();
$stmt->close();*/


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
            $itemImage = $row["ItemPicturePath"];
            $itemInfo = $row["ItemDescription"];
            $sellerName = $row["ItemSellerNickname"];
            $idx = $row["idItems"];

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
            ";

            echo $content;
?>   
        <div id="header"></div>
        
        
        
        
        
        <div id="footer"></div>
    </div>
    
</body>
</html>