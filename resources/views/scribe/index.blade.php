<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.36.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.36.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-post-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="post-management">
                    <a href="#post-management">Post management</a>
                </li>
                                    <ul id="tocify-subheader-post-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="post-management-GETapi-posts">
                                <a href="#post-management-GETapi-posts">Index Posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-management-POSTapi-posts">
                                <a href="#post-management-POSTapi-posts">Store Post</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-management-GETapi-posts--id-">
                                <a href="#post-management-GETapi-posts--id-">Show Post</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-management-PUTapi-posts--id-">
                                <a href="#post-management-PUTapi-posts--id-">Update Post</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="post-management-DELETEapi-posts--id-">
                                <a href="#post-management-DELETEapi-posts--id-">Delete post</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-subscription-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="subscription-management">
                    <a href="#subscription-management">Subscription management</a>
                </li>
                                    <ul id="tocify-subheader-subscription-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="subscription-management-PUTapi-websites--website_id--subscribe">
                                <a href="#subscription-management-PUTapi-websites--website_id--subscribe">Subscribe</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="subscription-management-PUTapi-websites--website_id--unsubscribe">
                                <a href="#subscription-management-PUTapi-websites--website_id--unsubscribe">Unsubscribe</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-website-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="website-management">
                    <a href="#website-management">Website management</a>
                </li>
                                    <ul id="tocify-subheader-website-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="website-management-GETapi-websites">
                                <a href="#website-management-GETapi-websites">Index Websites</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="website-management-POSTapi-websites">
                                <a href="#website-management-POSTapi-websites">Store Website</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="website-management-GETapi-websites--id-">
                                <a href="#website-management-GETapi-websites--id-">Show Website</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="website-management-PUTapi-websites--id-">
                                <a href="#website-management-PUTapi-websites--id-">Update Website</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="website-management-DELETEapi-websites--id-">
                                <a href="#website-management-DELETEapi-websites--id-">Delete website</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 28, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="post-management">Post management</h1>

    <p>APIs for managing posts</p>

                                <h2 id="post-management-GETapi-posts">Index Posts</h2>

<p>
</p>

<p>This endpoint will list all posts</p>

