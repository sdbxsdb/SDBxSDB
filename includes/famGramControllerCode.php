<!-- HTML generated using hilite.me --><div style="background: #272822; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;</span><span style="color: #960050; background-color: #1e0010">?</span><span style="color: #f8f8f2">php</span>

<span style="color: #f8f8f2">namespace</span> <span style="color: #a6e22e">App</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Http</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Controllers</span><span style="color: #f8f8f2">;</span>

<span style="color: #f8f8f2">use</span> <span style="color: #a6e22e">App</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Models</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Post</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">use</span> <span style="color: #a6e22e">Illuminate</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Http</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Request</span><span style="color: #f8f8f2">;</span>
<span style="color: #f8f8f2">use</span> <span style="color: #a6e22e">Intervention</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Image</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Facades</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Image</span><span style="color: #f8f8f2">;</span>

<span style="color: #66d9ef">class</span> <span style="color: #a6e22e">PostsController</span> <span style="color: #66d9ef">extends</span> <span style="color: #a6e22e">Controller</span>
<span style="color: #66d9ef">{</span>
    <span style="color: #f8f8f2">public</span> <span style="color: #f8f8f2">function</span> <span style="color: #f8f8f2">__construct</span><span style="color: #66d9ef">()</span>
    <span style="color: #66d9ef">{</span>
        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">this</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">middleware</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;auth&#39;</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">}</span>

    <span style="color: #f8f8f2">public</span> <span style="color: #f8f8f2">function</span> <span style="color: #f8f8f2">index</span><span style="color: #66d9ef">()</span>
    <span style="color: #66d9ef">{</span>
        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">users</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">auth</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">user</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">following</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">pluck</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;profiles.user_id&#39;</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>

        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">posts</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">Post::whereIn</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;user_id&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">users</span><span style="color: #66d9ef">)</span><span style="color: #a6e22e">-&gt;</span><span style="color: #66d9ef">with(</span><span style="color: #e6db74">&#39;user&#39;</span><span style="color: #66d9ef">)</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">latest</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">paginate</span><span style="color: #66d9ef">(</span><span style="color: #ae81ff">5</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>

        <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">view</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;posts.index&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #f8f8f2">compact</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;posts&#39;</span><span style="color: #66d9ef">))</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">}</span>

    <span style="color: #f8f8f2">public</span> <span style="color: #f8f8f2">function</span> <span style="color: #f8f8f2">create</span><span style="color: #66d9ef">()</span>
    <span style="color: #66d9ef">{</span>
        <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">view</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;posts.create&#39;</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">}</span>

    <span style="color: #f8f8f2">public</span> <span style="color: #f8f8f2">function</span> <span style="color: #f8f8f2">store</span><span style="color: #66d9ef">()</span>
    <span style="color: #66d9ef">{</span>
        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">data</span><span style="color: #f92672">=</span> <span style="color: #f8f8f2">request</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">validate</span><span style="color: #66d9ef">([</span>
            <span style="color: #e6db74">&#39;caption&#39;</span><span style="color: #a6e22e">=&gt;</span><span style="color: #e6db74">&#39;required&#39;</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&#39;image&#39;</span><span style="color: #a6e22e">=&gt;</span><span style="color: #e6db74">&#39;required|image&#39;</span><span style="color: #f8f8f2">,</span>
        <span style="color: #66d9ef">])</span><span style="color: #f8f8f2">;</span>
<span style="color: #f92672">//</span><span style="color: #a6e22e">CHANGE</span> <span style="color: #a6e22e">PUBLIC</span> <span style="color: #a6e22e">TO</span> <span style="color: #a6e22e">X</span> <span style="color: #a6e22e">SO</span> <span style="color: #a6e22e">IMAGES</span> <span style="color: #a6e22e">ARE</span> <span style="color: #a6e22e">UPLOADED</span> <span style="color: #a6e22e">TO</span> <span style="color: #a6e22e">SERVER</span>
        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">imagePath</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">request</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;image&#39;</span><span style="color: #66d9ef">)</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">store</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;uploads&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #e6db74">&#39;public&#39;</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>

        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">image</span> <span style="color: #f92672">=</span> <span style="color: #f8f8f2">Image::make</span><span style="color: #66d9ef">(</span><span style="color: #f8f8f2">public_path</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&quot;storage/{$imagePath}&quot;</span><span style="color: #66d9ef">))</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">fit</span><span style="color: #66d9ef">(</span><span style="color: #ae81ff">1200</span><span style="color: #f8f8f2">,</span> <span style="color: #ae81ff">1200</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>
        <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">image</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">save</span><span style="color: #66d9ef">()</span><span style="color: #f8f8f2">;</span>

        <span style="color: #f8f8f2">auth</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">user</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">posts</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">create</span><span style="color: #66d9ef">([</span>
            <span style="color: #e6db74">&#39;caption&#39;</span> <span style="color: #a6e22e">=&gt;</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">data</span><span style="color: #66d9ef">[</span><span style="color: #e6db74">&#39;caption&#39;</span><span style="color: #66d9ef">]</span><span style="color: #f8f8f2">,</span>
            <span style="color: #e6db74">&#39;image&#39;</span> <span style="color: #a6e22e">=&gt;</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">imagePath,</span>
        <span style="color: #66d9ef">])</span><span style="color: #f8f8f2">;</span>

        <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">redirect</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;/profile/&#39;</span><span style="color: #f92672">.</span> <span style="color: #f8f8f2">auth</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">user</span><span style="color: #66d9ef">()</span><span style="color: #a6e22e">-&gt;</span><span style="color: #f8f8f2">id</span><span style="color: #66d9ef">)</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">}</span>

    <span style="color: #f8f8f2">public</span> <span style="color: #f8f8f2">function</span> <span style="color: #f8f8f2">show</span><span style="color: #66d9ef">(</span><span style="color: #f92672">\</span><span style="color: #a6e22e">App</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Models</span><span style="color: #f92672">\</span><span style="color: #a6e22e">Post</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">post</span><span style="color: #66d9ef">)</span>
    <span style="color: #66d9ef">{</span>
        <span style="color: #66d9ef">return</span> <span style="color: #f8f8f2">view</span><span style="color: #66d9ef">(</span><span style="color: #e6db74">&#39;posts.show&#39;</span><span style="color: #f8f8f2">,</span> <span style="color: #66d9ef">[</span>
            <span style="color: #e6db74">&#39;post&#39;</span> <span style="color: #a6e22e">=&gt;</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">post,</span>
        <span style="color: #66d9ef">])</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">}</span>
<span style="color: #66d9ef">}</span>
</pre></div>
