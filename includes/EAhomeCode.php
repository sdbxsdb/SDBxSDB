<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">get_header</span><span style="color: #f8f8f2">();</span> <span style="color: #75715e">?&gt;</span>


<span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;EAHome&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

  <span style="color: #75715e">&lt;!--Back to Top Button--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;button</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;backToTop&quot;</span> <span style="color: #a6e22e">onclick=</span><span style="color: #e6db74">&quot;topFunction()&quot;</span> <span style="color: #a6e22e">title=</span><span style="color: #e6db74">&quot;Go to top&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span> <span style="color: #f8f8f2">&amp;#8593;</span><span style="color: rgb(231, 95, 85)">&lt;/button&gt;</span>
  <span style="color: #75715e">&lt;!--//End of Top Button--&gt;</span>

  <span style="color: #75715e">&lt;!--Home hero video--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;homeBgVid&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;homeBgVidWrapper&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
      <span style="color: #75715e">&lt;!-- &lt;video id=&quot;heroVideo&quot; src=&quot;a/wp-content/themes/EAfilmsCMS/assets/img/EAHeroVidCompressed2.mp4&quot; playsinline autoplay muted loop&gt;</span>
<span style="color: #75715e">      &lt;/video&gt; --&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;video</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;heroVideo&quot;</span> <span style="color: #a6e22e">playsinline</span> <span style="color: #a6e22e">autoplay</span> <span style="color: #a6e22e">muted</span> <span style="color: #a6e22e">loop</span><span style="color: rgb(231, 95, 85)">&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/video&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: #75715e">&lt;!--//End of Home hero video--&gt;</span>

  <span style="color: #75715e">&lt;!--Center logo and top text--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;img</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;centerLogo&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;home_page_hero_image&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

  <span style="color: #75715e">&lt;!--HOME ANCHOR TAG--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;homeAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>



  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;info&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;topHeading&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;top_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;p&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;top_text&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/p&gt;</span>

  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>


  <span style="color: #75715e">&lt;!--//End of center logo and top text--&gt;</span>

<span style="color: rgb(231, 95, 85)">&lt;/section&gt;</span>


