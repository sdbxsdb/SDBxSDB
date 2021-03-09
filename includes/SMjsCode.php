<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">// MAKE SMART MIRROR FULL SCREEN</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#smartMirrorHome&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">fullscreen</span><span style="color: #f8f8f2">();</span>
      <span style="color: #66d9ef">return</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">});</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;body&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">fullscreen</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">exit</span><span style="color: #f8f8f2">();</span>
      <span style="color: #66d9ef">return</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>



<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">setDate</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">now</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">new</span> <span style="color: #f8f8f2">Date();</span>

<span style="color: #75715e">//Mins and seconds for analogue clock hands with math to turn the the right degrees</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">seconds</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">now</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getSeconds</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">secondsDegs</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">((</span><span style="color: #a6e22e">seconds</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">60</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">*</span> <span style="color: #ae81ff">360</span> <span style="color: #f92672">+</span> <span style="color: #ae81ff">90</span> <span style="color: #f8f8f2">);</span>

  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">mins</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">now</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getMinutes</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">minsDegs</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">((</span><span style="color: #a6e22e">mins</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">60</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">*</span> <span style="color: #ae81ff">360</span> <span style="color: #f92672">+</span> <span style="color: #ae81ff">90</span><span style="color: #f8f8f2">);</span>


<span style="color: #75715e">//Hours for analogue clock with + X value for how far ahead each timezone is (this only with with analogue - it goes past 24hr when you add anything to getHours)</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">belfastHours</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">now</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getHours</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">belfastHoursDegs</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">((</span><span style="color: #a6e22e">belfastHours</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">12</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">*</span> <span style="color: #ae81ff">360</span> <span style="color: #f92672">+</span> <span style="color: #ae81ff">90</span><span style="color: #f8f8f2">);</span>

<span style="color: #75715e">//Turning the hands hand with transform rotate the number of degrees we worked out above 12 hrs, 360degree, 90 for the offset in the css etc.  -  The if is to stop the hands spinning backwards to get to 0 we remove the class v briefly so it appears to tick on past 12</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.secHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;transform&quot;</span><span style="color: #f8f8f2">,</span><span style="color: #e6db74">&quot;rotate(&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">secondsDegs</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;deg&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">seconds</span> <span style="color: #f92672">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.secHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;handNoTran&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.secHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;hand&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">}</span> <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.secHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;handNoTran&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.secHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;hand&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">};</span>


  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.minHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;transform&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;rotate(&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">minsDegs</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;deg&quot;</span><span style="color: #f8f8f2">);</span>


  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#belfastHourHand&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;transform&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;rotate(&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">belfastHoursDegs</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;deg&quot;</span><span style="color: #f8f8f2">);</span>




<span style="color: #75715e">//Using moment.js library to get the time for the digital clock display.  With this we can add X amount of hours and it won&#39;t go past 24.  We can also format it with a much or as little info as we like.</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">belfastDigi</span> <span style="color: #f92672">=</span> <span style="color: #a6e22e">moment</span><span style="color: #f8f8f2">().</span><span style="color: #a6e22e">format</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;HH:mm:ss&quot;</span><span style="color: #f8f8f2">);</span>


<span style="color: #75715e">//Writing the moment time to the html of each div and then calling the function below.  This was wrapped in a function but it wasn&#39;t necessary. </span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#belfastDigi&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">belfastDigi</span><span style="color: #f8f8f2">);</span>

  <span style="color: #f8f8f2">};</span>

<span style="color: #75715e">//Running the above function every 1s - eg. if this was run every 4000ms we would only see the hands move and seconds change every 4sec</span>
<span style="color: #a6e22e">setInterval</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">setDate</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>



<span style="color: #75715e">//WEATHER API//</span>
<span style="color: #75715e">//Usuing AJAX to NOT cache the weather and refresh itself every 1,800,000 millisec or 30mins so it will check for new weather every half hour. </span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #a6e22e">refreshWeather</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">ajaxSetup</span> <span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">cache</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">complete</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>

      <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">refreshWeather</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">1800000</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">})</span>
<span style="color: #75715e">//This lets me choose any city in the UK or elsewhere and see what the weather is doing.</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">cityUK</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;Belfast&quot;</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;,uk&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">cityElse</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;Los Angeles&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getJSON</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;http://api.openweathermap.org/data/2.5/weather?q=&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">cityUK</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;&amp;units=metric&amp;APPID=1b7b697c8144f3ee87636d0d5f992dd0&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
<span style="color: #a6e22e">console</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">log</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">);</span>

