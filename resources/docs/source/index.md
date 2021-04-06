---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://127.0.0.1:8000/docs/collection.json)

<!-- END_INFO -->

#Address


APIs for address
<!-- START_3e89affc00678ae6402d4e91d0072a4f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/address" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/address"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/address`


<!-- END_3e89affc00678ae6402d4e91d0072a4f -->

<!-- START_56a3d62a5759f4f59b42a3732b8ba8e3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/address" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/address"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/address`


<!-- END_56a3d62a5759f4f59b42a3732b8ba8e3 -->

<!-- START_931c4a4dc2f4c4ff26ad9e085dc47fa6 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/address/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/address/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/address/{address}`


<!-- END_931c4a4dc2f4c4ff26ad9e085dc47fa6 -->

<!-- START_459bbf3a84f4048ddc40c9deaed665ea -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/address/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/address/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/address/{address}`

`PATCH api/address/{address}`


<!-- END_459bbf3a84f4048ddc40c9deaed665ea -->

<!-- START_8ea6d34a23eeff2623af9ad9ae1b407e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/address/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/address/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/address/{address}`


<!-- END_8ea6d34a23eeff2623af9ad9ae1b407e -->

#Authenticator


APIs of auth
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Created a user

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"et","email":"consequuntur","password":"tenetur","phone":"cumque","gender":14}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "et",
    "email": "consequuntur",
    "password": "tenetur",
    "phone": "cumque",
    "gender": 14
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | name
        `email` | string |  optional  | email
        `password` | string |  optional  | password
        `phone` | string |  optional  | phone
        `gender` | integer |  optional  | gender of user (0 = not known, 1 = male, 2 = female, 8 = not applicable)
    
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_9e4f7ce66ec57f190ca9d116d8248e20 -->
## api/user-edit
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/user-edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/user-edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user-edit`


<!-- END_9e4f7ce66ec57f190ca9d116d8248e20 -->

<!-- START_61739f3220a224b34228600649230ad1 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/logout`


<!-- END_61739f3220a224b34228600649230ad1 -->

<!-- START_d9262c03ac71a820f46e401341072b02 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/password/reset`


<!-- END_d9262c03ac71a820f46e401341072b02 -->

<!-- START_b7802a3a2092f162a21dc668479801f4 -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/email`


<!-- END_b7802a3a2092f162a21dc668479801f4 -->

<!-- START_3fc1ef796ad26ae024817447895c3377 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET api/password/reset/{token}`


<!-- END_3fc1ef796ad26ae024817447895c3377 -->

<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/reset`


<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->

<!-- START_294cbd5da98d2b993c5a8563c03a4ff5 -->
## Display the password confirmation view.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/password/confirm`


<!-- END_294cbd5da98d2b993c5a8563c03a4ff5 -->

<!-- START_7e9e4512971b1eda26f8f147eb4c07d4 -->
## Confirm the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/password/confirm`


<!-- END_7e9e4512971b1eda26f8f147eb4c07d4 -->

<!-- START_2d698b6d6bc7441f9c1a9cf11aec4059 -->
## Show the email verification notice.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/email/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/email/verify`


<!-- END_2d698b6d6bc7441f9c1a9cf11aec4059 -->

<!-- START_3e4a08674c3c1aaa7a4e8aacbf86420a -->
## Mark the authenticated user&#039;s email address as verified.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/email/verify/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/email/verify/{id}/{hash}`


<!-- END_3e4a08674c3c1aaa7a4e8aacbf86420a -->

<!-- START_007d2c80092c02b58e6bfecd510a3282 -->
## Resend the email verification notification.

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/email/resend`


<!-- END_007d2c80092c02b58e6bfecd510a3282 -->

#Brand


APIs for brand
<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 6,
            "name": "Nolan-Mohr",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        },
        {
            "id": 7,
            "name": "Braun PLC",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        },
        {
            "id": 8,
            "name": "Paucek PLC",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        },
        {
            "id": 9,
            "name": "Carter-Romaguera",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        },
        {
            "id": 10,
            "name": "Crona-Von",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/brand`


<!-- END_ec5d69c57dff08a10fad5f9cf208ad9f -->

<!-- START_907ecccfb795fb1a76e52450b3d2dd1f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Ratke, Bernhard and Schaefer",
        "image": null,
        "desc": null,
        "created_at": "2021-03-26T13:40:34.000000Z",
        "updated_at": "2021-03-26T13:40:34.000000Z"
    }
}
```

### HTTP Request
`GET api/brand/{brand}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The ID of the brand.

<!-- END_907ecccfb795fb1a76e52450b3d2dd1f -->

#Category


