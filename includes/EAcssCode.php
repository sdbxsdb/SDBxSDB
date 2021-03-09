<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f8f8f2">$purpleFull</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#5D675E</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$cream</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">232</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">195</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>

<span style="color: #f8f8f2">#load</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">9999</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">flex;</span>
  <span style="color: #a6e22e">justify-content</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">align-items</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>

  <span style="color: #f8f8f2">#loadingThingsWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #75715e">// outline: solid 1px yellow;</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">flex;</span>
    <span style="color: #a6e22e">flex-direction</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">column;</span>
    <span style="color: #a6e22e">align-items</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#loadingLogo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #75715e">// outline: solid 1px blue;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#bouncingBallsGif</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// outline: solid 1px red;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#loadingDeer</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// outline: solid 1px red;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.packagesBgImg</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">-webkit-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">-moz-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #f92672">hr</span><span style="color: #a6e22e">.bookends</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">hsl</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">transparent</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">11</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-style</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">double</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f92672">hr</span><span style="color: #a6e22e">.bookends:before</span><span style="color: #f92672">,</span>
<span style="color: #f92672">hr</span><span style="color: #a6e22e">.bookends:after</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-3.536</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">7.071</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">7.071</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">7.071</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">7.071</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">hsl</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">border-style</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">double</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">box-sizing</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">box;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f92672">hr</span><span style="color: #a6e22e">.bookends:before</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateZ</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #a6e22e">rotate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-45</span><span style="color: #66d9ef">deg</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-21</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f92672">hr</span><span style="color: #a6e22e">.bookends:after</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateZ</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #a6e22e">rotate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">135</span><span style="color: #66d9ef">deg</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-21</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#stagHR</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/EAStagLogo.png)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">contain;</span>
  <span style="color: #a6e22e">background-repeat</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #66d9ef">@keyframes</span> <span style="color: #f92672">bounce</span> <span style="color: #f8f8f2">{</span>


  <span style="color: #f92672">100</span><span style="color: #960050; background-color: #1e0010">%</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">60</span><span style="color: #960050; background-color: #1e0010">%</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-15</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.bounce</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">animation</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">bounce</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">infinite;</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #a6e22e">.fa-angle-down:hover</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">73</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">138</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">89</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.arrow</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
  <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">white;</span>

  <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// animation-play-state: paused;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.lineEitherSide</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">30</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.lineEitherSide:before</span><span style="color: #f92672">,</span>
<span style="color: #a6e22e">.lineEitherSide:after</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">35</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">51</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">content</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;\a0&#39;</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">82</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">82</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">82</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.lineEitherSide:before</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-54</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">right</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #75715e">//NAVBAR SCROLL</span>
<span style="color: #a6e22e">.smart-scroll</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1030</span><span style="color: #f8f8f2">;</span>
  <span style="color: #75715e">// background-color: rgba(255, 255, 255, 0.747); //background color is being applied in jquery line number 267</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.scrolled-down</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">all</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">ease-in-out;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.scrolled-up</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">all</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">ease-in-out;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.fadeOut</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">all</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">ease-in-out;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #a6e22e">.fadeIn</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">all</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">ease-in-out;</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #75715e">//UNIVERSAL STYLING</span>
<span style="color: #f92672">html,</span>
<span style="color: #f92672">body</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">overflow-x</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
  <span style="color: #75715e">// overflow-y: hidden;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f92672">h3,</span> <span style="color: #f92672">h6,</span> <span style="color: #f92672">h5</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">font-family</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">Roboto</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">Arial</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">Helvetica</span><span style="color: #f92672">,</span> <span style="color: #66d9ef">sans-serif</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #a6e22e">.btn</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
  <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">white;</span>
  <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
  <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#768a7e</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">#ffffff</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #f8f8f2">#backToTop</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1024px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">transparent</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">32</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">opacity</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">s</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">99</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>

  <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:focus</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">outline</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #f92672">header</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#logoWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
     
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1024px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#logo-main</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#navbarWrapper</span> <span style="color: #f8f8f2">{</span>


  <span style="color: #a6e22e">font-family</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">Roboto</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">Arial</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">Helvetica</span><span style="color: #f92672">,</span> <span style="color: #66d9ef">sans-serif</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #f8f8f2">#navbar</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f92672">ul</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.nav-link</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">.navbar-collapse</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">25</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1024px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">90</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">991px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">104</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
      <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.navbar-toggler</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>


    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">991px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin-right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">.2</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.navbar-toggler-icon</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">8</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>

    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f92672">li</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">text-transform</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">uppercase</span><span style="color: #f8f8f2">;</span>


      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">scale</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">1.04</span><span style="color: #f8f8f2">)a;</span>
        <span style="color: #a6e22e">transition</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">All</span> <span style="color: #ae81ff">0.2</span><span style="color: #66d9ef">s</span> <span style="color: #f8f8f2">ease-in-out;</span>
        <span style="color: #75715e">// text-shadow: 1px 1px 1px rgb(0, 0, 0);</span>


      <span style="color: #f8f8f2">}</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:focus-within</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#2E563F</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:active</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#172c20</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//END OF NAV STYLING//</span>

