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
    -d '{"name":"corporis","email":"quas","password":"rerum","phone":"dolore","gender":12}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "corporis",
    "email": "quas",
    "password": "rerum",
    "phone": "dolore",
    "gender": 12
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
            "name": "Bahringer and Sons",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 2,
            "name": "McCullough, Feeney and Legros",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 3,
            "name": "Marks, Olson and Carter",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 4,
            "name": "Cassin Group",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 5,
            "name": "Schimmel-Gusikowski",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
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
        "name": "Bahringer and Sons",
        "image": null,
        "desc": null,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
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
            "name": "Stiedemann-McClure",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 2,
            "name": "Walker-Thiel",
            "image": null,
            "desc": null,
            "parent_id": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 3,
            "name": "Brown, Kris and Larkin",
            "image": null,
            "desc": null,
            "parent_id": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 4,
            "name": "Barton PLC",
            "image": null,
            "desc": null,
            "parent_id": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 5,
            "name": "Prohaska, Kiehn and Hodkiewicz",
            "image": null,
            "desc": null,
            "parent_id": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 6,
            "name": "Bed",
            "image": null,
            "desc": null,
            "parent_id": null,
            "created_at": null,
            "updated_at": null
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
        "name": "Stiedemann-McClure",
        "image": null,
        "desc": null,
        "parent_id": 6,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category/{category}</code></p>