<span style="color: #75715e">&lt;!--Featured Films--&gt;</span>
<span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;filmsAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>
<span style="color: #75715e">&lt;!--FILMS ANCHOR TAG--&gt;</span>
<span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;films&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;filmsBgImg&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_img_bg_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_films_heading&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span> <span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;p&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_films_text&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/p&gt;</span>


    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;row&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;col-lg-6 col-md-6 col-sm-6 mb-4&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal fade&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;modalFilm1&quot;</span> <span style="color: #a6e22e">tabindex=</span><span style="color: #e6db74">&quot;-1&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;dialog&quot;</span> <span style="color: #a6e22e">aria-labelledby=</span><span style="color: #e6db74">&quot;myModalLabel&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-dialog modal-lg&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;document&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-content&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-body mb-0 p-0&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;embed-responsive embed-responsive-16by9 z-depth-1-half&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                  <span style="color: rgb(231, 95, 85)">&lt;iframe</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;embed-responsive-item&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;https://www.youtube.com/embed/</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_1_link&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">?modestbranding=1&quot;</span> <span style="color: #a6e22e">frameborder=</span><span style="color: #e6db74">&quot;0&quot;</span> <span style="color: #a6e22e">allow=</span><span style="color: #e6db74">&quot;accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture&quot;</span> <span style="color: #a6e22e">allowfullscreen</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                  <span style="color: rgb(231, 95, 85)">&lt;/iframe&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-footer justify-content-center&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;button</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;btn btn-outline-primary btn-rounded btn-md ml-4&quot;</span> <span style="color: #a6e22e">data-dismiss=</span><span style="color: #e6db74">&quot;modal&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>Close<span style="color: rgb(231, 95, 85)">&lt;/button&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>





        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;film1&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;showreelimgs&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;modal&quot;</span> <span style="color: #a6e22e">data-target=</span><span style="color: #e6db74">&quot;#modalFilm1&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_1_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;i</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;showplay&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fas fa-play &quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;h6&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_1_title&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span> <span style="color: rgb(231, 95, 85)">&lt;/h6&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;small&gt;&lt;cite&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_1_subtext&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span> <span style="color: rgb(231, 95, 85)">&lt;/cite&gt;&lt;/small&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

      <span style="color: #75715e">&lt;!--**************--&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;col-lg-6 col-md-6 col-sm-6  mb-4&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>


        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal fade&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;modalFilm2&quot;</span> <span style="color: #a6e22e">tabindex=</span><span style="color: #e6db74">&quot;-1&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;dialog&quot;</span> <span style="color: #a6e22e">aria-labelledby=</span><span style="color: #e6db74">&quot;myModalLabel&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-dialog modal-lg&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;document&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-content&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-body mb-0 p-0&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;embed-responsive embed-responsive-16by9 z-depth-1-half&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                  <span style="color: rgb(231, 95, 85)">&lt;iframe</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;embed-responsive-item&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;https://www.youtube.com/embed/</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_2_link&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">?modestbranding=1&quot;</span> <span style="color: #a6e22e">frameborder=</span><span style="color: #e6db74">&quot;0&quot;</span> <span style="color: #a6e22e">allow=</span><span style="color: #e6db74">&quot;accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture&quot;</span> <span style="color: #a6e22e">allowfullscreen</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                  <span style="color: rgb(231, 95, 85)">&lt;/iframe&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>



              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;modal-footer justify-content-center&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;button</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;btn btn-outline-primary btn-rounded btn-md ml-4&quot;</span> <span style="color: #a6e22e">data-dismiss=</span><span style="color: #e6db74">&quot;modal&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>Close<span style="color: rgb(231, 95, 85)">&lt;/button&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>


        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;film2&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;showreelimgs&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;modal&quot;</span> <span style="color: #a6e22e">data-target=</span><span style="color: #e6db74">&quot;#modalFilm2&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_2_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;i</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;showplay&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fas fa-play &quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;h6&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_2_title&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span> <span style="color: rgb(231, 95, 85)">&lt;/h6&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;small&gt;&lt;cite&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featured_video_2_subtext&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span> <span style="color: rgb(231, 95, 85)">&lt;/cite&gt;&lt;/small&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
    <span style="color: #75715e">&lt;!--**************--&gt;</span>



<span style="color: rgb(231, 95, 85)">&lt;/section&gt;</span>
<span style="color: #75715e">&lt;!--//End of featured films--&gt;</span>

<span style="color: #75715e">&lt;!-- &lt;hr class=&quot;bookends&quot;&gt; --&gt;</span>
<span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;stagHR&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>

<span style="color: #75715e">&lt;!--About us--&gt;</span>
<span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;about&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;aboutAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>
  <span style="color: #75715e">&lt;!--ABOUT ANCHOR TAG--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;aboutBgImg&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;who_are_we_bg_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;aboutUsText&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;who_are_we_title&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;p&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;who_are_we_text&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/p&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>


<span style="color: rgb(231, 95, 85)">&lt;/section&gt;</span>
<span style="color: #75715e">&lt;!--//End of about us--&gt;</span>

<span style="color: #75715e">&lt;!-- &lt;hr class=&quot;bookends&quot;&gt; --&gt;</span>

