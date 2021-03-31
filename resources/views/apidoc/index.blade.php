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
    -d '{"name":"dicta","email":"similique","password":"illo","phone":"voluptas","gender":7}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dicta",
    "email": "similique",
    "password": "illo",
    "phone": "voluptas",
    "gender": 7
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
            "name": "Ratke, Bernhard and Schaefer",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 2,
            "name": "Schaefer, Ernser and Nienow",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 3,
            "name": "Gislason, Johnson and Pouros",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 4,
            "name": "Carroll, Reichert and Bauch",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 5,
            "name": "Schumm, Lueilwitz and Jacobs",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
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
        "name": "Ratke, Bernhard and Schaefer",
        "image": null,
        "desc": null,
        "created_at": "2021-03-26T13:40:34.000000Z",
        "updated_at": "2021-03-26T13:40:34.000000Z"
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
            "name": "Senger and Sons",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T14:01:53.000000Z"
        },
        {
            "id": 2,
            "name": "Goyette, Mertz and Lehner",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 3,
            "name": "Littel, Kilback and Flatley",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 4,
            "name": "Klein Ltd",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 5,
            "name": "Bernhard LLC",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 6,
            "name": "Moore LLC",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 7,
            "name": "Gerlach Ltd",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 8,
            "name": "Barrows-Bechtelar",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 9,
            "name": "Grady PLC",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 10,
            "name": "Rosenbaum, Flatley and Grimes",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 11,
            "name": "Littel PLC",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 12,
            "name": "Collier, Veum and Crona",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 13,
            "name": "Mosciski Group",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 14,
            "name": "Kilback Group",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 15,
            "name": "Hane Group",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 16,
            "name": "Reinger, Mann and Yundt",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 17,
            "name": "Zemlak, Douglas and Rutherford",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 18,
            "name": "Kunze-Prohaska",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 19,
            "name": "McClure LLC",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 20,
            "name": "Rempel Ltd",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 21,
            "name": "Sauer Group",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 22,
            "name": "Schowalter-Kassulke",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 23,
            "name": "Kulas-Hansen",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 24,
            "name": "Jacobi-Kozey",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 25,
            "name": "Green-Bergnaum",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 26,
            "name": "Labadie, Stracke and Aufderhar",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 27,
            "name": "Bernier Inc",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 28,
            "name": "Kuhlman LLC",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 29,
            "name": "Marquardt LLC",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 30,
            "name": "Skiles, Spinka and Mayer",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 31,
            "name": "Lynch and Sons",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 32,
            "name": "Bins LLC",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 33,
            "name": "Doyle Inc",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 34,
            "name": "Senger and Sons",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 35,
            "name": "Ritchie, Pfannerstill and Collier",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 36,
            "name": "Pollich Ltd",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 37,
            "name": "Feil, Kunze and Lesch",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 38,
            "name": "Parisian, Collier and King",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 39,
            "name": "Ullrich, Waters and Gleichner",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 40,
            "name": "Jaskolski Ltd",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 41,
            "name": "Hackett Group",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 42,
            "name": "Fahey and Sons",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 43,
            "name": "Krajcik Ltd",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 44,
            "name": "Carroll Inc",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 45,
            "name": "Erdman, Reynolds and Konopelski",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 46,
            "name": "Marvin LLC",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 47,
            "name": "Predovic, Predovic and Connelly",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 48,
            "name": "Bashirian, Donnelly and Vandervort",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 49,
            "name": "Krajcik-Williamson",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 50,
            "name": "Luettgen-Halvorson",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
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
        "name": "Senger and Sons",
        "image": null,
        "desc": null,
        "parent_id": 2,
        "created_at": "2021-03-26T13:40:35.000000Z",
        "updated_at": "2021-03-26T14:01:53.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category/{category}</code></p>
<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->
<h1>Comment</h1>
<p>APIs for comment</p>
<!-- START_e795fade4d25e2473e7fd22cababfe99 -->
<h2>Store a newly Comment</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/comment" \
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
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/comment</code></p>
<!-- END_e795fade4d25e2473e7fd22cababfe99 -->
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
        "comment": "Aspernatur sunt nesciunt dicta provident.",
        "user": {
            "id": 4,
            "name": "Dr. Emmalee Lakin",
            "email": "arjun38@example.net",
            "email_verified_at": "2021-03-26T13:40:35.000000Z",
            "phone": "+5606251880968",
            "gender": 2,
            "avatar": null,
            "level": 0,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        "created_at": "2021-03-26T13:40:35.000000Z",
        "updated_at": "2021-03-26T13:40:35.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment/{comment}</code></p>
<!-- END_290df647fbc0fcbe56d880990e4bfdfc -->
<!-- START_ba21d63d662b79aca99bb9e603625f5b -->
<h2>Display comments by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/comment-by-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/comment-by-product/1"
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
            "id": 14,
            "comment": "Omnis quo perferendis aliquid voluptates minima magnam animi.",
            "user": {
                "id": 1,
                "name": "Nya Powlowski",
                "email": "qhirthe@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+3543842415736",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 65,
            "comment": "Et quaerat sed tempore magnam modi quia.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 101,
            "comment": "good job",
            "user": {
                "id": 11,
                "name": "FiDai Inc",
                "email": "fdai3105@gmail.com",
                "email_verified_at": "2021-03-26T13:42:06.000000Z",
                "phone": "123",
                "gender": 1,
                "avatar": null,
                "level": 1,
                "created_at": "2021-03-26T13:41:17.000000Z",
                "updated_at": "2021-03-26T13:42:06.000000Z"
            },
            "created_at": "2021-03-28T09:10:04.000000Z",
            "updated_at": "2021-03-28T09:10:04.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment-by-product/{product_id}</code></p>
<!-- END_ba21d63d662b79aca99bb9e603625f5b -->
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
            "name": "Lavina Lynch",
            "price": 9286366,
            "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
            "stock": 36,
            "bought": 8,
            "warranty": 17,
            "rating": 1,
            "rating_averaged": 5,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 15,
                "name": "Hane Group",
                "image": null,
                "desc": null,
                "parent_id": 4,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 2,
            "name": "Prof. Judah Blanda",
            "price": 4254352,
            "desc": "Et vero quidem excepturi eius esse. Blanditiis fuga aperiam dolorem. Ut dolores mollitia alias omnis officiis aut commodi cum.",
            "stock": 13,
            "bought": 39,
            "warranty": 9,
            "rating": 2,
            "rating_averaged": 1,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 6,
                "name": "Moore LLC",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 3,
            "name": "Prof. Lesly Hilpert DDS",
            "price": 8553384,
            "desc": "Est qui necessitatibus quo temporibus nam voluptatem. Laborum quod eveniet similique blanditiis possimus et omnis. Fugiat illum voluptatem veritatis voluptas quo.",
            "stock": 10,
            "bought": 34,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 20,
                "name": "Rempel Ltd",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 4,
            "name": "Bella Graham",
            "price": 2938619,
            "desc": "Fugit ut deserunt harum eum voluptates voluptatem aut. Nihil deserunt nulla est sapiente quasi et. Quam occaecati esse quae voluptatem corporis soluta aut. Et ex nihil est iste excepturi.",
            "stock": 100,
            "bought": 3,
            "warranty": 8,
            "rating": 2,
            "rating_averaged": 2,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goyette, Mertz and Lehner",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 5,
            "name": "Dandre Purdy MD",
            "price": 3430925,
            "desc": "Qui voluptatibus harum et ut nihil omnis. Numquam dolor tempore animi saepe ea cupiditate odio. Soluta at a officiis amet dolor ea. Et in maxime facilis quidem.",
            "stock": 65,
            "bought": 10,
            "warranty": 1,
            "rating": 1,
            "rating_averaged": 0,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Littel, Kilback and Flatley",
                "image": null,
                "desc": null,
                "parent_id": 9,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 6,
            "name": "Javon Bailey",
            "price": 7592670,
            "desc": "Eveniet sunt dicta ut dolores quia. Ducimus at recusandae sit qui omnis. Magnam sint molestias rerum in officiis ex placeat.",
            "stock": 90,
            "bought": 5,
            "warranty": 13,
            "rating": 3,
            "rating_averaged": 2.5,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 9,
                "name": "Grady PLC",
                "image": null,
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 7,
            "name": "Marguerite Pacocha",
            "price": 6518211,
            "desc": "Autem amet laboriosam omnis. Rem perspiciatis quos sed est facilis ut qui. Sit dolor quae quaerat consectetur consequatur quisquam ea consequatur. Et expedita quam rerum nisi nisi ducimus.",
            "stock": 29,
            "bought": 24,
            "warranty": 13,
            "rating": 5,
            "rating_averaged": 2,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 17,
                "name": "Zemlak, Douglas and Rutherford",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 8,
            "name": "Prof. Antonietta Lowe",
            "price": 1778634,
            "desc": "Esse corporis sed omnis consequuntur molestias vero voluptatibus. Et explicabo tempore consequuntur quam. Repellat at eaque quia voluptas quod aliquid excepturi.",
            "stock": 70,
            "bought": 39,
            "warranty": 3,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 9,
            "name": "Erna Predovic",
            "price": 933006,
            "desc": "Distinctio voluptas id officia iusto voluptatibus a. Itaque ut eum est ea quasi deleniti at. Quia autem dolores sint eos velit enim. Esse quia blanditiis dolore sint perspiciatis.",
            "stock": 85,
            "bought": 30,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 8,
                "name": "Barrows-Bechtelar",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 10,
            "name": "Dr. Jeramy Swaniawski",
            "price": 1709014,
            "desc": "Harum modi nihil tenetur earum eum placeat ipsam voluptates. Impedit neque ut dicta perspiciatis necessitatibus. Cum est consequatur eaque eum fuga in.",
            "stock": 54,
            "bought": 36,
            "warranty": 0,
            "rating": 3,
            "rating_averaged": 1.5,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/product?page=1",
        "last": "http:\/\/localhost\/api\/product?page=3",
        "prev": null,
        "next": "http:\/\/localhost\/api\/product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/product",
        "per_page": 10,
        "to": 10,
        "total": 30
    }
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
        "name": "Lavina Lynch",
        "price": 9286366,
        "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
        "stock": 36,
        "bought": 8,
        "warranty": 17,
        "rating": 1,
        "rating_averaged": 5,
        "brand": {
            "id": 4,
            "name": "Carroll, Reichert and Bauch",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        "category": {
            "id": 15,
            "name": "Hane Group",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        "images": [],
        "attributes": [],
        "created_at": "2021-03-26T13:40:35.000000Z",
        "updated_at": "2021-03-26T13:40:35.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product/{product}</code></p>
<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->
<!-- START_63df6152732490930b119fac280eb9ef -->
<h2>Show hot product sort by updated_at</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/new-product?limit=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/new-product"
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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Lavina Lynch",
            "price": 9286366,
            "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
            "stock": 36,
            "bought": 8,
            "warranty": 17,
            "rating": 1,
            "rating_averaged": 5,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 15,
                "name": "Hane Group",
                "image": null,
                "desc": null,
                "parent_id": 4,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 2,
            "name": "Prof. Judah Blanda",
            "price": 4254352,
            "desc": "Et vero quidem excepturi eius esse. Blanditiis fuga aperiam dolorem. Ut dolores mollitia alias omnis officiis aut commodi cum.",
            "stock": 13,
            "bought": 39,
            "warranty": 9,
            "rating": 2,
            "rating_averaged": 1,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 6,
                "name": "Moore LLC",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 3,
            "name": "Prof. Lesly Hilpert DDS",
            "price": 8553384,
            "desc": "Est qui necessitatibus quo temporibus nam voluptatem. Laborum quod eveniet similique blanditiis possimus et omnis. Fugiat illum voluptatem veritatis voluptas quo.",
            "stock": 10,
            "bought": 34,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 20,
                "name": "Rempel Ltd",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 4,
            "name": "Bella Graham",
            "price": 2938619,
            "desc": "Fugit ut deserunt harum eum voluptates voluptatem aut. Nihil deserunt nulla est sapiente quasi et. Quam occaecati esse quae voluptatem corporis soluta aut. Et ex nihil est iste excepturi.",
            "stock": 100,
            "bought": 3,
            "warranty": 8,
            "rating": 2,
            "rating_averaged": 2,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goyette, Mertz and Lehner",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 5,
            "name": "Dandre Purdy MD",
            "price": 3430925,
            "desc": "Qui voluptatibus harum et ut nihil omnis. Numquam dolor tempore animi saepe ea cupiditate odio. Soluta at a officiis amet dolor ea. Et in maxime facilis quidem.",
            "stock": 65,
            "bought": 10,
            "warranty": 1,
            "rating": 1,
            "rating_averaged": 0,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Littel, Kilback and Flatley",
                "image": null,
                "desc": null,
                "parent_id": 9,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 6,
            "name": "Javon Bailey",
            "price": 7592670,
            "desc": "Eveniet sunt dicta ut dolores quia. Ducimus at recusandae sit qui omnis. Magnam sint molestias rerum in officiis ex placeat.",
            "stock": 90,
            "bought": 5,
            "warranty": 13,
            "rating": 3,
            "rating_averaged": 2.5,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 9,
                "name": "Grady PLC",
                "image": null,
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 7,
            "name": "Marguerite Pacocha",
            "price": 6518211,
            "desc": "Autem amet laboriosam omnis. Rem perspiciatis quos sed est facilis ut qui. Sit dolor quae quaerat consectetur consequatur quisquam ea consequatur. Et expedita quam rerum nisi nisi ducimus.",
            "stock": 29,
            "bought": 24,
            "warranty": 13,
            "rating": 5,
            "rating_averaged": 2,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 17,
                "name": "Zemlak, Douglas and Rutherford",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 8,
            "name": "Prof. Antonietta Lowe",
            "price": 1778634,
            "desc": "Esse corporis sed omnis consequuntur molestias vero voluptatibus. Et explicabo tempore consequuntur quam. Repellat at eaque quia voluptas quod aliquid excepturi.",
            "stock": 70,
            "bought": 39,
            "warranty": 3,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 9,
            "name": "Erna Predovic",
            "price": 933006,
            "desc": "Distinctio voluptas id officia iusto voluptatibus a. Itaque ut eum est ea quasi deleniti at. Quia autem dolores sint eos velit enim. Esse quia blanditiis dolore sint perspiciatis.",
            "stock": 85,
            "bought": 30,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 8,
                "name": "Barrows-Bechtelar",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 10,
            "name": "Dr. Jeramy Swaniawski",
            "price": 1709014,
            "desc": "Harum modi nihil tenetur earum eum placeat ipsam voluptates. Impedit neque ut dicta perspiciatis necessitatibus. Cum est consequatur eaque eum fuga in.",
            "stock": 54,
            "bought": 36,
            "warranty": 0,
            "rating": 3,
            "rating_averaged": 1.5,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/new-product?page=1",
        "last": "http:\/\/localhost\/api\/new-product?page=3",
        "prev": null,
        "next": "http:\/\/localhost\/api\/new-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/new-product",
        "per_page": 10,
        "to": 10,
        "total": 30
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/new-product</code></p>
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
<!-- END_63df6152732490930b119fac280eb9ef -->
<!-- START_1df1aa72c0b2999caf24e34335e826a7 -->
<h2>Show new product sort by</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/popular-product?limit=rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/popular-product"
);

let params = {
    "limit": "rerum",
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
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 13,
            "name": "Arlene Langosh I",
            "price": 1179871,
            "desc": "Necessitatibus suscipit adipisci laudantium ipsa voluptas animi cum aut. Necessitatibus possimus veniam qui. Ipsa ea accusantium cum accusantium.",
            "stock": 76,
            "bought": 40,
            "warranty": 10,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Marquardt LLC",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 2,
            "name": "Prof. Judah Blanda",
            "price": 4254352,
            "desc": "Et vero quidem excepturi eius esse. Blanditiis fuga aperiam dolorem. Ut dolores mollitia alias omnis officiis aut commodi cum.",
            "stock": 13,
            "bought": 39,
            "warranty": 9,
            "rating": 2,
            "rating_averaged": 1,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 6,
                "name": "Moore LLC",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 8,
            "name": "Prof. Antonietta Lowe",
            "price": 1778634,
            "desc": "Esse corporis sed omnis consequuntur molestias vero voluptatibus. Et explicabo tempore consequuntur quam. Repellat at eaque quia voluptas quod aliquid excepturi.",
            "stock": 70,
            "bought": 39,
            "warranty": 3,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 11,
            "name": "Jayne Dickens",
            "price": 7739011,
            "desc": "Quaerat voluptatem ad adipisci dolorum. Quis et voluptate velit molestiae. Ut repellat et harum nihil impedit enim.",
            "stock": 63,
            "bought": 39,
            "warranty": 23,
            "rating": 1,
            "rating_averaged": 1,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 36,
                "name": "Pollich Ltd",
                "image": null,
                "desc": null,
                "parent_id": 8,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 29,
            "name": "Ray Bayer Jr.",
            "price": 6657306,
            "desc": "Culpa omnis aliquam sed aut. Modi vel consequuntur distinctio nihil exercitationem molestiae velit.",
            "stock": 21,
            "bought": 39,
            "warranty": 19,
            "rating": 1,
            "rating_averaged": 0,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 21,
                "name": "Sauer Group",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 18,
            "name": "Prof. Gage Wolff",
            "price": 9476453,
            "desc": "Ipsa molestias non nesciunt quasi. Voluptatem incidunt fuga omnis aliquid. Possimus cupiditate qui fuga a quas tempore.",
            "stock": 63,
            "bought": 37,
            "warranty": 13,
            "rating": 3,
            "rating_averaged": 3,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 36,
                "name": "Pollich Ltd",
                "image": null,
                "desc": null,
                "parent_id": 8,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 10,
            "name": "Dr. Jeramy Swaniawski",
            "price": 1709014,
            "desc": "Harum modi nihil tenetur earum eum placeat ipsam voluptates. Impedit neque ut dicta perspiciatis necessitatibus. Cum est consequatur eaque eum fuga in.",
            "stock": 54,
            "bought": 36,
            "warranty": 0,
            "rating": 3,
            "rating_averaged": 1.5,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 22,
            "name": "Dr. Adah Spencer",
            "price": 8058504,
            "desc": "Sit deserunt quos et asperiores provident esse. Eligendi tempora officiis pariatur quod sunt qui omnis. Explicabo illo consequatur molestiae nobis delectus officiis libero.",
            "stock": 86,
            "bought": 35,
            "warranty": 3,
            "rating": 2,
            "rating_averaged": 4.5,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 18,
                "name": "Kunze-Prohaska",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 3,
            "name": "Prof. Lesly Hilpert DDS",
            "price": 8553384,
            "desc": "Est qui necessitatibus quo temporibus nam voluptatem. Laborum quod eveniet similique blanditiis possimus et omnis. Fugiat illum voluptatem veritatis voluptas quo.",
            "stock": 10,
            "bought": 34,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 2,
            "brand": {
                "id": 5,
                "name": "Schumm, Lueilwitz and Jacobs",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 20,
                "name": "Rempel Ltd",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 30,
            "name": "Trenton Denesik IV",
            "price": 3020782,
            "desc": "Dolor aspernatur maiores ut aspernatur. Iure assumenda numquam quia quos. Molestias quia dolor ipsum alias aut reiciendis.",
            "stock": 17,
            "bought": 34,
            "warranty": 15,
            "rating": 2,
            "rating_averaged": 1.5,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 14,
                "name": "Kilback Group",
                "image": null,
                "desc": null,
                "parent_id": 8,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/popular-product?page=1",
        "last": "http:\/\/localhost\/api\/popular-product?page=3",
        "prev": null,
        "next": "http:\/\/localhost\/api\/popular-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/popular-product",
        "per_page": 10,
        "to": 10,
        "total": 30
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/popular-product</code></p>
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
<!-- END_1df1aa72c0b2999caf24e34335e826a7 -->
<!-- START_ea23fa15ffa575a8ca6d3bd2a9cb792b -->
<h2>Show products in parent category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product-by-parent-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product-by-parent-category/1"
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
            "id": 26,
            "name": "Dr. Krista Goodwin",
            "price": 6837286,
            "desc": "Inventore facilis rerum dolor quo. Sint voluptas et a quidem qui quia est. Sed consequatur doloribus aut aut.",
            "stock": 21,
            "bought": 21,
            "warranty": 14,
            "rating": 3,
            "rating_averaged": 4.5,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 48,
                "name": "Bashirian, Donnelly and Vandervort",
                "image": null,
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/product-by-parent-category\/1?page=1",
        "last": "http:\/\/localhost\/api\/product-by-parent-category\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product-by-parent-category\/1?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/product-by-parent-category\/1",
        "per_page": 10,
        "to": 1,
        "total": 1
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product-by-parent-category/{id}</code></p>
<!-- END_ea23fa15ffa575a8ca6d3bd2a9cb792b -->
<!-- START_ae03d88973d288010a9b74619812d3db -->
<h2>Show products in sub category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product-by-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product-by-category/1"
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
            "id": 16,
            "name": "Lina Berge",
            "price": 6284418,
            "desc": "Sed beatae et et est fuga sint provident. Corrupti incidunt a dolorum. In a quae nam aut sunt distinctio nam magni.",
            "stock": 93,
            "bought": 12,
            "warranty": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 2,
                "name": "Schaefer, Ernser and Nienow",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Senger and Sons",
                "image": null,
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T14:01:53.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/product-by-category\/1?page=1",
        "last": "http:\/\/localhost\/api\/product-by-category\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product-by-category\/1?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/product-by-category\/1",
        "per_page": 10,
        "to": 1,
        "total": 1
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product-by-category/{id}</code></p>
<!-- END_ae03d88973d288010a9b74619812d3db -->
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
            "rating": 4,
            "comment": "Rerum hic quia pariatur facere quo.",
            "user": {
                "id": 10,
                "name": "Prof. Cleora Kovacek II",
                "email": "ubarton@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9206733324268",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 2,
            "rating": 3,
            "comment": "Et minus rem tempora eum amet impedit qui ut.",
            "user": {
                "id": 1,
                "name": "Nya Powlowski",
                "email": "qhirthe@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+3543842415736",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 3,
            "rating": 5,
            "comment": "Enim minus quaerat officiis et.",
            "user": {
                "id": 9,
                "name": "Jordon Murazik",
                "email": "ozemlak@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+6252411210203",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 4,
            "rating": 1,
            "comment": "Dolor voluptatem velit in sint.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 5,
            "rating": 2,
            "comment": "Dolor sunt sit ea voluptatibus.",
            "user": {
                "id": 7,
                "name": "Riley Schuster",
                "email": "leonor59@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+7502861700675",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 6,
            "rating": 1,
            "comment": "Et officia in occaecati in voluptatibus.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 7,
            "rating": 3,
            "comment": "Quas laboriosam facilis eum est est.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 8,
            "rating": 1,
            "comment": "Dolor expedita est qui hic id omnis nesciunt quis.",
            "user": {
                "id": 7,
                "name": "Riley Schuster",
                "email": "leonor59@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+7502861700675",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 9,
            "rating": 1,
            "comment": "Nam quia dolores qui similique eos voluptas.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 10,
            "rating": 4,
            "comment": "Aliquid rerum natus maxime aut et quis.",
            "user": {
                "id": 10,
                "name": "Prof. Cleora Kovacek II",
                "email": "ubarton@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9206733324268",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 11,
            "rating": 2,
            "comment": "Quo vel omnis dolor pariatur.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 12,
            "rating": 1,
            "comment": "Ad a vel consequatur commodi.",
            "user": {
                "id": 2,
                "name": "Javon Goldner",
                "email": "zena62@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2678718269814",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 13,
            "rating": 0,
            "comment": "Sed accusamus voluptas cumque aperiam.",
            "user": {
                "id": 1,
                "name": "Nya Powlowski",
                "email": "qhirthe@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+3543842415736",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 14,
            "rating": 4,
            "comment": "Maiores ipsum quia animi exercitationem quo.",
            "user": {
                "id": 9,
                "name": "Jordon Murazik",
                "email": "ozemlak@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+6252411210203",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 15,
            "rating": 0,
            "comment": "Nobis voluptas nam minima incidunt.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 16,
            "rating": 3,
            "comment": "Fuga eum officiis voluptatem quo nostrum velit.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 17,
            "rating": 5,
            "comment": "Ex reprehenderit harum nemo.",
            "user": {
                "id": 5,
                "name": "Antone White",
                "email": "aniya.koss@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+7284782298951",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 18,
            "rating": 0,
            "comment": "Et explicabo dolorum perferendis quas et qui dolor.",
            "user": {
                "id": 1,
                "name": "Nya Powlowski",
                "email": "qhirthe@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+3543842415736",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 19,
            "rating": 1,
            "comment": "Eaque dicta voluptatem perspiciatis quos autem nobis.",
            "user": {
                "id": 2,
                "name": "Javon Goldner",
                "email": "zena62@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2678718269814",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 20,
            "rating": 3,
            "comment": "In dolorem aut qui possimus voluptatum ut.",
            "user": {
                "id": 2,
                "name": "Javon Goldner",
                "email": "zena62@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2678718269814",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 21,
            "rating": 3,
            "comment": "Voluptas dolor quis maiores voluptates beatae.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 22,
            "rating": 5,
            "comment": "Sit voluptates dolorum libero ut nihil aut veniam.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 23,
            "rating": 4,
            "comment": "Expedita hic doloribus fugiat dolore quia.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 24,
            "rating": 3,
            "comment": "Tempore doloribus exercitationem iusto ut unde esse.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 25,
            "rating": 4,
            "comment": "Esse tenetur tempore ut cumque itaque eius veritatis.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 26,
            "rating": 2,
            "comment": "Ex corrupti odio quasi iusto quidem nihil itaque.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 27,
            "rating": 2,
            "comment": "Ipsum libero nemo nemo.",
            "user": {
                "id": 10,
                "name": "Prof. Cleora Kovacek II",
                "email": "ubarton@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9206733324268",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 28,
            "rating": 0,
            "comment": "Illo aperiam dolore qui eligendi et nihil exercitationem voluptatum.",
            "user": {
                "id": 10,
                "name": "Prof. Cleora Kovacek II",
                "email": "ubarton@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9206733324268",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 29,
            "rating": 0,
            "comment": "Dolores illum autem explicabo voluptate.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 30,
            "rating": 3,
            "comment": "Repudiandae quae sint quas aliquam.",
            "user": {
                "id": 9,
                "name": "Jordon Murazik",
                "email": "ozemlak@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+6252411210203",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 31,
            "rating": 2,
            "comment": "Deserunt placeat eligendi ut placeat.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 32,
            "rating": 0,
            "comment": "Natus qui veritatis ea quia.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 33,
            "rating": 4,
            "comment": "Tenetur omnis officiis earum dolore libero illo.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 34,
            "rating": 5,
            "comment": "Esse quaerat possimus qui nulla ut fugit.",
            "user": {
                "id": 9,
                "name": "Jordon Murazik",
                "email": "ozemlak@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+6252411210203",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 35,
            "rating": 4,
            "comment": "Laboriosam ab vel iusto non et.",
            "user": {
                "id": 7,
                "name": "Riley Schuster",
                "email": "leonor59@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+7502861700675",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 36,
            "rating": 4,
            "comment": "Voluptates provident consequatur architecto quia iusto officiis dolores.",
            "user": {
                "id": 1,
                "name": "Nya Powlowski",
                "email": "qhirthe@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+3543842415736",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 37,
            "rating": 2,
            "comment": "Et quia explicabo neque officia deleniti quae et eos.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 38,
            "rating": 0,
            "comment": "Esse voluptatum facilis debitis quia.",
            "user": {
                "id": 10,
                "name": "Prof. Cleora Kovacek II",
                "email": "ubarton@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9206733324268",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 39,
            "rating": 4,
            "comment": "Laboriosam fugit ea repellat et at.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 40,
            "rating": 2,
            "comment": "Commodi et non libero omnis necessitatibus ea.",
            "user": {
                "id": 8,
                "name": "Reggie Leannon",
                "email": "erika35@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2540247228580",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 41,
            "rating": 5,
            "comment": "Facere nostrum autem et libero et qui occaecati et.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 42,
            "rating": 2,
            "comment": "Aut ratione est beatae.",
            "user": {
                "id": 2,
                "name": "Javon Goldner",
                "email": "zena62@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2678718269814",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 43,
            "rating": 2,
            "comment": "Beatae molestiae quidem corrupti maiores voluptas sunt.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 44,
            "rating": 5,
            "comment": "Ipsam dolorum sunt blanditiis dignissimos ducimus expedita officiis.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 45,
            "rating": 1,
            "comment": "Perspiciatis optio dolores dolorem perspiciatis numquam labore quos cum.",
            "user": {
                "id": 2,
                "name": "Javon Goldner",
                "email": "zena62@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+2678718269814",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 46,
            "rating": 4,
            "comment": "Asperiores exercitationem vero hic ut officiis fugiat ducimus ex.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 47,
            "rating": 5,
            "comment": "Fuga velit voluptatem commodi nihil.",
            "user": {
                "id": 6,
                "name": "Howell Batz",
                "email": "wbayer@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+8445948237454",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 48,
            "rating": 0,
            "comment": "Veniam occaecati facere voluptas ratione fuga.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 49,
            "rating": 2,
            "comment": "Aliquid ratione incidunt nihil nesciunt autem in.",
            "user": {
                "id": 5,
                "name": "Antone White",
                "email": "aniya.koss@example.org",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+7284782298951",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 50,
            "rating": 4,
            "comment": "Libero voluptatem animi maiores omnis aut quis aut.",
            "user": {
                "id": 4,
                "name": "Dr. Emmalee Lakin",
                "email": "arjun38@example.net",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+5606251880968",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
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
        "rating": 4,
        "comment": "Rerum hic quia pariatur facere quo.",
        "user": {
            "id": 10,
            "name": "Prof. Cleora Kovacek II",
            "email": "ubarton@example.org",
            "email_verified_at": "2021-03-26T13:40:35.000000Z",
            "phone": "+9206733324268",
            "gender": 2,
            "avatar": null,
            "level": 0,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        "created_at": "2021-03-26T13:40:35.000000Z",
        "updated_at": "2021-03-26T13:40:35.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating/{rating}</code></p>
<!-- END_d44382a67dad858edca95bf02a4642fb -->
<!-- START_c54775bdd8bb93942b3e4d1e4a0a0dd3 -->
<h2>Display ratings by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/rating-by-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/rating-by-product/1"
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
            "id": 44,
            "rating": 5,
            "comment": "Ipsam dolorum sunt blanditiis dignissimos ducimus expedita officiis.",
            "user": {
                "id": 3,
                "name": "Miss Ella Graham",
                "email": "balistreri.arne@example.com",
                "email_verified_at": "2021-03-26T13:40:35.000000Z",
                "phone": "+9593744483324",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating-by-product/{product_id}</code></p>
<!-- END_c54775bdd8bb93942b3e4d1e4a0a0dd3 -->
<h1>general</h1>
<!-- START_f9301c03a9281c0847565f96e6f723de -->
<h2>Get ordered</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/orders"
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
<p><code>GET api/orders</code></p>
<!-- END_f9301c03a9281c0847565f96e6f723de -->
<!-- START_d4be91a3a8d5235a2d282e7158c2bdb6 -->
<h2>Checkout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://127.0.0.1:8000/api/checkout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/checkout"
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
<p><code>POST api/checkout</code></p>
<!-- END_d4be91a3a8d5235a2d282e7158c2bdb6 -->
<!-- START_f1c003f354e5a35c6d35b6c7e0ad365d -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/parent-category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/parent-category"
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
            "name": "Zulauf, Cormier and Becker",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 2,
            "name": "Collins, Keeling and Stoltenberg",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 3,
            "name": "Hessel-Gibson",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 4,
            "name": "D'Amore, Block and Block",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 5,
            "name": "Schamberger-Brekke",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 6,
            "name": "Dibbert Ltd",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 7,
            "name": "Reichert, Gleichner and Vandervort",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 8,
            "name": "Davis Group",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 9,
            "name": "Runolfsson, Dooley and Jenkins",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        },
        {
            "id": 10,
            "name": "O'Connell and Sons",
            "image": null,
            "desc": null,
            "created_at": "2021-03-26T13:40:34.000000Z",
            "updated_at": "2021-03-26T13:40:34.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/parent-category</code></p>
<!-- END_f1c003f354e5a35c6d35b6c7e0ad365d -->
<!-- START_6745be727df30614b14000051ee0581e -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/get-sub-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/get-sub-category/1"
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
            "id": 16,
            "name": "Reinger, Mann and Yundt",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 25,
            "name": "Green-Bergnaum",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 38,
            "name": "Parisian, Collier and King",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        },
        {
            "id": 48,
            "name": "Bashirian, Donnelly and Vandervort",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-03-26T13:40:35.000000Z",
            "updated_at": "2021-03-26T13:40:35.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/get-sub-category/{parentId}</code></p>
<!-- END_6745be727df30614b14000051ee0581e -->
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