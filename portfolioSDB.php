<?php  include("includes/header_nav.php") ?>

      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>Sam Donaghy-Bell   |  SDB Developer</h1>
            </div>
            <div id="text">
              <p>You're waiting for a train, a train that will take you far away.   You know where you hope this train will take you, but you don't know for sure... <div id="spinner"></div><br><br>A bit of website inception going on here!   This site was created as a CV / personal CodePen website to showcase me and what I can do.   Made with HTML5, PHP, Bootstrap 4, SCSS and JavaScript/jQuery.   It's been built as a single page site bar the portfolio pages (where you are now) and the contact submission thanks page.</p> 
              <br>
              <p class="layoutWarning"><small><cite>*Please note that layout of website in the pane below may not be true if viewed on a mobile device due to the viewer window being too small.</cite></small></p> 
            </img>
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
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#phpCode" aria-controls="phpCode" role="tab">Contact Form PHP</a>
      </li>
    </ul>
  </div>
  <div id="tabContent" class="tab-content">
    <div class="tab-pane" id="htmlCode" role="tabpanel">
      <div class="">
        <div class="">
          <ul class="nav nav-tabs" id="innerTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab0" aria-controls="tab0" role="tab" aria-expanded="true">Header &amp; Nav</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Home / About / Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab">Footer</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">

          <div class="tab-pane active" id="tab0" role="tabpanel">
            <?php include ("includes/SDBheadernavCode.php") ?>
          </div>

          <div class="tab-pane active" id="tab1" role="tabpanel">
            <?php include ("includes/SDBhomeCode.php") ?>
          </div>

          <div class="tab-pane" id="tab2" role="tabpanel">
            <?php include("includes/SDBportfolioCode.php") ?>
          </div>

          <div class="tab-pane" id="tab3" role="tabpanel">
            <?php include("includes/SDBfooterCode.php") ?>
          </div>

        </div>
      </div>
    </div>
    <div class="tab-pane active" id="websiteTab" role="tabpanel">
      <iframe src="/index.php" frameborder="0"></iframe>
    </div>

    <div class="tab-pane" id="cssCode" role="tabpanel">
      <code>
        <?php include ("includes/SDBcssCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="jsCode" role="tabpanel">
      <code>
        <?php include ("includes/SDBjsCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="phpCode" role="tabpanel">
      <code>
        <?php include ("includes/SDBcontactPHP.php") ?>
      </code>
    </div>

  </div>
</div>


        




      </section>

      <?php  include("includes/footer.php") ?>