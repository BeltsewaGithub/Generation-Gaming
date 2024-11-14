<!DOCTYPE html>
<html>
    <head>
    <title>Generation Gaming</title>   
        <meta charset="UTF-8" />
    
        <div id="imports">
        <link rel="stylesheet" href="Styles/signIn.css" type="text/css" />
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
        
        <div class="signin-block">
            <div class="back-to-main">
                <a href="./">
                <svg class="arrow" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 " stroke="#727272"/></svg>
                Вернуться на главную
                </a>
            </div>
            <div class="signin-container">
                <h1>Вход</h1> <br>
                
                <input name="Login" type="text" class="form-signIn" placeholder="Логин" required> <br>
                <input name="Password" type="password" class="form-signIn" placeholder="Пароль" required><br>
                
                <div class="registration">
                    <a href="Registration.php">
                        Нет профиля? Зарегистрируйся сейчас!
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>