APIs for category
<!-- START_db20564ba266cd451caac114b3eac8ab -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 51,
            "name": "Hintz LLC",
            "image": null,
            "desc": null,
            "parent_id": 13,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 52,
            "name": "Larkin PLC",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 53,
            "name": "Adams Group",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 54,
            "name": "Stanton Ltd",
            "image": null,
            "desc": null,
            "parent_id": 16,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 55,
            "name": "Kuhlman-Cassin",
            "image": null,
            "desc": null,
            "parent_id": 16,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 56,
            "name": "Conroy, Grady and Ullrich",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 57,
            "name": "Harris, Ebert and Conroy",
            "image": null,
            "desc": null,
            "parent_id": 16,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 58,
            "name": "Mueller and Sons",
            "image": null,
            "desc": null,
            "parent_id": 20,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 59,
            "name": "Ernser PLC",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 60,
            "name": "Lemke-Marquardt",
            "image": null,
            "desc": null,
            "parent_id": 19,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 61,
            "name": "Eichmann-Mayer",
            "image": null,
            "desc": null,
            "parent_id": 20,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 62,
            "name": "Sawayn Inc",
            "image": null,
            "desc": null,
            "parent_id": 19,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 63,
            "name": "Rodriguez Ltd",
            "image": null,
            "desc": null,
            "parent_id": 11,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 64,
            "name": "Collier-Shanahan",
            "image": null,
            "desc": null,
            "parent_id": 13,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 65,
            "name": "Blanda, Stiedemann and Howell",
            "image": null,
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 66,
            "name": "Bogisich, Weber and Bogisich",
            "image": null,
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 67,
            "name": "Howe-Kulas",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 68,
            "name": "Stroman Inc",
            "image": null,
            "desc": null,
            "parent_id": 16,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 69,
            "name": "Ritchie, Murphy and Champlin",
            "image": null,
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 70,
            "name": "O'Hara-Rowe",
            "image": null,
            "desc": null,
            "parent_id": 15,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 71,
            "name": "Kuhn Inc",
            "image": null,
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 72,
            "name": "Watsica-Koss",
            "image": null,
            "desc": null,
            "parent_id": 15,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 73,
            "name": "Beatty, Hoeger and Stiedemann",
            "image": null,
            "desc": null,
            "parent_id": 19,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 74,
            "name": "Connelly, Wehner and Hauck",
            "image": null,
            "desc": null,
            "parent_id": 15,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 75,
            "name": "Franecki-Schuppe",
            "image": null,
            "desc": null,
            "parent_id": 19,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 76,
            "name": "Ward, Trantow and Konopelski",
            "image": null,
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 77,
            "name": "Gleichner-Ortiz",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 78,
            "name": "Wehner, Goodwin and Maggio",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 79,
            "name": "Hintz and Sons",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 80,
            "name": "Kub-Gusikowski",
            "image": null,
            "desc": null,
            "parent_id": 11,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 81,
            "name": "Sanford, Glover and Blick",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 82,
            "name": "Rowe-Kuvalis",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 83,
            "name": "Pacocha PLC",
            "image": null,
            "desc": null,
            "parent_id": 18,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 84,
            "name": "Feil, Harber and Kuhn",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 85,
            "name": "Hills Inc",
            "image": null,
            "desc": null,
            "parent_id": 17,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 86,
            "name": "Nader, Strosin and Lakin",
            "image": null,
            "desc": null,
            "parent_id": 20,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 87,
            "name": "Goyette Ltd",
            "image": null,
            "desc": null,
            "parent_id": 11,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 88,
            "name": "Collier-Satterfield",
            "image": null,
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 89,
            "name": "Corkery-Abernathy",
            "image": null,
            "desc": null,
            "parent_id": 14,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 90,
            "name": "Metz, Hessel and Vandervort",
            "image": null,
            "desc": null,
            "parent_id": 19,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 91,
            "name": "West PLC",
            "image": null,
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 92,
            "name": "Schinner Inc",
            "image": null,
            "desc": null,
            "parent_id": 15,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 93,
            "name": "Zemlak-Gislason",
            "image": null,
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 94,
            "name": "Beier-Gorczany",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 95,
            "name": "Ratke, Hermann and Tremblay",
            "image": null,
            "desc": null,
            "parent_id": 16,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 96,
            "name": "Fisher-Kuphal",
            "image": null,
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 97,
            "name": "Auer, Langosh and Heaney",
            "image": null,
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 98,
            "name": "Bauch, Quitzon and Moen",
            "image": null,
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 99,
            "name": "Homenick, Rosenbaum and Flatley",
            "image": null,
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 100,
            "name": "Vandervort, Williamson and O'Conner",
            "image": null,
            "desc": null,
            "parent_id": 18,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/category`


<!-- END_db20564ba266cd451caac114b3eac8ab -->

<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Senger and Sons",
        "image": null,
        "desc": null,
        "parent_id": 2,
        "created_at": "2021-03-26T13:40:35.000000Z",
        "updated_at": "2021-03-26T14:01:53.000000Z"
    }
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

#Comment


APIs for comment
<!-- START_e795fade4d25e2473e7fd22cababfe99 -->
## Store a newly Comment

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/comment`


