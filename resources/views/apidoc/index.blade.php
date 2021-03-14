<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Brand</h1>
<p>APIs for brand</p>
<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brand"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Price-Klein",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 2,
            "name": "Schaefer-Feil",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 3,
            "name": "Marvin-Heidenreich",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 4,
            "name": "Farrell-Dietrich",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 5,
            "name": "Wyman-Lynch",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/brand</code></p>
<!-- END_ec5d69c57dff08a10fad5f9cf208ad9f -->
<!-- START_907ecccfb795fb1a76e52450b3d2dd1f -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "Price-Klein",
        "created_at": "2021-03-12T17:08:51.000000Z",
        "updated_at": "2021-03-12T17:08:51.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/brand/{brand}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the brand.</td>
</tr>
</tbody>
</table>
<!-- END_907ecccfb795fb1a76e52450b3d2dd1f -->
<h1>Category</h1>
<p>APIs for category</p>
<!-- START_db20564ba266cd451caac114b3eac8ab -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Veum Inc",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 2,
            "name": "Pacocha PLC",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 3,
            "name": "Boyer-Harber",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 4,
            "name": "Windler LLC",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        },
        {
            "id": 5,
            "name": "Zieme, Baumbach and Waelchi",
            "created_at": "2021-03-12T17:08:51.000000Z",
            "updated_at": "2021-03-12T17:08:51.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category</code></p>
<!-- END_db20564ba266cd451caac114b3eac8ab -->
<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "Veum Inc",
        "created_at": "2021-03-12T17:08:51.000000Z",
        "updated_at": "2021-03-12T17:08:51.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category/{category}</code></p>
<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->
<h1>Comment</h1>
<p>APIs for comment</p>
<!-- START_b9d6267392532c6008f9ac9629a3d4c3 -->
<h2>Display comments by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment/comment-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment/comment-product/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment/comment-product/{product_id?}</code></p>
<!-- END_b9d6267392532c6008f9ac9629a3d4c3 -->
<h1>Product</h1>
<p>APIs for product</p>
<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product</code></p>
<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->
<!-- START_1fcbf5d495e6ada99ea017e9ae32b380 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product/{product}</code></p>
<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->
<h1>Rating</h1>
<p>APIs for rating</p>
<!-- START_e2cf52df507d02a2867a78c3c1dd77b5 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating</code></p>
<!-- END_e2cf52df507d02a2867a78c3c1dd77b5 -->
<!-- START_d44382a67dad858edca95bf02a4642fb -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating/{rating}</code></p>
<!-- END_d44382a67dad858edca95bf02a4642fb -->
<!-- START_e42ceedbb38aa06f2859aa0f8af5ba18 -->
<h2>Display ratings by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating/rating-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating/rating-product/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating/rating-product/{product_id?}</code></p>
<!-- END_e42ceedbb38aa06f2859aa0f8af5ba18 -->
<!-- START_820bc036154f8d8ed569b9728dba9650 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment</code></p>
<!-- END_820bc036154f8d8ed569b9728dba9650 -->
<!-- START_290df647fbc0fcbe56d880990e4bfdfc -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment/{comment}</code></p>
<!-- END_290df647fbc0fcbe56d880990e4bfdfc -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>