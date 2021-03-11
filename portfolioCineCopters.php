<?php include("includes/header_nav.php") ?>


<section id="portfolioPageTemplate">

  <div class="container">
    <div id="header">
      <div id="title">
        <h1>CineCopters | Drones for Film &amp; TV</h1>
      </div>
      <div id="text">
        <p>My most in-depth website to date in terms of size and functionality.  Built using HTML 5, PHP, SCSS, Bootstrap 4, JavaScript and Jquery.  The site contains:
        <ul class="listElements">
          <li>Page position anchors</li>
          <li>iframes</li>
          <li>Youtube API</li>
          <li>Smooth scroll & Back to top</li>
          <li>Videos within modals</li>
          <li>Contact submission forms with validation</li>
          <li>Dynamically editable stock submission forms</li>
          <li>Expanding card elements</li>
          <li>Responsive autoplay hero video</li>
          <li>Lightbox equivalent</li>
          <li>Fully responsive from 2560x1080 all the way down to iPhone 5</li>
          <li>Tappable numbers and emails for handheld devices</li>
          <li>and more</li>
        </ul><br>
        <a href="https://github.com/sdbxsdb/CineCopters" target="_blank"><i class="fab fa-github" style="font-size: 40px;"></i></a>
        <div>
          <strong>Link to the full code <a href="https://github.com/sdbxsdb/CineCopters" target="_blank">here.</a></strong>
        </div>
        <br>
        <strong>Link to the full site <a href="https://cinecopters.co.uk/" target="_blank">here.</a></strong>
        <br><br>
        <p class="layoutWarning"><small><cite>*Please note that layout of website in the pane below may not be true if viewed on a mobile device due to the viewer window being too small.</cite></small></p>
        </p>
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
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#phpCode" aria-controls="phpCode" role="tab">Stock Footage Submission Form PHP</a>
        </li>
      </ul>
    </div>
    <div id="tabContent" class="tab-content">
      <div class="tab-pane" id="htmlCode" role="tabpanel">
        <div class="">
          <div class="">
            <ul class="nav nav-tabs" id="innerTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab0" aria-controls="tab1" role="tab" aria-expanded="true">Header &amp; Nav</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab4" aria-controls="tab4" role="tab">Our Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab5" aria-controls="tab5" role="tab">Showreels / Stock</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab6" aria-controls="tab6" role="tab">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab7" aria-controls="tab6" role="tab">Footer</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">

            <div class="tab-pane active" id="tab0" role="tabpanel">
              <?php include("includes/CCheadernavCode.php") ?>
            </div>

            <div class="tab-pane active" id="tab1" role="tabpanel">
              <?php include("includes/CChomePageCode.php") ?>
            </div>

            <div class="tab-pane" id="tab2" role="tabpanel">
              <?php include("includes/CCaboutPageCode.php") ?>
            </div>

            <div class="tab-pane" id="tab3" role="tabpanel">
              <?php include("includes/CCservicesCode.php") ?>
            </div>

            <div class="tab-pane" id="tab4" role="tabpanel">
              <?php include("includes/CCclientsCode.php") ?>
            </div>

            <div class="tab-pane" id="tab5" role="tabpanel">
              <?php include("includes/CCshowreelCode.php") ?>
            </div>

            <div class="tab-pane" id="tab6" role="tabpanel">
              <?php include("includes/CCcontactCode.php") ?>
            </div>

            <div class="tab-pane" id="tab7" role="tabpanel">
              <?php include("includes/CCfooterCode.php") ?>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane active" id="websiteTab" role="tabpanel">
        <iframe src="https://cinecopters.co.uk/" frameborder="0"></iframe>
      </div>

      <div class="tab-pane" id="cssCode" role="tabpanel">
        <code>
          <?php include("includes/CCcssCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="jsCode" role="tabpanel">
        <code>
          <?php include("includes/CCjsCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="phpCode" role="tabpanel">
        <code>
          <?php include("includes/CCthanksPHP.php") ?>
        </code>
      </div>

    </div>
  </div>




</section>


<?php include("includes/footer.php") ?>