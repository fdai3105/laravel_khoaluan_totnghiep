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
<h1>Authenticator</h1>
<p>APIs of auth</p>
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
<h2>Created a user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"nisi","email":"assumenda","password":"dicta","phone":"perspiciatis","gender":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "nisi",
    "email": "assumenda",
    "password": "dicta",
    "phone": "perspiciatis",
    "gender": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>optional</td>
<td>name</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
<td>email</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>optional</td>
<td>password</td>
</tr>
<tr>
<td><code>phone</code></td>
<td>string</td>
<td>optional</td>
<td>phone</td>
</tr>
<tr>
<td><code>gender</code></td>
<td>integer</td>
<td>optional</td>
<td>gender of user (0 = not known, 1 = male, 2 = female, 8 = not applicable)</td>
</tr>
</tbody>
</table>
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->
<!-- START_61739f3220a224b34228600649230ad1 -->
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/logout</code></p>
<!-- END_61739f3220a224b34228600649230ad1 -->
<!-- START_d9262c03ac71a820f46e401341072b02 -->
<h2>Display the form to request a password reset link.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/reset"
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
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/reset</code></p>
<!-- END_d9262c03ac71a820f46e401341072b02 -->
<!-- START_b7802a3a2092f162a21dc668479801f4 -->
<h2>Send a reset link to the given user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/email</code></p>
<!-- END_b7802a3a2092f162a21dc668479801f4 -->
<!-- START_3fc1ef796ad26ae024817447895c3377 -->
<h2>Display the password reset view for the given token.</h2>
<p>If no token is present, display the link request form.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/reset/1"
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
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/reset/{token}</code></p>
<!-- END_3fc1ef796ad26ae024817447895c3377 -->
<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/reset</code></p>
<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->
<!-- START_294cbd5da98d2b993c5a8563c03a4ff5 -->
<h2>Display the password confirmation view.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/confirm"
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/confirm</code></p>
<!-- END_294cbd5da98d2b993c5a8563c03a4ff5 -->
<!-- START_7e9e4512971b1eda26f8f147eb4c07d4 -->
<h2>Confirm the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/confirm</code></p>
<!-- END_7e9e4512971b1eda26f8f147eb4c07d4 -->
<!-- START_2d698b6d6bc7441f9c1a9cf11aec4059 -->
<h2>Show the email verification notice.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/email/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/email/verify"
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/email/verify</code></p>
<!-- END_2d698b6d6bc7441f9c1a9cf11aec4059 -->
<!-- START_3e4a08674c3c1aaa7a4e8aacbf86420a -->
<h2>Mark the authenticated user&#039;s email address as verified.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/email/verify/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/email/verify/1/1"
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
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/email/verify/{id}/{hash}</code></p>
<!-- END_3e4a08674c3c1aaa7a4e8aacbf86420a -->
<!-- START_007d2c80092c02b58e6bfecd510a3282 -->
<h2>Resend the email verification notification.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/email/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/email/resend</code></p>
<!-- END_007d2c80092c02b58e6bfecd510a3282 -->
<h1>Brand</h1>
<p>APIs for brand</p>
<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/brand"
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
            "name": "Langworth, Towne and Bartell",
            "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:48:09.000000Z"
        },
        {
            "id": 2,
            "name": "Corwin-Nienow",
            "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:39:17.000000Z"
        },
        {
            "id": 3,
            "name": "Yundt Ltd",
            "image": "upload\\YundtLtd_5392qyw7a1l61.jpg",
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:46:30.000000Z"
        },
        {
            "id": 4,
            "name": "Emard, Gerhold and Feest",
            "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:47:15.000000Z"
        },
        {
            "id": 5,
            "name": "Willms, Sauer and Gaylord",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 6,
            "name": "FiDai Inc",
            "image": "upload\\FiDaiInc_Annotation2020-04-15145210.png",
            "desc": "desc",
            "created_at": "2021-03-19T10:35:40.000000Z",
            "updated_at": "2021-03-19T10:35:40.000000Z"
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
    -G "http://127.0.0.1:8000/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/brand/1"
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
        "name": "Langworth, Towne and Bartell",
        "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
        "desc": null,
        "created_at": "2021-03-19T10:32:21.000000Z",
        "updated_at": "2021-03-19T10:48:09.000000Z"
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
    -G "http://127.0.0.1:8000/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/category"
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
            "name": "desc",
            "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T11:15:27.000000Z"
        },
        {
            "id": 2,
            "name": "Hartmann-Klocko",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 3,
            "name": "Gorczany-Mills",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 4,
            "name": "Kilback, Frami and Gutkowski",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 5,
            "name": "Spinka Ltd",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
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
    -G "http://127.0.0.1:8000/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/category/1"
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
        "name": "desc",
        "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
        "desc": null,
        "created_at": "2021-03-19T10:32:21.000000Z",
        "updated_at": "2021-03-19T11:15:27.000000Z"
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
    -G "http://127.0.0.1:8000/api/comment/comment-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/comment/comment-product/"
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
<h2>Show all products</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product"
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
            "name": "Jolie Lakin",
            "price": 2199836,
            "desc": "Velit rem doloribus illo qui distinctio voluptatem odio. Molestias sit consequatur praesentium eveniet voluptate. Quisquam asperiores aut ut explicabo et facere.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 2,
            "name": "Vladimir Willms IV",
            "price": 4028108,
            "desc": "Est nemo ea animi earum asperiores quasi. Non illum voluptates odio tempora recusandae blanditiis delectus voluptates. Ut et ea consequatur incidunt et.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Gorczany-Mills",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 3,
            "name": "Erwin Grady",
            "price": 6269488,
            "desc": "Et est deserunt sint et officiis quo. Eveniet laboriosam officiis accusamus et nisi harum nesciunt. Reiciendis ullam facere et dolor.",
            "brand": {
                "id": 1,
                "name": "Langworth, Towne and Bartell",
                "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:48:09.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 4,
            "name": "Newton Schaefer",
            "price": 4716416,
            "desc": "Et odit est corrupti amet. Et sit dignissimos impedit labore. Aut ut cum sed quos fugiat nemo et. Iste nam aut molestiae et vero. Tempora eos nobis adipisci et.",
            "brand": {
                "id": 1,
                "name": "Langworth, Towne and Bartell",
                "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:48:09.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Spinka Ltd",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 5,
            "name": "Jacklyn Kuhlman",
            "price": 5622948,
            "desc": "Illo non dolores tempora aut itaque ratione ratione. Tempora sed id vel delectus aspernatur commodi. Consequatur debitis numquam voluptates animi.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 6,
            "name": "Fidel Weissnat DDS",
            "price": 9215054,
            "desc": "Qui quod voluptatem vero quis veniam aut. Non consequatur tempore saepe et ipsum. Sed magnam eum deserunt alias voluptate provident veniam. Rerum sunt ab amet sunt rerum enim.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 7,
            "name": "Prof. Giles O'Conner",
            "price": 3949998,
            "desc": "Autem in nisi voluptas aspernatur tenetur quia omnis temporibus. Sit quae nihil ex omnis recusandae fugiat. Rerum odio ut quo ipsa vel placeat voluptatem aliquam.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 8,
            "name": "Alba Dietrich III",
            "price": 5499142,
            "desc": "Iste dolore accusantium facilis ea quisquam voluptatem. Quis sint reiciendis quisquam. Labore libero et vitae laboriosam.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Gorczany-Mills",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 9,
            "name": "Wilmer Crist",
            "price": 4694684,
            "desc": "Sit pariatur nemo in enim dolorum voluptate. Non possimus ea iste quod voluptate. Eum id doloremque aut doloribus.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 1,
                "name": "desc",
                "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T11:15:27.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 10,
            "name": "Sigmund White",
            "price": 1863376,
            "desc": "Consequuntur sint sunt nemo nam. Vero id excepturi totam sunt aut ad eligendi soluta. Harum magnam voluptates et. Beatae velit unde architecto corporis nisi aliquid dolores.",
            "brand": {
                "id": 1,
                "name": "Langworth, Towne and Bartell",
                "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:48:09.000000Z"
            },
            "category": {
                "id": 1,
                "name": "desc",
                "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T11:15:27.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 11,
            "name": "Jamaal Monahan Jr.",
            "price": 5740577,
            "desc": "Ut voluptatum incidunt ex minima ut. Omnis blanditiis delectus dolorum voluptatem.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Gorczany-Mills",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 12,
            "name": "Miss Kira Haag",
            "price": 2362103,
            "desc": "Quaerat minima rerum amet sint ipsam. Recusandae quisquam aliquam laborum sed et. Rerum ipsam ducimus facere atque. Nesciunt qui qui voluptatem ea deleniti odit.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 13,
            "name": "Prof. Joanny Batz DDS",
            "price": 6700756,
            "desc": "Eius rem corporis aut suscipit. Voluptate odit dolor est a. Pariatur recusandae animi consequatur eum a. Est et ut in est.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 14,
            "name": "Hector Klocko",
            "price": 2365303,
            "desc": "A sed et velit impedit et ut facilis id. Consequatur omnis saepe adipisci et corporis. Unde et quod esse culpa suscipit qui.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Spinka Ltd",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 15,
            "name": "Cydney Mueller",
            "price": 6740269,
            "desc": "Provident excepturi suscipit soluta aspernatur cupiditate non cum. Atque velit laborum quia.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 16,
            "name": "Ruth Ortiz",
            "price": 3582325,
            "desc": "Aut ut fugit commodi. Velit cupiditate et nihil ipsa recusandae. Ipsam ipsam nemo non vel aliquam quisquam eveniet. Temporibus aliquid et aperiam aut vitae id aut.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 1,
                "name": "desc",
                "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T11:15:27.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 17,
            "name": "Kamren Schmitt DVM",
            "price": 274499,
            "desc": "Non dolores quibusdam tenetur. Et veritatis eius odit eum. Qui voluptatem cum cum ab occaecati enim est sit. Ut ullam delectus dolores.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Gorczany-Mills",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 18,
            "name": "Dr. Lewis Braun DVM",
            "price": 955407,
            "desc": "Ipsum odit autem et laudantium ut ut. Incidunt pariatur iure est reprehenderit eveniet sequi. Laboriosam asperiores aliquid dicta maiores dolore fugiat deleniti.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Spinka Ltd",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 19,
            "name": "Myra Swaniawski",
            "price": 2516119,
            "desc": "Velit ullam voluptatem qui ut sapiente qui distinctio pariatur. Et est alias quam. Expedita nesciunt adipisci dolores est.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 20,
            "name": "Dwight Murphy",
            "price": 6517139,
            "desc": "Illum laboriosam est eum libero quia quisquam. Cum voluptate quia vero dolorem ratione dolores. Est sit omnis labore harum modi dolor.",
            "brand": {
                "id": 2,
                "name": "Corwin-Nienow",
                "image": "156239775_1020298041828277_8056033447539178494_n (2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:39:17.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 21,
            "name": "Mr. Warren Olson II",
            "price": 3026711,
            "desc": "Laboriosam ut ipsum cupiditate officia et aliquid. Non quam laborum neque maxime. Id iste tempora aut. Voluptates qui ipsa labore dolore.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Kilback, Frami and Gutkowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 22,
            "name": "Jacky Hahn II",
            "price": 2763951,
            "desc": "Aperiam sed id magni et necessitatibus hic. Sequi consequatur voluptas dolores quos voluptas voluptatibus voluptas tenetur. Cum consequatur et debitis voluptas ipsam.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 23,
            "name": "Roosevelt Gusikowski Jr.",
            "price": 3038965,
            "desc": "Enim similique alias laudantium et. Totam inventore labore ut ducimus. Placeat assumenda ipsam sed dicta vero.",
            "brand": {
                "id": 3,
                "name": "Yundt Ltd",
                "image": "upload\\YundtLtd_5392qyw7a1l61.jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:46:30.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 24,
            "name": "Dan Wolff",
            "price": 5694467,
            "desc": "Voluptatem eum et aliquam iure doloremque impedit officia. Molestiae et dolores eligendi quam laboriosam. Nisi quisquam magni mollitia perspiciatis omnis.",
            "brand": {
                "id": 5,
                "name": "Willms, Sauer and Gaylord",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 25,
            "name": "Prof. Barton Yost Sr.",
            "price": 5861021,
            "desc": "Dolor ab illum voluptas quia quis est asperiores. Sunt omnis assumenda id excepturi harum. Accusamus ad architecto omnis doloribus omnis pariatur. Qui labore voluptas beatae id est error.",
            "brand": {
                "id": 3,
                "name": "Yundt Ltd",
                "image": "upload\\YundtLtd_5392qyw7a1l61.jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:46:30.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Spinka Ltd",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 26,
            "name": "Susana Gerlach",
            "price": 120153,
            "desc": "Dignissimos reprehenderit id numquam consequatur voluptas ipsa saepe odio. Saepe deleniti provident voluptatem fugiat neque in. Natus rerum sint molestiae debitis deserunt qui.",
            "brand": {
                "id": 3,
                "name": "Yundt Ltd",
                "image": "upload\\YundtLtd_5392qyw7a1l61.jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:46:30.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Gorczany-Mills",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 27,
            "name": "Mrs. Candida Schuppe",
            "price": 4569644,
            "desc": "Quis quaerat expedita non ut. Labore voluptatum et officia fugiat ex et facilis. Quia est accusantium similique minus quod qui.",
            "brand": {
                "id": 1,
                "name": "Langworth, Towne and Bartell",
                "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:48:09.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Spinka Ltd",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 28,
            "name": "Christian Windler",
            "price": 1781455,
            "desc": "Quas iure porro in occaecati perspiciatis corporis. Quam ipsum consequuntur explicabo voluptas rem. Similique consequatur voluptatum repudiandae velit.",
            "brand": {
                "id": 1,
                "name": "Langworth, Towne and Bartell",
                "image": "upload\\Langworth,TowneandBartell_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:48:09.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Hartmann-Klocko",
                "image": null,
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:32:21.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 29,
            "name": "Lura Bode",
            "price": 617139,
            "desc": "Dicta odit qui et itaque voluptatibus aut quo aspernatur. Autem nisi qui magnam quo voluptatibus. Quae aut in odio.",
            "brand": {
                "id": 4,
                "name": "Emard, Gerhold and Feest",
                "image": "upload\\Emard,GerholdandFeest_Annotation2020-04-15145210.png",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:47:15.000000Z"
            },
            "category": {
                "id": 1,
                "name": "desc",
                "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T11:15:27.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 30,
            "name": "Dr. Timothy Greenfelder IV",
            "price": 9102533,
            "desc": "Beatae voluptatem voluptatem facere consequatur nesciunt eligendi. Quisquam facilis dolorum et in harum non labore eum.",
            "brand": {
                "id": 3,
                "name": "Yundt Ltd",
                "image": "upload\\YundtLtd_5392qyw7a1l61.jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T10:46:30.000000Z"
            },
            "category": {
                "id": 1,
                "name": "desc",
                "image": "upload\\desc_156239775_1020298041828277_8056033447539178494_n(2).jpg",
                "desc": null,
                "created_at": "2021-03-19T10:32:21.000000Z",
                "updated_at": "2021-03-19T11:15:27.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product</code></p>
<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->
<!-- START_1fcbf5d495e6ada99ea017e9ae32b380 -->
<h2>Show one product by id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product/1"
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
        "name": "Jolie Lakin",
        "price": 2199836,
        "desc": "Velit rem doloribus illo qui distinctio voluptatem odio. Molestias sit consequatur praesentium eveniet voluptate. Quisquam asperiores aut ut explicabo et facere.",
        "brand": {
            "id": 5,
            "name": "Willms, Sauer and Gaylord",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        "category": {
            "id": 2,
            "name": "Hartmann-Klocko",
            "image": null,
            "desc": null,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        "attributes": [],
        "created_at": "2021-03-19T10:32:21.000000Z",
        "updated_at": "2021-03-19T10:32:21.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product/{product}</code></p>
<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->
<!-- START_272b4f605ff5e3ab2721947753dce3b0 -->
<h2>Show hot product sort by updated_at</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product/new-product?limit=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product/new-product"
);

let params = {
    "limit": "6",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
<p><code>GET api/product/new-product</code></p>
<h4>Query Parameters</h4>
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
<td><code>limit</code></td>
<td>optional</td>
<td>Limit of the query.</td>
</tr>
</tbody>
</table>
<!-- END_272b4f605ff5e3ab2721947753dce3b0 -->
<!-- START_a8a78570f5e2a8d8121f45ec47de33aa -->
<h2>Show new product sort by</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product/hot-product?limit=iste" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product/hot-product"
);

let params = {
    "limit": "iste",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

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
<p><code>GET api/product/hot-product</code></p>
<h4>Query Parameters</h4>
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
<td><code>limit</code></td>
<td>optional</td>
<td>Limit of the query. Example : 6</td>
</tr>
</tbody>
</table>
<!-- END_a8a78570f5e2a8d8121f45ec47de33aa -->
<h1>Rating</h1>
<p>APIs for rating</p>
<!-- START_e2cf52df507d02a2867a78c3c1dd77b5 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/rating"
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
            "rating": 0,
            "comment": "Aliquid velit molestiae asperiores incidunt ea.",
            "product_id": 18,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 2,
            "rating": 0,
            "comment": "Repellat reprehenderit esse nihil.",
            "product_id": 30,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 3,
            "rating": 4,
            "comment": "Pariatur quidem dignissimos quis possimus cum voluptatem et nostrum.",
            "product_id": 30,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 4,
            "rating": 1,
            "comment": "Enim nulla enim iste id velit et facere.",
            "product_id": 7,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 5,
            "rating": 5,
            "comment": "Voluptatum enim repellendus culpa cumque quis suscipit expedita qui.",
            "product_id": 15,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 6,
            "rating": 4,
            "comment": "Est qui blanditiis provident facilis saepe quos nobis.",
            "product_id": 26,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 7,
            "rating": 3,
            "comment": "Blanditiis consectetur eius repellendus dicta sit cumque tempora.",
            "product_id": 2,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 8,
            "rating": 2,
            "comment": "Nisi nobis atque voluptate iure architecto.",
            "product_id": 18,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 9,
            "rating": 0,
            "comment": "Laborum recusandae sit eius asperiores et.",
            "product_id": 16,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 10,
            "rating": 5,
            "comment": "Aperiam aut repudiandae rerum iure fugit nulla.",
            "product_id": 29,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 11,
            "rating": 3,
            "comment": "Neque reiciendis provident qui tenetur dolores doloribus.",
            "product_id": 21,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 12,
            "rating": 4,
            "comment": "Eaque et ut eveniet occaecati.",
            "product_id": 22,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 13,
            "rating": 4,
            "comment": "A est officiis placeat est magnam ea.",
            "product_id": 18,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 14,
            "rating": 4,
            "comment": "Tempore quae at sed delectus iste laboriosam.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 15,
            "rating": 3,
            "comment": "Perspiciatis optio consequatur ut et.",
            "product_id": 2,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 16,
            "rating": 0,
            "comment": "Molestias illum sed porro placeat repellat.",
            "product_id": 15,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 17,
            "rating": 0,
            "comment": "Ab blanditiis voluptatem perferendis sint.",
            "product_id": 10,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 18,
            "rating": 3,
            "comment": "Expedita et aut ad aliquam et.",
            "product_id": 13,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 19,
            "rating": 1,
            "comment": "Et aut quia maiores ducimus sunt.",
            "product_id": 26,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 20,
            "rating": 0,
            "comment": "Fugit aut distinctio suscipit eum dolore.",
            "product_id": 15,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 21,
            "rating": 2,
            "comment": "Sunt repellendus et in fugit nisi.",
            "product_id": 3,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 22,
            "rating": 0,
            "comment": "Vero eum sit exercitationem.",
            "product_id": 12,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 23,
            "rating": 5,
            "comment": "Natus rerum sit fugit vero ipsum debitis et.",
            "product_id": 4,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 24,
            "rating": 3,
            "comment": "Maxime quia non eaque possimus nostrum.",
            "product_id": 18,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 25,
            "rating": 4,
            "comment": "Vero quis tenetur unde libero.",
            "product_id": 11,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 26,
            "rating": 2,
            "comment": "Dolores maxime quas magnam.",
            "product_id": 30,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 27,
            "rating": 5,
            "comment": "Beatae in omnis asperiores dignissimos blanditiis ea quae.",
            "product_id": 16,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 28,
            "rating": 4,
            "comment": "Et et amet optio inventore blanditiis porro consequatur.",
            "product_id": 25,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 29,
            "rating": 5,
            "comment": "Velit reprehenderit ea et cupiditate suscipit non vero.",
            "product_id": 21,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 30,
            "rating": 3,
            "comment": "Repudiandae ratione eum quos ipsa.",
            "product_id": 11,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 31,
            "rating": 0,
            "comment": "Non velit ut in natus.",
            "product_id": 22,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 32,
            "rating": 0,
            "comment": "Esse labore eos aut quis.",
            "product_id": 2,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 33,
            "rating": 5,
            "comment": "Perspiciatis assumenda est maiores quidem aut laudantium.",
            "product_id": 25,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 34,
            "rating": 0,
            "comment": "Sed officia repellendus id voluptates.",
            "product_id": 20,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 35,
            "rating": 1,
            "comment": "Itaque est esse laborum placeat dolorem cupiditate deleniti eligendi.",
            "product_id": 14,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 36,
            "rating": 2,
            "comment": "Dolore odio dolorum sed excepturi.",
            "product_id": 29,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 37,
            "rating": 0,
            "comment": "Ut dolor officia pariatur sed quam sit nihil.",
            "product_id": 27,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 38,
            "rating": 1,
            "comment": "Voluptatum aut excepturi delectus voluptatem aperiam.",
            "product_id": 20,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 39,
            "rating": 4,
            "comment": "Quae velit vitae ut velit optio voluptate eos.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 40,
            "rating": 3,
            "comment": "Quisquam voluptas qui accusamus assumenda nostrum id repellat.",
            "product_id": 22,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 41,
            "rating": 0,
            "comment": "Hic aliquid enim ut suscipit molestiae est eos.",
            "product_id": 21,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 42,
            "rating": 5,
            "comment": "Provident ut exercitationem iste temporibus impedit.",
            "product_id": 27,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 43,
            "rating": 3,
            "comment": "Quo et deserunt tempora sed cumque soluta.",
            "product_id": 2,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 44,
            "rating": 5,
            "comment": "Tempore tempore ut praesentium et aspernatur autem autem.",
            "product_id": 3,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 45,
            "rating": 0,
            "comment": "Quae sed voluptatibus hic libero.",
            "product_id": 4,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 46,
            "rating": 3,
            "comment": "A libero repudiandae qui reiciendis perspiciatis hic molestias.",
            "product_id": 18,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 47,
            "rating": 0,
            "comment": "Adipisci dicta et nisi aut.",
            "product_id": 29,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 48,
            "rating": 3,
            "comment": "Nostrum optio id repellat maiores minus eos iste.",
            "product_id": 1,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 49,
            "rating": 5,
            "comment": "Praesentium perferendis facere magnam laborum et maxime.",
            "product_id": 19,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 50,
            "rating": 0,
            "comment": "Fugit est sequi deserunt et minus facere dolorem.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        }
    ]
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
    -G "http://127.0.0.1:8000/api/rating/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/rating/1"
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
        "rating": 0,
        "comment": "Aliquid velit molestiae asperiores incidunt ea.",
        "product_id": 18,
        "user_id": 9,
        "created_at": "2021-03-19T10:32:21.000000Z",
        "updated_at": "2021-03-19T10:32:21.000000Z"
    }
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
    -G "http://127.0.0.1:8000/api/rating/rating-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/rating/rating-product/"
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
    -G "http://127.0.0.1:8000/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/comment"
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
            "rating": 0,
            "comment": "Aliquid velit molestiae asperiores incidunt ea.",
            "product_id": 18,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 2,
            "rating": 0,
            "comment": "Repellat reprehenderit esse nihil.",
            "product_id": 30,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 3,
            "rating": 4,
            "comment": "Pariatur quidem dignissimos quis possimus cum voluptatem et nostrum.",
            "product_id": 30,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 4,
            "rating": 1,
            "comment": "Enim nulla enim iste id velit et facere.",
            "product_id": 7,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 5,
            "rating": 5,
            "comment": "Voluptatum enim repellendus culpa cumque quis suscipit expedita qui.",
            "product_id": 15,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 6,
            "rating": 4,
            "comment": "Est qui blanditiis provident facilis saepe quos nobis.",
            "product_id": 26,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 7,
            "rating": 3,
            "comment": "Blanditiis consectetur eius repellendus dicta sit cumque tempora.",
            "product_id": 2,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 8,
            "rating": 2,
            "comment": "Nisi nobis atque voluptate iure architecto.",
            "product_id": 18,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 9,
            "rating": 0,
            "comment": "Laborum recusandae sit eius asperiores et.",
            "product_id": 16,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 10,
            "rating": 5,
            "comment": "Aperiam aut repudiandae rerum iure fugit nulla.",
            "product_id": 29,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 11,
            "rating": 3,
            "comment": "Neque reiciendis provident qui tenetur dolores doloribus.",
            "product_id": 21,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 12,
            "rating": 4,
            "comment": "Eaque et ut eveniet occaecati.",
            "product_id": 22,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 13,
            "rating": 4,
            "comment": "A est officiis placeat est magnam ea.",
            "product_id": 18,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 14,
            "rating": 4,
            "comment": "Tempore quae at sed delectus iste laboriosam.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 15,
            "rating": 3,
            "comment": "Perspiciatis optio consequatur ut et.",
            "product_id": 2,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 16,
            "rating": 0,
            "comment": "Molestias illum sed porro placeat repellat.",
            "product_id": 15,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 17,
            "rating": 0,
            "comment": "Ab blanditiis voluptatem perferendis sint.",
            "product_id": 10,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 18,
            "rating": 3,
            "comment": "Expedita et aut ad aliquam et.",
            "product_id": 13,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 19,
            "rating": 1,
            "comment": "Et aut quia maiores ducimus sunt.",
            "product_id": 26,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 20,
            "rating": 0,
            "comment": "Fugit aut distinctio suscipit eum dolore.",
            "product_id": 15,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 21,
            "rating": 2,
            "comment": "Sunt repellendus et in fugit nisi.",
            "product_id": 3,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 22,
            "rating": 0,
            "comment": "Vero eum sit exercitationem.",
            "product_id": 12,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 23,
            "rating": 5,
            "comment": "Natus rerum sit fugit vero ipsum debitis et.",
            "product_id": 4,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 24,
            "rating": 3,
            "comment": "Maxime quia non eaque possimus nostrum.",
            "product_id": 18,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 25,
            "rating": 4,
            "comment": "Vero quis tenetur unde libero.",
            "product_id": 11,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 26,
            "rating": 2,
            "comment": "Dolores maxime quas magnam.",
            "product_id": 30,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 27,
            "rating": 5,
            "comment": "Beatae in omnis asperiores dignissimos blanditiis ea quae.",
            "product_id": 16,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 28,
            "rating": 4,
            "comment": "Et et amet optio inventore blanditiis porro consequatur.",
            "product_id": 25,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 29,
            "rating": 5,
            "comment": "Velit reprehenderit ea et cupiditate suscipit non vero.",
            "product_id": 21,
            "user_id": 7,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 30,
            "rating": 3,
            "comment": "Repudiandae ratione eum quos ipsa.",
            "product_id": 11,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 31,
            "rating": 0,
            "comment": "Non velit ut in natus.",
            "product_id": 22,
            "user_id": 10,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 32,
            "rating": 0,
            "comment": "Esse labore eos aut quis.",
            "product_id": 2,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 33,
            "rating": 5,
            "comment": "Perspiciatis assumenda est maiores quidem aut laudantium.",
            "product_id": 25,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 34,
            "rating": 0,
            "comment": "Sed officia repellendus id voluptates.",
            "product_id": 20,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 35,
            "rating": 1,
            "comment": "Itaque est esse laborum placeat dolorem cupiditate deleniti eligendi.",
            "product_id": 14,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 36,
            "rating": 2,
            "comment": "Dolore odio dolorum sed excepturi.",
            "product_id": 29,
            "user_id": 4,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 37,
            "rating": 0,
            "comment": "Ut dolor officia pariatur sed quam sit nihil.",
            "product_id": 27,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 38,
            "rating": 1,
            "comment": "Voluptatum aut excepturi delectus voluptatem aperiam.",
            "product_id": 20,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 39,
            "rating": 4,
            "comment": "Quae velit vitae ut velit optio voluptate eos.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 40,
            "rating": 3,
            "comment": "Quisquam voluptas qui accusamus assumenda nostrum id repellat.",
            "product_id": 22,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 41,
            "rating": 0,
            "comment": "Hic aliquid enim ut suscipit molestiae est eos.",
            "product_id": 21,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 42,
            "rating": 5,
            "comment": "Provident ut exercitationem iste temporibus impedit.",
            "product_id": 27,
            "user_id": 6,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 43,
            "rating": 3,
            "comment": "Quo et deserunt tempora sed cumque soluta.",
            "product_id": 2,
            "user_id": 1,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 44,
            "rating": 5,
            "comment": "Tempore tempore ut praesentium et aspernatur autem autem.",
            "product_id": 3,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 45,
            "rating": 0,
            "comment": "Quae sed voluptatibus hic libero.",
            "product_id": 4,
            "user_id": 2,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 46,
            "rating": 3,
            "comment": "A libero repudiandae qui reiciendis perspiciatis hic molestias.",
            "product_id": 18,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 47,
            "rating": 0,
            "comment": "Adipisci dicta et nisi aut.",
            "product_id": 29,
            "user_id": 9,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 48,
            "rating": 3,
            "comment": "Nostrum optio id repellat maiores minus eos iste.",
            "product_id": 1,
            "user_id": 5,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 49,
            "rating": 5,
            "comment": "Praesentium perferendis facere magnam laborum et maxime.",
            "product_id": 19,
            "user_id": 8,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        },
        {
            "id": 50,
            "rating": 0,
            "comment": "Fugit est sequi deserunt et minus facere dolorem.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-19T10:32:21.000000Z",
            "updated_at": "2021-03-19T10:32:21.000000Z"
        }
    ]
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
    -G "http://127.0.0.1:8000/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/comment/1"
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
        "rating": 0,
        "comment": "Aliquid velit molestiae asperiores incidunt ea.",
        "product_id": 18,
        "user_id": 9,
        "created_at": "2021-03-19T10:32:21.000000Z",
        "updated_at": "2021-03-19T10:32:21.000000Z"
    }
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