<span id="example-requests-GETapi-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-posts">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;website_id&quot;: 5,
            &quot;title&quot;: &quot;Et consequatur occaecati hic corrupti maxime in.&quot;,
            &quot;description&quot;: &quot;Quo repellat quisquam ut animi quam molestiae sint. Expedita culpa rem quos est. Tempore eveniet accusantium est et non officia.&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;website_id&quot;: 9,
            &quot;title&quot;: &quot;Consequatur natus quasi veritatis consequatur.&quot;,
            &quot;description&quot;: &quot;Voluptates minima quibusdam et doloribus quod dolorem a. Dolores dolor ea ab excepturi atque sint nisi. Voluptates ea consequatur et explicabo. Tempora id sit occaecati nulla at enim.&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;website_id&quot;: 1,
            &quot;title&quot;: &quot;Voluptatem repellat sunt id labore.&quot;,
            &quot;description&quot;: &quot;Et veritatis explicabo rem assumenda qui. Repellendus iusto corporis saepe consectetur neque quod reiciendis. Est ad veniam ullam saepe consequatur hic.&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;website_id&quot;: 14,
            &quot;title&quot;: &quot;Eum autem voluptates suscipit molestiae voluptatibus ipsum.&quot;,
            &quot;description&quot;: &quot;Hic qui asperiores quibusdam incidunt quo. Eligendi omnis illum facilis eum et sit voluptatem. Nemo et laborum rem tempora accusamus. Praesentium sit quo veritatis.&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;website_id&quot;: 1,
            &quot;title&quot;: &quot;Corporis non non cum vero.&quot;,
            &quot;description&quot;: &quot;Omnis adipisci fuga quia vitae blanditiis placeat occaecati. Rerum ducimus et aliquid enim architecto illum. Iure repudiandae libero repudiandae qui voluptas. Tempora omnis natus consequatur consequatur optio excepturi.&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;website_id&quot;: 2,
            &quot;title&quot;: &quot;Excepturi sed fugit omnis quibusdam nesciunt illo dolores.&quot;,
            &quot;description&quot;: &quot;Facere consequatur inventore ipsam velit quia eum magnam et. Ea quisquam quae tempore voluptas. Est consequuntur ea ut doloremque.&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;website_id&quot;: 5,
            &quot;title&quot;: &quot;Amet odio nulla quis non laboriosam nihil non.&quot;,
            &quot;description&quot;: &quot;Sed natus rerum sint blanditiis. Odit id qui animi enim harum. Et et voluptatem ab libero. Eveniet voluptatem ut explicabo dolor. Provident fugiat nostrum quia fugiat quam odio nemo.&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;website_id&quot;: 13,
            &quot;title&quot;: &quot;In ipsam dolor soluta quas eligendi.&quot;,
            &quot;description&quot;: &quot;Ut qui sint nemo neque consequatur est voluptate. Sint quisquam debitis delectus et. Laboriosam dolorem assumenda non magni odit. Tenetur in necessitatibus dolor ducimus qui et.&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;website_id&quot;: 16,
            &quot;title&quot;: &quot;Nobis maxime rerum at voluptatum modi.&quot;,
            &quot;description&quot;: &quot;Aliquam rerum esse eos ullam magnam unde voluptas sint. Et vero quis natus quia. Exercitationem quisquam sint rerum sed deleniti quidem quo. Molestias eum dolor ad doloribus voluptas illum. Amet quia tempore ad laudantium.&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;website_id&quot;: 18,
            &quot;title&quot;: &quot;Voluptatem autem itaque enim quisquam pariatur.&quot;,
            &quot;description&quot;: &quot;Earum maiores pariatur nulla eaque reprehenderit qui quo. Delectus quisquam sunt explicabo voluptate. Quod unde minus qui vitae quam. Blanditiis vel corrupti quaerat ut laboriosam voluptas ut.&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;website_id&quot;: 19,
            &quot;title&quot;: &quot;Deleniti harum doloribus culpa ipsa eos qui quod.&quot;,
            &quot;description&quot;: &quot;Cum enim enim non. Qui et non ipsa nam tenetur. Id et voluptatum mollitia quidem.&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;website_id&quot;: 1,
            &quot;title&quot;: &quot;Nihil totam suscipit recusandae veritatis architecto.&quot;,
            &quot;description&quot;: &quot;Et ex harum voluptates nihil soluta dicta qui. Eligendi impedit molestiae sapiente deserunt eveniet et sed aut. Aut et molestiae qui rem harum sint aut. Deserunt praesentium sit sed veniam.&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;website_id&quot;: 7,
            &quot;title&quot;: &quot;Odit magni ex omnis et rerum voluptatem expedita.&quot;,
            &quot;description&quot;: &quot;Enim eius voluptas libero aut eos. Totam voluptate sed fugiat provident ullam similique optio. Quidem autem adipisci dolores omnis.&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;website_id&quot;: 9,
            &quot;title&quot;: &quot;Facere veritatis recusandae sint repellat.&quot;,
            &quot;description&quot;: &quot;Possimus at qui ut autem. Minus quisquam ad quia est est. Rerum blanditiis quis modi blanditiis voluptas enim.&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;website_id&quot;: 18,
            &quot;title&quot;: &quot;Accusamus qui velit deserunt.&quot;,
            &quot;description&quot;: &quot;Voluptas sed blanditiis officia et quas incidunt aperiam. Eius sed voluptatem mollitia dicta quisquam.&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/posts?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/posts?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost/api/posts?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/posts?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/posts?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/posts?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/posts&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 30
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-posts" data-method="GET"
      data-path="api/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-posts"
                    onclick="tryItOut('GETapi-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-posts"
                    onclick="cancelTryOut('GETapi-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="post-management-POSTapi-posts">Store Post</h2>

<p>
</p>

<p>This endpoint will create a new post</p>