<span style="color: #75715e">//FOOTER STYLING//</span>
<span style="color: #f8f8f2">#emailFooterBR</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #a6e22e">.socialLogos</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">right</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">img</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#footerWrapper</span> <span style="color: #f8f8f2">{</span>


  <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
  <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
  <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f92672">-</span><span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #75715e">// margin: 20px 0 0;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>


  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">320px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">6</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f8f8f2">#footerHomeLink</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#bottomTag</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #75715e">// cursor: pointer;</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1200px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">108</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#contactInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">right</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1200px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">330</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">534px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">14</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1200px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">320px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">word-break</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">break-all;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">770px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">word-break</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">break-all;</span>
    <span style="color: #f8f8f2">}</span>



    <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
      <span style="color: #75715e">// text-decoration: underline rgb(185, 185, 185);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">h4</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">border-bottom</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">#16291e</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">22</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">30</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//END OF FOOTER STYLING//</span>

<span style="color: #75715e">//HOME PAGE SYTLING//</span>

<span style="color: #f8f8f2">#EAHome</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#homeBgVid</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">flex;</span>
    <span style="color: #a6e22e">justify-content</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">align-items</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-120</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// filter: brightness(1) contrast(1) grayscale(0) opacity(0.8);</span>
    <span style="color: #a6e22e">pointer-events</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>


    <span style="color: #f92672">video</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vh</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">min-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#topHeading</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1024px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1.8</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2.5</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f8f8f2">#centerLogo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">filter</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">invert</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">46</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-50</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">-40</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">300</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#info</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #75715e">// p {</span>
  <span style="color: #75715e">//   margin-bottom: 50px;</span>
  <span style="color: #75715e">// }</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#about</span> <span style="color: #f8f8f2">{</span>
  
  <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #f8f8f2">#aboutUsText</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #f92672">hr</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">!important;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#aboutBgImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">15</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">min-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">vw</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/whoWeAreImg2.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">-200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">-webkit-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">-moz-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">375px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">background-attachment</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">scroll</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-550</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#packages</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #f8f8f2">#featurePackageBtn</span><span style="color: #f92672">,</span>
  <span style="color: #f8f8f2">#highlightsPackageBtn</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#packagesList</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#f2eeea</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.packagesInfoText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">.bounceBtn:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">default</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#featurePackageImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/featureCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#featurettePackageImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/featuretteCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">right</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#highlightsPackageImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/highlightsCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #75715e">// #highlightsBtn,</span>
  <span style="color: #75715e">// #featureBtn {</span>
  <span style="color: #75715e">//   margin-top: 20px;</span>
  <span style="color: #75715e">//   background-color: rgba(255, 0, 0, 0);</span>
  <span style="color: #75715e">//   color: $purpleFull;</span>
  <span style="color: #75715e">//   border: none;</span>

  <span style="color: #75715e">//   &amp;:hover {</span>
  <span style="color: #75715e">//     color: rgb(165, 165, 165);</span>
  <span style="color: #75715e">//   }</span>

  <span style="color: #75715e">//   &amp;:focus {</span>
  <span style="color: #75715e">//     color: rgb(165, 165, 165);</span>
  <span style="color: #75715e">//     outline: none;</span>
  <span style="color: #75715e">//   }</span>

  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// .modal {</span>
  <span style="color: #75715e">//   width: 100%;</span>
  <span style="color: #75715e">//   padding: 10px;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// .modal-header {</span>
  <span style="color: #75715e">//   border-bottom: none;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// .modal-title,</span>
  <span style="color: #75715e">// .modal-footer,</span>
  <span style="color: #75715e">// .modal-content {</span>
  <span style="color: #75715e">//   background-color: rgb(255, 255, 255);</span>
  <span style="color: #75715e">//   color: black;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// .modal-body {</span>
  <span style="color: #75715e">//   box-shadow: 400px 400px 400px 400px rgba(255, 255, 255, 0.8) inset;</span>
  <span style="color: #75715e">//   -webkit-box-shadow: 400px 400px 400px 400px rgba(255, 255, 255, 0.8) inset;</span>
  <span style="color: #75715e">//   -moz-box-shadow: 400px 400px 400px 400px rgba(255, 255, 255, 0.8) inset;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// .modal-title {</span>
  <span style="color: #75715e">//   border-radius: 10px;</span>
  <span style="color: #75715e">//   padding: 10px 0 0;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// #aceModalBody {</span>
  <span style="color: #75715e">//   background-image: url(&quot;/img/img14-min.png&quot;);</span>
  <span style="color: #75715e">//   background-size: cover;</span>
  <span style="color: #75715e">//   background-position: center;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// #emmyModalBody {</span>
  <span style="color: #75715e">//   background-image: url(&quot;/img/img19-min.png&quot;);</span>
  <span style="color: #75715e">//   background-size: cover;</span>
  <span style="color: #75715e">//   background-position: center;</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #f92672">ul</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f92672">li</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">list-style-type</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">li</span><span style="color: #f92672">::</span><span style="color: #f8f8f2">before</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">content</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;- &quot;</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">font-weight</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">bold</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.card</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.card-img-top</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">contain;</span>
      <span style="color: #a6e22e">background-repeat</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">scale</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0.99</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #75715e">// #acePackageImg {</span>
  <span style="color: #75715e">//   background-image: url(/img/acePackage.png);</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// #emmyPackageImg {</span>
  <span style="color: #75715e">//   background-image: url(/img/emmyPackage);</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #a6e22e">.packageInfo</span><span style="color: #f92672">,</span>
  <span style="color: #f8f8f2">#acePackageInfo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #f92672">ul</span> <span style="color: #f92672">li</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#packagesBtmBgImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#packagesBtmText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translateY</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-70</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#packagesText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #75715e">// #highlightsBgImg {</span>
  <span style="color: #75715e">//   background-image: url(/img/img20-min.png);</span>
  <span style="color: #75715e">//   background-size: cover;</span>
  <span style="color: #75715e">//   background-attachment: fixed;</span>
  <span style="color: #75715e">//   background-position: -250px 0px;</span>
  <span style="color: #75715e">//   margin: 20px 0;</span>

  <span style="color: #75715e">//   @media only screen and (max-width: 414px) {</span>
  <span style="color: #75715e">//     background-attachment: scroll;</span>
  <span style="color: #75715e">//   }</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #75715e">// #featureBgImg {</span>
  <span style="color: #75715e">//   background-image: url(/img/img13-min.png);</span>
  <span style="color: #75715e">//   background-size: cover;</span>
  <span style="color: #75715e">//   background-attachment: fixed;</span>
  <span style="color: #75715e">//   background-position: 0px 0px;</span>

  <span style="color: #75715e">//   @media only screen and (max-width: 414px) {</span>
  <span style="color: #75715e">//     background-attachment: scroll;</span>
  <span style="color: #75715e">//   }</span>
  <span style="color: #75715e">// }</span>

  <span style="color: #f8f8f2">#carouselWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#carouselIndicators</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">.carousel-caption</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#highlightsCaroBgImg</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/highlightsCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
      <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#featuretteCaroBgImg</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/featuretteCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
      <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#featureCaroBgImg</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/featureCompressed.jpg)</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
      <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.caroIcons</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2.5</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.carousel-item</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

      <span style="color: #f92672">h5,</span>
      <span style="color: #f92672">ul</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>


  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#packagesCards</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#FAQs</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">-webkit-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">-moz-box-shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.7</span><span style="color: #f8f8f2">)</span> <span style="color: #66d9ef">inset</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">.flipArrow</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rotate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">180</span><span style="color: #66d9ef">deg</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#faqsBounceBtn</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">default</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">i</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>
  <span style="color: #f8f8f2">}</span>




  <span style="color: #f8f8f2">#faqText</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(min-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">768px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2000</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">!important;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.py-3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1000</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">!important;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">991px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">.card-header</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.card-body</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">2</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">white;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">button</span><span style="color: #a6e22e">:focus</span><span style="color: #f92672">,</span>
  <span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">black;</span>
    <span style="color: #a6e22e">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#faqDroneLink</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span><span style="color: #ae81ff">#15c</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>



