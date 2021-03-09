<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">//BACK TO TOP ON PAGE REFRESH</span>
<span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">onbeforeunload</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">scrollTo</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">}</span>



<span style="color: #75715e">//Scrolling NavBar</span>
<span style="color: #75715e">// add padding top to show content behind navbar</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;padding-top&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.navbar&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">outerHeight</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&#39;px&#39;</span><span style="color: #f8f8f2">)</span>

<span style="color: #75715e">// detect scroll top or down</span>
<span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">((</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.smart-scroll&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">length</span> <span style="color: #f92672">&gt;</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">))</span> <span style="color: #f8f8f2">{</span> <span style="color: #75715e">// check if element exists</span>

  <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">last_scroll_top</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;scroll&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">scroll_top</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">scrollTop</span><span style="color: #f8f8f2">();</span>

    <span style="color: #75715e">//THIS IS NOT LETTING THE BELOW IF STATEMENT TO HIDE AND SHOW THE NAV BAR HAPPEN UNTIL WE ARE MORE THAN ONCE PIXEL DOWN THE SCREEN (When you scrolled back to the top before the page would bounce and it though it scrolled so hid the navbar).</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">scrollTop</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">&gt;</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

      <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">((</span><span style="color: #a6e22e">scroll_top</span> <span style="color: #f92672">&lt;</span> <span style="color: #a6e22e">last_scroll_top</span><span style="color: #f8f8f2">))</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.smart-scroll&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;scrolled-down&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;scrolled-up&#39;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.smart-scroll&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;scrolled-up&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;scrolled-down&#39;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">last_scroll_top</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">scroll_top</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">}</span>





<span style="color: #75715e">//MAKING THE TOP LOGO TAKE YOU BACK TO HOME</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#logo-main&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;index.php&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//stop video when modal is closed **/ (fucked if I can group them at the min though!!)</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm1&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;hidden.bs.modal&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm1 iframe&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#modalFilm1 iframe&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm2&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;hidden.bs.modal&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm2 iframe&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#modalFilm2 iframe&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm3&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;hidden.bs.modal&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#modalFilm3 iframe&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#modalFilm3 iframe&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>



<span style="color: #75715e">//CONTACT SUBMIT BUTTON</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">ready</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #a6e22e">clearForm</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactSubmitBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#form&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">trigger</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;reset&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//ENABLING THE SEND MESSAGE BUTTON ONCE INPUT FIELDS ARE FILLED</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">manage</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">bt</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">getElementById</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;contactSubmitBtn&#39;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">nameInput</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">value</span> <span style="color: #f92672">!=</span> <span style="color: #e6db74">&#39;&#39;</span> <span style="color: #f92672">&amp;&amp;</span> <span style="color: #a6e22e">messageInput</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">value</span> <span style="color: #f92672">!=</span> <span style="color: #e6db74">&#39;&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">bt</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">disabled</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;button is enabled&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactSubmitBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;btnEnabled&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactSubmitBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;btnDisabled&quot;</span><span style="color: #f8f8f2">);</span>

  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">bt</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">disabled</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">;</span>
    <span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;button is disabled&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactSubmitBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;btnEnabled&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactSubmitBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;btnDisabled&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//BACK TO TOP BUTTON THAT IS HIDDEN AND SHOWN AT CERTAIN PX DOWN THE PAGE</span>

<span style="color: #75715e">// backToTop = $(&quot;#backToTop&quot;)[0];</span>
<span style="color: #a6e22e">backToTop</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">getElementById</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;backToTop&quot;</span><span style="color: #f8f8f2">);</span> <span style="color: #75715e">//&lt;-- this is the same as above only with jquery but it needs the square brackets</span>