<span style="color: #75715e">&lt;!--//Packages--&gt;</span>
<span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packages&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>
  <span style="color: #75715e">&lt;!--PACKAGES ANCHOR TAG--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesText&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;packages_title&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;p&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;packages_text&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/p&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>



    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesCards&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-group container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;highlightsWrapper&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseHighlights&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseHighlights&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;highlightsPackageImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-img-top&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;h5</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;highlightsTitle&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-title&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;highlightsBounceBtn&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;arrow bounce bounceBtn&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fa fa-angle-down fa-1x&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseHighlights&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseHighlights&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;&lt;/div&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;collapseHighlights&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featuretteWrapper&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFeaturette&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFeaturette&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featurettePackageImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-img-top&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;h5</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featuretteTitle&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-title&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featuretteBounceBtn&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;arrow bounce bounceBtn&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fa fa-angle-down fa-1x&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFeaturette&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFeaturette&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;&lt;/div&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;collapseFeaturette&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featureWrapper&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFeature&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFeature&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featurePackageImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-img-top&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;h5</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featureTitle&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card-title&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featureBounceBtn&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;arrow bounce bounceBtn&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fa fa-angle-down fa-1x&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFeature&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFeature&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;&lt;/div&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;collapseFeature&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;card card-body&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>


    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>




  <span style="color: #75715e">&lt;!--MOBILE PACKAGES SWIPE--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;carouselWrapper&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;carouselIndicators&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel slide&quot;</span> <span style="color: #a6e22e">data-ride=</span><span style="color: #e6db74">&quot;carousel&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-inner&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-item active&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;highlightsCaroBgImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packagesBgImg&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-caption  d-md-block&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;h5&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;highlights_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-item&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featuretteCaroBgImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packagesBgImg&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-caption  d-md-block&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;h5&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;featurette_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-item&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;featureCaroBgImg&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packagesBgImg&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;background-image: url(</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_img&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span><span style="color: #e6db74">);&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-caption d-md-block&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;h5&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h5&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;packageInfo&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;feature_list&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;a</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-control-prev&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#carouselIndicators&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">data-slide=</span><span style="color: #e6db74">&quot;prev&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fas fa-chevron-left caroIcons&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;</span>
        <span style="color: #75715e">&lt;!-- &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; --&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;span</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;sr-only&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>Previous<span style="color: rgb(231, 95, 85)">&lt;/span&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/a&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;a</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;carousel-control-next&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#carouselIndicators&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">data-slide=</span><span style="color: #e6db74">&quot;next&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fas fa-chevron-right caroIcons&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;</span>
        <span style="color: #75715e">&lt;!-- &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt; --&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;span</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;sr-only&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>Next<span style="color: rgb(231, 95, 85)">&lt;/span&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/a&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

  <span style="color: #75715e">&lt;!--END OF MOBILE SWIPE--&gt;</span>

  <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesBtmBgImg&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;packagesBtmText&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;require_something_more_title&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;p&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;require_more_text&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/p&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

  <span style="color: #75715e">&lt;!-- &lt;hr class=&quot;bookends&quot;&gt; --&gt;</span>
  <span style="color: #75715e">&lt;!--//End of packages--&gt;</span>


  <span style="color: #75715e">&lt;!--//FAQs--&gt;</span>
  <span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;FAQs&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>





    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;faqsAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>
    <span style="color: #75715e">&lt;!--FAQs ANCHOR TAG--&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;faqBgImg&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;faqText&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;a</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFAQs&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFAQs&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;faqs_title&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;h6&gt;</span><span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">the_field</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;faqs_text&#39;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">?&gt;</span><span style="color: rgb(231, 95, 85)">&lt;/h6&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/a&gt;</span>



        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;faqsBounceBtn&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;arrow bounce&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fa fa-angle-down fa-1x&quot;</span> <span style="color: #a6e22e">aria-hidden=</span><span style="color: #e6db74">&quot;true&quot;</span> <span style="color: #a6e22e">data-toggle=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#collapseFAQs&quot;</span> <span style="color: #a6e22e">role=</span><span style="color: #e6db74">&quot;button&quot;</span> <span style="color: #a6e22e">aria-expanded=</span><span style="color: #e6db74">&quot;false&quot;</span> <span style="color: #a6e22e">aria-controls=</span><span style="color: #e6db74">&quot;collapseFAQs&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/i&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;collapse&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;collapseFAQs&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container py-3&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;row&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;col-10 mx-auto&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
                <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;accordion&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;faqEA&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>


                  <span style="color: #75715e">&lt;?php</span> <span style="color: #f8f8f2">$args</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;post_type&#39;</span> <span style="color: rgb(231, 95, 85)">=&gt;</span> <span style="color: #e6db74">&#39;FAQS&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;posts_per_page&#39;</span> <span style="color: rgb(231, 95, 85)">=&gt;</span> <span style="color: #ae81ff">100</span> <span style="color: #f8f8f2">);</span>
                  <span style="color: #f8f8f2">$loop</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">WP_Query</span><span style="color: #f8f8f2">($args);</span>
                  <span style="color: #66d9ef">while</span> <span style="color: #f8f8f2">($loop</span><span style="color: rgb(231, 95, 85)">-&gt;</span><span style="color: #a6e22e">have_posts</span><span style="color: #f8f8f2">())</span> <span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$loop</span><span style="color: rgb(231, 95, 85)">-&gt;</span><span style="color: #a6e22e">the_post</span><span style="color: #f8f8f2">();</span>

                    <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&lt;div class=&quot;card&quot;&gt;</span>
