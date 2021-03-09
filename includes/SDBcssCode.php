<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">$grey</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">68</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">76</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">97</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">$blue</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">183</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>

<span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #66d9ef">@keyframes</span> <span style="color: #f92672">bounce</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f92672">0</span><span style="color: #960050; background-color: #1e0010">%</span><span style="color: #f92672">,</span> <span style="color: #f92672">20</span><span style="color: #960050; background-color: #1e0010">%</span><span style="color: #f92672">,</span> <span style="color: #f92672">50</span><span style="color: #960050; background-color: #1e0010">%</span><span style="color: #f92672">,</span> <span style="color: #f92672">80</span><span style="color: #960050; background-color: #1e0010">%</span><span style="color: #f92672">,</span> <span style="color: #f92672">100</span><span style="color: #960050; background-color: #1e0010">%</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
  <span style="color: #f92672">40</span><span style="color: #960050; background-color: #1e0010">%</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-30</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
  <span style="color: #f92672">60</span><span style="color: #960050; background-color: #1e0010">%</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-15</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//BACK TO TOP BUTTON//</span>
<span style="color: #f8f8f2">#backToTop</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">32</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
  <span style="color: #a6e22e">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">-webkit-transition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">opacity</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">opacity</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">99</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//NAVBAR STYLING//</span>
<span style="color: #a6e22e">.navbar-toggler</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.navbar-light</span> <span style="color: #a6e22e">.navbar-nav</span> <span style="color: #a6e22e">.nav-link</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.navbar-collapse</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">104</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f92672">nav</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">183</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">97</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-bottom</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">3</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">107</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f8f8f2">#portfolioDropdown</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">.dropdown-menu</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
      <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-45</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.dropdown-item</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
      <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>


      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
        <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>



  <span style="color: #f8f8f2">#navbarLhs{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#navName</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">18</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#navLogo</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#navbarRhs</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #f92672">span</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">font-family</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;Rubik Mono One&#39;</span><span style="color: #f92672">,</span> <span style="color: #66d9ef">sans-serif</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">letter-spacing</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.3</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

      <span style="color: #f8f8f2">}</span>
    
      <span style="color: #f92672">cite</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">font-family</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;Rubik Mono One&#39;</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">12</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #75715e">//\\NAVBAR STYLING//</span>

<span style="color: #75715e">//FOOTER STYLING//</span>

  <span style="color: #f8f8f2">#footer</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
    <span style="color: #75715e">//\\FOOTER STYLING//</span>



<span style="color: #75715e">//** HOME PAGE STYLING **//</span>

<span style="color: #f8f8f2">#home</span> <span style="color: #f8f8f2">{</span>


  <span style="color: #75715e">//WELCOME STYLING//</span>

  <span style="color: #f8f8f2">#headerBg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">box-sizing</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">box;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1.1</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">150</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">557px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">220</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">175</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">175</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">175</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #75715e">//\\WELCOME STYLING//</span>

<span style="color: #75715e">//ABOUT ME STYLING//</span>
  
  <span style="color: #f8f8f2">#aboutMe</span> <span style="color: #f8f8f2">{</span>
    
    <span style="color: #f8f8f2">#aboutMeText</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1.1</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.arrow</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#aboutBounceBtn</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">48</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
    
    <span style="color: #a6e22e">.arrow:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    
    <span style="color: #a6e22e">.bounce</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">-webkit-animation</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">bounce</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">infinite;</span>
      <span style="color: #a6e22e">animation</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">bounce</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">infinite;</span>
    <span style="color: #f8f8f2">}</span>


  <span style="color: #f8f8f2">#aboutLogoWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#aboutLogo</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-80</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#aboutMeAnchor</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">visibility</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-255</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#aboutMeWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/brickBg.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">183</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.678</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">600</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">557px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">980</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#aboutMeTitle</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">557px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//\\ABOUT ME STYLING//</span>

  <span style="color: #75715e">//SKILLS STYLING//</span>

  <span style="color: #f8f8f2">#mainSlider</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">pointer-events</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">visible</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.slider</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">-webkit-appearance</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #a6e22e">outline</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">-webkit-transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">.2</span><span style="color: #66d9ef">s</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">opacity</span> <span style="color: #ae81ff">.2</span><span style="color: #66d9ef">s</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">pointer-events</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.slider</span><span style="color: #f92672">::-</span><span style="color: #f8f8f2">webkit-slider-thumb</span> <span style="color: #f8f8f2">{</span> 
    <span style="color: #a6e22e">appearance</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>   
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/samavatarnobgcopy.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#skills</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">15</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span><span style="color: #ae81ff">0.50</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">min-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
 
  <span style="color: #a6e22e">.sliderNo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
  
  <span style="color: #f8f8f2">}</span>

    <span style="color: #75715e">//\\SKILLS STYLING//</span>



  <span style="color: #75715e">//PORTFOLIO STYLING//</span>

  <span style="color: #f8f8f2">#spinner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/tenor.gif)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">contain;</span>
    <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">-webkit-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">3</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">30</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">-moz-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">3</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">30</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">3</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">30</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#portfolio</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #f8f8f2">#portfolioTitle</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card-title</span><span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#portfolioAnchor</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">12</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>

      <span style="color: #f92672">h5</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$grey;</span>

        <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
          <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>

          <span style="color: #a6e22e">.card-img-top</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">white;</span>
          <span style="color: #f8f8f2">}</span>
        <span style="color: #f8f8f2">}</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card-img-top</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">150</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">object-fit</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
      <span style="color: #a6e22e">object-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">top</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#topLcard</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#topRcard</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#btmLcard</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#btmRcard</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">li</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-transform</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">uppercase</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">font-style</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">italic</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

    <span style="color: #75715e">//\\PORTFOLIO STYLING//</span>

