<?php  include("includes/header_nav.php") ?>


      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>Family Gram</h1>
            </div>
            <div id="text">
              <p>This is an Instagram style platform I built using PHP Laravel.  With all the lockdowns and not being able to see family I came up with the idea of creating this website to allow my to stay up to date with each other.<br><br>It's been a great way for older relatives who don't have any form of social media to see photos of weddings, babies, pets etc.<br><br> It's a simply idea which allows family members to:
                <ul class="listElements">
                  <li>Create a user (they get a welcome email upon registering)</li>
                  <li>Edit and add a profile picture, title, description and URL</li>
                  <li>Upload a post with caption</li>
                  <li>Follow and unfollow users</li>
                  <li>Visits other users profiles</li>
                  <li>Shows a newsfeed of their followed users posts</li>
                <br><br>
                At the moment it's a personal family platform but with a bit more work and refinement I would plan to make it accessable to the public and allow each family to only view their own "bubble".
                </ul><br>
              <strong>Link to the full site <a href="#">here.</a></strong>
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
      <p>Upload in progress</p>
      <iframe src="" frameborder="0"></iframe>
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
