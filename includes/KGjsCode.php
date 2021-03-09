<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">//ENABLING THE BUTTONS TO BE CLICKED WHEN TOUCHED ON TOUCH SCREEN</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;touchstart&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">documentClick</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">true</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">on</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;touchmove&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">documentClick</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">false</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">});</span>




<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>

<span style="color: #75715e">//Name input is foused on page load</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nameInput&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">focus</span><span style="color: #f8f8f2">();</span>

<span style="color: #75715e">//Adding the input name to the text</span>
  <span style="color: #66d9ef">function</span> <span style="color: #a6e22e">addName</span><span style="color: #f8f8f2">(){</span>
    <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">nameInput</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nameInput&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">val</span><span style="color: #f8f8f2">();</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#theirName&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">append</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">nameInput</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nameInputWrapper&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#speech&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;inline-block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#letsGo&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;inline-block&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">};</span>

 <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nameBtn&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">addName</span><span style="color: #f8f8f2">);</span>

 <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nameInput&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">keypress</span> <span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">event</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">which</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">13</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">addName</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//Saving the users input name to local storage//</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(document).</span><span style="color: #a6e22e">ready</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#letsGo&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span> 

    <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">name</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#theirName&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">val</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #a6e22e">name</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">innerHTML</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">})</span>
    <span style="color: #a6e22e">localStorage</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">setItem</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;input&#39;</span><span style="color: #f8f8f2">,</span><span style="color: #a6e22e">JSON</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">stringify</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">name</span><span style="color: #f8f8f2">));</span>

  <span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//Retreving the users input name from local storage and inputing it into the text on other pages//</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">loadName</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">localStorage</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getItem</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;input&#39;</span><span style="color: #f8f8f2">)){</span>
    <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">name</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">JSON</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">parse</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">localStorage</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">getItem</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;input&#39;</span><span style="color: #f8f8f2">));</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#theirName2&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">){</span>
      <span style="color: #66d9ef">this</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">innerHTML</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">name</span> <span style="color: #f8f8f2">[</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">];</span>
    <span style="color: #f8f8f2">})</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#theirName3&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">){</span>
      <span style="color: #66d9ef">this</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">innerHTML</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">name</span> <span style="color: #f8f8f2">[</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">];</span>
    <span style="color: #f8f8f2">})</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #a6e22e">loadName</span><span style="color: #f8f8f2">();</span> <span style="color: #75715e">//&lt;--This is calling the above function, without this nothing is loaded on refresh//</span>
  <span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//*******************************************//</span>
<span style="color: #75715e">//*******************************************//</span>
<span style="color: #75715e">//*******************************************//</span>

<span style="color: #75715e">//function with the sounds attached</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">cowSnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/Cow-Mooing-C-www.fesliyanstudios.com.mp3&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">horseSnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/Horse-whinny.mp3&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">chickenSnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/chickensound.wav&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">pigSnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/pignoise.m4a&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">sheepSnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/Sheep-sound-meh.mp3&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">donkeySnd</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">new</span> <span style="color: #a6e22e">Audio</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;/img/donkeysound.m4a&quot;</span><span style="color: #f8f8f2">)</span>
  <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">play</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//Clicking the animal plays the sound</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span> 
    <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
    <span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horse&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span> 
  <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
  <span style="color: #f8f8f2">});</span>    
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chicken&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheep&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">//Clicking the link stops the default action of going straight to the page.  Set a variable which is the animal page path. So technically don&#39;t need the hrefs on the html page but left them in anyway.</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#cowLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
      <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/cow.html&quot;</span><span style="color: #f8f8f2">;</span>
  
<span style="color: #75715e">//setTimeout (delay) of &#39;X&#39; sec to allow for the animal sound and then call the function of &quot;go to&quot; to the html.</span>
      <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
          <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">3000</span><span style="color: #f8f8f2">);</span>
  <span style="color: #f8f8f2">});</span> 


<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#horseLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/horse.html&quot;</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">2000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span> 

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#chickenLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/chicken.html&quot;</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">4000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span> 

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#pigLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/pig.html&quot;</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">3000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span> 

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#sheepLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/sheep.html&quot;</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">1500</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span> 

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;#donkeyLink&#39;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">click</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">e</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">e</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">preventDefault</span><span style="color: #f8f8f2">();</span>
  <span style="color: #66d9ef">let</span> <span style="color: #a6e22e">goTo</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/donkey.html&quot;</span><span style="color: #f8f8f2">;</span>

  <span style="color: #a6e22e">setTimeout</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
      <span style="color: #f8f8f2">window.</span><span style="color: #a6e22e">location</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #a6e22e">goTo</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">},</span><span style="color: #ae81ff">3000</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span> 


<span style="color: #75715e">/*Making the animals draggable.</span>
<span style="color: #75715e">(THERE IS A CDN ADDED IN THE HTML TO MAKE DRAG AND DROP WORK ON TOUCH SCREENS) </span>
<span style="color: #75715e">Making the top icons droppable and only accept the right colors or shapes.  </span>
<span style="color: #75715e">Then makes the CORRECT item dissapear and play a sound.*/</span>