<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->
<!-- START_f1c003f354e5a35c6d35b6c7e0ad365d -->
<h2>api/parent-category</h2>
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
<pre><code class="language-json">[
    {
        "id": 2,
        "name": "Walker-Thiel",
        "image": null,
        "desc": null,
        "parent_id": null,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
    },
    {
        "id": 3,
        "name": "Brown, Kris and Larkin",
        "image": null,
        "desc": null,
        "parent_id": null,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
    },
    {
        "id": 4,
        "name": "Barton PLC",
        "image": null,
        "desc": null,
        "parent_id": null,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
    },
    {
        "id": 5,
        "name": "Prohaska, Kiehn and Hodkiewicz",
        "image": null,
        "desc": null,
        "parent_id": null,
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
    },
    {
        "id": 6,
        "name": "Bed",
        "image": null,
        "desc": null,
        "parent_id": null,
        "created_at": null,
        "updated_at": null
    }
]</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/parent-category</code></p>
<!-- END_f1c003f354e5a35c6d35b6c7e0ad365d -->
<!-- START_be0117b866e4205ee9be84cf3fc97d70 -->
<h2>api/parent-category/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/parent-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/parent-category/1"
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
<pre><code class="language-json">[]</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/parent-category/{id}</code></p>
<!-- END_be0117b866e4205ee9be84cf3fc97d70 -->
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
            "name": "Kavon McKenzie III",
            "price": 3831297,
            "desc": "Dicta iusto id iusto fugiat sed. Rem consequatur dolorem vitae voluptate nobis repudiandae. Veniam quas quam vero.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 2,
            "name": "Dr. Rosella Batz",
            "price": 7272882,
            "desc": "Odio veniam repellat dolore est optio cupiditate qui. Id quasi tenetur asperiores nulla. Consequatur consectetur non suscipit illo provident dolores natus quas.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Prohaska, Kiehn and Hodkiewicz",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 3,
            "name": "Uriah Huel",
            "price": 6078976,
            "desc": "Sequi voluptas fugit et velit rem et et. Ut aliquid inventore amet similique praesentium velit qui quas. Vel eius qui animi fugit quibusdam.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 4,
            "name": "Adrain Hoppe",
            "price": 3228568,
            "desc": "Eius eos sed sed dolorem harum quia. Sed odit qui quia asperiores nulla consequatur. Asperiores autem totam iste eum. Non non consequatur aut.",
            "brand": {
                "id": 3,
                "name": "Marks, Olson and Carter",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 5,
            "name": "Ashlee Senger",
            "price": 309156,
            "desc": "Amet deserunt ipsum qui totam blanditiis et nulla. Et fugiat est reprehenderit veritatis perspiciatis. Mollitia qui accusamus est et.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 6,
            "name": "Kane Corwin",
            "price": 4856469,
            "desc": "Sint provident voluptatem ut laboriosam provident iusto non. Rerum reprehenderit aut corporis adipisci adipisci recusandae. Perspiciatis quis vero mollitia illo quaerat.",
            "brand": {
                "id": 3,
                "name": "Marks, Olson and Carter",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 7,
            "name": "Kari Stanton",
            "price": 1168678,
            "desc": "Eos nulla itaque ducimus vero mollitia esse. Vel ut quia ut beatae harum. Dolorem placeat voluptas omnis dolores suscipit dolorum.",
            "brand": {
                "id": 2,
                "name": "McCullough, Feeney and Legros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 8,
            "name": "Pattie Littel",
            "price": 9996076,
            "desc": "Adipisci tempora facere unde et. Voluptatibus quia officiis qui quidem. Qui quo aut asperiores ea molestias.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 9,
            "name": "Brenda Runte",
            "price": 8876370,
            "desc": "Ipsam alias minima quo optio et. Voluptas quas eaque labore odio voluptates. Vel aliquid neque doloremque voluptate aliquam et.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 10,
            "name": "Libbie Dickens",
            "price": 5220571,
            "desc": "Accusamus repudiandae assumenda odio. Impedit quis inventore cumque modi nihil voluptates laboriosam. Officiis non aut qui sint nobis aliquam ipsum.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
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
        "name": "Kavon McKenzie III",
        "price": 3831297,
        "desc": "Dicta iusto id iusto fugiat sed. Rem consequatur dolorem vitae voluptate nobis repudiandae. Veniam quas quam vero.",
        "brand": {
            "id": 4,
            "name": "Cassin Group",
            "image": null,
            "desc": null,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        "category": {
            "id": 1,
            "name": "Stiedemann-McClure",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        "images": [],
        "attributes": [],
        "created_at": "2021-03-22T11:46:24.000000Z",
        "updated_at": "2021-03-22T11:46:24.000000Z"
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
            "name": "Kavon McKenzie III",
            "price": 3831297,
            "desc": "Dicta iusto id iusto fugiat sed. Rem consequatur dolorem vitae voluptate nobis repudiandae. Veniam quas quam vero.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 2,
            "name": "Dr. Rosella Batz",
            "price": 7272882,
            "desc": "Odio veniam repellat dolore est optio cupiditate qui. Id quasi tenetur asperiores nulla. Consequatur consectetur non suscipit illo provident dolores natus quas.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Prohaska, Kiehn and Hodkiewicz",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 3,
            "name": "Uriah Huel",
            "price": 6078976,
            "desc": "Sequi voluptas fugit et velit rem et et. Ut aliquid inventore amet similique praesentium velit qui quas. Vel eius qui animi fugit quibusdam.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 4,
            "name": "Adrain Hoppe",
            "price": 3228568,
            "desc": "Eius eos sed sed dolorem harum quia. Sed odit qui quia asperiores nulla consequatur. Asperiores autem totam iste eum. Non non consequatur aut.",
            "brand": {
                "id": 3,
                "name": "Marks, Olson and Carter",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 5,
            "name": "Ashlee Senger",
            "price": 309156,
            "desc": "Amet deserunt ipsum qui totam blanditiis et nulla. Et fugiat est reprehenderit veritatis perspiciatis. Mollitia qui accusamus est et.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 6,
            "name": "Kane Corwin",
            "price": 4856469,
            "desc": "Sint provident voluptatem ut laboriosam provident iusto non. Rerum reprehenderit aut corporis adipisci adipisci recusandae. Perspiciatis quis vero mollitia illo quaerat.",
            "brand": {
                "id": 3,
                "name": "Marks, Olson and Carter",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 7,
            "name": "Kari Stanton",
            "price": 1168678,
            "desc": "Eos nulla itaque ducimus vero mollitia esse. Vel ut quia ut beatae harum. Dolorem placeat voluptas omnis dolores suscipit dolorum.",
            "brand": {
                "id": 2,
                "name": "McCullough, Feeney and Legros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 8,
            "name": "Pattie Littel",
            "price": 9996076,
            "desc": "Adipisci tempora facere unde et. Voluptatibus quia officiis qui quidem. Qui quo aut asperiores ea molestias.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 9,
            "name": "Brenda Runte",
            "price": 8876370,
            "desc": "Ipsam alias minima quo optio et. Voluptas quas eaque labore odio voluptates. Vel aliquid neque doloremque voluptate aliquam et.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 10,
            "name": "Libbie Dickens",
            "price": 5220571,
            "desc": "Accusamus repudiandae assumenda odio. Impedit quis inventore cumque modi nihil voluptates laboriosam. Officiis non aut qui sint nobis aliquam ipsum.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
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
    -G "http://127.0.0.1:8000/api/popular-product?limit=voluptates" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/popular-product"
);

let params = {
    "limit": "voluptates",
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
            "id": 2,
            "name": "Dr. Rosella Batz",
            "price": 7272882,
            "desc": "Odio veniam repellat dolore est optio cupiditate qui. Id quasi tenetur asperiores nulla. Consequatur consectetur non suscipit illo provident dolores natus quas.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Prohaska, Kiehn and Hodkiewicz",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 6,
            "name": "Kane Corwin",
            "price": 4856469,
            "desc": "Sint provident voluptatem ut laboriosam provident iusto non. Rerum reprehenderit aut corporis adipisci adipisci recusandae. Perspiciatis quis vero mollitia illo quaerat.",
            "brand": {
                "id": 3,
                "name": "Marks, Olson and Carter",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Walker-Thiel",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 25,
            "name": "Ewell Leannon",
            "price": 7613340,
            "desc": "Harum aliquam quia soluta consequatur nihil. Maxime qui modi fugiat odio ut repudiandae. Qui sunt repellendus nihil quas dicta distinctio placeat. Ut nisi eaque corporis consectetur libero ut nemo.",
            "brand": {
                "id": 2,
                "name": "McCullough, Feeney and Legros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 28,
            "name": "Ahmad Ritchie",
            "price": 943768,
            "desc": "Ea dolores natus ratione. Optio magnam est perferendis placeat dolores. Ut voluptas adipisci laborum qui quidem ut. Repudiandae quo et repellat rerum. Pariatur maxime et qui aperiam.",
            "brand": {
                "id": 1,
                "name": "Bahringer and Sons",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 12,
            "name": "Abdiel Fritsch",
            "price": 3221806,
            "desc": "Vel omnis qui perferendis eius quia. Id dolore omnis consequatur iusto assumenda repellat impedit. Laboriosam reprehenderit neque recusandae aut vero.",
            "brand": {
                "id": 2,
                "name": "McCullough, Feeney and Legros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 19,
            "name": "Gretchen Huels IV",
            "price": 463868,
            "desc": "Sit velit tenetur a sunt error. Et et architecto iure soluta tempore nemo. Non voluptas voluptatem perspiciatis suscipit ut et dolor. Porro saepe minus hic sit qui quia.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 7,
            "name": "Kari Stanton",
            "price": 1168678,
            "desc": "Eos nulla itaque ducimus vero mollitia esse. Vel ut quia ut beatae harum. Dolorem placeat voluptas omnis dolores suscipit dolorum.",
            "brand": {
                "id": 2,
                "name": "McCullough, Feeney and Legros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 8,
            "name": "Pattie Littel",
            "price": 9996076,
            "desc": "Adipisci tempora facere unde et. Voluptatibus quia officiis qui quidem. Qui quo aut asperiores ea molestias.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Brown, Kris and Larkin",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 29,
            "name": "Emmitt Rippin I",
            "price": 5828853,
            "desc": "Qui exercitationem rerum aut hic. Et totam sint non possimus. Voluptatem saepe sapiente voluptas amet sit quae atque. Ut quae quia dolor qui rerum. Suscipit veritatis autem nam corrupti ut molestiae.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Barton PLC",
                "image": null,
                "desc": null,
                "parent_id": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 13,
            "name": "Keyshawn Muller",
            "price": 9336021,
            "desc": "Et facilis et aliquid tempora illum. Expedita quo quibusdam distinctio eaque iure accusamus a. Odio quia modi ratione et voluptates. Nesciunt nesciunt amet blanditiis voluptatum.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
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
<!-- START_c5f9769c6bebb3acf811f95eaef3f6b9 -->
<h2>Show products in parent category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product-in-parent/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product-in-parent/1"
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
    "data": []
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product-in-parent/{id}</code></p>
<!-- END_c5f9769c6bebb3acf811f95eaef3f6b9 -->
<!-- START_81f884f0583d5d10de3fe78838f09846 -->
<h2>Show products in sub category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/product-in-sub/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/product-in-sub/1"
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
            "name": "Kavon McKenzie III",
            "price": 3831297,
            "desc": "Dicta iusto id iusto fugiat sed. Rem consequatur dolorem vitae voluptate nobis repudiandae. Veniam quas quam vero.",
            "brand": {
                "id": 4,
                "name": "Cassin Group",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 13,
            "name": "Keyshawn Muller",
            "price": 9336021,
            "desc": "Et facilis et aliquid tempora illum. Expedita quo quibusdam distinctio eaque iure accusamus a. Odio quia modi ratione et voluptates. Nesciunt nesciunt amet blanditiis voluptatum.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        },
        {
            "id": 14,
            "name": "Alayna Ernser IV",
            "price": 4930529,
            "desc": "Laudantium ipsam quos in et. Velit qui sint sunt neque laboriosam rerum provident. Assumenda aliquid minus et omnis quia reiciendis molestiae numquam.",
            "brand": {
                "id": 5,
                "name": "Schimmel-Gusikowski",
                "image": null,
                "desc": null,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Stiedemann-McClure",
                "image": null,
                "desc": null,
                "parent_id": 6,
                "created_at": "2021-03-22T11:46:24.000000Z",
                "updated_at": "2021-03-22T11:46:24.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-03-22T11:46:24.000000Z",
            "updated_at": "2021-03-22T11:46:24.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product-in-sub/{id}</code></p>
<!-- END_81f884f0583d5d10de3fe78838f09846 -->
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
            "comment": "Ut nihil quia perferendis fugiat rerum expedita.",
            "product_id": 17,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 2,
            "rating": 2,
            "comment": "Sint in natus cupiditate esse consequatur.",
            "product_id": 7,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 3,
            "rating": 5,
            "comment": "Sit veniam error neque.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 4,
            "rating": 4,
            "comment": "Quos laboriosam aut sit.",
            "product_id": 17,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 5,
            "rating": 2,
            "comment": "Quibusdam iure corporis expedita saepe consequatur.",
            "product_id": 3,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 6,
            "rating": 2,
            "comment": "Sunt voluptatem accusantium quis vero sed.",
            "product_id": 26,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 7,
            "rating": 4,
            "comment": "Animi qui itaque in fugiat facere reprehenderit similique.",
            "product_id": 23,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 8,
            "rating": 4,
            "comment": "Ex recusandae molestiae odio enim.",
            "product_id": 19,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 9,
            "rating": 4,
            "comment": "Et beatae nobis omnis quia illum consequatur.",
            "product_id": 8,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 10,
            "rating": 0,
            "comment": "Qui nostrum harum aliquam.",
            "product_id": 24,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 11,
            "rating": 3,
            "comment": "Molestias autem similique fuga reiciendis molestiae cum a.",
            "product_id": 25,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 12,
            "rating": 0,
            "comment": "Harum labore ut voluptas est eos.",
            "product_id": 11,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 13,
            "rating": 1,
            "comment": "Qui qui quod esse pariatur odio voluptatem delectus.",
            "product_id": 12,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 14,
            "rating": 3,
            "comment": "Dolorem dolor sed cum et.",
            "product_id": 2,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 15,
            "rating": 5,
            "comment": "Est voluptate impedit unde pariatur mollitia.",
            "product_id": 28,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 16,
            "rating": 4,
            "comment": "Sequi sequi error vitae.",
            "product_id": 12,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 17,
            "rating": 5,
            "comment": "Saepe nihil maxime cum placeat et voluptates consequuntur.",
            "product_id": 20,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 18,
            "rating": 5,
            "comment": "Ea iure voluptas porro nemo incidunt.",
            "product_id": 14,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 19,
            "rating": 3,
            "comment": "Est deserunt aut qui et explicabo doloribus.",
            "product_id": 25,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 20,
            "rating": 1,
            "comment": "In in adipisci et.",
            "product_id": 27,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 21,
            "rating": 1,
            "comment": "Quibusdam rerum aut ratione fugit deserunt consequatur commodi.",
            "product_id": 27,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 22,
            "rating": 3,
            "comment": "Quod adipisci ea quo aut non dolor excepturi.",
            "product_id": 22,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 23,
            "rating": 4,
            "comment": "Ut id rem velit nihil nostrum enim.",
            "product_id": 30,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 24,
            "rating": 5,
            "comment": "Iure vel quisquam laboriosam perspiciatis natus.",
            "product_id": 23,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 25,
            "rating": 3,
            "comment": "Ut et in perspiciatis ut architecto sequi qui.",
            "product_id": 23,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 26,
            "rating": 2,
            "comment": "Ipsa voluptatibus porro recusandae quod vel et at.",
            "product_id": 4,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 27,
            "rating": 5,
            "comment": "Quas facilis quia minima assumenda.",
            "product_id": 4,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 28,
            "rating": 1,
            "comment": "Aut et repudiandae maiores quae consequatur quaerat.",
            "product_id": 14,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 29,
            "rating": 2,
            "comment": "Commodi iure sint officia atque earum maiores qui.",
            "product_id": 30,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 30,
            "rating": 0,
            "comment": "Culpa ipsum adipisci quia.",
            "product_id": 10,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 31,
            "rating": 3,
            "comment": "Nam error laborum nihil similique labore ut.",
            "product_id": 26,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 32,
            "rating": 1,
            "comment": "Quos vero rerum omnis perferendis omnis eius cupiditate.",
            "product_id": 9,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 33,
            "rating": 0,
            "comment": "Nostrum rerum non velit culpa rerum.",
            "product_id": 8,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 34,
            "rating": 3,
            "comment": "Iste beatae esse aliquid et doloribus distinctio.",
            "product_id": 1,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 35,
            "rating": 1,
            "comment": "Nobis illum quibusdam ducimus et.",
            "product_id": 15,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 36,
            "rating": 1,
            "comment": "Et enim omnis sunt molestias et illum quis.",
            "product_id": 27,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 37,
            "rating": 5,
            "comment": "Sunt ipsum iste et dolores.",
            "product_id": 22,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 38,
            "rating": 0,
            "comment": "Vero corporis est qui omnis quidem est ut.",
            "product_id": 24,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 39,
            "rating": 0,
            "comment": "Ea recusandae est qui ex ratione quia.",
            "product_id": 2,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 40,
            "rating": 1,
            "comment": "Mollitia et fuga ut sed.",
            "product_id": 26,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 41,
            "rating": 4,
            "comment": "Neque aut similique id dolores quisquam.",
            "product_id": 1,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 42,
            "rating": 2,
            "comment": "Rerum asperiores non a ad labore rem.",
            "product_id": 21,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 43,
            "rating": 3,
            "comment": "Temporibus voluptate voluptatibus maiores possimus ullam labore omnis voluptate.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 44,
            "rating": 3,
            "comment": "Est odit repudiandae quidem rerum et voluptatem voluptas dolor.",
            "product_id": 1,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 45,
            "rating": 2,
            "comment": "Autem ut at voluptate quia dolores.",
            "product_id": 8,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 46,
            "rating": 5,
            "comment": "Eveniet voluptas dolorum corporis ut quas ratione dolorem.",
            "product_id": 25,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 47,
            "rating": 3,
            "comment": "Facere id accusamus quis provident possimus.",
            "product_id": 14,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 48,
            "rating": 2,
            "comment": "Vel voluptas doloribus delectus.",
            "product_id": 30,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 49,
            "rating": 5,
            "comment": "Eveniet excepturi aspernatur dolores ducimus.",
            "product_id": 1,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 50,
            "rating": 4,
            "comment": "Voluptates odio nostrum molestiae enim tempore.",
            "product_id": 12,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
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
        "comment": "Ut nihil quia perferendis fugiat rerum expedita.",
        "product_id": 17,
        "user_id": 9,
        "created_at": "2021-03-22T11:46:25.000000Z",
        "updated_at": "2021-03-22T11:46:25.000000Z"
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
            "comment": "Ut nihil quia perferendis fugiat rerum expedita.",
            "product_id": 17,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 2,
            "rating": 2,
            "comment": "Sint in natus cupiditate esse consequatur.",
            "product_id": 7,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 3,
            "rating": 5,
            "comment": "Sit veniam error neque.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 4,
            "rating": 4,
            "comment": "Quos laboriosam aut sit.",
            "product_id": 17,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 5,
            "rating": 2,
            "comment": "Quibusdam iure corporis expedita saepe consequatur.",
            "product_id": 3,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 6,
            "rating": 2,
            "comment": "Sunt voluptatem accusantium quis vero sed.",
            "product_id": 26,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 7,
            "rating": 4,
            "comment": "Animi qui itaque in fugiat facere reprehenderit similique.",
            "product_id": 23,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 8,
            "rating": 4,
            "comment": "Ex recusandae molestiae odio enim.",
            "product_id": 19,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 9,
            "rating": 4,
            "comment": "Et beatae nobis omnis quia illum consequatur.",
            "product_id": 8,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 10,
            "rating": 0,
            "comment": "Qui nostrum harum aliquam.",
            "product_id": 24,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 11,
            "rating": 3,
            "comment": "Molestias autem similique fuga reiciendis molestiae cum a.",
            "product_id": 25,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 12,
            "rating": 0,
            "comment": "Harum labore ut voluptas est eos.",
            "product_id": 11,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 13,
            "rating": 1,
            "comment": "Qui qui quod esse pariatur odio voluptatem delectus.",
            "product_id": 12,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 14,
            "rating": 3,
            "comment": "Dolorem dolor sed cum et.",
            "product_id": 2,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 15,
            "rating": 5,
            "comment": "Est voluptate impedit unde pariatur mollitia.",
            "product_id": 28,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 16,
            "rating": 4,
            "comment": "Sequi sequi error vitae.",
            "product_id": 12,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 17,
            "rating": 5,
            "comment": "Saepe nihil maxime cum placeat et voluptates consequuntur.",
            "product_id": 20,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 18,
            "rating": 5,
            "comment": "Ea iure voluptas porro nemo incidunt.",
            "product_id": 14,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 19,
            "rating": 3,
            "comment": "Est deserunt aut qui et explicabo doloribus.",
            "product_id": 25,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 20,
            "rating": 1,
            "comment": "In in adipisci et.",
            "product_id": 27,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 21,
            "rating": 1,
            "comment": "Quibusdam rerum aut ratione fugit deserunt consequatur commodi.",
            "product_id": 27,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 22,
            "rating": 3,
            "comment": "Quod adipisci ea quo aut non dolor excepturi.",
            "product_id": 22,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 23,
            "rating": 4,
            "comment": "Ut id rem velit nihil nostrum enim.",
            "product_id": 30,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 24,
            "rating": 5,
            "comment": "Iure vel quisquam laboriosam perspiciatis natus.",
            "product_id": 23,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 25,
            "rating": 3,
            "comment": "Ut et in perspiciatis ut architecto sequi qui.",
            "product_id": 23,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 26,
            "rating": 2,
            "comment": "Ipsa voluptatibus porro recusandae quod vel et at.",
            "product_id": 4,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 27,
            "rating": 5,
            "comment": "Quas facilis quia minima assumenda.",
            "product_id": 4,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 28,
            "rating": 1,
            "comment": "Aut et repudiandae maiores quae consequatur quaerat.",
            "product_id": 14,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 29,
            "rating": 2,
            "comment": "Commodi iure sint officia atque earum maiores qui.",
            "product_id": 30,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 30,
            "rating": 0,
            "comment": "Culpa ipsum adipisci quia.",
            "product_id": 10,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 31,
            "rating": 3,
            "comment": "Nam error laborum nihil similique labore ut.",
            "product_id": 26,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 32,
            "rating": 1,
            "comment": "Quos vero rerum omnis perferendis omnis eius cupiditate.",
            "product_id": 9,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 33,
            "rating": 0,
            "comment": "Nostrum rerum non velit culpa rerum.",
            "product_id": 8,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 34,
            "rating": 3,
            "comment": "Iste beatae esse aliquid et doloribus distinctio.",
            "product_id": 1,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 35,
            "rating": 1,
            "comment": "Nobis illum quibusdam ducimus et.",
            "product_id": 15,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 36,
            "rating": 1,
            "comment": "Et enim omnis sunt molestias et illum quis.",
            "product_id": 27,
            "user_id": 8,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 37,
            "rating": 5,
            "comment": "Sunt ipsum iste et dolores.",
            "product_id": 22,
            "user_id": 2,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 38,
            "rating": 0,
            "comment": "Vero corporis est qui omnis quidem est ut.",
            "product_id": 24,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 39,
            "rating": 0,
            "comment": "Ea recusandae est qui ex ratione quia.",
            "product_id": 2,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 40,
            "rating": 1,
            "comment": "Mollitia et fuga ut sed.",
            "product_id": 26,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 41,
            "rating": 4,
            "comment": "Neque aut similique id dolores quisquam.",
            "product_id": 1,
            "user_id": 4,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 42,
            "rating": 2,
            "comment": "Rerum asperiores non a ad labore rem.",
            "product_id": 21,
            "user_id": 1,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 43,
            "rating": 3,
            "comment": "Temporibus voluptate voluptatibus maiores possimus ullam labore omnis voluptate.",
            "product_id": 21,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 44,
            "rating": 3,
            "comment": "Est odit repudiandae quidem rerum et voluptatem voluptas dolor.",
            "product_id": 1,
            "user_id": 6,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 45,
            "rating": 2,
            "comment": "Autem ut at voluptate quia dolores.",
            "product_id": 8,
            "user_id": 9,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 46,
            "rating": 5,
            "comment": "Eveniet voluptas dolorum corporis ut quas ratione dolorem.",
            "product_id": 25,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 47,
            "rating": 3,
            "comment": "Facere id accusamus quis provident possimus.",
            "product_id": 14,
            "user_id": 7,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 48,
            "rating": 2,
            "comment": "Vel voluptas doloribus delectus.",
            "product_id": 30,
            "user_id": 10,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 49,
            "rating": 5,
            "comment": "Eveniet excepturi aspernatur dolores ducimus.",
            "product_id": 1,
            "user_id": 5,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
        },
        {
            "id": 50,
            "rating": 4,
            "comment": "Voluptates odio nostrum molestiae enim tempore.",
            "product_id": 12,
            "user_id": 3,
            "created_at": "2021-03-22T11:46:25.000000Z",
            "updated_at": "2021-03-22T11:46:25.000000Z"
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
        "comment": "Ut nihil quia perferendis fugiat rerum expedita.",
        "product_id": 17,
        "user_id": 9,
        "created_at": "2021-03-22T11:46:25.000000Z",
        "updated_at": "2021-03-22T11:46:25.000000Z"
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