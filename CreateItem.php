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
    
    <div id="header"></div>

    <form action="create.php" method="POST" enctype="multipart/form-data">
        <input name="ItemName" type="text" placeholder="Наименование"/>
        <input name="file" type="file" placeholder="Превью">
        <input name="ItemPrice" type="number" placeholder="Цена">
        <input name="ItemDescription" type="text" placeholder="Описание">
        <input type="submit" value="Отправить"/>
    </form>  
        
        <div id="footer"></div>
    </div>
    
</body>
</html>