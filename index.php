<!DOCTYPE html>
<html>
<head>
    <title>Generation Gaming</title>   
    <meta charset="UTF-8" />
 
    <div id="imports">
      <link rel="stylesheet" href="Styles/index.css" type="text/css" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <div id="header"></div>
          
        <div id="wrapper">
          
          <div class="sim-slider">
            <ul class="sim-slider-list">
                <li>
                  <div class="element">
                    <img src="source/black-screen.png" alt="screen">
                  </div>
                </li>
                
                <li class="sim-slider-element">
                  <div class="element">
                    <img src="source/DOTA2Acc.jpeg">
                  </div>
                </li>
                
                <li class="sim-slider-element">
                  <div class="element">
                    <img src="source/gta.webp">
                  </div>
                </li>
            </ul>
            <div class="sim-slider-arrow-left"></div>
            <div class="sim-slider-arrow-right"></div>
            <div class="sim-slider-dots"></div>
          </div>
          <div class="hltv">
            <h2>Следи за киберспортом с HLTV</h2>
          </div>
          <div class="element" >
            <iframe id="HLTV"
              src="https://www.hltv.org/ranking/teams/2024/november/4/#ranking"
              name="targetframe"
              allowTransparency="true"
              scrolling="auto"
              frameborder="0"
              height="600px"
            ></iframe>
          </div>
        </div>
        
        <div id="footer"></div>
    
    <script src="js/sim-slider.js"></script>
    <!-- вызов слайдера -->
    <script>new Sim()</script>   
</body>
</html>
