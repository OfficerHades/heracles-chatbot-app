<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nemean | HNG BOT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="container">
          <div class="bot-content">
              <div class="bot-text">
                  <div class="botAnimatedText">
                        <h1>Hey there, I am <h1 class="animate animated infinite tada"> NEMEAN</h1></h1>
                  </div>
                  <p>Ask me what you'd like to <br> know about HNG</p>
                  <button id="myBtn">Get Started</button>
              </div>
              <div class="bot-image">
                  <img class="nemean" src="https://res.cloudinary.com/benjee/image/upload/v1569523384/nemean_qs0mwk.png" alt="Nemean">
              </div>
          </div>
          <div id="myModal" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div class="bot-header">
                        <img class="bot-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569363700/Group_3_tds6h9.svg" alt="logo">
                        <span class="close">&times;</span>
                    </div>
                    <!-- <div class="bot-conversation"> -->
                    <div class="chat">
                        <div class="messages"></div>
                        <div id="edge"></div>
                    </div>   
                    <form class="actions">
                        <input type="text" placeholder="Ask me about HNG">
                        <button class="btn" type="submit"><img src="https://res.cloudinary.com/benjee/image/upload/v1569606270/Vector_2_c87sw1.svg" alt="send"></button>
                    </form>              
                </div>
            </div>
        
      </div>

    <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
    <script src="/script.js"></script>
  </body>
</html>
