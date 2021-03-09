<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:none;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">&lt;?php</span> <span style="color: #66d9ef">include</span> <span style="color: #e6db74">&quot;phpIncludes/header_nav.php&quot;</span><span style="color: #f8f8f2">;</span><span style="color: #75715e">?&gt;</span>

<span style="color: #75715e">&lt;?php</span>
<span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(isset($_POST[</span><span style="color: #e6db74">&#39;btnSubmit&#39;</span><span style="color: #f8f8f2">]))</span> <span style="color: #f8f8f2">{</span>

    <span style="color: #75715e">// EMAIL AND SUBJECT OF EMAIL BEING SENT</span>
    <span style="color: #f8f8f2">$email_to</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;hello@everafterfilmsni.com&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$subject</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;Contact Submission Form&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">//ERROR MESSAGES IF DIED FUCNTION IS CALLED (SEMI-REDUNDANT BECAUSE SEND BUTTON WONT BE ENABLED UNTIL INPUT FIELDS ARE FILLED CORRECTLY ANYWAY)</span>
    <span style="color: #66d9ef">function</span> <span style="color: #a6e22e">died</span><span style="color: #f8f8f2">($error)</span>
    <span style="color: #f8f8f2">{</span>

        <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;We are very sorry, but there were error(s) found with the form you submitted. &quot;</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;These errors appear below.&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">echo</span> <span style="color: #f8f8f2">$error</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">echo</span> <span style="color: #e6db74">&quot;Please go back and fix these errors.&lt;br /&gt;&lt;br /&gt;&quot;</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">die</span><span style="color: #f8f8f2">();</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #75715e">// IF NOTHING ENTERED THEN THROW ERROR MESSAGE</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #f92672">!</span><span style="color: #f8f8f2">isset($_POST[</span><span style="color: #e6db74">&#39;name&#39;</span><span style="color: #f8f8f2">])</span> <span style="color: #f92672">||</span>
        <span style="color: #f92672">!</span><span style="color: #f8f8f2">isset($_POST[</span><span style="color: #e6db74">&#39;email&#39;</span><span style="color: #f8f8f2">])</span> <span style="color: #f92672">||</span>
        <span style="color: #f92672">!</span><span style="color: #f8f8f2">isset($_POST[</span><span style="color: #e6db74">&#39;message&#39;</span><span style="color: #f8f8f2">]))</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">died</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&#39;We are sorry, but there appears to be a problem with the form you submitted.&#39;</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//GETTING THE NAME EMAIL PHONE MESSAGE FROM THE FORM AND PUTTING IT INTO VARIABLES</span>
    <span style="color: #f8f8f2">$full_name</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;name&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>
    <span style="color: #f8f8f2">$email_from</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;email&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>
    <span style="color: #f8f8f2">$phone</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;phone&#39;</span><span style="color: #f8f8f2">];</span>
    <span style="color: #f8f8f2">$date</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;date&#39;</span><span style="color: #f8f8f2">];</span>
    <span style="color: #f8f8f2">$hear</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;hear&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>
    <span style="color: #f8f8f2">$message</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$_POST[</span><span style="color: #e6db74">&#39;message&#39;</span><span style="color: #f8f8f2">];</span> <span style="color: #75715e">// required</span>


    <span style="color: #f8f8f2">$error_message</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_exp</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&#39;/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/&#39;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">//CHECKING TO MAKE SURE VALID EMAIL IS ENTERED</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #f92672">!</span><span style="color: #f8f8f2">preg_match($email_exp,</span> <span style="color: #f8f8f2">$email_from))</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #f8f8f2">$error_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&#39;The e-mail you entered does not appear to be valid.&lt;br /&gt;&#39;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #75715e">//CHECKING TO MAKE SURE VALID NAME IS ENTERED</span>
    <span style="color: #f8f8f2">$string_exp</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;/^[A-Za-z .&#39;-]+$/&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(</span><span style="color: #f92672">!</span><span style="color: #f8f8f2">preg_match($string_exp,</span> <span style="color: #f8f8f2">$full_name))</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #f8f8f2">$error_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&#39;The name you entered does not appear to be valid.&lt;br /&gt;&#39;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #75715e">//CHECKING TO MAKE SURE MESSAGE IS MORE THAN 2 CHARACTERS</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(strlen($message)</span> <span style="color: #f92672">&lt;</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #f8f8f2">$error_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&#39;The message you entered does not appear to be valid.&lt;br /&gt;&#39;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #66d9ef">if</span> <span style="color: #f8f8f2">(strlen($error_message)</span> <span style="color: #f92672">&gt;</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #a6e22e">died</span><span style="color: #f8f8f2">($error_message);</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&quot;Form details below.</span><span style="color: #ae81ff">\n\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">//MAKING SURE THERE ARE NO HEADER INJECTIONS</span>
    <span style="color: #66d9ef">function</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($string)</span>
    <span style="color: #f8f8f2">{</span>
        <span style="color: #f8f8f2">$bad</span> <span style="color: #f92672">=</span> <span style="color: #66d9ef">array</span><span style="color: #f8f8f2">(</span><span style="color: #e6db74">&quot;content-type&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;bcc:&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;to:&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;cc:&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&quot;href&quot;</span><span style="color: #f8f8f2">);</span>
        <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">str_replace($bad,</span> <span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">,</span> <span style="color: #f8f8f2">$string);</span>
    <span style="color: #f8f8f2">}</span>

<span style="color: #75715e">//THE FORMAT OF THE EMAIL BEING SENT. CLEAN STRING CLEANING ANY WHITE SPACE</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;Name: &quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($full_name)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;Email: &quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($email_from)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;Phone: &quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($phone)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;Wedding Date: &quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($date)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;I heard about you via: &quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($hear)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_message</span> <span style="color: #f92672">.=</span> <span style="color: #e6db74">&quot;Message: </span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span> <span style="color: #f92672">.</span> <span style="color: #a6e22e">clean_string</span><span style="color: #f8f8f2">($message)</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\n</span><span style="color: #e6db74">&quot;</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">$email_from</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">$full_name</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&#39;&lt;&#39;</span> <span style="color: #f92672">.</span> <span style="color: #f8f8f2">$email_from</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&#39;&gt;&#39;</span><span style="color: #f8f8f2">;</span>

<span style="color: #75715e">// CREATING EMAIL HEADER FOR GMAIL TO RECOGNISE</span>
    <span style="color: #f8f8f2">$headers</span> <span style="color: #f92672">=</span> <span style="color: #e6db74">&#39;From: &#39;</span> <span style="color: #f92672">.</span> <span style="color: #f8f8f2">$email_from</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span> <span style="color: #f92672">.</span>
    <span style="color: #e6db74">&#39;Reply-To: &#39;</span> <span style="color: #f92672">.</span> <span style="color: #f8f8f2">$email_from</span> <span style="color: #f92672">.</span> <span style="color: #e6db74">&quot;</span><span style="color: #ae81ff">\r\n</span><span style="color: #e6db74">&quot;</span> <span style="color: #f92672">.</span>
    <span style="color: #e6db74">&#39;X-Mailer: PHP/&#39;</span> <span style="color: #f92672">.</span> <span style="color: #f8f8f2">phpversion();</span>
    <span style="color: #f92672">@</span><span style="color: #f8f8f2">mail($email_to,</span> <span style="color: #f8f8f2">$subject,</span> <span style="color: #f8f8f2">$email_message,</span> <span style="color: #f8f8f2">$headers);</span>

    <span style="color: #75715e">// echo $email_message;</span>

    <span style="color: #75715e">?&gt;</span>

&lt;!-- THANKS OR SUCCESS MESSAGE AFTER THE EMAIL HAS BEEN SENT --&gt;
&lt;section id=&quot;thanksMsgPG&quot;&gt;

&lt;h1 class=&quot;thanksmsg&quot;&gt;Thanks for getting in touch.&lt;/h1&gt;
&lt;h3 class=&quot;thanksmsg&quot;&gt;We&#39;ll get back to you ASAP!&lt;/h3&gt;
&lt;a href=&quot;index.php&quot;&gt;&lt;button class=&quot;btn &quot;&gt;Back&lt;/button&gt;&lt;/a&gt;

&lt;/section&gt;


<span style="color: #75715e">&lt;?php</span> <span style="color: #66d9ef">include</span> <span style="color: #e6db74">&quot;phpIncludes/footer.php&quot;</span><span style="color: #f8f8f2">;</span><span style="color: #75715e">?&gt;</span>



<span style="color: #75715e">&lt;?php</span>
<span style="color: #f8f8f2">}</span>
<span style="color: #75715e">?&gt;</span>
</pre></div>
