<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">&lt;?php</span>
<span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(isset($_POST[</span><span style="color: #e6db74">&#39;btnStockSubmit&#39;</span><span style="color: #f8f8f2">]))</span> <span style="color: #f8f8f2">{</span>

<span style="color: #75715e">// EMAIL AND SUBJECT OF EMAIL BEING SENT</span>
<span style="color: #f8f8f2">$email_to</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;info@cinecopters.co.uk&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$subject</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;Stock Submission Form&quot;</span><span style="color: #f8f8f2">;</span>



<span style="color: #75715e">//ERROR MESSAGES IF DIED FUCNTION IS CALLED (SEMI-REDUNDANT BECAUSE SEND BUTTON WONT BE ENABLED UNTIL INPUT FIELDS ARE FILLED CORRECTLY ANYWAY)</span>
<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">died</span><span style="color: #f8f8f2">($error)</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;We are very sorry, but there were error(s) found with the form you submitted. &quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;These errors appear below.&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">echo</span> <span style="color: #f8f8f2">$error</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;Please go back and fix these errors.&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">die</span><span style="color: #f8f8f2">();</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">// IF NOTHING ENTERED THEN THROW ERROR MESSAGE</span>
<span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(</span><span style="color: rgb(231, 95, 85)">!</span><span style="color: #f8f8f2">isset($_POST[</span><span style="color: #e6db74">&#39;name&#39;</span><span style="color: #f8f8f2">])</span> <span style="color: rgb(231, 95, 85)">||</span>
    <span style="color: rgb(231, 95, 85)">!</span><span style="color: #f8f8f2">isset($_POST[</span><span style="color: #e6db74">&#39;email&#39;</span><span style="color: #f8f8f2">]))</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #a6e22e">died</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;We are sorry, but there appears to be a problem with the form you submitted.&#39;</span><span style="color: #f8f8f2">);</span>      
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//ADDING EACH NEWLY ADDED ITEM TO AN ARRAY</span>
<span style="color: #f8f8f2">$stockTitle</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">();</span>
<span style="color: #66d9ef">foreach</span><span style="color: #f8f8f2">($_POST[</span><span style="color: #e6db74">&#39;stockNew&#39;</span><span style="color: #f8f8f2">]</span> <span style="color: #66d9ef">as</span> <span style="color: #f8f8f2">$stockKey</span> <span style="color: rgb(231, 95, 85)">=&gt;</span> <span style="color: #f8f8f2">$stockNew)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">$stockTitle[]</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">Stock Reel: &quot;</span> <span style="color: rgb(231, 95, 85)">.</span> <span style="color: #f8f8f2">$stockNew;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #f8f8f2">$tcInTitle</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">();</span>
<span style="color: #66d9ef">foreach</span><span style="color: #f8f8f2">($_POST[</span><span style="color: #e6db74">&#39;tcInNew&#39;</span><span style="color: #f8f8f2">]</span> <span style="color: #66d9ef">as</span> <span style="color: #f8f8f2">$tcInKey</span> <span style="color: rgb(231, 95, 85)">=&gt;</span> <span style="color: #f8f8f2">$tcInNew)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">$tcInTitle[]</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;TC In: &quot;</span><span style="color: rgb(231, 95, 85)">.</span> <span style="color: #f8f8f2">$tcInNew;</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #75715e">// echo &quot;&lt;pre&gt;&quot;; print_r($tcInTitle); echo &quot;&lt;/pre&gt;&quot;;</span>

<span style="color: #f8f8f2">$tcOutTitle</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">();</span>
<span style="color: #66d9ef">foreach</span><span style="color: #f8f8f2">($_POST[</span><span style="color: #e6db74">&#39;tcOutNew&#39;</span><span style="color: #f8f8f2">]</span> <span style="color: #66d9ef">as</span> <span style="color: #f8f8f2">$tcOutKey</span> <span style="color: rgb(231, 95, 85)">=&gt;</span> <span style="color: #f8f8f2">$tcOutNew)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">$tcOutTitle[]</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;TC Out: &quot;</span> <span style="color: rgb(231, 95, 85)">.</span> <span style="color: #f8f8f2">$tcOutNew;</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #75715e">// echo &quot;&lt;pre&gt;&quot;; print_r($tcOutTitle); echo &quot;&lt;/pre&gt;&quot;;</span>


<span style="color: #75715e">//GROUPING THE BELOW ARRAYS TOGETHER SO THEY CAN BE SORTED BY INDEX AND GROUPED TOGETHER. ie. index 1 of each of the arrays is grouped together</span>
<span style="color: #f8f8f2">$addStock</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">array_map(</span><span style="color: #66d9ef">null</span><span style="color: #f8f8f2">,</span> <span style="color: #f8f8f2">$stockTitle,</span> <span style="color: #f8f8f2">$tcInTitle,</span> <span style="color: #f8f8f2">$tcOutTitle);</span>


<span style="color: #75715e">//GETTING THE NAME EMAIL PHONE MESSAGE FROM THE FORM AND PUTTING IT INTO VARIABLES</span>
<span style="color: #f8f8f2">$full_name</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;name&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>
<span style="color: #f8f8f2">$email_from</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;email&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>
<span style="color: #f8f8f2">$company</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;company&#39;</span><span style="color: #f8f8f2">];</span>
<span style="color: #f8f8f2">$stock</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;stock&#39;</span><span style="color: #f8f8f2">];</span>
<span style="color: #f8f8f2">$tcIn</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;tcIn&#39;</span><span style="color: #f8f8f2">];</span>
<span style="color: #f8f8f2">$tcOut</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;tcOut&#39;</span><span style="color: #f8f8f2">];</span>
<span style="color: #f8f8f2">$newItem</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$addStockValue;</span> 


<span style="color: #75715e">//CHECKING TO MAKE SURE VALID EMAIL IS ENTERED</span>
<span style="color: #f8f8f2">$error_message</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$email_exp</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&#39;/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/&#39;</span><span style="color: #f8f8f2">;</span>
<span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(</span><span style="color: rgb(231, 95, 85)">!</span><span style="color: #f8f8f2">preg_match($email_exp,$email_from))</span> <span style="color: #f8f8f2">{</span>
<span style="color: #f8f8f2">$error_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&#39;The e-mail you entered does not appear to be valid.&lt;br /&gt;&#39;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">$string_exp</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;/^[A-Za-z .&#39;-]+$/&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">//CHECKING TO MAKE SURE VALID NAME IS ENTERED</span>
<span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(</span><span style="color: rgb(231, 95, 85)">!</span><span style="color: #f8f8f2">preg_match($string_exp,$full_name))</span> <span style="color: #f8f8f2">{</span>
<span style="color: #f8f8f2">$error_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&#39;The name you entered does not appear to be valid.&lt;br /&gt;&#39;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #66d9ef">if</span><span style="color: #f8f8f2">(strlen($error_message)</span> <span style="color: rgb(231, 95, 85)">&gt;</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
<span style="color: #a6e22e">died</span><span style="color: #f8f8f2">($error_message);</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&quot;Form details below.</span><span style="color: #ae81ff">\n\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #66d9ef">function</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($string)</span> <span style="color: #f8f8f2">{</span>
  <span style="color: #f8f8f2">$bad</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;content-type&quot;</span><span style="color: #f8f8f2">,</span><span style="color: #e6db74">&quot;bcc:&quot;</span><span style="color: #f8f8f2">,</span><span style="color: #e6db74">&quot;to:&quot;</span><span style="color: #f8f8f2">,</span><span style="color: #e6db74">&quot;cc:&quot;</span><span style="color: #f8f8f2">,</span><span style="color: #e6db74">&quot;href&quot;</span><span style="color: #f8f8f2">);</span>
  <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">str_replace($bad,</span><span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">,$string);</span>
<span style="color: #f8f8f2">}</span>


<span style="color: #75715e">//THE FORMAT OF THE EMAIL BEING SENT. CLEAN STRING CLEANING ANY WHITE SPACE</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&quot;Name: &quot;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($full_name)</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&quot;Email: &quot;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($email_from)</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&quot;Company: &quot;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($company)</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n\r\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&quot;Stock Reel: &quot;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($stock)</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #e6db74">&quot;TC In: &quot;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #f8f8f2">($tcIn)</span><span style="color: rgb(231, 95, 85)">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74"> TC Out: &quot;</span> <span style="color: rgb(231, 95, 85)">.</span>  <span style="color: #f8f8f2">($tcOut)</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">//LOOPING THROUGH THE GROUPED ARRAY AND ADDING EACH GROUPED VALUE TO THE EMAIL</span>
<span style="color: #66d9ef">foreach</span><span style="color: #f8f8f2">($addStock</span> <span style="color: #66d9ef">as</span> <span style="color: #f8f8f2">$addStockList){</span>
  <span style="color: #66d9ef">foreach</span><span style="color: #f8f8f2">($addStockList</span> <span style="color: #66d9ef">as</span> <span style="color: #f8f8f2">$key</span><span style="color: rgb(231, 95, 85)">=&gt;</span><span style="color: #f8f8f2">$addStockValue){</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: rgb(231, 95, 85)">.=</span> <span style="color: #f8f8f2">($addStockValue)</span><span style="color: rgb(231, 95, 85)">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
  <span style="color: #f8f8f2">}</span>
<span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//MAKING THE EMAIL INBOX SHOW THE PERSONS FIRST AND LAST NAME RATHER THAN THEIR EMAIL (NOT SURE HOW)</span>
<span style="color: #f8f8f2">$email_from</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #f8f8f2">$full_name</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&#39;&lt;&#39;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #f8f8f2">$email_from</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&#39;&gt;&#39;</span><span style="color: #f8f8f2">;</span>


<span style="color: #75715e">//CREATING HEADERS FOR THE EMAIL PROVIDER</span>
<span style="color: #f8f8f2">$headers</span> <span style="color: rgb(231, 95, 85)">=</span> <span style="color: #e6db74">&#39;From: &#39;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #f8f8f2">$email_from</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span><span style="color: rgb(231, 95, 85)">.</span>
<span style="color: #e6db74">&#39;Reply-To: &#39;</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #f8f8f2">$email_from</span><span style="color: rgb(231, 95, 85)">.</span><span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span> <span style="color: rgb(231, 95, 85)">.</span>
<span style="color: #e6db74">&#39;X-Mailer: PHP/&#39;</span> <span style="color: rgb(231, 95, 85)">.</span> <span style="color: #f8f8f2">phpversion();</span>
<span style="color: rgb(231, 95, 85)">@</span><span style="color: #f8f8f2">mail($email_to,</span> <span style="color: #f8f8f2">$subject,</span> <span style="color: #f8f8f2">$email_message,</span> <span style="color: #f8f8f2">$headers);</span>


<span style="color: #75715e">?&gt;</span>

&lt;!-- HTML THANKS OR SUCCESSFUL SENT MESSAGE --&gt;
<span style="color: #75715e">&lt;?php</span> <span style="color: #66d9ef">include</span> <span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;phpIncludes/header_nav.php&quot;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span>

&lt;div class=&quot;container&quot; id=&quot;stockThanksMsg&quot;&gt;
&lt;h1&gt;Thanks!&lt;/h1&gt;  &lt;h4&gt;Your stock request is flying to us now.  We&#39;ll get back to you ASAP!&lt;/h4&gt;
&lt;a href=&quot;showreelstock.php&quot;&gt;
&lt;button class=&quot;btn btn-danger&quot;&gt;Buy More Stock&lt;/button&gt;
&lt;/a&gt;
&lt;/div&gt;


<span style="color: #75715e">&lt;?php</span> <span style="color: #66d9ef">include</span> <span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;phpIncludes/footer.php&quot;</span><span style="color: #f8f8f2">)</span> <span style="color: #75715e">?&gt;</span>



<span style="color: #75715e">&lt;?php</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #75715e">?&gt;</span>
</pre></div>