<span style="color: #e6db74">                            &lt;div class=&quot;card-header&quot; id=&quot;faq&#39;</span><span style="color: #f8f8f2">;</span> <span style="color: #a6e22e">the_ID</span><span style="color: #f8f8f2">();</span> <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&quot;&gt;</span>
<span style="color: #e6db74">                              &lt;h5 class=&quot;mb-0&quot;&gt;</span>
<span style="color: #e6db74">                                &lt;button class=&quot;btn btn-link collapsed&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot;  aria-expanded=&quot;false&quot;</span>
<span style="color: #e6db74">                                data-target=&quot;#faqCollapse&#39;</span><span style="color: #f8f8f2">;</span> <span style="color: #a6e22e">the_ID</span><span style="color: #f8f8f2">();</span> <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&quot; aria-controls=&quot;faqCollapse&#39;</span><span style="color: #f8f8f2">;</span> <span style="color: #a6e22e">the_ID</span><span style="color: #f8f8f2">();</span> <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&quot;&gt;&#39;</span><span style="color: #f8f8f2">;</span>
                              <span style="color: #a6e22e">the_title</span><span style="color: #f8f8f2">();</span>
                            <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&lt;/button&gt;</span>
<span style="color: #e6db74">                              &lt;/h5&gt;</span>
<span style="color: #e6db74">                            &lt;/div&gt;&#39;</span><span style="color: #f8f8f2">;</span>

                      <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&lt;div id=&quot;faqCollapse&#39;</span><span style="color: #f8f8f2">;</span> <span style="color: #a6e22e">the_ID</span><span style="color: #f8f8f2">();</span> <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&quot; class=&quot;collapse&quot; aria-labelledby=&quot;faq&#39;</span><span style="color: #f8f8f2">;</span> <span style="color: #a6e22e">the_ID</span><span style="color: #f8f8f2">();</span> <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&quot; data-parent=&quot;#faqEA&quot;&gt;</span>
<span style="color: #e6db74">                              &lt;div class=&quot;card-body&quot;&gt;&#39;</span><span style="color: #f8f8f2">;</span>
                              <span style="color: #a6e22e">the_content</span><span style="color: #f8f8f2">();</span>
                              <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&#39;&lt;/div&gt;</span>