<span id="example-requests-POSTapi-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"website_id\": 1,
    \"title\": \"My First Post\",
    \"description\": \"This is my first post. I hope you like it!\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "website_id": 1,
    "title": "My First Post",
    "description": "This is my first post. I hope you like it!"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-posts">
            <blockquote>
            <p>Example response (201, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Post successfully created&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 31,
        &quot;website_id&quot;: 1,
        &quot;title&quot;: &quot;My First Post&quot;,
        &quot;description&quot;: &quot;This is my first post. I hope you like it!&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Validation Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The example_field1 is required. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;example_field1&quot;: [
            &quot;The example_field1 field is required.&quot;
        ],
        &quot;example_field2&quot;: [
            &quot;The example_field2 field must be numeric.&quot;
        ],
        &quot;example_field3&quot;: [
            &quot;The example_field3 field must be a date.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-posts" data-method="POST"
      data-path="api/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-posts"
                    onclick="tryItOut('POSTapi-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-posts"
                    onclick="cancelTryOut('POSTapi-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>website_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="website_id"                data-endpoint="POSTapi-posts"
               value="1"
               data-component="body">
    <br>
<p>The ID of the website to which the post belongs. Example: <code>1</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-posts"
               value="My First Post"
               data-component="body">
    <br>
<p>The title of the post. Must not be greater than 255 characters. Example: <code>My First Post</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-posts"
               value="This is my first post. I hope you like it!"
               data-component="body">
    <br>
<p>The description of the post. Example: <code>This is my first post. I hope you like it!</code></p>
        </div>
        </form>

                    <h2 id="post-management-GETapi-posts--id-">Show Post</h2>

<p>
</p>

<p>This endpoint will show the details of the post</p>

<span id="example-requests-GETapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/posts/14" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/14"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-posts--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Post successfully retrieved&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 31,
        &quot;website_id&quot;: 1,
        &quot;title&quot;: &quot;My First Post&quot;,
        &quot;description&quot;: &quot;This is my first post. I hope you like it!&quot;,
        &quot;website&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Sequi voluptates non eaque blanditiis velit blanditiis deserunt.&quot;,
            &quot;url&quot;: &quot;http://www.beer.net/nobis-possimus-amet-ut-dolore-aut-debitis&quot;,
            &quot;description&quot;: &quot;Aut voluptatem debitis quasi ab deserunt expedita aspernatur. Sed laudantium et ipsam eum quo. Rerum quidem voluptas sapiente et.&quot;
        }
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-posts--id-" data-method="GET"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-posts--id-"
                    onclick="tryItOut('GETapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-posts--id-"
                    onclick="cancelTryOut('GETapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-posts--id-"
               value="14"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>14</code></p>
            </div>
                    </form>

                    <h2 id="post-management-PUTapi-posts--id-">Update Post</h2>

<p>
</p>

<p>This endpoint will update a Post</p>

<span id="example-requests-PUTapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/posts/17" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"My First Post\",
    \"description\": \"This is my first post. I hope you like it!\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/17"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "My First Post",
    "description": "This is my first post. I hope you like it!"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-posts--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Post successfully updated&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 31,
        &quot;website_id&quot;: 1,
        &quot;title&quot;: &quot;My First Post edited&quot;,
        &quot;description&quot;: &quot;This is my first post. I hope you like it! edited!&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Validation Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The example_field1 is required. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;example_field1&quot;: [
            &quot;The example_field1 field is required.&quot;
        ],
        &quot;example_field2&quot;: [
            &quot;The example_field2 field must be numeric.&quot;
        ],
        &quot;example_field3&quot;: [
            &quot;The example_field3 field must be a date.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-posts--id-" data-method="PUT"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-posts--id-"
                    onclick="tryItOut('PUTapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-posts--id-"
                    onclick="cancelTryOut('PUTapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/posts/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-posts--id-"
               value="17"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>17</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-posts--id-"
               value="My First Post"
               data-component="body">
    <br>
<p>The title of the post. Must not be greater than 255 characters. Example: <code>My First Post</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-posts--id-"
               value="This is my first post. I hope you like it!"
               data-component="body">
    <br>
<p>The description of the post. Example: <code>This is my first post. I hope you like it!</code></p>
        </div>
        </form>

                    <h2 id="post-management-DELETEapi-posts--id-">Delete post</h2>

<p>
</p>

<p>This endpoint will delete a post</p>

<span id="example-requests-DELETEapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/posts/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/posts/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-posts--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Post successfully deleted&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-posts--id-" data-method="DELETE"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-posts--id-"
                    onclick="tryItOut('DELETEapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-posts--id-"
                    onclick="cancelTryOut('DELETEapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-posts--id-"
               value="7"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>7</code></p>
            </div>
                    </form>

                <h1 id="subscription-management">Subscription management</h1>

    <p>APIs for managing subscriptions</p>

                                <h2 id="subscription-management-PUTapi-websites--website_id--subscribe">Subscribe</h2>

<p>
</p>

<p>This endpoint will subscribe the user to the website</p>

<span id="example-requests-PUTapi-websites--website_id--subscribe">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/websites/10/subscribe" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_email\": \"user@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites/10/subscribe"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_email": "user@example.com"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-websites--website_id--subscribe">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Successfully subscribed&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-websites--website_id--subscribe" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-websites--website_id--subscribe"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-websites--website_id--subscribe"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-websites--website_id--subscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-websites--website_id--subscribe">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-websites--website_id--subscribe" data-method="PUT"
      data-path="api/websites/{website_id}/subscribe"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-websites--website_id--subscribe', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-websites--website_id--subscribe"
                    onclick="tryItOut('PUTapi-websites--website_id--subscribe');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-websites--website_id--subscribe"
                    onclick="cancelTryOut('PUTapi-websites--website_id--subscribe');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-websites--website_id--subscribe"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/websites/{website_id}/subscribe</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-websites--website_id--subscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-websites--website_id--subscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>website_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="website_id"                data-endpoint="PUTapi-websites--website_id--subscribe"
               value="10"
               data-component="url">
    <br>
<p>The ID of the website. Example: <code>10</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_email"                data-endpoint="PUTapi-websites--website_id--subscribe"
               value="user@example.com"
               data-component="body">
    <br>
<p>The email of the user. Must be a valid email address. Example: <code>user@example.com</code></p>
        </div>
        </form>

                    <h2 id="subscription-management-PUTapi-websites--website_id--unsubscribe">Unsubscribe</h2>

<p>
</p>

<p>This endpoint will subscribe the user to the website</p>

<span id="example-requests-PUTapi-websites--website_id--unsubscribe">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/websites/13/unsubscribe" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_email\": \"user@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites/13/unsubscribe"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_email": "user@example.com"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-websites--website_id--unsubscribe">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Successfully unsubscribed&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-websites--website_id--unsubscribe" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-websites--website_id--unsubscribe"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-websites--website_id--unsubscribe"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-websites--website_id--unsubscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-websites--website_id--unsubscribe">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-websites--website_id--unsubscribe" data-method="PUT"
      data-path="api/websites/{website_id}/unsubscribe"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-websites--website_id--unsubscribe', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-websites--website_id--unsubscribe"
                    onclick="tryItOut('PUTapi-websites--website_id--unsubscribe');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-websites--website_id--unsubscribe"
                    onclick="cancelTryOut('PUTapi-websites--website_id--unsubscribe');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-websites--website_id--unsubscribe"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/websites/{website_id}/unsubscribe</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-websites--website_id--unsubscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-websites--website_id--unsubscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>website_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="website_id"                data-endpoint="PUTapi-websites--website_id--unsubscribe"
               value="13"
               data-component="url">
    <br>
<p>The ID of the website. Example: <code>13</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_email"                data-endpoint="PUTapi-websites--website_id--unsubscribe"
               value="user@example.com"
               data-component="body">
    <br>
<p>The email of the user. Must be a valid email address. Example: <code>user@example.com</code></p>
        </div>
        </form>

                <h1 id="website-management">Website management</h1>

    <p>APIs for managing websites</p>

                                <h2 id="website-management-GETapi-websites">Index Websites</h2>

<p>
</p>

<p>This endpoint will list all websites</p>

<span id="example-requests-GETapi-websites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/websites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-websites">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Sequi voluptates non eaque blanditiis velit blanditiis deserunt.&quot;,
            &quot;url&quot;: &quot;http://www.beer.net/nobis-possimus-amet-ut-dolore-aut-debitis&quot;,
            &quot;description&quot;: &quot;Aut voluptatem debitis quasi ab deserunt expedita aspernatur. Sed laudantium et ipsam eum quo. Rerum quidem voluptas sapiente et.&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Perspiciatis reprehenderit sint rem asperiores.&quot;,
            &quot;url&quot;: &quot;https://kutch.net/ratione-quod-hic-beatae.html&quot;,
            &quot;description&quot;: &quot;Ullam dolorem et consequatur dicta est aut dolor. Doloribus qui ut perferendis sint quidem doloremque quas ratione. Enim et voluptas explicabo ut error. Recusandae et eum est quo accusamus vero maiores.&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Accusamus et aut et ratione et.&quot;,
            &quot;url&quot;: &quot;http://dubuque.net/&quot;,
            &quot;description&quot;: &quot;Illum magni et quod omnis et ea. Repellat ullam consectetur et aliquid animi sint. Vel illum tempore mollitia et quia qui est. Ut non et labore saepe provident in doloremque nostrum.&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Qui sed quibusdam consequatur dolores illo id.&quot;,
            &quot;url&quot;: &quot;http://steuber.com/qui-facilis-temporibus-earum-minus-eaque-est&quot;,
            &quot;description&quot;: &quot;Aliquam recusandae ab eligendi inventore rem odio. Nulla totam consectetur in non excepturi.&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Qui officia sit nam commodi neque voluptatem.&quot;,
            &quot;url&quot;: &quot;http://hauck.net/aut-corporis-odit-aliquam-repellendus-inventore&quot;,
            &quot;description&quot;: &quot;In in veritatis alias odio. Sapiente vel consequatur asperiores eius possimus quia eaque minus. Consequatur voluptates distinctio cumque aut totam sit ad fugiat.&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Aliquam impedit et eaque non inventore.&quot;,
            &quot;url&quot;: &quot;http://hammes.com/&quot;,
            &quot;description&quot;: &quot;Vel nihil rem quia deserunt libero. Impedit non odio aperiam corrupti voluptatibus expedita. Deserunt in consequatur tenetur est consequatur. Rerum vel nihil tempore qui. Delectus rerum occaecati ratione repudiandae ut.&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Repudiandae quam vel assumenda voluptatem iure facere.&quot;,
            &quot;url&quot;: &quot;http://www.legros.net/deleniti-non-aut-corporis-magnam-sunt-optio.html&quot;,
            &quot;description&quot;: &quot;Maxime ex saepe maiores magnam porro ut est. Ut quasi dolor exercitationem eaque.&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Autem eum repellendus qui et necessitatibus.&quot;,
            &quot;url&quot;: &quot;http://kessler.com/id-enim-provident-quo-repellendus-iste&quot;,
            &quot;description&quot;: &quot;Ut sequi atque molestias magnam qui. Soluta voluptatem quibusdam ut accusamus quia dolorem asperiores quam. Ipsam aspernatur id ipsam aperiam sed. Dolor officiis natus fugiat repellat.&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Nulla quia est esse esse ducimus laudantium.&quot;,
            &quot;url&quot;: &quot;http://www.rosenbaum.com/ut-velit-placeat-qui-quo-vel-magnam-ullam.html&quot;,
            &quot;description&quot;: &quot;Voluptatibus aut deleniti aliquid omnis magni odio repellat. Earum omnis molestiae aut odio excepturi magni nam cum. Amet exercitationem eius expedita maxime recusandae. Animi et voluptatem consequuntur sint accusantium tenetur et.&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Dolore beatae quo architecto natus nemo et nulla.&quot;,
            &quot;url&quot;: &quot;http://corkery.com/&quot;,
            &quot;description&quot;: &quot;Vitae neque praesentium et temporibus blanditiis quia. Eos maiores accusamus voluptas non eius. Earum sapiente molestias voluptatum aut sed.&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Odit est delectus et et architecto doloremque.&quot;,
            &quot;url&quot;: &quot;http://gusikowski.org/modi-corporis-adipisci-veniam-ut-qui.html&quot;,
            &quot;description&quot;: &quot;Aut qui doloribus iusto. Dolorem deleniti aperiam recusandae. Cum et in pariatur voluptatum. Iusto est autem sunt sit sit et aut quod.&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Aperiam blanditiis et dolor atque omnis tempore qui.&quot;,
            &quot;url&quot;: &quot;https://www.walter.com/accusamus-dolorem-dolor-est-in-quis-alias&quot;,
            &quot;description&quot;: &quot;Omnis consequatur deserunt voluptatem ex vel unde. Aliquam accusamus expedita animi voluptatem expedita dolores. Expedita voluptas nihil vitae hic voluptatem.&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Reiciendis magnam repudiandae cum cum non libero non et.&quot;,
            &quot;url&quot;: &quot;http://www.kutch.com/vero-earum-sit-consequatur-totam-sequi-iusto&quot;,
            &quot;description&quot;: &quot;Sed molestiae quo placeat velit magni est laborum. Cumque consequatur laborum odio omnis incidunt rerum inventore. Placeat vel provident deleniti sint molestias qui.&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Quas laudantium commodi maxime qui tempore dolores.&quot;,
            &quot;url&quot;: &quot;https://www.block.com/magni-numquam-ratione-porro-ut-voluptatem-eos-enim-consequatur&quot;,
            &quot;description&quot;: &quot;Est et architecto sapiente debitis sit et ea. Ut mollitia vel dignissimos eveniet commodi. Ut ipsum maiores sit sunt eos eum.&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Est perspiciatis rerum fuga quaerat excepturi.&quot;,
            &quot;url&quot;: &quot;http://www.wisoky.info/omnis-sequi-temporibus-omnis-ut.html&quot;,
            &quot;description&quot;: &quot;Consequatur iusto accusantium fugit sequi est pariatur. Ipsa nihil qui voluptatem culpa soluta quia voluptate tenetur.&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/websites?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/websites?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost/api/websites?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/websites?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/websites?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/websites?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/websites&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 20
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-websites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-websites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-websites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-websites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-websites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-websites" data-method="GET"
      data-path="api/websites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-websites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-websites"
                    onclick="tryItOut('GETapi-websites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-websites"
                    onclick="cancelTryOut('GETapi-websites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-websites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/websites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-websites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-websites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="website-management-POSTapi-websites">Store Website</h2>

<p>
</p>

<p>This endpoint will create a new website</p>

<span id="example-requests-POSTapi-websites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/websites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"My Website\",
    \"url\": \"https:\\/\\/www.example.com\",
    \"description\": \"This is my website. I hope you like it!\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "My Website",
    "url": "https:\/\/www.example.com",
    "description": "This is my website. I hope you like it!"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-websites">
            <blockquote>
            <p>Example response (201, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Website successfully created&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;My Website&quot;,
        &quot;url&quot;: &quot;https://www.example.com&quot;,
        &quot;description&quot;: &quot;This is my website. I hope you like it!&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Validation Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The example_field1 is required. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;example_field1&quot;: [
            &quot;The example_field1 field is required.&quot;
        ],
        &quot;example_field2&quot;: [
            &quot;The example_field2 field must be numeric.&quot;
        ],
        &quot;example_field3&quot;: [
            &quot;The example_field3 field must be a date.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-websites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-websites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-websites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-websites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-websites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-websites" data-method="POST"
      data-path="api/websites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-websites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-websites"
                    onclick="tryItOut('POSTapi-websites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-websites"
                    onclick="cancelTryOut('POSTapi-websites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-websites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/websites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-websites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-websites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-websites"
               value="My Website"
               data-component="body">
    <br>
<p>The name of the website. Must not be greater than 255 characters. Example: <code>My Website</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="POSTapi-websites"
               value="https://www.example.com"
               data-component="body">
    <br>
<p>The URL of the website. Must be a valid URL. Must not be greater than 255 characters. Example: <code>https://www.example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-websites"
               value="This is my website. I hope you like it!"
               data-component="body">
    <br>
<p>The description of the website. Example: <code>This is my website. I hope you like it!</code></p>
        </div>
        </form>

                    <h2 id="website-management-GETapi-websites--id-">Show Website</h2>

<p>
</p>

<p>This endpoint will show the details of the website</p>

<span id="example-requests-GETapi-websites--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/websites/18" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites/18"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-websites--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Website successfully retrieved&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;My Website&quot;,
        &quot;url&quot;: &quot;https://www.example.com&quot;,
        &quot;description&quot;: &quot;This is my website. I hope you like it!&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-websites--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-websites--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-websites--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-websites--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-websites--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-websites--id-" data-method="GET"
      data-path="api/websites/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-websites--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-websites--id-"
                    onclick="tryItOut('GETapi-websites--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-websites--id-"
                    onclick="cancelTryOut('GETapi-websites--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-websites--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/websites/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-websites--id-"
               value="18"
               data-component="url">
    <br>
<p>The ID of the website. Example: <code>18</code></p>
            </div>
                    </form>

                    <h2 id="website-management-PUTapi-websites--id-">Update Website</h2>

<p>
</p>

<p>This endpoint will update a Website</p>

<span id="example-requests-PUTapi-websites--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/websites/20" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"My Website\",
    \"url\": \"https:\\/\\/www.example.com\",
    \"description\": \"This is my website. I hope you like it!\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites/20"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "My Website",
    "url": "https:\/\/www.example.com",
    "description": "This is my website. I hope you like it!"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-websites--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Website successfully updated&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;My Website edited&quot;,
        &quot;url&quot;: &quot;https://www.editedexample.com&quot;,
        &quot;description&quot;: &quot;This is my edited website. I hope you like it!&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (400, Validation Error):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;The example_field1 is required. (and 2 more errors)&quot;,
    &quot;errors&quot;: {
        &quot;example_field1&quot;: [
            &quot;The example_field1 field is required.&quot;
        ],
        &quot;example_field2&quot;: [
            &quot;The example_field2 field must be numeric.&quot;
        ],
        &quot;example_field3&quot;: [
            &quot;The example_field3 field must be a date.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTapi-websites--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-websites--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-websites--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-websites--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-websites--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-websites--id-" data-method="PUT"
      data-path="api/websites/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-websites--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-websites--id-"
                    onclick="tryItOut('PUTapi-websites--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-websites--id-"
                    onclick="cancelTryOut('PUTapi-websites--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-websites--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/websites/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/websites/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-websites--id-"
               value="20"
               data-component="url">
    <br>
<p>The ID of the website. Example: <code>20</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-websites--id-"
               value="My Website"
               data-component="body">
    <br>
<p>The name of the website. Must not be greater than 255 characters. Example: <code>My Website</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="url"                data-endpoint="PUTapi-websites--id-"
               value="https://www.example.com"
               data-component="body">
    <br>
<p>The URL of the website. Must be a valid URL. Must not be greater than 255 characters. Example: <code>https://www.example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-websites--id-"
               value="This is my website. I hope you like it!"
               data-component="body">
    <br>
<p>The description of the website. Example: <code>This is my website. I hope you like it!</code></p>
        </div>
        </form>

                    <h2 id="website-management-DELETEapi-websites--id-">Delete website</h2>

<p>
</p>

<p>This endpoint will delete a website</p>

<span id="example-requests-DELETEapi-websites--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/websites/7" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/websites/7"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-websites--id-">
            <blockquote>
            <p>Example response (200, Success):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: &quot;success&quot;,
    &quot;message&quot;: &quot;Website successfully deleted&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Not Found):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\ModelName] 1&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-websites--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-websites--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-websites--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-websites--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-websites--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-websites--id-" data-method="DELETE"
      data-path="api/websites/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-websites--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-websites--id-"
                    onclick="tryItOut('DELETEapi-websites--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-websites--id-"
                    onclick="cancelTryOut('DELETEapi-websites--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-websites--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/websites/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-websites--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-websites--id-"
               value="7"
               data-component="url">
    <br>
<p>The ID of the website. Example: <code>7</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