<span style="color: #75715e">//COW PAGE</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowRed&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#red&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
      <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#cowRed&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowRed&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;visibility&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;hidden&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
        <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">});</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowPink&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pink&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
      <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#cowPink&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowPink&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
        <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">});</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowYellow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#yellow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
      <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#cowYellow&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowYellow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
        <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">});</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowBlue&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#blue&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
      <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#cowBlue&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowBlue&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
        <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">});</span>

  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowGreen&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#green&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
      <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#cowGreen&quot;</span><span style="color: #f8f8f2">,</span>
      <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#cowGreen&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #a6e22e">cowSnd</span><span style="color: #f8f8f2">();</span>
        <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
    <span style="color: #f8f8f2">});</span>
  <span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//HORSE PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseTriangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#triangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#horseTriangle&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseTriangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseSquare&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#square&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#horseSquare&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseSquare&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseCircle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#circle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#horseCircle&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseCircle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseHeart&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#heart&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#horseHeart&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseHeart&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseRectangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#rectangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#horseRectangle&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#horseRectangle&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">horseSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//CHICKEN PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenRed&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#redChickDrop&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#chickenRed&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenRed&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenBlue&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#blueChickDrop&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#chickenBlue&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenBlue&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenGreen&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#greenChickDrop&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#chickenGreen&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenGreen&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenPink&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pinkChickDrop&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#chickenPink&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenPink&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenYellow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#yellowChickDrop&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#chickenYellow&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#chickenYellow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">chickenSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//PIG PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig1&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#N1&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#pig1&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig1&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig2&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#N2&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#pig2&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig2&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig3&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#N3&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#pig3&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig3&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig4&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#N4&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#pig4&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig4&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig5&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#N5&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#pig5&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#pig5&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">pigSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//SHEEP PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepPlus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#plus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#sheepPlus&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepPlus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepMinus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#minus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#sheepMinus&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepMinus&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepTimes&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#times&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#sheepTimes&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepTimes&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepEquals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#equals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#sheepEquals&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepEquals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepDivide&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#divide&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#sheepDivide&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#sheepDivide&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">sheepSnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//DONKEY PAGE</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey6&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#six&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#donkey6&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey6&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey7&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#seven&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#donkey7&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey7&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey8&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#eight&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#donkey8&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey8&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey9&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#nine&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#donkey9&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey9&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">()</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey10&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">draggable</span><span style="color: #f8f8f2">();</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ten&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">droppable</span><span style="color: #f8f8f2">({</span>
    <span style="color: #a6e22e">accept</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #e6db74">&quot;#donkey10&quot;</span><span style="color: #f8f8f2">,</span>
    <span style="color: #a6e22e">drop</span><span style="color: rgb(231, 95, 85)">:</span> <span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span> <span style="color: #a6e22e">event</span><span style="color: #f8f8f2">,</span> <span style="color: #a6e22e">ui</span> <span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#donkey10&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
      <span style="color: #a6e22e">donkeySnd</span><span style="color: #f8f8f2">();</span>
      <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">splice</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">,</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>
  <span style="color: #f8f8f2">});</span>
<span style="color: #f8f8f2">});</span>



<span style="color: #75715e">//Make it when you first mousedown on an animal it gets rid of the farmer and his text.</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mousedown</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerCow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerHorse&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerChicken&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerPig&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerSheep&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerDonkey&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;none&quot;</span><span style="color: #f8f8f2">);</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #75715e">//Marking an array with the animal divs in</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">cowsArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">horseArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">chickenArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">pigArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">sheepArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>
<span style="color: #66d9ef">let</span> <span style="color: #a6e22e">donkeyArray</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">[];</span>


<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmpty &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span> <span style="color: #75715e">//selecting the child elements (cows, sheep, donkey etc) of the wrapper div</span>
  <span style="color: #75715e">// console.log(i);</span>
  <span style="color: #75715e">// console.log($(this));</span>
  <span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span><span style="color: #75715e">//pushing the child elements into the array</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmptyHorse &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span> 
  <span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmptyChicken &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span> 
  <span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmptyPig &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span> 
  <span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmptySheep &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#ifEmptyDonkey &gt; *&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">each</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">i</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">push</span><span style="color: #f8f8f2">(</span><span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">this</span><span style="color: #f8f8f2">));</span>
<span style="color: #f8f8f2">});</span>


<span style="color: #75715e">/*Whenever the mouse leaves an animal (diffetent from click), </span>
<span style="color: #75715e">check to see if the array is empty, if it is then display the farmer and success message*/</span>
<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">cowsArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerCowDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmCow&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #75715e">// console.log(cowsArray);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">horseArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerHorseDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmHorse&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">chickenArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerChickenDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmChicken&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">pigArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerPigDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmPig&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">sheepArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerSheepDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmSheep&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;.animals&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">mouseleave</span><span style="color: #f8f8f2">(</span><span style="color: #66d9ef">function</span><span style="color: #f8f8f2">(){</span>
  <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #a6e22e">donkeyArray</span><span style="color: #f8f8f2">.</span><span style="color: #a6e22e">length</span> <span style="color: rgb(231, 95, 85)">==</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#farmerDonkeyDone&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #a6e22e">$</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;#backToFarmDonkey&quot;</span><span style="color: #f8f8f2">).</span><span style="color: #a6e22e">css</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;display&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;block&quot;</span><span style="color: #f8f8f2">);</span>
 <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">});</span>

<span style="color: #f8f8f2">});</span>
</pre></div>