<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">icon</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;http://openweathermap.org/img/w/&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">weather</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">icon</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;.png&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">temp</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">(Math.</span><span style="color: #a6e22e">round</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">main</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">temp</span><span style="color: #f8f8f2">));</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">feelsLike</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">(Math.</span><span style="color: #a6e22e">round</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">main</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">feels_like</span><span style="color: #f8f8f2">));</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">summary</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">weather</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">description</span><span style="color: #f8f8f2">);</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">windSpeed</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">(Math.</span><span style="color: #a6e22e">round</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">data</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">wind</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">speed</span><span style="color: #f8f8f2">));</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#icon&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;src&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">icon</span><span style="color: #f8f8f2">);</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#temp&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;Temp  &quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">temp</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;&amp;degC&quot;</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;  but feels like  &quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">feelsLike</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot; &amp;degC&quot;</span><span style="color: #f8f8f2">);</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#summary&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">summary</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;textTransform&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;capitalize&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#windSpeed&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">windSpeed</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot; mph winds&quot;</span><span style="color: #f8f8f2">);</span>

<span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">});</span>



<span style="color: #75715e">//CAT FACTS API</span>

<span style="color: #75715e">//Usuing AJAX to NOT cache the Cat Facts and refresh itself every 36000000 millisec or 1 day so there will be a new fact each day.  HOWEVER.. I reckon this API is on PST time because I seem to get a new fact each day about lunch time rather than at midnight GMT...//</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #a6e22e">refreshFacts</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">ajaxSetup</span> <span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">cache</span><span style="color: #f92672">:</span><span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">complete</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>

      <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">refreshFacts</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">3600000</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">})</span>
  <span style="color: #66d9ef">const</span> <span style="color: #a6e22e">settings</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #e6db74">&quot;async&quot;</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">,</span>
    <span style="color: #e6db74">&quot;crossDomain&quot;</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">,</span>
    <span style="color: #e6db74">&quot;url&quot;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;https://brianiswu-cat-facts-v1.p.rapidapi.com/facts&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #e6db74">&quot;method&quot;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;GET&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #e6db74">&quot;headers&quot;</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #e6db74">&quot;x-rapidapi-key&quot;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;a141ef43d1msh5debbef901cb633p111c8djsn1093d0fb16bd&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #e6db74">&quot;x-rapidapi-host&quot;</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;brianiswu-cat-facts-v1.p.rapidapi.com&quot;</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">};</span>
  
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">ajax</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">settings</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">done</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">response</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  
  
    <span style="color: #75715e">//API gives you 5 facts I was trying to make the facts random.</span>

    <span style="color: #66d9ef">const</span> <span style="color: #a6e22e">randomNumber</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">[Math.</span><span style="color: #a6e22e">floor</span><span style="color: #f8f8f2">(Math.</span><span style="color: #a6e22e">random</span><span style="color: #f8f8f2">()</span><span style="color: #f92672">*</span><span style="color: #a6e22e">response</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span><span style="color: #f8f8f2">)];</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#catFact&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">response</span><span style="color: #f8f8f2">[</span><span style="color: #a6e22e">randomNumber</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">text</span><span style="color: #f8f8f2">);</span>

  <span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//LAST FM / SPOTIFY API</span>

<span style="color: #75715e">//Usuing AJAX to NOT cache the music and refresh itself every 1sec so each time a new track comes on it&#39;s displayed without a page refresh. </span>

<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">volume</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;&quot;</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #a6e22e">refreshMusic</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">ajaxSetup</span> <span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">cache</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">complete</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">setTimeout</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">refreshMusic</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">})</span>


<span style="color: #a6e22e">username</span><span style="color: #f92672">=</span><span style="color: #e6db74">&quot;sdbxsdb&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #a6e22e">key</span><span style="color: #f92672">=</span><span style="color: #e6db74">&quot;f5176df741bdcbae37daffc08ca087ac&quot;</span><span style="color: #f8f8f2">;</span>