<span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">onscroll</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">scrollFunction</span><span style="color: #f8f8f2">()</span>
<span style="color: #f8f8f2">};</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">scrollFunction</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">((document.</span><span style="color: #a6e22e">documentElement</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">scrollTop</span> <span style="color: #f92672">&gt;</span> <span style="color: #ae81ff">10</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">&amp;&amp;</span> <span style="color: #f8f8f2">(document.</span><span style="color: #a6e22e">documentElement</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">scrollTop</span> <span style="color: #f92672">&lt;</span> <span style="color: #ae81ff">8400</span><span style="color: #f8f8f2">))</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">backToTop</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">style</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">opacity</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">backToTop</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">style</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">opacity</span> <span style="color: #f92672">=</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">scrollFunctionHide</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(document.</span><span style="color: #a6e22e">body</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">scrollTop</span> <span style="color: #f92672">&gt;=</span> <span style="color: #ae81ff">9000</span> <span style="color: #f92672">||</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">documentElement</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">scrollTop</span> <span style="color: #f92672">&gt;=</span> <span style="color: #ae81ff">9000</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">backToTop</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">style</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">display</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #a6e22e">scrollFunctionHide</span><span style="color: #f8f8f2">();</span>


<span style="color: #75715e">// When the user clicks on the button, scroll to the top of the document SMOOTHLY</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">topFunction</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">scrollTo</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">behavior</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;smooth&quot;</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">}</span>




<span style="color: #75715e">//TAKES YOU TO AN ID ANCHOR ON EACH PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#homeNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#EAHome&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">200</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#aboutNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#aboutAnchor&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">50</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#packagesNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#packagesAnchor&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">20</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#filmsNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#filmsAnchor&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">0</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#faqsNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#faqsAnchor&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">300</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactNavBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">animate</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">scrollTop</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#contactAnchor&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">offset</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">top</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">50</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>



<span style="color: #75715e">//CLOSES THE NAVBAR WHEN A LINK IS CLICKED</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.navbar-nav&gt;li&gt;a&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;click&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;.navbar-collapse&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">collapse</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;hide&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//YOUTUBE API FULL SCREEEN</span>
<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">vid</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;VaTvdpTKeBA&quot;</span><span style="color: #f8f8f2">,</span>
  <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">,</span>
  <span style="color: #a6e22e">video_tag</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">getElementById</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;heroVideo&quot;</span><span style="color: #f8f8f2">);</span>

<span style="color: #a6e22e">fetch</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;https://images&quot;</span> <span style="color: #f92672">+</span> <span style="color: #f92672">~~</span><span style="color: #f8f8f2">(Math.</span><span style="color: #a6e22e">random</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">*</span> <span style="color: #ae81ff">33</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;-focus-opensocial.googleusercontent.com/gadgets/proxy?container=none&amp;url=https%3A%2F%2Fwww.youtube.com%2Fget_video_info%3Fvideo_id%3D&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">vid</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">then</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">response</span> <span style="color: #f92672">=&gt;</span> <span style="color: #a6e22e">response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">text</span><span style="color: #f8f8f2">()).</span><span style="color: #a6e22e">then</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">parse_youtube_meta</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">video_tag</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">src</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&#39;1080p&#39;</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">||</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&#39;720p&#39;</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">||</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&#39;360p&#39;</span><span style="color: #f8f8f2">];</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">alert</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;Youtube API Error&#39;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">parse_youtube_meta</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">rawdata</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">data</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">parse_str</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">rawdata</span><span style="color: #f8f8f2">),</span>
    <span style="color: #a6e22e">player_response</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">JSON</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">parse</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">),</span>
    <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[],</span>
    <span style="color: #a6e22e">result</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{};</span>

  <span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">player_response</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">;</span>

  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">hasOwnProperty</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;adaptive_fmts&#39;</span><span style="color: #f8f8f2">))</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">concat</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">adaptive_fmts</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">split</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;,&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">map</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">s</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">return</span> <span style="color: #a6e22e">parse_str</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">s</span><span style="color: #f8f8f2">)</span>
    <span style="color: #f8f8f2">}));</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span> <span style="color: #f92672">&amp;&amp;</span> <span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">adaptiveFormats</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">concat</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">adaptiveFormats</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">hasOwnProperty</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;url_encoded_fmt_stream_map&#39;</span><span style="color: #f8f8f2">))</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">concat</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">url_encoded_fmt_stream_map</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">split</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;,&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">map</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">s</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">return</span> <span style="color: #a6e22e">parse_str</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">s</span><span style="color: #f8f8f2">)</span>
    <span style="color: #f8f8f2">}));</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span> <span style="color: #f92672">&amp;&amp;</span> <span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">formats</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">streams</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">concat</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">player_response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">streamingData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">formats</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">}</span>

  <span style="color: #a6e22e">streams</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">forEach</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">stream</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">n</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">itag</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">stream</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">itag</span> <span style="color: #f92672">*</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">quality</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">itag_map</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #75715e">// 18: &#39;360p&#39;,</span>
        <span style="color: #75715e">// 22: &#39;720p&#39;,</span>
        <span style="color: #ae81ff">137</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;1080p&quot;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">37</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;hd1080&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">38</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;3072p&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">82</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;360p3d&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">83</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;480p3d&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">84</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;720p3d&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">85</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;1080p3d&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">133</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;240pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">134</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;360pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">135</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;480pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">136</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;720pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #75715e">// 137: &#39;1080pna&#39;,</span>
        <span style="color: #ae81ff">264</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;1440pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">298</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;720p60&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">299</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;1080p60na&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">160</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;144pna&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">139</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;48kbps&quot;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">140</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;128kbps&quot;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #ae81ff">141</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;256kbps&quot;</span>
      <span style="color: #f8f8f2">};</span>
    <span style="color: #75715e">//if (stream.type.indexOf(&#39;o/mp4&#39;) &gt; 0) console.log(stream);</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">itag_map</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">itag</span><span style="color: #f8f8f2">])</span> <span style="color: #a6e22e">result</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">itag_map</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">itag</span><span style="color: #f8f8f2">]]</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">stream</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">url</span><span style="color: #f8f8f2">;</span>
    <span style="color: #75715e">// console.log(result);</span>
  <span style="color: #f8f8f2">});</span>
  <span style="color: #66d9ef">return</span> <span style="color: #a6e22e">result</span><span style="color: #f8f8f2">;</span>