<span style="color: #e6db74">                              &lt;/div&gt;</span>
<span style="color: #e6db74">                            &lt;/div&gt;&#39;</span><span style="color: #f8f8f2">;</span>
                  <span style="color: #66d9ef">endwhile</span><span style="color: #f8f8f2">;</span> <span style="color: #75715e">?&gt;</span>

                <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: #75715e">&lt;!--/row--&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: #75715e">&lt;!--container--&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

  <span style="color: rgb(231, 95, 85)">&lt;/section&gt;</span>
  <span style="color: #75715e">&lt;!--//End of FAQs--&gt;</span>


  <span style="color: #75715e">&lt;!--CONTACT--&gt;</span>

  <span style="color: rgb(231, 95, 85)">&lt;section</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;contact&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

    <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;container contact-form&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;contact-image&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;img</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;contactLogo&quot;</span> <span style="color: #a6e22e">src=</span><span style="color: #e6db74">&quot;/wp-content/themes/EAfilmsCMS/assets/img/EAstagText.png&quot;</span> <span style="color: #a6e22e">width=</span><span style="color: #e6db74">&quot;200px&quot;</span> <span style="color: #a6e22e">alt=</span><span style="color: #e6db74">&quot;EverAfter logo&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

      <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;contactAnchor&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/div&gt;</span>
      <span style="color: #75715e">&lt;!--CONTACT ANCHOR TAG--&gt;</span>



      <span style="color: rgb(231, 95, 85)">&lt;form</span> <span style="color: #a6e22e">method=</span><span style="color: #e6db74">&quot;post&quot;</span> <span style="color: #a6e22e">action=</span><span style="color: #e6db74">&quot;/thankssubmit.php&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;h3&gt;</span>Drop Us a Message<span style="color: rgb(231, 95, 85)">&lt;/h3&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;row&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;col-sm&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;nameInput&quot;</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;name&quot;</span> <span style="color: #a6e22e">onkeyup=</span><span style="color: #e6db74">&quot;manage(this)&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;Your Name *&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;emailInput&quot;</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;email&quot;</span> <span style="color: #a6e22e">onkeyup=</span><span style="color: #e6db74">&quot;manage(this)&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;Your Email *&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;phone&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;Your Phone Number&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;weddingDatePicker&quot;</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;date&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;date&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;Your Wedding Date -&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;hear&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;How did you hear about us?&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

          <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;col&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;textarea</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;messageInput&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;message&quot;</span> <span style="color: #a6e22e">onkeyup=</span><span style="color: #e6db74">&quot;manage(this)&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-control&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot;Your Message *&quot;</span> <span style="color: #a6e22e">style=</span><span style="color: #e6db74">&quot;width: 100%; height: 254px;&quot;</span><span style="color: rgb(231, 95, 85)">&gt;&lt;/textarea&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

            <span style="color: rgb(231, 95, 85)">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;form-group&quot;</span><span style="color: rgb(231, 95, 85)">&gt;</span>
              <span style="color: rgb(231, 95, 85)">&lt;input</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;contactSubmitBtn&quot;</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;submit&quot;</span> <span style="color: #a6e22e">disabled</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;btnSubmit&quot;</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;btn&quot;</span> <span style="color: #a6e22e">value=</span><span style="color: #e6db74">&quot;Send Message&quot;</span> <span style="color: rgb(231, 95, 85)">/&gt;</span>
            <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
          <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
        <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>
      <span style="color: rgb(231, 95, 85)">&lt;/form&gt;</span>
    <span style="color: rgb(231, 95, 85)">&lt;/div&gt;</span>

    

  <span style="color: rgb(231, 95, 85)">&lt;/section&gt;</span>

  <span style="color: #75715e">&lt;!-- &lt;section id=&quot;calendar&quot;&gt;</span>
<span style="color: #75715e">    &lt;iframe src=&quot;https://calendar.google.com/calendar/embed?height=600&amp;amp;wkst=1&amp;amp;bgcolor=%23B39DDB&amp;amp;ctz=Europe%2FLondon&amp;amp;src=c2FtZG9uYWdoeWJlbGxAZ21haWwuY29t&amp;amp;color=%237986CB&amp;amp;showTitle=0&amp;amp;showNav=1&amp;amp;showDate=1&amp;amp;showPrint=0&amp;amp;showTabs=0&amp;amp;showCalendars=0&amp;amp;showTz=0&quot; style=&quot;border-width:0&quot; width=&quot;800&quot; height=&quot;600&quot; frameborder=&quot;0&quot; scrolling=&quot;no&quot;&gt;&lt;/iframe&gt;</span>
<span style="color: #75715e">    &lt;/section&gt; --&gt;</span>


  



  <span style="color: #75715e">&lt;!--//End of contact--&gt;</span>


  <span style="color: #75715e">&lt;?php</span> <span style="color: #a6e22e">get_footer</span><span style="color: #f8f8f2">();</span> <span style="color: #75715e">?&gt;</span>
</pre></div>
