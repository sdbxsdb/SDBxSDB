<?php  include("includes/header_nav.php") ?>

      <section id="portfolioPageTemplate">

        <div class="container">
          <div id="header">
            <div id="title">
              <h1>Smart Mirror</h1>
            </div>
            <div id="text">
              <p> A mixture of software and hardware - A mirror when off, a display when on.<br><br>I love working with my hands so when I saw a concept of a smart mirror a few years ago I knew I had to build my own someday.  I started off by dismantling an old display to it's bare bones.  Then I attached a 2 way glass mirror to the LCD screen with industrial adhesive.  <br><br>Built with the use of Raspberry Pi, a number APIs, AJAX and some custom elements the mirror displays: </p>
              <ul class="listElements">
                <li>Local time in analogue and digital 24hr format</li>
                <li>Local weather with visual displays &amp; updates every 30mins</li>
                <li>Live Sky News</li>
                <li>What's playing on my Spotify with album artwork</li>
                <li>A daily fact about cats!</li>
              </ul> 
              <br>
              <p>A nice feature I implemented was that when there is music playing the news is muted and when there's no music the news is unmuted.</p>
            </div>
          </div>
        </div>

<div class="container" id="code">
  <div class="">
    <ul class="nav nav-tabs" id="outerTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#websiteTab" aria-controls="websiteTab" role="tab" aria-expanded="true">Video (best with sound)</a>
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
        <a class="nav-link" data-toggle="tab" href="#SMPhotos" aria-controls="SMPhotos" role="tab">Photos</a>
      </li>
    </ul>
  </div>
  <div id="tabContent" class="tab-content">
    <div class="tab-pane" id="htmlCode" role="tabpanel">
      <div class="">
        <div class="">
          <ul class="nav nav-tabs" id="innerTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab0" aria-controls="tab0" role="tab" aria-expanded="true">Header</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab" aria-expanded="true">Main</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab" aria-expanded="true">Footer</a>
            </li>
          </ul>
        </div>
        <div class="tab-content">


          <div class="tab-pane active" id="tab0" role="tabpanel">
            <?php include ("includes/SMheaderCode.php") ?>
          </div>

          <div class="tab-pane" id="tab1" role="tabpanel">
            <?php include ("includes/SMhtmlCode.php") ?>
          </div>

          <div class="tab-pane" id="tab2" role="tabpanel">
            <?php include ("includes/SMfooterCode.php") ?>
          </div>

        </div>
      </div>
    </div>
    <div class="tab-pane active" id="websiteTab" role="tabpanel">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2zdCBgs8KOc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="tab-pane" id="cssCode" role="tabpanel">
      <code>
        <?php include ("includes/SMcssCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="jsCode" role="tabpanel">
      <code>
        <?php include ("includes/SMjsCode.php") ?>
      </code>
    </div>

    <div class="tab-pane" id="SMPhotos" role="tabpanel">
      <div class="container" id="imgGalleryWrapper">
        <div class="row">
          <div class="row">
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM1" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - Spotify"
                        data-image="/img/smartmirror/IMG_2294-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2294-min.jpg">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM3 class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - Sky News"
                        data-image="/img/smartmirror/IMG_2295-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2295-min.jpg"
                        data-target="#image-gallery">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM3"class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - Time and Weather"
                        data-image="/img/smartmirror/IMG_2296-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2296-min.jpg">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM4" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - Full Size"
                        data-image="/img/smartmirror/IMG_2297-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2297-min.jpg">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM5" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - Full Size"
                        data-image="/img/smartmirror/IMG_2298-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2298-min.jpg">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM6" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - News and Music"
                        data-image="/img/smartmirror/IMG_2301-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2301-min.jpg">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                      <a id="SM7" class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Smart Mirror - News and Music"
                        data-image="/img/smartmirror/IMG_2302-min.jpg"
                        data-target="#image-gallery">
                          <img class="img-thumbnail"src="/img/smartmirror/IMG_2302-min.jpg">
                      </a>
                  </div>
                  
            


                <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="image-gallery-title"></h4>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                                </button>

                                <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>



      </section>

  <?php  include("includes/footer.php") ?>