<span style="color: #f8f8f2">#films</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/filmsBg4.jpg)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
  <span style="color: #a6e22e">background-attachment</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">fixed</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  

  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-attachment</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">scroll</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-450</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">p</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">h6</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">cite</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">grey;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">.modal-lg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">70</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1700px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">95</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.showreelimgs</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">991px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.showreelimgs</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">350</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">149.92</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.349</span><span style="color: #f8f8f2">);</span>

      <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>

        <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
          <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>


  <span style="color: #a6e22e">.modal-lg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">70</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1700px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">85</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">95</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">.modal-footer</span><span style="color: #f92672">,</span>
  <span style="color: #a6e22e">.modal-content</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.349</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>



  <span style="color: #f8f8f2">#film1</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">575px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">unset;</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/img19-min.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#film2</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">575px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">unset;</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/img13-min.png)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#film3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-image</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(/img/img10-min.png)</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>




  <span style="color: #75715e">//**STOCK CAROUSEL BITS//</span>
  <span style="color: #a6e22e">.carouselImg</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">350</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">149.92</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.349</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.hoverDark</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">box-shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inset</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">0</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">400</span><span style="color: #66d9ef">px</span> <span style="color: #a6e22e">rgba</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0.349</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.carouselWrapper</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
        <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.carousel-item</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #a6e22e">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">350</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">149.92</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">5</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.fa-play</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">36</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">z-index</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">35</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">transform</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">translate</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">-50</span><span style="color: #66d9ef">%</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">%</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>

    <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">%</span>
    <span style="color: #f8f8f2">}</span>


    <span style="color: #66d9ef">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
      <span style="color: #a6e22e">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#contact</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">1024px)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>



  <span style="color: #f8f8f2">#contactSubmitBtn</span><span style="color: #a6e22e">:disabled</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull</span> <span style="color: #f8f8f2">!important;</span>
    <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">1</span><span style="color: #66d9ef">px</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #f92672">not-</span><span style="color: #f8f8f2">allowed;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.btnEnabled</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">17</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">163</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">17</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">!important;</span>
    <span style="color: #75715e">// border: none;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.btnDisabled</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull</span> <span style="color: #f8f8f2">!important;</span>
    <span style="color: #a6e22e">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">cursor</span><span style="color: #f92672">:</span> <span style="color: #f92672">not-</span><span style="color: #f8f8f2">allowed;</span>
  <span style="color: #f8f8f2">}</span>


  <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">$purpleFull;</span>
  <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">margin-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>

  <span style="color: #f8f8f2">#contactLogo</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">background-color</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">border-radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span> <span style="color: #ae81ff">20</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">.contact-image</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #75715e">// outline: solid 1px red;</span>
    <span style="color: #a6e22e">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">h3</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f92672">textarea</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">150</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #f8f8f2">#contactAnchor</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-50</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">#weddingDatePicker</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">@media</span> <span style="color: #f92672">only</span> <span style="color: #f92672">screen</span> <span style="color: #f92672">and</span> <span style="color: #f92672">(max-width</span><span style="color: #a6e22e">:</span> <span style="color: #f92672">414px)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">input[type=</span><span style="color: #e6db74">&quot;date&quot;</span><span style="color: #f92672">]</span><span style="color: #a6e22e">:before</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">content</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(placeholder)</span> <span style="color: #f8f8f2">!important;</span>
    <span style="color: #a6e22e">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#495057</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">margin-right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.5</span><span style="color: #66d9ef">em</span><span style="color: #f8f8f2">;</span>
    
    <span style="color: #f8f8f2">}</span>
    <span style="color: #f92672">input[type=</span><span style="color: #e6db74">&quot;date&quot;</span><span style="color: #f92672">]</span><span style="color: #a6e22e">:focus:before</span><span style="color: #f92672">,</span>
    <span style="color: #f92672">input[type=</span><span style="color: #e6db74">&quot;date&quot;</span><span style="color: #f92672">]</span><span style="color: #a6e22e">:valid:before</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">content</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>


<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">#thanksMsgPG</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #a6e22e">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
  <span style="color: #a6e22e">min-height</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">calc</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">100</span><span style="color: #66d9ef">vh</span> <span style="color: #f92672">-</span> <span style="color: #f8f8f2">(</span><span style="color: #ae81ff">238</span><span style="color: #66d9ef">px</span> <span style="color: #f92672">+</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">));</span>

  <span style="color: #f92672">h1</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200</span><span style="color: #66d9ef">px</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span> 

<span style="color: #75715e">// #clientJob {</span>
  
<span style="color: #75715e">//   #SNframe {</span>
<span style="color: #75715e">//     min-height: calc(100vh - (238px + 126px));;</span>
<span style="color: #75715e">//     width: 100vw;</span>
<span style="color: #75715e">//   }</span>
<span style="color: #75715e">// }</span>
</pre></div>
