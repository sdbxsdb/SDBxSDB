<?php include("includes/header_nav.php") ?>

<section id="portfolioPageTemplate">

  <div class="container">
    <div id="header">
      <div id="title">
        <h1>McDonald's Farm Children's Game</h1>
      </div>
      <div id="text">
        <p> This is a children's game I made from scratch for my nieces using HTML, SCSS and JavaScript / jQuery. <br><br>It's a relatively simple drag and drop game with <cite>really</cite> annoying sound effects.   It allows you to input your name at the start which carries across each page as you play.<br>It was my first dip into storing and recalling data, in this case to and from local storage.  The game also has touch and drag intergrated via jQuery to allow for use on tablets.<br><br> The game is best viewed on a desktop, laptop or tablet.<br><br></p>
        <br><br>
        <p class="layoutWarning"><small><cite>*Please note that layout of game in the pane below may not be true if viewed on a mobile device due to the viewer window being too small.</cite></small></p>
      </div>
    </div>
  </div>

  <div class="container" id="code">
    <div class="">
      <ul class="nav nav-tabs" id="outerTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#websiteTab" aria-controls="websiteTab" role="tab" aria-expanded="true">Website</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#htmlCode" aria-controls="htmlCode" role="tab">HTML</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#cssCode" aria-controls="cssCode" role="tab">CSS</a>
        </li>
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
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab">Farm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab">Animals</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">

            <div class="tab-pane active" id="tab1" role="tabpanel">
              <?php include("includes/KGhomeCode.php") ?>
            </div>

            <div class="tab-pane" id="tab2" role="tabpanel">
              <?php include("includes/KGfarmCode.php") ?>
            </div>

            <div class="tab-pane" id="tab3" role="tabpanel">
              <?php include("includes/KGanimalsCode.php") ?>
            </div>

          </div>
        </div>
      </div>
      <div class="tab-pane active" id="websiteTab" role="tabpanel">
        <iframe src="https://www.sdbkidsgame.xyz/" frameborder="0"></iframe>
      </div>

      <div class="tab-pane" id="cssCode" role="tabpanel">
        <code>
          <?php include("includes/KGcssCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="jsCode" role="tabpanel">
        <code>
          <?php include("includes/KGjsCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="phpCode" role="tabpanel">
        <code>
          <?php include("includes/thanksPHP.php") ?>
        </code>
      </div>

    </div>
  </div>





</section>

<?php include("includes/footer.php") ?>