<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">get</span><span style="color: #f8f8f2">(</span> <span style="color: #e6db74">&quot;http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&amp;user=&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">username</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;&amp;api_key=&quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">key</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot;&amp;format=json&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">spotifyData</span> <span style="color: #f8f8f2">)</span> 
<span style="color: #f8f8f2">{</span>


	<span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #66d9ef">typeof</span> <span style="color: #a6e22e">spotifyData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">recenttracks</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">track</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">][</span><span style="color: #e6db74">&quot;@attr&quot;</span><span style="color: #f8f8f2">]</span> <span style="color: #f92672">!=</span> <span style="color: #e6db74">&quot;undefined&quot;</span><span style="color: #f8f8f2">)</span>
	<span style="color: #f8f8f2">{</span>
	    <span style="color: #a6e22e">artist</span><span style="color: #f92672">=</span><span style="color: #a6e22e">spotifyData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">recenttracks</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">track</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">artist</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&quot;#text&quot;</span><span style="color: #f8f8f2">];</span>
    	<span style="color: #a6e22e">track</span><span style="color: #f92672">=</span><span style="color: #a6e22e">spotifyData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">recenttracks</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">track</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">name</span><span style="color: #f8f8f2">;</span>
    	<span style="color: #a6e22e">album</span><span style="color: #f92672">=</span><span style="color: #a6e22e">spotifyData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">recenttracks</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">track</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">album</span><span style="color: #f8f8f2">[</span><span style="color: #e6db74">&quot;#text&quot;</span><span style="color: #f8f8f2">];</span>
    	<span style="color: #a6e22e">artwork</span><span style="color: #f92672">=</span><span style="color: #a6e22e">spotifyData</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">recenttracks</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">track</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">].</span><span style="color: #a6e22e">image</span><span style="color: #f8f8f2">[</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">][</span><span style="color: #e6db74">&quot;#text&quot;</span><span style="color: #f8f8f2">];</span>
    	<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#artwork&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">attr</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;src&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">artwork</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">removeClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;hideArtwork&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#track&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">track</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot; by &quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">artist</span> <span style="color: #f92672">+</span> <span style="color: #e6db74">&quot; from &quot;</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">album</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">volume</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;0&quot;</span><span style="color: #f8f8f2">;</span>
  
  
  <span style="color: #f8f8f2">}</span>
  <span style="color: #66d9ef">else</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#artwork&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">addClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;hideArtwork&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#track&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">html</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;Nothing&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">volume</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;100&quot;</span><span style="color: #f8f8f2">;</span>
    
  <span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//YouTube API</span>

<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">tag</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">createElement</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;script&#39;</span><span style="color: #f8f8f2">);</span>
<span style="color: #a6e22e">tag</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">src</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;http://www.youtube.com/player_api&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">firstScriptTag</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">document.</span><span style="color: #a6e22e">getElementsByTagName</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;script&#39;</span><span style="color: #f8f8f2">)[</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">];</span>
<span style="color: #a6e22e">firstScriptTag</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">parentNode</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">insertBefore</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">tag</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">firstScriptTag</span><span style="color: #f8f8f2">);</span>


<span style="color: #75715e">//This function creates an &lt;iframe&gt; (and YouTube player) after the API code downloads.</span>
<span style="color: #66d9ef">var</span> <span style="color: #a6e22e">player</span><span style="color: #f8f8f2">;</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">onYouTubePlayerAPIReady</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    
    <span style="color: #a6e22e">player</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">YT</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">Player</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;newsPlayer&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #f8f8f2">{</span>

        <span style="color: #a6e22e">videoId</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&#39;9Auq9mYxFEE&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #a6e22e">playerVars</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span><span style="color: #e6db74">&#39;autohide&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;cc_load_policy&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;controls&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;disablekb&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;iv_load_policy&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">3</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;modestbranding&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;rel&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;showinfo&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;autoplay&#39;</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">,</span>
                    <span style="color: #e6db74">&#39;m&#39;</span><span style="color: #f92672">:</span><span style="color: #ae81ff">0</span>
                    
                    <span style="color: #f8f8f2">},</span>
                    <span style="color: #a6e22e">events</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">{</span>
                    
                      <span style="color: #a6e22e">onStateChange</span><span style="color: #f92672">:</span> <span style="color: #a6e22e">onPlayerStateChange</span>
                      
                    <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//This is muting the YouTube API when there is Spotify album art displayed and unmuting when there is nothing playing.</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">onPlayerStateChange</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">event</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#artwork&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">hasClass</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;hideArtwork&quot;</span><span style="color: #f8f8f2">)){</span>
    <span style="color: #a6e22e">player</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">unMute</span><span style="color: #f8f8f2">();</span>
  <span style="color: #f8f8f2">}</span>
  <span style="color: #66d9ef">else</span>
  <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">player</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">mute</span><span style="color: #f8f8f2">();</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//This is calling the above function every half second to check if there is or isn&#39;t any album art and muting or unmuting accoringly.</span>
<span style="color: #a6e22e">setInterval</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">onPlayerStateChange</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">1000</span><span style="color: #f8f8f2">);</span>

<span style="color: #f8f8f2">}</span>
</pre></div>
