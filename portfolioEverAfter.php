<?php  include("includes/header_nav.php") ?>


      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>EverAfter Films</h1>
            </div>
            <div id="text">
              <p>A website designed and built for a wedding filming company client for use in Wordpress.  <br>I looked after everything from domain transfers, Gmail use with custom email and social media linkage customization.  <br><br>Built using HTML 5, PHP, SCSS, Bootstrap 4, JavaScript, Jquery and then optimized for use within Wordpress so the client can change headings, text, images and add as many FAQ tabs as they like. The site contains: 
                <ul class="listElements">
                  <li>Custom PHP fuctions to create custom posts</li>
                  <li>Loading page with animations</li>
                  <li>Retractable navbar and top logo on scroll</li>
                  <li>YouTube API Hero Video</li>
                  <li>Page position anchors</li>
                  <li>Optimized as much as possible for speed</li>
                  <li>Smooth scroll & Back to top</li>
                  <li>Videos within modals</li>
                  <li>Accordion menus</li>
                  <li>Text alteration depending on screen size</li>
                  <li>Contact submission forms with validation</li>
                  <li>Autoplay header video</li>
                  <li>Fully responsive from 2560x1080 all the way down to iPhone 5</li>
                  <li>Tappable numbers and emails for handheld devices</li>
                  <li>and more</li>
                </ul><br>
              <strong>Link to the full site <a href="https://www.everafterfilmsni.com/">here.</a></strong>
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
        <a class="nav-link" data-toggle="tab" href="#phpCode" aria-controls="phpCode" role="tab">Contact Submission Form PHP</a>
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
              <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Full Site</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab7" aria-controls="tab6" role="tab">Footer</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">

        <div class="tab-pane active" id="tab0" role="tabpanel">
            <?php include ("includes/EAheadernavCode.php") ?>
          </div>

          <div class="tab-pane active" id="tab1" role="tabpanel">
            <?php include ("includes/EAhomeCode.php") ?>
          </div>

          

          <div class="tab-pane" id="tab7" role="tabpanel">
            <?php include ("includes/EAfooterCode.php") ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane active" id="websiteTab" role="tabpanel">
      <iframe src="https://www.everafterfilmsni.com/" frameborder="0"></iframe>
    </div>

    <div class="tab-pane" id="cssCode" role="tabpanel">
      <code>
        <?php include ("includes/EAcssCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="jsCode" role="tabpanel">
      <code>
        <?php include ("includes/EAjsCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="phpCode" role="tabpanel">
      <code>
        <?php include ("includes/EAthanksPHP.php") ?>
      </code>
    </div>

  </div>
</div>




      </section>


<?php  include("includes/footer.php") ?>
