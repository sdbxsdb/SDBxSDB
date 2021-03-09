<?php  include("includes/header_nav.php") ?>

      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>Trainer Jo  |  Personal Trainer</h1>
            </div>
            <div id="text">
              <p> A website designed (logo included) and built for a personal trainer. <br><br>One of the first websites I built, and I'll admit not the most striking or the most efficient under the hood but it gave me the insight to how I wanted to improve my next build. <br>It includes an online video library for the PT to show their own workout videos as well as the PTs own Google calendar of class dates. <br><br>The next revisit will see a fairly large change in the video library, removing the mass of iframes and replacing them with a YouTube API to cut down on lines of code and give more control over the videos themselves.  Maybe even a full redesign too.</p>  
              <br>
              <p class="layoutWarning"><small><cite>*Please note that layout of website in the pane below may not be true if viewed on a mobile device due to the viewer window being too small.</cite></small></p>
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
        <a class="nav-link" data-toggle="tab" href="#phpCode" aria-controls="phpCode" role="tab">Contact Form PHP</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#jsCode" aria-controls="jsCode" role="tab">JavaScript / jQuery</a>
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
              <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab" aria-expanded="true">About &amp; Qualifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab">Classes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab4" aria-controls="tab4" role="tab">Video Library</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab5" aria-controls="tab5" role="tab">Footer</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">

          <div class="tab-pane active" id="tab0" role="tabpanel">
            <?php include ("includes/TJheaderCode.php") ?>
          </div>

          <div class="tab-pane active" id="tab1" role="tabpanel">
            <?php include ("includes/TJhomeCode.php") ?>
          </div>

          <div class="tab-pane" id="tab2" role="tabpanel">
            <?php include("includes/TJaboutCode.php") ?>
          </div>

          <div class="tab-pane" id="tab3" role="tabpanel">
            <?php include("includes/TJclassesCode.php") ?>
          </div>

          <div class="tab-pane" id="tab4" role="tabpanel">
            <?php include("includes/TJvideoCode.php") ?>
          </div>

          <div class="tab-pane" id="tab5" role="tabpanel">
            <?php include("includes/TJfooterCode.php") ?>
          </div>

        </div>
      </div>
    </div>
    <div class="tab-pane active" id="websiteTab" role="tabpanel">
      <iframe src="https://sdbtrainerjo.xyz" frameborder="0"></iframe>
    </div>

    <div class="tab-pane" id="cssCode" role="tabpanel">
      <code>
        <?php include ("includes/TJcssCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="jsCode" role="tabpanel">
      <code>
        <?php include ("includes/TJjsCode.php") ?>
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