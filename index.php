<?php include("includes/holdingPageHeader.php") ?>

<body class="themeColorBody">

  <section id="gamePageWrapper" class="themeColorBody">

  <!-- <div class="darkModeToggle">
        <div style="display: none;" id="theme"></div>
        <label>
          <input id="darkModeCheckbox" class='toggle-checkbox' type='checkbox' onclick="themeToggle()"></input>

          <div class='toggle-slot'>
            <div class='sun-icon-wrapper'>
              <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
            </div>
            <div class='toggle-button'></div>
            <div class='moon-icon-wrapper'>
              <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
            </div>
          </div>
        </label>
      </div> -->

    <div style="display: none;" id="theme"></div>

    <div id="welcome" class="container themeColorText">
      <h1>Hi, I'm Sam!</h1><br>
      <p>Welcome to my site. <br> Have a game of pong and when you're ready head on in!
        <br>
      </p>

      <button id="gamePageBtn" class="themeColorText">I'm bored of pong. Take me inside.</button>
    </div>

    <div id="gameWrapper">

      <div id="screenTooSmall">
        <h6>If you can see this message it means your device is too small to play the game.  Sorry! &#128533; <br><br>Try again on a larger screen!</h6>
      </div>


      <div id="game">
        <img id="landingLogo" src="/img/samavatarnobgcopy.png">
        <div id="canvasWrapper">
          <canvas id="pong" width="800px" height="350px">
          </canvas>
          <div id="gameText">
            <h4 id="moveMouse" class="gameText">Move your mouse to control the paddle and try and beat the computer!</h4>
            <h1 id="startGame" class="gameText">Start Game</h1>
          </div>
        </div>
      </div>

    </div>

    <?php include("includes/holdingPageFooter.php") ?>
    <div id="footerIndexPg" class="container">
      <?php include("includes/footer.php") ?>
    </div>

  </section>

</body>