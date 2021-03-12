<?php include("includes/header_nav.php") ?>


<section id="portfolioPageTemplate">

  <div class="container">
    <div id="header">
      <div id="title">
        <h1>FamGram</h1>
      </div>
      <div id="text">
        <p>With all the lockdowns and not being able to see family I came up with the idea of creating this website - Family Instagram or FamGram - to allow my family to stay up to date with each other. It's an Instagram style platform I built using PHP Laravel. I used the command line to install and use:
        <ul>
          <li>HomeBrew</li>
          <li>Composer</li>
          <li>Laravel</li>
          <li>NodeJS</li>
          <li>NPM</li>
          <li>PHP Artisan</li>
          <li>Intervention Image</li>
        </ul>
        <br>It's been a great way for older relatives who don't have any form of social media to see photos of weddings, babies, pets etc. <br>It's a simple idea which allows family members to:<br><br>
        <ul class="listElements">
          <li>Create a user which is stored to the database</li>
          <li>Get a welcome email upon registering</li>
          <li>Edit and add a profile picture, title, description and URL</li>
          <li>Upload a post with caption</li>
          <li>Follow and unfollow users</li>
          <li>Visits other users profiles</li>
          <li>Shows a newsfeed of their followed users posts</li>
          <br><br>
          At the moment it's a personal family platform but with a bit more work and refinement I would plan to make it accessable to the public and allow each family to only view and work within their own "bubble".
        </ul><br>
        <a href="https://github.com/sdbxsdb/famGram" target="_blank"><i class="fab fa-github" style="font-size: 40px;"></i></a>
        <div>
          <strong>Link to the full code <a href="https://github.com/sdbxsdb/famGram" target="_blank">here.</a></strong>
        </div>

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
          <a class="nav-link active" data-toggle="tab" href="#websiteTab" aria-controls="websiteTab" role="tab" aria-expanded="true">Video</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#htmlCode" aria-controls="htmlCode" role="tab">PHP</a>
        </li>
      </ul>
    </div>
    <div id="tabContent" class="tab-content">
      <div class="tab-pane" id="htmlCode" role="tabpanel">
        <div class="">
          <div class="">
            <ul class="nav nav-tabs" id="innerTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tab0" aria-controls="tab0" role="tab" aria-expanded="true">index.blade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">create.blade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab" aria-expanded="true">show.blade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab" aria-expanded="true">Controller</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab4" aria-controls="tab4" role="tab" aria-expanded="true">Routes</a>
              </li>

            </ul>
          </div>
          <div class="tab-content">


            <div class="tab-pane active" id="tab0" role="tabpanel">
              <?php include("includes/famGramIndexCode.php") ?>
            </div>

            <div class="tab-pane" id="tab1" role="tabpanel">
              <?php include("includes/famGramCreateCode.php") ?>
            </div>

            <div class="tab-pane" id="tab2" role="tabpanel">
              <?php include("includes/famGramShowCode.php") ?>
            </div>

            <div class="tab-pane" id="tab3" role="tabpanel">
              <?php include("includes/famGramControllerCode.php") ?>
            </div>

            <div class="tab-pane" id="tab4" role="tabpanel">
              <?php include("includes/famGramRoutesCode.php") ?>
            </div>

          </div>
        </div>
      </div>
      <div class="tab-pane active" id="websiteTab" role="tabpanel">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/wa-rlc44v5I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="tab-pane" id="cssCode" role="tabpanel">
        <code>
          <?php include("includes/SMcssCode.php") ?>
        </code>
      </div>

      <div class="tab-pane" id="jsCode" role="tabpanel">
        <code>
          <?php include("includes/SMjsCode.php") ?>
        </code>
      </div>


    </div>




</section>


<?php include("includes/footer.php") ?>