<span style="color: #75715e">//CONTACT STYLING//</span>

  <span style="color: #f8f8f2">#contact</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#contactLogo</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.contact-image</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">padding-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">textarea</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">150</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#contactAnchor</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>
    <span style="color: #75715e">//\\CONTACT STYLING//</span>

    <span style="color: #75715e">//** END OF HOME PAGE STYLING **//</span>

 
    <span style="color: #75715e">//** PORTFOLIO PAGE TEMPLATE PAGE STYLING **//</span>


<span style="color: #f8f8f2">#portfolioPageTemplate</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#header</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    

    <span style="color: #f8f8f2">#text</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#code</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">overflow-x</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>

    <span style="color: #a6e22e">.nav-link</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$grey;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.active</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>
    <span style="color: #f8f8f2">}</span>

    

    <span style="color: #f8f8f2">#tabContent</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">#dee2e6</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">border-right</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">#dee2e6</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">border-left</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">#dee2e6</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span><span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">box-sizing</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">box;</span>
    <span style="color: #f8f8f2">}</span>

    




    <span style="color: #a6e22e">.nav-link.active</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$blue;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.tab-pane</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">650</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">overflow-y</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">overflow-x</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">pre</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

        <span style="color: #75715e">//** END OF PORTFOLIO PAGE TEMPLATE PAGE STYLING **//</span>

        <span style="color: #75715e">//** PORTFOLIO CINECOPTERS PAGE TEMPLATE PAGE STYLING **//</span>

    <span style="color: #f8f8f2">#tabContent</span> <span style="color: #f8f8f2">{</span>
    
      <span style="color: #f92672">h4</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #f92672">img</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
        
        
      <span style="color: #f8f8f2">}</span>

      <span style="color: #f92672">iframe</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
        
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
    
    <span style="color: #75715e">//** END OF PORTFOLIO CINECOPTERS PAGE TEMPLATE PAGE STYLING **//</span>

    <span style="color: #75715e">//** PORTFOLIO SDB PAGE TEMPLATE PAGE STYLING **//</span>

    <span style="color: #f8f8f2">#SDBIndexImg1</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">#SDBIndexImg2</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #75715e">//** END OF PORTFOLIO SDB PAGE TEMPLATE PAGE STYLING **//</span>

    
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//Thanks submit styling//</span>

<span style="color: #a6e22e">.modal-dialog</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">calc</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">100</span><span style="color: #66d9ef">vh</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">60</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">flex;</span>
  <span style="color: #a6e22e">flex-direction</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">column;</span>
  <span style="color: #a6e22e">justify-content</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #66d9ef">@media</span><span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">768px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">calc</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">100</span><span style="color: #66d9ef">vh</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//Send Message button disabled styling//</span>
<span style="color: #f8f8f2">#contactSubmitBtn</span><span style="color: #a6e22e">:disabled</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #f92672">not-</span><span style="color: #f8f8f2">allowed;</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//***** END OF SDB WEBSITE STYLING*****//</span>
</pre></div>