<span style="color: #f8f8f2">};</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">parse_str</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">str</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">return</span> <span style="color: #a6e22e">str</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">split</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;&amp;&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">reduce</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">params</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">param</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">paramSplit</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">param</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">split</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;=&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">map</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">value</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">decodeURIComponent(</span><span style="color: #a6e22e">value</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">replace</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;+&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39; &#39;</span><span style="color: #f8f8f2">));</span>
    <span style="color: #f8f8f2">});</span>
    <span style="color: #a6e22e">params</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">paramSplit</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">]]</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">paramSplit</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">];</span>
    <span style="color: #66d9ef">return</span> <span style="color: #a6e22e">params</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span> <span style="color: #f8f8f2">{});</span>
<span style="color: #f8f8f2">}</span>




<span style="color: #75715e">//CHANGING TEXT ON SCREEN SIZE IF BELOW THIS SIZE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">ready</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">width</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">&lt;</span> <span style="color: #ae81ff">415</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#topHeading&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;Cinematographers&lt;br&gt;Filmmakers&lt;br&gt;Storytellers&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;h3&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;lineEitherSide&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//CHANGING TEXT ON SCREEN RESIZE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">resize</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">width</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">&lt;</span> <span style="color: #ae81ff">415</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#topHeading&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;Cinematographers&lt;br&gt;Filmmakers&lt;br&gt;Storytellers&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#topHeading&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;  Cinematographers  |  Filmmakers  |  Storytellers  &quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//REMOVE NAV BG COLOR WHEN OVER VIDEO</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;scroll&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(window).</span><span style="color: #a6e22e">scrollTop</span><span style="color: #f8f8f2">()</span> <span style="color: #f92672">&lt;</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.navbar&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;background-color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;transparent&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#logoWrapper&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;fadeOut&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#logoWrapper&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;fadeIn&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#navbarWrapper li a&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;white&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.navbar-toggler-icon&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;background-color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;white&quot;</span><span style="color: #f8f8f2">)</span>

  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.navbar&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;background-color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;rgba(255, 255, 255, 0.747)&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#logoWrapper&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;fadeIn&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#logoWrapper&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;fadeOut&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#navbarWrapper li a&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;black&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.navbar-toggler-icon&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;background-color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;black&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#navbarNavDropdown&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;white&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//OVER RIDING SOME OF THE ABOVE TO WORK WITH MOBILE.  THE NAV ALWAYS STAYS WHITE ON MOBILE RATHER THAN GOING BLACK WHEN YOU&#39;RE OFF THE VIDEO. (not the best way around it but it works for now, should really be an if the dropdown is shown then make the li white).</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.navbar-toggler&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(()</span> <span style="color: #f92672">=&gt;</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.nav-item a&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;color&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;white&quot;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>




<span style="color: #75715e">//LOADING DEER WHILE PAGES LOADS AND STOPPING PAGE SCROLL UNTIL EVERYTHING LOADED</span>
<span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">onreadystatechange</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #75715e">//A VARIABLE WITH THE DOCUMENTS READY STATE IN IT</span>
  <span style="color: #66d9ef">var</span> <span style="color: #a6e22e">state</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">readyState</span>

  <span style="color: #75715e">//IF THE STATE IS &#39;interactive&#39; IT MEANS IMAGES ARE AND iFRAMES ARE STILL LOADING</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">state</span> <span style="color: #f92672">==</span> <span style="color: #e6db74">&#39;interactive&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#siteContent&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;visibility&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;hidden&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">({</span>
      <span style="color: #e6db74">&#39;overflow&#39;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;hidden&#39;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #e6db74">&#39;height&#39;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;100%&#39;</span>
    <span style="color: #f8f8f2">})</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #66d9ef">if</span>

    <span style="color: #75715e">//IF THE STATE IS &#39;complete&#39; IT MEANS EVERYTHINGS FINISHED AND ANY &#39;load&#39; EVENT IS ABOUT TO FIRE</span>
    <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">state</span> <span style="color: #f92672">==</span> <span style="color: #e6db74">&#39;complete&#39;</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#interactive&#39;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#load&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;visibility&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;hidden&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#siteContent&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;visibility&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;visible&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;html, body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">({</span>
      <span style="color: #e6db74">&#39;overflow&#39;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;auto&#39;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #e6db74">&#39;height&#39;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;auto&#39;</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//FAQ ARROW BUTTONS FLIP WHEN CLICKED </span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;click&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;#collapseFAQs, #faqText, #faqsBounceBtn, .fa&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#faqsBounceBtn i&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">toggleClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;fa-angle-down fa-angle-up&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//EACH PACKAGE ARROW BUTTON FLIP WHEN CLICKED </span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;click&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;#highlightsWrapper&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#highlightsBounceBtn i&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">toggleClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;fa-angle-down fa-angle-up&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #75715e">//EACH PACKAGE ARROW BUTTON FLIP WHEN CLICKED </span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;click&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;#featuretteWrapper&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#featuretteBounceBtn i&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">toggleClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;fa-angle-down fa-angle-up&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #75715e">//EACH PACKAGE ARROW BUTTON FLIP WHEN CLICKED </span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;click&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;#featureWrapper&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#featureBounceBtn i&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">toggleClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;fa-angle-down fa-angle-up&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>
</pre></div>
