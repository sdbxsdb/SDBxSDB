<?php  include("includes/header_nav.php") ?>

      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>Title of the items</h1>
            </div>
            <div id="text">
              <p> Some text describing the website / item and what was used in it. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus repudiandae possimus atque alias molestias, dicta aliquid ipsa vel animi nostrum eaque vero officia neque! Consequatur eligendi necessitatibus iste ad dolorem?</p>  
            </div>
          </div>
        </div>

        <div class="container" id="code">
          <div class="container nav nav-tabs" id="tabTitle" role="tablist">
            <a class="nav-item nav-link active" id="fullWebsiteTab" data-toggle="tab" href="#fullWebsite" role="tab">Website</a>
            <a class="nav-item nav-link" id="htmlTab" data-toggle="tab" href="#html" role="tab">HTML</a>
            <a class="nav-item nav-link" id="SCSSTab" data-toggle="tab" href="#SCSS" role="tab">SCSS / CSS</a>
            <a class="nav-item nav-link" id="JSTab" data-toggle="tab" href="#JS" role="tab">JS</a>
          </div>

          <div class="container tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="fullWebsite" role="tabpanel">
              Test 1
            </div>
            <div class="tab-pane fade" id="html" role="tabpanel">
              Test 2
            </div>
            <div class="tab-pane fade" id="SCSS" role="tabpanel">
              Test 3
            </div>
            <div class="tab-pane fade" id="JS" role="tabpanel">
              Test 4
            </div>
          </div>
        </div>

        



      </section>

      <?php  include("includes/footer.php") ?>