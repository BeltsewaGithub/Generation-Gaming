<!DOCTYPE html>
<html>
<head>
    <title>ItemCard</title>
    <meta charset="UTF-8" />

    <div id="imports">
        <link rel="stylesheet" href="Styles/createItemStyle.css" type="text/css" />
        
        <script type="importmap">
            {
              "imports": {
                "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
              }
            }
          </script>
        <script type="module" src="scripts/main.js"></script>
       
    </div>
</head>


<body>
    <div id="wrapper">
    
    <div id="header"></div>
    
    <div class="title">СОЗДАТЬ ТОВАР</div>
    
    <div class="create-item">
      <form action="scripts/create.php" method="POST" enctype="multipart/form-data">
        <div class="left-container">
              <div class="input-item-name">
                <input name="ItemName" type="text" class="form-control" placeholder="Аккаунт" required>
              </div>
              <div>
                <input name="ItemPrice" type="number" min=0 class="form-control" placeholder="0 rub" required>
              </div>
              <div class="input-item-description">
                <input name="ItemDescription" type="text" class="form-control" placeholder="Нет описания">
              </div>

              <div class="input-label-category-conteiner">
                <input name="ItemLabel" type="text" class="form-control" placeholder="Примечание">
                
                <div class="select-category">
                  <label for="category">Выберите категорию товара</label>
                    <select id="category" name="ItemCategory" onchange="setTextField(this)">
                      <option value="CS2">CS2</option>
                      <option value="DOTA2">DOTA2</option>
                      <option value="GTA">GTA</option>
                      <option value="Other">Other</option>
                    </select>
                </div>
                <input id="make_text" type = "hidden" name = "make_text" value = "" />
                <script type="text/javascript">
                    function setTextField(ddl) {
                        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
                    }
                </script>
              </div>
          </div>
        
        
          <div class="right-container">
            <label for="formFile" class="form-label">Выберите превью карточки товара</label>
            <input name="file" class="form-control" type="file" id="formFile">
          </div>
        
        <input class="send-button" type="submit" value="Отправить"/>
      </form>
      </div>

    <div id="footer"></div>
    </div>
    
</body>
</html>