<!-- END_e795fade4d25e2473e7fd22cababfe99 -->

<!-- START_820bc036154f8d8ed569b9728dba9650 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/comment`


<!-- END_820bc036154f8d8ed569b9728dba9650 -->

<!-- START_290df647fbc0fcbe56d880990e4bfdfc -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/comment/{comment}`


<!-- END_290df647fbc0fcbe56d880990e4bfdfc -->

<!-- START_ba21d63d662b79aca99bb9e603625f5b -->
## Display comments by product id

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/comment-by-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
                "name": "Dai123",
                "email": "fdai3105@gmail.com",
                "email_verified_at": "2021-03-26T13:42:06.000000Z",
                "phone": "123",
                "gender": 1,
                "avatar": "upload\\Dai123_IMG_20200131_012124.jpg",
                "level": 1,
                "created_at": "2021-03-26T13:41:17.000000Z",
                "updated_at": "2021-04-01T07:02:39.000000Z"
            },
            "created_at": "2021-03-28T09:10:04.000000Z",
            "updated_at": "2021-03-28T09:10:04.000000Z"
        },
        {
            "id": 158,
            "comment": "Rerum et et sint doloribus et qui consequatur.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 173,
            "comment": "Qui rerum et omnis temporibus fuga repellat.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 180,
            "comment": "Numquam pariatur quia officia vitae consequatur.",
            "user": {
                "id": 17,
                "name": "Alf Morissette",
                "email": "heaney.ilene@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+9839311969889",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/comment-by-product/{product_id}`


<!-- END_ba21d63d662b79aca99bb9e603625f5b -->

#Product


APIs for product
<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Show all products

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Lavina Lynch",
            "price": 9286366,
            "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
            "stock": 36,
            "bought": 8,
            "warranty": 17,
            "rating": 2,
            "rating_averaged": 3,
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
            "rating": 3,
            "rating_averaged": 0.5,
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
            "rating": 2,
            "rating_averaged": 3.5,
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
            "rating": 2,
            "rating_averaged": 1.5,
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
            "rating": 4,
            "rating_averaged": 3,
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
            "rating": 4,
            "rating_averaged": 1.5,
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
        "last": "http:\/\/localhost\/api\/product?page=6",
        "prev": null,
        "next": "http:\/\/localhost\/api\/product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 6,
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
                "url": "http:\/\/localhost\/api\/product?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/product?page=6",
                "label": "6",
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
        "total": 60
    }
}
```

### HTTP Request
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_1fcbf5d495e6ada99ea017e9ae32b380 -->
## Show one product by id

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Lavina Lynch",
        "price": 9286366,
        "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
        "stock": 36,
        "bought": 8,
        "warranty": 17,
        "rating": 2,
        "rating_averaged": 3,
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
}
```

### HTTP Request
`GET api/product/{product}`


<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->

<!-- START_63df6152732490930b119fac280eb9ef -->
## Show hot product sort by updated_at

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/new-product?limit=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/new-product"
);

let params = {
    "limit": "6",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 31,
            "name": "Andres Bauch",
            "price": 4511857,
            "desc": "Necessitatibus voluptate quo facilis recusandae. Aut quas nobis nihil sint. Dolore numquam iure eum eius. Qui voluptas architecto repudiandae.",
            "stock": 18,
            "bought": 5,
            "warranty": 18,
            "rating": 1,
            "rating_averaged": 4,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 66,
                "name": "Bogisich, Weber and Bogisich",
                "image": null,
                "desc": null,
                "parent_id": 12,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 32,
            "name": "Conrad Klein",
            "price": 6302278,
            "desc": "Libero esse non et culpa corporis quos. Aut consequatur et minus ut iste. Omnis enim tempore est. Atque error blanditiis sit harum aut natus vel. Qui aperiam consequatur occaecati dolore repellat.",
            "stock": 91,
            "bought": 27,
            "warranty": 1,
            "rating": 1,
            "rating_averaged": 3,
            "brand": {
                "id": 8,
                "name": "Paucek PLC",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Klein Ltd",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 33,
            "name": "Iva Moen",
            "price": 9648870,
            "desc": "Voluptatem laudantium voluptatum qui aliquam eum itaque et. Eius quidem omnis excepturi et. Qui qui possimus a exercitationem ut unde.",
            "stock": 57,
            "bought": 12,
            "warranty": 5,
            "rating": 3,
            "rating_averaged": 0.5,
            "brand": {
                "id": 6,
                "name": "Nolan-Mohr",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 11,
                "name": "Littel PLC",
                "image": null,
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 34,
            "name": "Mr. Paxton Dicki",
            "price": 4845728,
            "desc": "Sit totam incidunt accusamus rem asperiores ipsa voluptatem. Illum praesentium quo aut deleniti reiciendis dolorem est. Sint occaecati nostrum molestias voluptas.",
            "stock": 53,
            "bought": 10,
            "warranty": 9,
            "rating": 2,
            "rating_averaged": 2,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 35,
                "name": "Ritchie, Pfannerstill and Collier",
                "image": null,
                "desc": null,
                "parent_id": 8,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 35,
            "name": "Dr. Jarrett Ryan V",
            "price": 1820217,
            "desc": "Deleniti voluptas quo et non commodi. Quisquam qui et qui saepe perspiciatis eius consectetur. Non vel rerum at consequuntur voluptatem.",
            "stock": 21,
            "bought": 22,
            "warranty": 9,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 7,
                "name": "Braun PLC",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 27,
                "name": "Bernier Inc",
                "image": null,
                "desc": null,
                "parent_id": 9,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 36,
            "name": "Davin Berge",
            "price": 202282,
            "desc": "Quas aliquam tenetur et hic vel harum dolore. Magnam voluptates ullam nemo.",
            "stock": 75,
            "bought": 11,
            "warranty": 2,
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
                "id": 71,
                "name": "Kuhn Inc",
                "image": null,
                "desc": null,
                "parent_id": 4,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 37,
            "name": "Ms. Ocie Ondricka Sr.",
            "price": 8966456,
            "desc": "Molestias provident recusandae nulla inventore. Labore quis natus vero dolorem voluptatem quaerat. Natus dolorem quia consequuntur eaque ipsum assumenda et nobis.",
            "stock": 26,
            "bought": 17,
            "warranty": 21,
            "rating": 2,
            "rating_averaged": 4,
            "brand": {
                "id": 7,
                "name": "Braun PLC",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 42,
                "name": "Fahey and Sons",
                "image": null,
                "desc": null,
                "parent_id": 9,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 38,
            "name": "Ana Moore",
            "price": 1632759,
            "desc": "Quia excepturi qui aut. Nemo saepe assumenda debitis voluptatem et ab aut. Doloribus id quam voluptatem eaque eos voluptate ipsa.",
            "stock": 85,
            "bought": 36,
            "warranty": 0,
            "rating": 1,
            "rating_averaged": 3,
            "brand": {
                "id": 6,
                "name": "Nolan-Mohr",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 94,
                "name": "Beier-Gorczany",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 39,
            "name": "Erna Wolf",
            "price": 4276536,
            "desc": "Id ipsum quaerat soluta porro. Qui sunt et accusamus consequatur nihil. Soluta quia dolorum sunt velit.",
            "stock": 59,
            "bought": 17,
            "warranty": 16,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 81,
                "name": "Sanford, Glover and Blick",
                "image": null,
                "desc": null,
                "parent_id": 5,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 40,
            "name": "Zola Collins",
            "price": 814407,
            "desc": "Aut aut asperiores dolor expedita dolor. Aperiam suscipit officia vero asperiores velit suscipit molestiae. Aut facilis occaecati est dolorem.",
            "stock": 31,
            "bought": 32,
            "warranty": 13,
            "rating": 0,
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
                "id": 77,
                "name": "Gleichner-Ortiz",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/new-product?page=1",
        "last": "http:\/\/localhost\/api\/new-product?page=6",
        "prev": null,
        "next": "http:\/\/localhost\/api\/new-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 6,
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
                "url": "http:\/\/localhost\/api\/new-product?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/new-product?page=6",
                "label": "6",
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
        "total": 60
    }
}
```

### HTTP Request
`GET api/new-product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `limit` |  optional  | Limit of the query.

<!-- END_63df6152732490930b119fac280eb9ef -->

<!-- START_1df1aa72c0b2999caf24e34335e826a7 -->
## Show new product sort by

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/popular-product?limit=itaque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/popular-product"
);

let params = {
    "limit": "itaque",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 13,
            "name": "Arlene Langosh I",
            "price": 1179871,
            "desc": "Necessitatibus suscipit adipisci laudantium ipsa voluptas animi cum aut. Necessitatibus possimus veniam qui. Ipsa ea accusantium cum accusantium.",
            "stock": 76,
            "bought": 40,
            "warranty": 10,
            "rating": 2,
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
            "rating": 3,
            "rating_averaged": 0.5,
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
            "id": 60,
            "name": "Veronica Fritsch",
            "price": 6127135,
            "desc": "Voluptatem eum eum sunt nemo et aut libero. Eos eum laborum asperiores et nemo et est. Dolores repellat voluptatem et officia ut. Ratione accusantium non et quo quo consectetur ut.",
            "stock": 18,
            "bought": 38,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 3,
            "brand": {
                "id": 6,
                "name": "Nolan-Mohr",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
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
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 18,
            "name": "Prof. Gage Wolff",
            "price": 9476453,
            "desc": "Ipsa molestias non nesciunt quasi. Voluptatem incidunt fuga omnis aliquid. Possimus cupiditate qui fuga a quas tempore.",
            "stock": 63,
            "bought": 37,
            "warranty": 13,
            "rating": 4,
            "rating_averaged": 2.5,
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
            "id": 52,
            "name": "Mr. Lowell Schaefer",
            "price": 1487021,
            "desc": "Aut quae unde sint. Ad vel id maxime tenetur. Et dolor officia vero pariatur repudiandae.",
            "stock": 18,
            "bought": 37,
            "warranty": 20,
            "rating": 1,
            "rating_averaged": 4,
            "brand": {
                "id": 6,
                "name": "Nolan-Mohr",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 65,
                "name": "Blanda, Stiedemann and Howell",
                "image": null,
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
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
            "id": 38,
            "name": "Ana Moore",
            "price": 1632759,
            "desc": "Quia excepturi qui aut. Nemo saepe assumenda debitis voluptatem et ab aut. Doloribus id quam voluptatem eaque eos voluptate ipsa.",
            "stock": 85,
            "bought": 36,
            "warranty": 0,
            "rating": 1,
            "rating_averaged": 3,
            "brand": {
                "id": 6,
                "name": "Nolan-Mohr",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 94,
                "name": "Beier-Gorczany",
                "image": null,
                "desc": null,
                "parent_id": 7,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/popular-product?page=1",
        "last": "http:\/\/localhost\/api\/popular-product?page=6",
        "prev": null,
        "next": "http:\/\/localhost\/api\/popular-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 6,
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
                "url": "http:\/\/localhost\/api\/popular-product?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/popular-product?page=6",
                "label": "6",
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
        "total": 60
    }
}
```

### HTTP Request
`GET api/popular-product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `limit` |  optional  | Limit of the query. Example : 6

<!-- END_1df1aa72c0b2999caf24e34335e826a7 -->

<!-- START_ea23fa15ffa575a8ca6d3bd2a9cb792b -->
## Show products in parent category

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/product-by-parent-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 43,
            "name": "Mortimer Jacobs",
            "price": 1956136,
            "desc": "Vel molestias nihil corrupti rerum occaecati suscipit sunt. Magnam tenetur ut nisi facilis qui inventore. Voluptas sed sed dicta vel quis aspernatur rerum et.",
            "stock": 99,
            "bought": 3,
            "warranty": 9,
            "rating": 1,
            "rating_averaged": 0,
            "brand": {
                "id": 8,
                "name": "Paucek PLC",
                "image": null,
                "desc": null,
                "created_at": "2021-04-04T11:31:10.000000Z",
                "updated_at": "2021-04-04T11:31:10.000000Z"
            },
            "category": {
                "id": 25,
                "name": "Green-Bergnaum",
                "image": null,
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-03-26T13:40:35.000000Z",
                "updated_at": "2021-03-26T13:40:35.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
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
        "to": 2,
        "total": 2
    }
}
```

### HTTP Request
`GET api/product-by-parent-category/{id}`


<!-- END_ea23fa15ffa575a8ca6d3bd2a9cb792b -->

<!-- START_ae03d88973d288010a9b74619812d3db -->
## Show products in sub category

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/product-by-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/product-by-category/{id}`


<!-- END_ae03d88973d288010a9b74619812d3db -->

<!-- START_29a4ca6b78fb58cb87f46855903df7f0 -->
## api/search-product
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/search-product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/search-product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Lavina Lynch",
            "price": 9286366,
            "desc": "Asperiores omnis mollitia ut omnis aut non. Suscipit exercitationem velit dolorem fugiat est sequi. Et ipsa harum itaque sunt.",
            "stock": 36,
            "bought": 8,
            "warranty": 17,
            "rating": 2,
            "rating_averaged": 3,
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
            "rating": 3,
            "rating_averaged": 0.5,
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
            "rating": 2,
            "rating_averaged": 3.5,
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
            "rating": 2,
            "rating_averaged": 1.5,
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
            "rating": 4,
            "rating_averaged": 3,
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
            "rating": 4,
            "rating_averaged": 1.5,
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
            "id": 12,
            "name": "Dr. Kathleen Mraz",
            "price": 5498348,
            "desc": "Enim itaque excepturi est quo nostrum. Neque earum nihil sit esse quo qui. Alias velit beatae quae. Commodi laboriosam est labore culpa nostrum vitae ea.",
            "stock": 75,
            "bought": 25,
            "warranty": 12,
            "rating": 6,
            "rating_averaged": 4,
            "brand": {
                "id": 3,
                "name": "Gislason, Johnson and Pouros",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Klein Ltd",
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
            "id": 13,
            "name": "Arlene Langosh I",
            "price": 1179871,
            "desc": "Necessitatibus suscipit adipisci laudantium ipsa voluptas animi cum aut. Necessitatibus possimus veniam qui. Ipsa ea accusantium cum accusantium.",
            "stock": 76,
            "bought": 40,
            "warranty": 10,
            "rating": 2,
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
            "id": 14,
            "name": "Mr. Luigi Koepp DVM",
            "price": 2079754,
            "desc": "Deserunt exercitationem quo facilis quia. Eius animi quidem officia enim incidunt non. Maiores eum vel quasi delectus pariatur. Quo aut rerum aliquid cum ea ducimus consequuntur.",
            "stock": 56,
            "bought": 3,
            "warranty": 22,
            "rating": 4,
            "rating_averaged": 4,
            "brand": {
                "id": 4,
                "name": "Carroll, Reichert and Bauch",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Kuhlman LLC",
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
            "id": 15,
            "name": "Nellie Willms",
            "price": 240474,
            "desc": "Et inventore nihil repellat dolores quisquam et. Corporis qui delectus architecto saepe rerum pariatur dolores. Itaque nesciunt magni qui ullam quam perferendis.",
            "stock": 23,
            "bought": 7,
            "warranty": 21,
            "rating": 1,
            "rating_averaged": 3,
            "brand": {
                "id": 1,
                "name": "Ratke, Bernhard and Schaefer",
                "image": null,
                "desc": null,
                "created_at": "2021-03-26T13:40:34.000000Z",
                "updated_at": "2021-03-26T13:40:34.000000Z"
            },
            "category": {
                "id": 49,
                "name": "Krajcik-Williamson",
                "image": null,
                "desc": null,
                "parent_id": 10,
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
        "first": "http:\/\/localhost\/api\/search-product?page=1",
        "last": "http:\/\/localhost\/api\/search-product?page=4",
        "prev": null,
        "next": "http:\/\/localhost\/api\/search-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 4,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/search-product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/search-product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/search-product?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/search-product?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/search-product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/search-product",
        "per_page": 15,
        "to": 15,
        "total": 60
    }
}
```

### HTTP Request
`GET api/search-product`


<!-- END_29a4ca6b78fb58cb87f46855903df7f0 -->

#Rating


APIs for rating
<!-- START_e2cf52df507d02a2867a78c3c1dd77b5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 51,
            "rating": 4,
            "comment": "Possimus ratione odio dolorem et voluptatem labore aut.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 52,
            "rating": 1,
            "comment": "Aliquid rerum doloremque quasi eveniet repellendus cum aut.",
            "user": {
                "id": 20,
                "name": "Archibald Torp",
                "email": "runolfsdottir.garland@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7511885508922",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 53,
            "rating": 5,
            "comment": "Quod in fuga incidunt et porro.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 54,
            "rating": 5,
            "comment": "Deserunt alias quos sit neque non voluptas autem.",
            "user": {
                "id": 12,
                "name": "Rogelio Walker",
                "email": "reid.wehner@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+2670431824535",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 55,
            "rating": 5,
            "comment": "Veniam magni ducimus consequatur voluptate voluptatem et temporibus.",
            "user": {
                "id": 12,
                "name": "Rogelio Walker",
                "email": "reid.wehner@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+2670431824535",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 56,
            "rating": 0,
            "comment": "Sit quaerat cum illo sed dolor voluptatem ea.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 57,
            "rating": 1,
            "comment": "Incidunt odit laudantium fuga magni sint aut.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 58,
            "rating": 1,
            "comment": "Non excepturi quis odio quam mollitia dolor.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 59,
            "rating": 0,
            "comment": "Consequatur doloribus iure suscipit.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 60,
            "rating": 3,
            "comment": "Eligendi ut adipisci eius quisquam.",
            "user": {
                "id": 19,
                "name": "Prof. Logan Fadel",
                "email": "hermann.fatima@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7410614869521",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 61,
            "rating": 1,
            "comment": "Et iure repellendus rerum nihil.",
            "user": {
                "id": 16,
                "name": "Prof. Myrna Jaskolski Sr.",
                "email": "garrison23@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+4487080058455",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 62,
            "rating": 4,
            "comment": "Molestiae et est ex.",
            "user": {
                "id": 18,
                "name": "Dr. Derick Rogahn",
                "email": "gaston.stehr@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+1814439697484",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 63,
            "rating": 3,
            "comment": "Et tempora accusantium recusandae.",
            "user": {
                "id": 12,
                "name": "Rogelio Walker",
                "email": "reid.wehner@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+2670431824535",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 64,
            "rating": 0,
            "comment": "Est totam ut dolor et.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 65,
            "rating": 4,
            "comment": "Non nihil blanditiis excepturi dignissimos est qui.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 66,
            "rating": 2,
            "comment": "Et quam aut sunt ut est dolorum.",
            "user": {
                "id": 20,
                "name": "Archibald Torp",
                "email": "runolfsdottir.garland@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7511885508922",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 67,
            "rating": 0,
            "comment": "Ipsa pariatur repellendus omnis et minus architecto quidem numquam.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 68,
            "rating": 4,
            "comment": "Repudiandae occaecati fugit tempora sequi voluptatem minus.",
            "user": {
                "id": 14,
                "name": "Jerome Graham",
                "email": "mrosenbaum@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+8625205762236",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 69,
            "rating": 4,
            "comment": "Nostrum pariatur porro laudantium dolores distinctio.",
            "user": {
                "id": 20,
                "name": "Archibald Torp",
                "email": "runolfsdottir.garland@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7511885508922",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 70,
            "rating": 4,
            "comment": "Ut nostrum itaque eos ut quia.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 71,
            "rating": 3,
            "comment": "Blanditiis in eum rerum possimus quisquam commodi.",
            "user": {
                "id": 11,
                "name": "Dai123",
                "email": "fdai3105@gmail.com",
                "email_verified_at": "2021-03-26T13:42:06.000000Z",
                "phone": "123",
                "gender": 1,
                "avatar": "upload\\Dai123_IMG_20200131_012124.jpg",
                "level": 1,
                "created_at": "2021-03-26T13:41:17.000000Z",
                "updated_at": "2021-04-01T07:02:39.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 72,
            "rating": 5,
            "comment": "Quia voluptas eaque facilis sequi.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 73,
            "rating": 2,
            "comment": "Quia molestiae omnis inventore ratione.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 74,
            "rating": 2,
            "comment": "Eaque sit exercitationem delectus.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 75,
            "rating": 4,
            "comment": "Autem natus inventore rem mollitia iusto corporis expedita.",
            "user": {
                "id": 19,
                "name": "Prof. Logan Fadel",
                "email": "hermann.fatima@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7410614869521",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 76,
            "rating": 3,
            "comment": "Nobis eos molestiae ullam.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 77,
            "rating": 4,
            "comment": "Placeat voluptatibus iure sit eveniet voluptate illum quo.",
            "user": {
                "id": 20,
                "name": "Archibald Torp",
                "email": "runolfsdottir.garland@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7511885508922",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 78,
            "rating": 1,
            "comment": "Voluptas recusandae quia perspiciatis occaecati natus tempora maiores asperiores.",
            "user": {
                "id": 17,
                "name": "Alf Morissette",
                "email": "heaney.ilene@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+9839311969889",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 79,
            "rating": 2,
            "comment": "Sunt et culpa consequatur magni.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 80,
            "rating": 0,
            "comment": "Dolorem aut reprehenderit ratione aut.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 81,
            "rating": 4,
            "comment": "Ut voluptate asperiores dolorem itaque.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 82,
            "rating": 3,
            "comment": "Rem nihil amet excepturi qui recusandae.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 83,
            "rating": 2,
            "comment": "Possimus dolores dolor animi dolore fugiat repellendus magnam.",
            "user": {
                "id": 11,
                "name": "Dai123",
                "email": "fdai3105@gmail.com",
                "email_verified_at": "2021-03-26T13:42:06.000000Z",
                "phone": "123",
                "gender": 1,
                "avatar": "upload\\Dai123_IMG_20200131_012124.jpg",
                "level": 1,
                "created_at": "2021-03-26T13:41:17.000000Z",
                "updated_at": "2021-04-01T07:02:39.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 84,
            "rating": 3,
            "comment": "Aut voluptatem nesciunt officiis sit quam veniam eum.",
            "user": {
                "id": 17,
                "name": "Alf Morissette",
                "email": "heaney.ilene@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+9839311969889",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 85,
            "rating": 1,
            "comment": "Et est sed quisquam laudantium soluta.",
            "user": {
                "id": 14,
                "name": "Jerome Graham",
                "email": "mrosenbaum@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+8625205762236",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 86,
            "rating": 4,
            "comment": "Fugit quis in dolor id.",
            "user": {
                "id": 19,
                "name": "Prof. Logan Fadel",
                "email": "hermann.fatima@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7410614869521",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 87,
            "rating": 2,
            "comment": "Ex non corporis adipisci aliquid.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 88,
            "rating": 3,
            "comment": "Consequatur non harum illum et.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 89,
            "rating": 1,
            "comment": "Adipisci dolores hic eaque.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 90,
            "rating": 5,
            "comment": "Nihil dolor dolore iusto voluptatem qui aut at.",
            "user": {
                "id": 20,
                "name": "Archibald Torp",
                "email": "runolfsdottir.garland@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7511885508922",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 91,
            "rating": 5,
            "comment": "Repellat quas fuga accusantium tempora enim molestiae deleniti.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 92,
            "rating": 0,
            "comment": "Aperiam debitis et aut est animi.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 93,
            "rating": 5,
            "comment": "Totam ut exercitationem pariatur dolorum officiis sint officia.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 94,
            "rating": 0,
            "comment": "Dolorem ea totam expedita est ea.",
            "user": {
                "id": 13,
                "name": "Wallace Gerhold V",
                "email": "qromaguera@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+8492905228059",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 95,
            "rating": 0,
            "comment": "Ad vero ab placeat qui consequuntur molestiae et.",
            "user": {
                "id": 16,
                "name": "Prof. Myrna Jaskolski Sr.",
                "email": "garrison23@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+4487080058455",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 96,
            "rating": 0,
            "comment": "Voluptas quas quidem est neque iusto.",
            "user": {
                "id": 11,
                "name": "Dai123",
                "email": "fdai3105@gmail.com",
                "email_verified_at": "2021-03-26T13:42:06.000000Z",
                "phone": "123",
                "gender": 1,
                "avatar": "upload\\Dai123_IMG_20200131_012124.jpg",
                "level": 1,
                "created_at": "2021-03-26T13:41:17.000000Z",
                "updated_at": "2021-04-01T07:02:39.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 97,
            "rating": 3,
            "comment": "Ut alias consectetur dolor aspernatur quisquam excepturi.",
            "user": {
                "id": 19,
                "name": "Prof. Logan Fadel",
                "email": "hermann.fatima@example.net",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+7410614869521",
                "gender": 2,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 98,
            "rating": 0,
            "comment": "Provident atque molestias accusantium corrupti.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 99,
            "rating": 2,
            "comment": "Dolorem assumenda iusto in in nihil deserunt temporibus quasi.",
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
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        },
        {
            "id": 100,
            "rating": 3,
            "comment": "Tempora illo beatae autem quas in.",
            "user": {
                "id": 14,
                "name": "Jerome Graham",
                "email": "mrosenbaum@example.com",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+8625205762236",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/rating`


<!-- END_e2cf52df507d02a2867a78c3c1dd77b5 -->

<!-- START_d44382a67dad858edca95bf02a4642fb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/rating/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
}
```

### HTTP Request
`GET api/rating/{rating}`


<!-- END_d44382a67dad858edca95bf02a4642fb -->

<!-- START_c54775bdd8bb93942b3e4d1e4a0a0dd3 -->
## Display ratings by product id

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/rating-by-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 61,
            "rating": 1,
            "comment": "Et iure repellendus rerum nihil.",
            "user": {
                "id": 16,
                "name": "Prof. Myrna Jaskolski Sr.",
                "email": "garrison23@example.org",
                "email_verified_at": "2021-04-04T11:31:11.000000Z",
                "phone": "+4487080058455",
                "gender": 1,
                "avatar": null,
                "level": 0,
                "created_at": "2021-04-04T11:31:11.000000Z",
                "updated_at": "2021-04-04T11:31:11.000000Z"
            },
            "created_at": "2021-04-04T11:31:12.000000Z",
            "updated_at": "2021-04-04T11:31:12.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/rating-by-product/{product_id}`


<!-- END_c54775bdd8bb93942b3e4d1e4a0a0dd3 -->

#general


<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get ordered

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_d4be91a3a8d5235a2d282e7158c2bdb6 -->
## Checkout

> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/checkout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/checkout`


<!-- END_d4be91a3a8d5235a2d282e7158c2bdb6 -->

<!-- START_f1c003f354e5a35c6d35b6c7e0ad365d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/parent-category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 11,
            "name": "Fadel Inc",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:10.000000Z",
            "updated_at": "2021-04-04T11:31:10.000000Z"
        },
        {
            "id": 12,
            "name": "Barton, Zboncak and Ritchie",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 13,
            "name": "McLaughlin-Grady",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 14,
            "name": "Jaskolski, Volkman and Hermiston",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 15,
            "name": "Boyle-Block",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 16,
            "name": "Gislason-Bergnaum",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 17,
            "name": "Bradtke-Howe",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 18,
            "name": "Runolfsdottir-Abernathy",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 19,
            "name": "Vandervort LLC",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        },
        {
            "id": 20,
            "name": "Gleichner, Littel and Collins",
            "image": null,
            "desc": null,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/parent-category`


<!-- END_f1c003f354e5a35c6d35b6c7e0ad365d -->

<!-- START_6745be727df30614b14000051ee0581e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/get-sub-category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
        },
        {
            "id": 59,
            "name": "Ernser PLC",
            "image": null,
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-04T11:31:11.000000Z",
            "updated_at": "2021-04-04T11:31:11.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/get-sub-category/{parentId}`


<!-- END_6745be727df30614b14000051ee0581e -->


