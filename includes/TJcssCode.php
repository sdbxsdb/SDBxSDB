<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">$pink</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">#fab8c4</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$white</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">$grey</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">114</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">93</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">112</span><span style="color: #f8f8f2">);</span>


<span style="color: #75715e">// GENERIC PAGE STYLING //</span>
<span style="color: rgb(231, 95, 85)">nav</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$white;</span>
  <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$grey;</span>

  <span style="color: #a6e22e">.dropdown-menu</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$pink;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-35</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.dropdown-item</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$pink;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:active</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$white;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: rgb(231, 95, 85)">button</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#navName</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">15</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#footer</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #75715e">// END OF GENERIC PAGE STYLING //</span>

<span style="color: #75715e">// HOME PAGE STYLING //</span>
<span style="color: #f8f8f2">#home</span> <span style="color: #f8f8f2">{</span>
  
  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/benchfitness2.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#quote1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>

    <span style="color: rgb(231, 95, 85)">h6</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.cardInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    
    
    <span style="color: #a6e22e">.card-group</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-right</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">min-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">500</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>
  
  <span style="color: #f8f8f2">#whatIdoImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/kettlebells.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-70</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#healthyBodyImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/happyrunner.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-80</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h2</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>



  <span style="color: #f8f8f2">#contactWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$pink;</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-sizing</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">border</span><span style="color: rgb(231, 95, 85)">-</span><span style="color: #f8f8f2">box;</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #a6e22e">.contact-image</span>  <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#contactLogo</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">white;</span>
      <span style="color: #a6e22e">position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: rgb(231, 95, 85)">h3</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">// END OF HOME PAGE STYLING //</span>

<span style="color: #75715e">// ABOUT PAGE STYLING //</span>

<span style="color: #f8f8f2">#about</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #75715e">// * {</span>
  <span style="color: #75715e">//   outline: solid 1px red;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/resistbands.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">175</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#aboutInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// text-align: center;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#qualiWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-sizing</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">border</span><span style="color: rgb(231, 95, 85)">-</span><span style="color: #f8f8f2">box;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">hr</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">border</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.card-img-bottom</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// background-attachment: fixed;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#PTimg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/Personal_Trainer_2.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">-120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#selfMyoImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/Self-Myofascial-Release-845x321.jpeg)</span> <span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">-22</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#refImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise-referral-ukactive.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#onlineclasses</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise7.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">bottom</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">175</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoCardsWrapper{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.card-img-top</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">125</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">max-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.videoCards</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: rgb(231, 95, 85)">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-decoration</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">black;</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$grey;</span>
        <span style="color: #a6e22e">cursor</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg1</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise1.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg2</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise2.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise3.jpeg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise4.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg5</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise5.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg6</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise6.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg7</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise7.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#videoImg8</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise8.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">.modal-body</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #a6e22e">.modal-content</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">800</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.modal-header</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.modal-content</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-150</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#allclasses</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise8.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">175</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#classesCardsWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>

    <span style="color: rgb(231, 95, 85)">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">text-decoration</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">black;</span>
      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">$grey;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card-img-top</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">125</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">max-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#classesImg1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/resistbands.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#classesImg2</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/happyrunner.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#classesImg3</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/Personal_Trainer_2.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#groupOutdoorClasses</span> <span style="color: #f8f8f2">{</span>
  
  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise6.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">175</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">a</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#benefitsImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/kettlebells.png)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.cardInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>

    <span style="color: rgb(231, 95, 85)">h2</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    
    
    <span style="color: #a6e22e">.card-group</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-right</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">min-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">500</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>
  
  <span style="color: #f8f8f2">#benefitsImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/benchfitness2.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-70</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#typesImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise4.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#Training</span> <span style="color: #f8f8f2">{</span>
  
  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/Personal_Trainer_2.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">175</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">a</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#TrainingbenefitsImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/kettlebells.png)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.cardInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>

    <span style="color: rgb(231, 95, 85)">h2</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    
    
    <span style="color: #a6e22e">.card-group</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding-right</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">min-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">500</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>
  
  <span style="color: #f8f8f2">#TrainingbenefitsImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/benchfitness2.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-70</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#TrainingtypesImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/benchfitness.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-70</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#TrainingdietImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/exercise5.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">-70</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#booking</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">#topBanner</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/booking.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-repeat</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">155</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">70</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">86</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">0.459</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topBannerText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: rgb(231, 95, 85)">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">padding-left</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">#topBannerTitle1</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">border-bottom</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">4</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$pink;</span>
      <span style="color: #a6e22e">max-width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">230</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">line-height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">1.75</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: rgb(231, 95, 85)">a</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#TrainingbenefitsImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">url(/img/kettlebells.png)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#bookingSystem</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">$grey;</span>
    <span style="color: #a6e22e">width</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">600</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding-top</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>
</pre></div>
