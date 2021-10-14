<?php include("includes/holdingPageHeader.php") ?>

<body>

  <section id="gamePageWrapper" class="darkModeBody">

  <div class="darkModeToggle">
    <label>
    <input id="checkbox" class='toggle-checkbox' type='checkbox'></input>
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
  </div>

    <div id="welcome" class="container darkModeText">
      <h1>Welcome!</h1>
      <p>You've reached the landing page of Sam Donaghy-Bell's website.<br>
        In here you'll find a bit out me, my portfolio (including this Javascript pong game I made) and my contact information.<br><br>If you'd like to go to the home page now click below, or if you'd prefer to try your hand at beating the computer go ahead!</p>
      <button id="gamePageBtn" class="btn btn-success">Main Site</button>
    </div>

    <div id="gameWrapper">

      <div id="screenTooSmall">
        <h6>If you can see this message it means your device is too small to play the game.  Sorry! :( <br><br>Try again on a larger screen!</h6>
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