<?php include("includes/header_nav.php") ?>

<section id="portfolioPageTemplate">

  <div class="container">
    <div id="header">
      <div id="title">
        <h1>Pong Game</h1>
      </div>

      <div class="container" id="code">
    <div class="">
      <ul class="nav nav-tabs" id="outerTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#websiteTab" aria-controls="websiteTab" role="tab" aria-expanded="true">Website</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#htmlCode" aria-controls="htmlCode" role="tab">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#cssCode" aria-controls="cssCode" role="tab">CSS</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#jsCode" aria-controls="jsCode" role="tab">JavaScript</a>
        </li>
      </ul>
    </div>
    <div id="tabContent" class="tab-content">
      <div class="tab-pane" id="htmlCode" role="tabpanel">
        <div class="">
          <div class="">
            <ul class="nav nav-tabs" id="innerTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Home</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">

            <div class="tab-pane active" id="tab1" role="tabpanel">
              <?php include("includes/PongHTMLCode.php") ?>
            </div>



          </div>
        </div>
      </div>
      <div class="tab-pane active" id="websiteTab" role="tabpanel">
        <iframe src="/index.php" frameborder="0"></iframe>
      </div>

      <div class="tab-pane" id="cssCode" role="tabpanel">
        <code>
          <?php include("includes/PongcssCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="jsCode" role="tabpanel">
        <code>
          <?php include("includes/PongjsCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="phpCode" role="tabpanel">
        <code>
          <?php include("includes/thanksPHP.php") ?>
        </code>
      </div>

    </div>

    <p class="layoutWarning"><small><cite>*NB that layout of game in the pane above may not be true if viewed on a mobile device due to the viewer window being too small.</cite></small></p>
  </div>

      <div id="text">
        <p class="themeColorText">This is the classic arcade game "Pong" which I built using HTML, SCSS and JavaScript.  I then intergrated it into the welcome page of my website for a bit of fun.<br><br>I followed a tutorial for the majority of the game build but was able to fix a few bugs like the balls speed increase breaking the barrier of what counted as a goal and the balls speed only resetting on one axis.</p>
        <br>
        <p class="themeColorText">I'll admit that when the math and angles were introduced they went over my head but I was able to make sense of the rest of the code pretty well and thoroughly enjoyed branching out into this slightly different style of JavaScript</p>
        <br>
        <strong class="themeColorText"><a href="https://sdbxsdb.com/" target="_blank" class="themeColorText">Link to the game.</a></strong><br><br>
        

      </div>
    </div>
  </div>



  





</section>

<?php include("includes/footer.php") ?>