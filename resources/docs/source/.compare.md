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
    -d '{"name":"quae","email":"minima","password":"inventore","phone":"et","gender":7}'

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
    "name": "quae",
    "email": "minima",
    "password": "inventore",
    "phone": "et",
    "gender": 7
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

<!-- START_aee55f54a12b06f3e84affb7f14385d5 -->
## api/has-verified-email
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/has-verified-email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/has-verified-email"
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
`GET api/has-verified-email`


<!-- END_aee55f54a12b06f3e84affb7f14385d5 -->

<!-- START_9d5818cc3d5d708d3337888afd19c116 -->
## api/resend-email
> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/resend-email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/resend-email"
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
`POST api/resend-email`


<!-- END_9d5818cc3d5d708d3337888afd19c116 -->

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
            "name": "IKEA",
            "image": null,
            "desc": null,
            "created_at": "2021-04-19T13:27:25.000000Z",
            "updated_at": "2021-04-19T13:27:25.000000Z"
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
        "name": "IKEA",
        "image": null,
        "desc": null,
        "created_at": "2021-04-19T13:27:25.000000Z",
        "updated_at": "2021-04-19T13:27:25.000000Z"
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
            "name": "Full, Queen and King size platform beds",
            "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:53:58.000000Z",
            "updated_at": "2021-04-18T06:53:58.000000Z"
        },
        {
            "id": 2,
            "name": "Twin beds",
            "image": "upload\\Twin beds_single-beds_16285.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:58:35.000000Z",
            "updated_at": "2021-04-18T06:58:35.000000Z"
        },
        {
            "id": 3,
            "name": "Beds with storage",
            "image": "upload\\Beds with storage_beds-with-storage_25205.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:58:56.000000Z",
            "updated_at": "2021-04-18T06:58:56.000000Z"
        },
        {
            "id": 4,
            "name": "Upholstered beds",
            "image": "upload\\Upholstered beds_upholstered-beds_49096.jpg",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:10.000000Z",
            "updated_at": "2021-04-18T06:59:10.000000Z"
        },
        {
            "id": 5,
            "name": "Guest beds & daybeds",
            "image": "upload\\Guest beds & daybeds_guest-beds-and-day-beds_19037.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:23.000000Z",
            "updated_at": "2021-04-18T06:59:23.000000Z"
        },
        {
            "id": 6,
            "name": "Kids' loft beds & bunk beds",
            "image": "upload\\Kids' loft beds & bunk beds_left-beds-and-bunk-beds_19039.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:34.000000Z",
            "updated_at": "2021-04-18T06:59:34.000000Z"
        },
        {
            "id": 7,
            "name": "Kids beds",
            "image": "upload\\Kids beds_childrens-beds_18723-us.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:43.000000Z",
            "updated_at": "2021-04-18T06:59:43.000000Z"
        },
        {
            "id": 8,
            "name": "Cribs",
            "image": "upload\\Cribs_cots_45781.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:03.000000Z",
            "updated_at": "2021-04-18T07:00:03.000000Z"
        },
        {
            "id": 9,
            "name": "Divan beds",
            "image": "upload\\Divan beds_divan-beds_28433.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:12.000000Z",
            "updated_at": "2021-04-18T07:00:12.000000Z"
        },
        {
            "id": 10,
            "name": "Headboards",
            "image": "upload\\Headboards_headboards_19064.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:20.000000Z",
            "updated_at": "2021-04-18T07:00:20.000000Z"
        },
        {
            "id": 11,
            "name": "Bed legs",
            "image": "upload\\Bed legs_bed-legs_24822.jpg",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:30.000000Z",
            "updated_at": "2021-04-18T07:00:30.000000Z"
        },
        {
            "id": 12,
            "name": "Sleeper sofas",
            "image": "upload\\Sleeper sofas_sofa-beds_10663.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:43.000000Z",
            "updated_at": "2021-04-18T07:00:43.000000Z"
        },
        {
            "id": 13,
            "name": "Coated fabric armchairs",
            "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:04:13.000000Z",
            "updated_at": "2021-04-18T07:04:13.000000Z"
        },
        {
            "id": 14,
            "name": "Lounge chairs",
            "image": "upload\\Lounge chairs_lounge-chairs_53257.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:04:23.000000Z",
            "updated_at": "2021-04-18T07:04:23.000000Z"
        },
        {
            "id": 15,
            "name": "Ottomans",
            "image": "upload\\Ottomans_Category_Footstools-and-pouffes.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:04:37.000000Z",
            "updated_at": "2021-04-18T07:04:37.000000Z"
        },
        {
            "id": 16,
            "name": "Coated fabric chaise lounges",
            "image": "upload\\Coated fabric chaise lounges_coated-fabric-chaise-longues_35196.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:04:47.000000Z",
            "updated_at": "2021-04-18T07:08:14.000000Z"
        },
        {
            "id": 17,
            "name": "Sofa & armchairs covers",
            "image": "upload\\Sofa & armchairs covers_Category_extra-covers.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:05:22.000000Z",
            "updated_at": "2021-04-18T07:05:22.000000Z"
        },
        {
            "id": 18,
            "name": "Fabric armchairs",
            "image": "upload\\Fabric armchairs_fabric-armchairs_10687.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:05:33.000000Z",
            "updated_at": "2021-04-18T07:05:33.000000Z"
        },
        {
            "id": 19,
            "name": "Fabric chaise lounges",
            "image": "upload\\Fabric chaise lounges_fabric-chaise-longues_10679.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:06.000000Z",
            "updated_at": "2021-04-18T07:06:06.000000Z"
        },
        {
            "id": 20,
            "name": "Leather\/coated fabric armchairs",
            "image": "upload\\coated fabric armchairs_Leather-coated-fabric-armchairs_35184.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:21.000000Z",
            "updated_at": "2021-04-18T07:06:21.000000Z"
        },
        {
            "id": 21,
            "name": "Rattan armchairs",
            "image": "upload\\Rattan armchairs_rattan-armchairs_20907.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:30.000000Z",
            "updated_at": "2021-04-18T07:06:30.000000Z"
        },
        {
            "id": 22,
            "name": "Reclining chairs",
            "image": "upload\\Reclining chairs_recliners_47359.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:42.000000Z",
            "updated_at": "2021-04-18T07:06:42.000000Z"
        },
        {
            "id": 23,
            "name": "Leather armchairs",
            "image": "upload\\Leather armchairs_Leather-armchairs_10696.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:50.000000Z",
            "updated_at": "2021-04-18T07:06:50.000000Z"
        },
        {
            "id": 24,
            "name": "Chair beds",
            "image": "upload\\Chair beds_Chair-beds_16296.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:06:58.000000Z",
            "updated_at": "2021-04-18T07:06:58.000000Z"
        },
        {
            "id": 25,
            "name": "Sofa legs",
            "image": "upload\\Sofa legs_Category_extra-legs.jpg",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:07:49.000000Z",
            "updated_at": "2021-04-18T07:07:50.000000Z"
        },
        {
            "id": 26,
            "name": "Kids armchairs",
            "image": "upload\\Kids armchairs_childrens-armchairs_20483.webp",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:07:57.000000Z",
            "updated_at": "2021-04-18T07:07:57.000000Z"
        },
        {
            "id": 27,
            "name": "Leather\/coated fabric chaises",
            "image": "upload\\coated fabric chaises_leather-coated-fabric-chaise-longues_10694.jpg",
            "desc": null,
            "parent_id": 2,
            "created_at": "2021-04-18T07:08:04.000000Z",
            "updated_at": "2021-04-18T07:08:04.000000Z"
        },
        {
            "id": 28,
            "name": "Fabric sofas",
            "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:10:33.000000Z",
            "updated_at": "2021-04-18T07:10:33.000000Z"
        },
        {
            "id": 29,
            "name": "Leather & coated fabric sofas",
            "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:10:48.000000Z",
            "updated_at": "2021-04-18T07:10:48.000000Z"
        },
        {
            "id": 30,
            "name": "Sectionals",
            "image": "upload\\Sectionals_Category_modular-sofas.jpg",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:11:06.000000Z",
            "updated_at": "2021-04-18T07:11:06.000000Z"
        },
        {
            "id": 31,
            "name": "Ottomans",
            "image": "upload\\Ottomans_Category_Footstools-and-pouffes.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:11:15.000000Z",
            "updated_at": "2021-04-18T07:11:15.000000Z"
        },
        {
            "id": 32,
            "name": "Sofa & armchairs covers",
            "image": "upload\\Sofa & armchairs covers_Category_extra-covers.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:11:28.000000Z",
            "updated_at": "2021-04-18T07:11:28.000000Z"
        },
        {
            "id": 33,
            "name": "Sofa legs",
            "image": "upload\\Sofa legs_Category_extra-legs.jpg",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:11:36.000000Z",
            "updated_at": "2021-04-18T07:11:36.000000Z"
        },
        {
            "id": 34,
            "name": "Sofa accessories",
            "image": "upload\\Sofa accessories_Category_sofa-accessories.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:11:56.000000Z",
            "updated_at": "2021-04-18T07:11:56.000000Z"
        },
        {
            "id": 35,
            "name": "Sleeper sofas",
            "image": "upload\\Sleeper sofas_sofa-beds_10663.webp",
            "desc": null,
            "parent_id": 3,
            "created_at": "2021-04-18T07:12:05.000000Z",
            "updated_at": "2021-04-18T07:12:05.000000Z"
        },
        {
            "id": 36,
            "name": "Wardrobe shelving",
            "image": "upload\\Wardrobe shelving_wardrobe-shelving_49079.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T07:15:18.000000Z",
            "updated_at": "2021-04-18T07:15:18.000000Z"
        },
        {
            "id": 37,
            "name": "Hallway wardrobes",
            "image": "upload\\Hallway wardrobes_hallway-wardrobes_48007-us.jpg",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:17:56.000000Z",
            "updated_at": "2021-04-18T08:17:56.000000Z"
        },
        {
            "id": 38,
            "name": "Sliding wardrobes",
            "image": "upload\\Sliding wardrobes_Category_wardrobe-250-cm-or-wider.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:18:38.000000Z",
            "updated_at": "2021-04-18T08:18:38.000000Z"
        },
        {
            "id": 39,
            "name": "Hinged wardrobes",
            "image": "upload\\Hinged wardrobes_hinged-wardrobes_48005.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:19:36.000000Z",
            "updated_at": "2021-04-18T08:19:36.000000Z"
        },
        {
            "id": 40,
            "name": "Corner wardrobes",
            "image": "upload\\Corner wardrobes_Category_corner-wardrobes.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:19:47.000000Z",
            "updated_at": "2021-04-18T08:19:47.000000Z"
        },
        {
            "id": 41,
            "name": "Mirrored wardrobes",
            "image": "upload\\Mirrored wardrobes_mirrored-wardrobes_48006.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:19:58.000000Z",
            "updated_at": "2021-04-18T08:19:58.000000Z"
        },
        {
            "id": 42,
            "name": "Children's wardrobes",
            "image": "upload\\Children's wardrobes_childrens-wardrobes_18707.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:20:36.000000Z",
            "updated_at": "2021-04-18T08:20:37.000000Z"
        },
        {
            "id": 43,
            "name": "Fitted wardrobes",
            "image": "upload\\Fitted wardrobes_Category_wardrobe-width-100-149-cm.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:20:45.000000Z",
            "updated_at": "2021-04-18T08:20:45.000000Z"
        },
        {
            "id": 44,
            "name": "Walk in wardrobes",
            "image": "upload\\Walk in wardrobes_Category_wardrobe-width-150-199-cm.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:20:54.000000Z",
            "updated_at": "2021-04-18T08:20:54.000000Z"
        },
        {
            "id": 45,
            "name": "Open wardrobes",
            "image": "upload\\Open wardrobes_Category_wardrobe-width-200-249-cm.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:21:02.000000Z",
            "updated_at": "2021-04-18T08:21:03.000000Z"
        },
        {
            "id": 46,
            "name": "Solitaire wardrobes",
            "image": "upload\\Solitaire wardrobes_Category_wardrobe-width-50-99-cm.webp",
            "desc": null,
            "parent_id": 4,
            "created_at": "2021-04-18T08:21:10.000000Z",
            "updated_at": "2021-04-18T08:21:10.000000Z"
        },
        {
            "id": 47,
            "name": "Table & desk systems",
            "image": "upload\\Table & desk systems_table-desk-systems_47423.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:25:03.000000Z",
            "updated_at": "2021-04-18T08:25:03.000000Z"
        },
        {
            "id": 48,
            "name": "Café tables",
            "image": "upload\\Café tables_Category_cafe-tables.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:25:23.000000Z",
            "updated_at": "2021-04-18T08:25:24.000000Z"
        },
        {
            "id": 49,
            "name": "Bar tables",
            "image": "upload\\Bar tables_Category_bar-tables.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:25:49.000000Z",
            "updated_at": "2021-04-18T08:25:49.000000Z"
        },
        {
            "id": 50,
            "name": "Dining tables",
            "image": "upload\\Dining tables_Category_tables-and-desks.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:26:04.000000Z",
            "updated_at": "2021-04-18T08:26:04.000000Z"
        },
        {
            "id": 51,
            "name": "Desks & computer desks",
            "image": "upload\\Desks & computer desks_Category_desks-and-computer-desks.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:26:17.000000Z",
            "updated_at": "2021-04-18T08:26:17.000000Z"
        },
        {
            "id": 52,
            "name": "Nightstands",
            "image": "upload\\Nightstands_bedside-tables_20656-us.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:26:29.000000Z",
            "updated_at": "2021-04-18T08:26:29.000000Z"
        },
        {
            "id": 53,
            "name": "Coffee & side tables",
            "image": "upload\\Coffee & side tables_coffee-side-tables_10705.jpg",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:28:13.000000Z",
            "updated_at": "2021-04-18T08:28:13.000000Z"
        },
        {
            "id": 54,
            "name": "Sofa tables",
            "image": "upload\\Sofa tables_console-tables_16246.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:29:10.000000Z",
            "updated_at": "2021-04-18T08:29:10.000000Z"
        },
        {
            "id": 55,
            "name": "Dressing tables",
            "image": "upload\\Dressing tables_dressing-tables_20657.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:29:21.000000Z",
            "updated_at": "2021-04-18T08:29:21.000000Z"
        },
        {
            "id": 56,
            "name": "Kids tables",
            "image": "upload\\Kids tables_childrens-tables_18768.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:29:34.000000Z",
            "updated_at": "2021-04-18T08:29:34.000000Z"
        },
        {
            "id": 57,
            "name": "Dining sets",
            "image": "upload\\Dining sets_Category_dining-sets.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:29:45.000000Z",
            "updated_at": "2021-04-18T08:29:45.000000Z"
        },
        {
            "id": 58,
            "name": "Changing tables",
            "image": "upload\\Changing tables_changing-tables_45783.webp",
            "desc": null,
            "parent_id": 5,
            "created_at": "2021-04-18T08:29:58.000000Z",
            "updated_at": "2021-04-18T08:29:58.000000Z"
        },
        {
            "id": 59,
            "name": "BEKANT conference & meeting tables",
            "image": "upload\\BEKANT conference & meeting tables_meeting-conference-tables_54173.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T08:30:23.000000Z",
            "updated_at": "2021-04-18T08:30:23.000000Z"
        },
        {
            "id": 60,
            "name": "Dining chairs",
            "image": "upload\\Dining chairs_Category_chairs.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:33:15.000000Z",
            "updated_at": "2021-04-18T08:33:15.000000Z"
        },
        {
            "id": 61,
            "name": "Bar stools & chairs",
            "image": "upload\\Bar stools & chairs_Category_bar-chairs.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:33:26.000000Z",
            "updated_at": "2021-04-18T08:33:26.000000Z"
        },
        {
            "id": 62,
            "name": "Armchairs & chaises",
            "image": "upload\\Armchairs & chaises_armchairs-and-chaise-longues_fu006.jpg",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:33:35.000000Z",
            "updated_at": "2021-04-18T08:33:35.000000Z"
        },
        {
            "id": 63,
            "name": "Café chairs",
            "image": "upload\\Café chairs_Category_cafe-chairs.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:33:44.000000Z",
            "updated_at": "2021-04-18T08:33:44.000000Z"
        },
        {
            "id": 64,
            "name": "Desk chairs",
            "image": "upload\\Desk chairs_Category_desk-chairs.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:33:57.000000Z",
            "updated_at": "2021-04-18T08:33:57.000000Z"
        },
        {
            "id": 65,
            "name": "Chair pads",
            "image": "upload\\Chair pads_Category_chair-pads.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:34:13.000000Z",
            "updated_at": "2021-04-18T08:34:13.000000Z"
        },
        {
            "id": 66,
            "name": "Stools & benches",
            "image": "upload\\Stools & benches_Category_stools-and-benches.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:36:01.000000Z",
            "updated_at": "2021-04-18T08:36:01.000000Z"
        },
        {
            "id": 67,
            "name": "High chairs",
            "image": "upload\\High chairs_baby-chairs-highchairs_45782.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:36:10.000000Z",
            "updated_at": "2021-04-18T08:36:10.000000Z"
        },
        {
            "id": 68,
            "name": "Dining sets",
            "image": "upload\\Dining sets_Category_dining-sets.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:36:17.000000Z",
            "updated_at": "2021-04-18T08:36:17.000000Z"
        },
        {
            "id": 69,
            "name": "Children's chairs",
            "image": "upload\\Children's chairs_Category_childrens-8-to-12.webp",
            "desc": null,
            "parent_id": 6,
            "created_at": "2021-04-18T08:36:29.000000Z",
            "updated_at": "2021-04-18T08:36:29.000000Z"
        },
        {
            "id": 70,
            "name": "TV benches",
            "image": null,
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-04-18T08:38:23.000000Z",
            "updated_at": "2021-04-18T08:38:23.000000Z"
        },
        {
            "id": 71,
            "name": "TV & media storage",
            "image": "upload\\TV & media storage_tv-benches_10810.webp",
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-04-18T08:38:36.000000Z",
            "updated_at": "2021-04-18T08:38:36.000000Z"
        },
        {
            "id": 72,
            "name": "Bookcases",
            "image": "upload\\Bookcases_Category_bookcases.webp",
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-18T08:40:32.000000Z",
            "updated_at": "2021-04-18T08:40:33.000000Z"
        },
        {
            "id": 73,
            "name": "Shelf units",
            "image": "upload\\Shelf units_Category_shelving-units.webp",
            "desc": null,
            "parent_id": 7,
            "created_at": "2021-04-18T08:40:41.000000Z",
            "updated_at": "2021-04-18T08:40:41.000000Z"
        },
        {
            "id": 74,
            "name": "Kitchen pantry storage",
            "image": "upload\\Kitchen pantry storage_Category_storage-systems-and-units.webp",
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-18T08:40:51.000000Z",
            "updated_at": "2021-04-18T08:40:51.000000Z"
        },
        {
            "id": 75,
            "name": "Storage shelves & units",
            "image": "upload\\Storage shelves & units_pantry_16200-us.webp",
            "desc": null,
            "parent_id": 8,
            "created_at": "2021-04-18T08:41:05.000000Z",
            "updated_at": "2021-04-18T08:41:05.000000Z"
        },
        {
            "id": 76,
            "name": "Chests of drawers",
            "image": "upload\\Chests of drawers_chests-of-drawers_10451.webp",
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-18T08:42:55.000000Z",
            "updated_at": "2021-04-18T08:42:55.000000Z"
        },
        {
            "id": 77,
            "name": "Children's dressers and chests",
            "image": "upload\\Children's dressers and chests_childrens-chests-of-drawers_18708.webp",
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-18T08:43:10.000000Z",
            "updated_at": "2021-04-18T08:43:10.000000Z"
        },
        {
            "id": 78,
            "name": "Drawer units",
            "image": "upload\\Drawer units_drawer-units_10711.webp",
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-18T08:43:28.000000Z",
            "updated_at": "2021-04-18T08:43:28.000000Z"
        },
        {
            "id": 79,
            "name": "Basket drawer units",
            "image": "upload\\Basket drawer units_basket-drawer-units_46081.webp",
            "desc": null,
            "parent_id": 9,
            "created_at": "2021-04-18T08:43:41.000000Z",
            "updated_at": "2021-04-18T08:43:41.000000Z"
        },
        {
            "id": 80,
            "name": "Living room storage system",
            "image": "upload\\Living room storage system_Category_living-room-storage-system.jpg",
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-18T08:45:09.000000Z",
            "updated_at": "2021-04-18T08:45:09.000000Z"
        },
        {
            "id": 81,
            "name": "Cabinets",
            "image": "upload\\Cabinets_cabinets_10409.webp",
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-18T08:45:43.000000Z",
            "updated_at": "2021-04-18T08:47:21.000000Z"
        },
        {
            "id": 82,
            "name": "Display cabinets",
            "image": "upload\\Display cabinets_cabinets_10409.webp",
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-18T08:45:58.000000Z",
            "updated_at": "2021-04-18T08:45:58.000000Z"
        },
        {
            "id": 83,
            "name": "Sideboards & buffets",
            "image": "upload\\Sideboards & buffets_Category_sideboards-and-buffets.webp",
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-18T08:46:30.000000Z",
            "updated_at": "2021-04-18T08:46:30.000000Z"
        },
        {
            "id": 84,
            "name": "Storage cabinets",
            "image": "upload\\Storage cabinets_Category_storage-cabinets.webp",
            "desc": null,
            "parent_id": 10,
            "created_at": "2021-04-18T08:48:10.000000Z",
            "updated_at": "2021-04-18T08:48:10.000000Z"
        },
        {
            "id": 85,
            "name": "Kitchen islands & carts",
            "image": "upload\\Kitchen islands & carts_kitchen-islands-and-trolleys_10471-us.webp",
            "desc": null,
            "parent_id": 11,
            "created_at": "2021-04-18T08:49:12.000000Z",
            "updated_at": "2021-04-18T08:49:12.000000Z"
        },
        {
            "id": 86,
            "name": "Bathroom Carts",
            "image": "upload\\Bathroom Carts_Category_bathroom-trolley.webp",
            "desc": null,
            "parent_id": 11,
            "created_at": "2021-04-18T08:49:24.000000Z",
            "updated_at": "2021-04-18T08:49:24.000000Z"
        },
        {
            "id": 87,
            "name": "Outdoor benches",
            "image": "upload\\Outdoor benches_outdoor-sofas_47386-us.jpg",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:00.000000Z",
            "updated_at": "2021-04-18T08:55:00.000000Z"
        },
        {
            "id": 88,
            "name": "Outdoor tables",
            "image": "upload\\Outdoor tables_outdoor-tables_700191.webp",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:10.000000Z",
            "updated_at": "2021-04-18T08:55:10.000000Z"
        },
        {
            "id": 89,
            "name": "Outdoor sectionals & sofas",
            "image": "upload\\Outdoor sectionals & sofas_outdoor-sofa-combinations_21960.webp",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:25.000000Z",
            "updated_at": "2021-04-18T08:55:25.000000Z"
        },
        {
            "id": 90,
            "name": "Outdoor dining sets",
            "image": "upload\\Outdoor dining sets_dining-sets_21967.webp",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:33.000000Z",
            "updated_at": "2021-04-18T08:55:33.000000Z"
        },
        {
            "id": 91,
            "name": "Outdoor sofa sections",
            "image": "upload\\Outdoor sofa sections_outdoor-sofa-sections_21961.webp",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:42.000000Z",
            "updated_at": "2021-04-18T08:55:43.000000Z"
        },
        {
            "id": 92,
            "name": "Outdoor chaises & hammocks",
            "image": "upload\\Outdoor chaises & hammocks_sun-loungers-and-hammocks_21963.webp",
            "desc": null,
            "parent_id": 12,
            "created_at": "2021-04-18T08:55:51.000000Z",
            "updated_at": "2021-04-18T08:55:51.000000Z"
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
        "name": "Full, Queen and King size platform beds",
        "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
        "desc": null,
        "parent_id": 1,
        "created_at": "2021-04-18T06:53:58.000000Z",
        "updated_at": "2021-04-18T06:53:58.000000Z"
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

<!-- START_97406a8e2f80b7a997aa0787acbc3d95 -->
## api/comment/{comment}
> Example request:

```bash
curl -X PUT \
    "http://127.0.0.1:8000/api/comment/1" \
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
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/comment/{comment}`

`PATCH api/comment/{comment}`


<!-- END_97406a8e2f80b7a997aa0787acbc3d95 -->

<!-- START_e95d187a13bd8100da98069f12b91cc4 -->
## api/comment/{comment}
> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/comment/1" \
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
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/comment/{comment}`


<!-- END_e95d187a13bd8100da98069f12b91cc4 -->

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
        "comment": "de",
        "user": {
            "id": 1,
            "name": "FiDai",
            "email": "fdai3105@gmail.com",
            "email_verified_at": "2021-04-18T06:47:42.000000Z",
            "phone": "0777230926",
            "gender": 1,
            "avatar": null,
            "level": 1,
            "created_at": "2021-04-18T06:46:59.000000Z",
            "updated_at": "2021-04-18T06:47:42.000000Z"
        },
        "created_at": "2021-04-24T12:14:32.000000Z",
        "updated_at": "2021-04-24T12:14:32.000000Z"
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
    "data": []
}
```

### HTTP Request
`GET api/comment-by-product/{product_id}`


<!-- END_ba21d63d662b79aca99bb9e603625f5b -->

#Parent Category


APIs for parent category
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
            "name": "Beds",
            "image": "upload\\Beds_beds_bm003-us.webp",
            "desc": null,
            "created_at": "2021-04-18T06:48:28.000000Z",
            "updated_at": "2021-04-18T06:48:28.000000Z"
        },
        {
            "id": 2,
            "name": "Armchairs & chaises",
            "image": "upload\\Armchairs & chaises_armchairs-and-chaise-longues_fu006.jpg",
            "desc": null,
            "created_at": "2021-04-18T06:48:42.000000Z",
            "updated_at": "2021-04-18T06:48:42.000000Z"
        },
        {
            "id": 3,
            "name": "Sofas & sectionals",
            "image": "upload\\Sofas & sectionals_Category_sofas-and-armchairs.jpg",
            "desc": null,
            "created_at": "2021-04-18T06:49:18.000000Z",
            "updated_at": "2021-04-18T06:49:18.000000Z"
        },
        {
            "id": 4,
            "name": "Armoires & wardrobes",
            "image": "upload\\Armoires & wardrobes_wardrobes_19053.webp",
            "desc": null,
            "created_at": "2021-04-18T06:49:32.000000Z",
            "updated_at": "2021-04-18T06:49:32.000000Z"
        },
        {
            "id": 5,
            "name": "Tables & desks",
            "image": "upload\\Tables & desks_Category_tables-and-desks.webp",
            "desc": null,
            "created_at": "2021-04-18T06:50:00.000000Z",
            "updated_at": "2021-04-18T06:50:00.000000Z"
        },
        {
            "id": 6,
            "name": "Chairs",
            "image": "upload\\Chairs_Category_chairs.webp",
            "desc": null,
            "created_at": "2021-04-18T06:50:14.000000Z",
            "updated_at": "2021-04-18T06:50:14.000000Z"
        },
        {
            "id": 7,
            "name": "TV & media furniture",
            "image": "upload\\TV & media furniture_Category_tv-and-media-storage.jpg",
            "desc": null,
            "created_at": "2021-04-18T06:50:28.000000Z",
            "updated_at": "2021-04-18T06:50:28.000000Z"
        },
        {
            "id": 8,
            "name": "Bookcases & shelving units",
            "image": "upload\\Bookcases & shelving units_bookcases-shelving-units_st002.webp",
            "desc": null,
            "created_at": "2021-04-18T06:50:37.000000Z",
            "updated_at": "2021-04-18T06:50:37.000000Z"
        },
        {
            "id": 9,
            "name": "Dressers & storage drawers",
            "image": "upload\\Dressers & storage drawers_dressers-storage-drawers_st004-us.webp",
            "desc": null,
            "created_at": "2021-04-18T06:50:46.000000Z",
            "updated_at": "2021-04-18T06:50:46.000000Z"
        },
        {
            "id": 10,
            "name": "Display & storage cabinets",
            "image": "upload\\Display & storage cabinets_Category_cabinets-and-cupboards.webp",
            "desc": null,
            "created_at": "2021-04-18T06:51:32.000000Z",
            "updated_at": "2021-04-18T06:51:32.000000Z"
        },
        {
            "id": 11,
            "name": "Utility & storage carts",
            "image": "upload\\Utility & storage carts_Category_trolleys.webp",
            "desc": null,
            "created_at": "2021-04-18T06:51:41.000000Z",
            "updated_at": "2021-04-18T06:51:41.000000Z"
        },
        {
            "id": 12,
            "name": "Patio furniture",
            "image": "upload\\Patio furniture_outdoor-furniture_od003.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:02.000000Z",
            "updated_at": "2021-04-18T06:52:02.000000Z"
        },
        {
            "id": 13,
            "name": "Bar furniture",
            "image": "upload\\Bar furniture_Category_bar-tables-and-chairs.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:11.000000Z",
            "updated_at": "2021-04-18T06:52:11.000000Z"
        },
        {
            "id": 14,
            "name": "Café furniture",
            "image": "upload\\Café furniture_Category_cafe-furniture.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:19.000000Z",
            "updated_at": "2021-04-18T06:52:19.000000Z"
        },
        {
            "id": 15,
            "name": "Sideboards, buffets & sofa tables",
            "image": "upload\\Sideboards, buffets & sofa tables_sideboards-buffets-and-console-tables_30454.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:26.000000Z",
            "updated_at": "2021-04-18T06:52:26.000000Z"
        },
        {
            "id": 16,
            "name": "Room dividers",
            "image": "upload\\Room dividers_room-dividers_46080.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:34.000000Z",
            "updated_at": "2021-04-18T06:52:34.000000Z"
        },
        {
            "id": 17,
            "name": "Kids furniture",
            "image": "upload\\Kids furniture_Category_small-furniture.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:47.000000Z",
            "updated_at": "2021-04-18T06:52:47.000000Z"
        },
        {
            "id": 18,
            "name": "Nursery Furniture",
            "image": "upload\\Nursery Furniture_nursery-furniture_45780.webp",
            "desc": null,
            "created_at": "2021-04-18T06:52:55.000000Z",
            "updated_at": "2021-04-18T06:52:55.000000Z"
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
            "id": 1,
            "name": "Full, Queen and King size platform beds",
            "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:53:58.000000Z",
            "updated_at": "2021-04-18T06:53:58.000000Z"
        },
        {
            "id": 2,
            "name": "Twin beds",
            "image": "upload\\Twin beds_single-beds_16285.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:58:35.000000Z",
            "updated_at": "2021-04-18T06:58:35.000000Z"
        },
        {
            "id": 3,
            "name": "Beds with storage",
            "image": "upload\\Beds with storage_beds-with-storage_25205.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:58:56.000000Z",
            "updated_at": "2021-04-18T06:58:56.000000Z"
        },
        {
            "id": 4,
            "name": "Upholstered beds",
            "image": "upload\\Upholstered beds_upholstered-beds_49096.jpg",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:10.000000Z",
            "updated_at": "2021-04-18T06:59:10.000000Z"
        },
        {
            "id": 5,
            "name": "Guest beds & daybeds",
            "image": "upload\\Guest beds & daybeds_guest-beds-and-day-beds_19037.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:23.000000Z",
            "updated_at": "2021-04-18T06:59:23.000000Z"
        },
        {
            "id": 6,
            "name": "Kids' loft beds & bunk beds",
            "image": "upload\\Kids' loft beds & bunk beds_left-beds-and-bunk-beds_19039.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:34.000000Z",
            "updated_at": "2021-04-18T06:59:34.000000Z"
        },
        {
            "id": 7,
            "name": "Kids beds",
            "image": "upload\\Kids beds_childrens-beds_18723-us.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:59:43.000000Z",
            "updated_at": "2021-04-18T06:59:43.000000Z"
        },
        {
            "id": 8,
            "name": "Cribs",
            "image": "upload\\Cribs_cots_45781.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:03.000000Z",
            "updated_at": "2021-04-18T07:00:03.000000Z"
        },
        {
            "id": 9,
            "name": "Divan beds",
            "image": "upload\\Divan beds_divan-beds_28433.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:12.000000Z",
            "updated_at": "2021-04-18T07:00:12.000000Z"
        },
        {
            "id": 10,
            "name": "Headboards",
            "image": "upload\\Headboards_headboards_19064.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:20.000000Z",
            "updated_at": "2021-04-18T07:00:20.000000Z"
        },
        {
            "id": 11,
            "name": "Bed legs",
            "image": "upload\\Bed legs_bed-legs_24822.jpg",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:30.000000Z",
            "updated_at": "2021-04-18T07:00:30.000000Z"
        },
        {
            "id": 12,
            "name": "Sleeper sofas",
            "image": "upload\\Sleeper sofas_sofa-beds_10663.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T07:00:43.000000Z",
            "updated_at": "2021-04-18T07:00:43.000000Z"
        },
        {
            "id": 59,
            "name": "BEKANT conference & meeting tables",
            "image": "upload\\BEKANT conference & meeting tables_meeting-conference-tables_54173.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T08:30:23.000000Z",
            "updated_at": "2021-04-18T08:30:23.000000Z"
        }
    ]
}
```

### HTTP Request
`GET api/get-sub-category/{parentId}`


<!-- END_6745be727df30614b14000051ee0581e -->

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
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        },
        {
            "id": 13,
            "name": "NEIDEN",
            "price": 59,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 38,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 39,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 40,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 41,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 42,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 43,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 44,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 45,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:44:33.000000Z",
            "updated_at": "2021-04-19T13:47:02.000000Z"
        },
        {
            "id": 14,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nAmple storage space is hidden neatly under the bed in 2 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nSONGESAND bed storage boxes work perfectly with SONGESAND bed frame. They fit neatly into the space under the bed and will be flush against sides.\r\nThe storage boxes are easy to roll out and in thanks to the castors on the base.\r\nYou can separate your linens and quilts since the combination includes one narrow and one wide storage box.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 46,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 47,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 48,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 49,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 50,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 51,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 52,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:49:35.000000Z",
            "updated_at": "2021-04-19T13:49:35.000000Z"
        },
        {
            "id": 15,
            "name": "HEMNES",
            "price": 169,
            "desc": "The sturdy solid pine frame has natural variations in grain, color and texture, giving every piece a unique look. And it has been stained and lacquered making it more durable and easy to care for.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nBeautiful craftsmanship all the way around. Why not place it in the middle of the room to create impact?\r\nThere’s plenty of space under the bed for storage boxes – great for stowing extra quilts and sheets.\r\nThe high footboard keeps bed textiles from falling onto the floor while you sleep.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n16 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSlatted bed base is included in the price but packaged separately.\r\nCreate extra storage space under the bed with RÖMSKOG underbed storage box.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nCarina Bengs\/IKEA of Sweden",
            "stock": 500,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 53,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 54,
                    "name": "hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 55,
                    "name": "hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 56,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 57,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 58,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 59,
                    "name": "hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 60,
                    "name": "hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:50:30.000000Z",
            "updated_at": "2021-04-19T13:54:32.000000Z"
        },
        {
            "id": 16,
            "name": "KURA",
            "price": 179,
            "desc": "Turned upside down the bed quickly converts from a low to a high bed.\r\nWhen the bed is used as a loft bed, it is recommended for 6 years and older.\r\nTo prevent your child from getting their head stuck, and avoiding serious injury, the distance between the bed and the wall must always be less than 2½\" or greater than 9\".\r\nHigh beds and the upper bed of bunk or loft beds are not suitable for children under 6 years of age due to the risk of injury from falls.\r\nSlatted bed base is included.\r\nMattress and bedlinens are sold separately.\r\nUse with KURA bed canopy.\r\nMax load indicates static weight, in other words the load which the bed withstands if you lie or sit on it.\r\n\r\nDesigner\r\nT Christensen\/K Legaard",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 61,
                    "name": "KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 62,
                    "name": "KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 63,
                    "name": "KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 64,
                    "name": "KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 65,
                    "name": "KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 66,
                    "name": "KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 67,
                    "name": "KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 68,
                    "name": "KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 69,
                    "name": "KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 70,
                    "name": "KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:54:25.000000Z",
            "updated_at": "2021-04-19T13:54:25.000000Z"
        },
        {
            "id": 17,
            "name": "HEMNES 2",
            "price": 299,
            "desc": "With this daybed you quickly and easily create space for overnight guests. Just pull out the bed base and you get a double bed in no time.\r\nWith some soft, fluffy pillows as back support, you easily transform this day bed into a comfortable sofa.\r\nThe large drawers have space for extra comforters, pillows, linens or other things you need to store, but want to have close at hand.\r\nThe high frame creates a cozy cocoon feeling, and is lacquered so that it's easy to maintain.\r\nThe daybed must be combined with two twin mattresses. They are placed on top of each other when you use the daybed as a single bed, and next to each other when you use it as a double bed.\r\nCoordinates with other furniture in the HEMNES series.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base is included.\r\n\r\nDesigner\r\nCarina Bengs",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 71,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 72,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 73,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 74,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 75,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 76,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 77,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:56:14.000000Z",
            "updated_at": "2021-04-19T13:56:14.000000Z"
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
        "total": 27
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
        "name": "MALM",
        "price": 179,
        "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
        "stock": 100,
        "bought": 0,
        "warranty": 12,
        "discount": 0,
        "rating": 0,
        "rating_averaged": 0,
        "brand": {
            "id": 1,
            "name": "IKEA",
            "image": null,
            "desc": null,
            "created_at": "2021-04-19T13:27:25.000000Z",
            "updated_at": "2021-04-19T13:27:25.000000Z"
        },
        "category": {
            "id": 1,
            "name": "Full, Queen and King size platform beds",
            "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
            "desc": null,
            "parent_id": 1,
            "created_at": "2021-04-18T06:53:58.000000Z",
            "updated_at": "2021-04-18T06:53:58.000000Z"
        },
        "images": [
            {
                "id": 1,
                "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 2,
                "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 3,
                "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 4,
                "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 5,
                "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 6,
                "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            },
            {
                "id": 7,
                "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                "product_id": 1,
                "created_at": "2021-04-19T13:27:58.000000Z",
                "updated_at": "2021-04-19T13:27:58.000000Z"
            }
        ],
        "attributes": [],
        "created_at": "2021-04-19T13:27:58.000000Z",
        "updated_at": "2021-04-19T13:27:58.000000Z"
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
            "id": 26,
            "name": "UPPLAND",
            "price": 499,
            "desc": "Enjoy the super comfy UPPLAND sofa with embracing feel and deep seat cushions made of pocket springs, high resilience foam and polyester fibers, adding both firm support and relaxing softness.\r\nReversible back cushions provide soft support for your back and two different sides to wear. Thanks to the combination of polyester fibers and cut foam the cushions will retain their shape and comfort year after year.\r\nThe cover is easy to keep clean as it is removable and can be machine washed.\r\nA range of coordinated covers makes it easy for you to give your furniture a new look.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\nThis cover's ability to resist abrasion has been tested to handle 15,000 cycles, which is suitable for furniture that should withstand everyday use in the home.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 98,
            "bought": 0,
            "warranty": 12,
            "discount": 15,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [
                {
                    "id": 128,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0818567_pe774489_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0818567_pe774489_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 129,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0818566_pe774488_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0818566_pe774488_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 130,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0934664_pe792485_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0934664_pe792485_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 131,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0948958_pe799429_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0948958_pe799429_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 132,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0928381_pe789853_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0928381_pe789853_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:32:56.000000Z",
            "updated_at": "2021-04-24T11:51:47.000000Z"
        },
        {
            "id": 28,
            "name": "EKTORP",
            "price": 399,
            "desc": "Seat cushions filled with high resilience foam and polyester fiber wadding provide comfortable support for your body when seated, and easily regain their shape when you rise.\r\nReversible back cushions filled with polyester fibers provide soft support for your back and two different sides for longer wear.\r\nThe cover is easy to keep clean as it is removable and can be machine washed.\r\nA range of coordinated covers makes it easy for you to give your furniture a new look.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nThis cover's ability to resist abrasion has been tested to handle 25,000 cycles. A cover that withstands 15,000 cycles or more is suitable for furniture that should withstand everyday use in the home.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 49,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [
                {
                    "id": 133,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0386819_pe559167_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0386819_pe559167_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 134,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0821024_pe596542_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0821024_pe596542_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 135,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0821022_pe585579_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0821022_pe585579_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 136,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0431852_pe585883_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0431852_pe585883_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 137,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0739098_ph146001_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0739098_ph146001_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 138,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0778998_ph163281_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0778998_ph163281_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 139,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0739097_ph146167_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0739097_ph146167_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                },
                {
                    "id": 140,
                    "name": "EKTORP_ektorp-sofa-lofallet-beige__0733160_pe738876_s5.webp",
                    "image": "upload\\EKTORP_ektorp-sofa-lofallet-beige__0733160_pe738876_s5.webp",
                    "product_id": 28,
                    "created_at": "2021-04-19T14:35:20.000000Z",
                    "updated_at": "2021-04-19T14:35:20.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:35:20.000000Z",
            "updated_at": "2021-04-24T11:47:20.000000Z"
        },
        {
            "id": 34,
            "name": "KIVIK",
            "price": 999,
            "desc": "KIVIK is a generous seating series with a soft, deep seat and comfortable support for your back.\r\nThe contact surfaces are covered with GRANN – a soft, smooth and strong grain leather with natural variations. Other surfaces have BOMSTAD, a coated fabric that has a similar look and feel to leather.\r\nSeat cushions have a layer of memory foam that softly follows the contours of your body and gives comfortable support where needed.\r\nIt is easy to combine the sofa with one or more chaise lounges thanks to the removable armrests.\r\nYou can use the wide and long armrests with extra filling both as an extra place to sit and as a comfortable headrest when you're lying down on the sofa.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nPlease check with your local authorities to make sure that the product complies with any specific requirements for business use.\r\n\r\nDesigner\r\nOla Wihlborg",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Leather & coated fabric sofas",
                "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:48.000000Z",
                "updated_at": "2021-04-18T07:10:48.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-19T14:43:31.000000Z",
            "updated_at": "2021-04-19T14:43:31.000000Z"
        },
        {
            "id": 33,
            "name": "VALLENTUNA",
            "price": 1665,
            "desc": "All modules in the VALLENTUNA series can be used freestanding or together to create a sofa combination in any size that suits you perfectly.\r\nVALLENTUNA retains its comfort for a long time with generous seating and pocket springs that follow your body.\r\nThis combination includes 3 seat modules with storage that allow you to quickly clear away your things but still have them close at hand.\r\nMURUM fixed cover is made of polyester with a protective polyurethane surface that makes it both soft and firm, while the cover is very durable and easy-care at the same time.\r\nThe cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\n5 back cushions are included.\r\n\r\nDesigner\r\nEhlén Johansson",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Leather & coated fabric sofas",
                "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:48.000000Z",
                "updated_at": "2021-04-18T07:10:48.000000Z"
            },
            "images": [
                {
                    "id": 161,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0624041_pe691588_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0624041_pe691588_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 162,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826295_pe691590_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826295_pe691590_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 163,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826293_pe691589_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826293_pe691589_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 164,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826297_pe691600_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0826297_pe691600_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 165,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0825926_pe691081_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0825926_pe691081_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 166,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0831818_ph166296_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0831818_ph166296_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 167,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0719398_pe732047_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0719398_pe732047_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                },
                {
                    "id": 168,
                    "name": "VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0673845_pe717439_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-modular-corner-sofa-3-seat-with-storage-murum-white__0673845_pe717439_s5.webp",
                    "product_id": 33,
                    "created_at": "2021-04-19T14:42:33.000000Z",
                    "updated_at": "2021-04-19T14:42:33.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:42:33.000000Z",
            "updated_at": "2021-04-19T14:42:33.000000Z"
        },
        {
            "id": 32,
            "name": "STOCKHOLM",
            "price": 2199,
            "desc": "SEGLORA cover is made of aniline leather which is the finest type of leather of the highest quality. As it ages, it becomes softer and gets a darker tone and fine patina.\r\nAniline leather has an unaltered surface that is treated with just a thin, protective coating. This gives it great breathability while retaining its natural look with marks that make each cover unique.\r\nThe seat and back cushions provide comfortable support for your body and easily regain their shape because they’re filled with high resilience foam and polyester fibers.\r\n25-year limited warranty. Read about the terms in the limited warranty brochure.\r\nBecause full-grain leather is only treated with a light surface coating it is less resistant to stains and scratches than leather with a thick surface treatment.\r\nThe leather on this sofa will become softer and acquire a darker tone with time. This is natural for full-grain leather, which is treated with only a light surface coating for protection.\r\nUse with care and clean using the soft brush attachment on your vacuum. If needed, wipe the surface with a slightly damp cloth. Do not use leather care products.\r\n\r\nDesigner\r\nNiels Gammelgaard",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Leather & coated fabric sofas",
                "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:48.000000Z",
                "updated_at": "2021-04-18T07:10:48.000000Z"
            },
            "images": [
                {
                    "id": 154,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0183763_pe334809_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0183763_pe334809_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 155,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0820478_pe598993_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0820478_pe598993_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 156,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0820477_pe596534_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0820477_pe596534_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 157,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0820476_pe585752_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0820476_pe585752_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 158,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0212281_pe339545_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0212281_pe339545_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 159,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0719397_pe732046_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0719397_pe732046_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                },
                {
                    "id": 160,
                    "name": "STOCKHOLM_stockholm-sofa-seglora-natural__0748954_pe745346_s5.webp",
                    "image": "upload\\STOCKHOLM_stockholm-sofa-seglora-natural__0748954_pe745346_s5.webp",
                    "product_id": 32,
                    "created_at": "2021-04-19T14:41:20.000000Z",
                    "updated_at": "2021-04-19T14:41:20.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:41:20.000000Z",
            "updated_at": "2021-04-19T14:41:20.000000Z"
        },
        {
            "id": 31,
            "name": "FINNALA",
            "price": 1199,
            "desc": "This comfortable sofa has pocket spring seat cushions with high resilience foam and a top layer of wadding. It provides a nice comfort and support for your body while maintaining the shape of the seat cushions.\r\nThe sofa's sections can be combined in different ways to get a size and shape that suits you. If you ever need a larger sofa, you can always add a section or two.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n\r\nDesigner\r\nEhlén Johansson",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Leather & coated fabric sofas",
                "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:48.000000Z",
                "updated_at": "2021-04-18T07:10:48.000000Z"
            },
            "images": [
                {
                    "id": 149,
                    "name": "FINNALA_finnala-sofa-grann-bomstad-black__0817362_pe773988_s5.webp",
                    "image": "upload\\FINNALA_finnala-sofa-grann-bomstad-black__0817362_pe773988_s5.webp",
                    "product_id": 31,
                    "created_at": "2021-04-19T14:40:20.000000Z",
                    "updated_at": "2021-04-19T14:40:20.000000Z"
                },
                {
                    "id": 150,
                    "name": "FINNALA_finnala-sofa-grann-bomstad-black__0817361_pe773987_s5.webp",
                    "image": "upload\\FINNALA_finnala-sofa-grann-bomstad-black__0817361_pe773987_s5.webp",
                    "product_id": 31,
                    "created_at": "2021-04-19T14:40:20.000000Z",
                    "updated_at": "2021-04-19T14:40:20.000000Z"
                },
                {
                    "id": 151,
                    "name": "FINNALA_finnala-sofa-grann-bomstad-black__0817360_pe773991_s5.webp",
                    "image": "upload\\FINNALA_finnala-sofa-grann-bomstad-black__0817360_pe773991_s5.webp",
                    "product_id": 31,
                    "created_at": "2021-04-19T14:40:20.000000Z",
                    "updated_at": "2021-04-19T14:40:20.000000Z"
                },
                {
                    "id": 152,
                    "name": "FINNALA_finnala-sofa-grann-bomstad-black__0891165_ph168966_s5.webp",
                    "image": "upload\\FINNALA_finnala-sofa-grann-bomstad-black__0891165_ph168966_s5.webp",
                    "product_id": 31,
                    "created_at": "2021-04-19T14:40:20.000000Z",
                    "updated_at": "2021-04-19T14:40:20.000000Z"
                },
                {
                    "id": 153,
                    "name": "FINNALA_finnala-sofa-grann-bomstad-black__0818972_pe774672_s5.webp",
                    "image": "upload\\FINNALA_finnala-sofa-grann-bomstad-black__0818972_pe774672_s5.webp",
                    "product_id": 31,
                    "created_at": "2021-04-19T14:40:20.000000Z",
                    "updated_at": "2021-04-19T14:40:20.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:40:20.000000Z",
            "updated_at": "2021-04-19T14:40:20.000000Z"
        },
        {
            "id": 30,
            "name": "EKTORP",
            "price": 799,
            "desc": "The cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\nSeat cushions filled with high resilience foam and polyester fiber wadding provide comfortable support for your body when seated, and easily regain their shape when you rise.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 29,
                "name": "Leather & coated fabric sofas",
                "image": "upload\\Leather & coated fabric sofas_Category_leather-and-coated-fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:48.000000Z",
                "updated_at": "2021-04-18T07:10:48.000000Z"
            },
            "images": [
                {
                    "id": 148,
                    "name": "EKTORP_ektorp-3-seat-sofa-xl-skrea-dark-brown__0747652_pe744659_s5.webp",
                    "image": "upload\\EKTORP_ektorp-3-seat-sofa-xl-skrea-dark-brown__0747652_pe744659_s5.webp",
                    "product_id": 30,
                    "created_at": "2021-04-19T14:38:45.000000Z",
                    "updated_at": "2021-04-19T14:38:45.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:38:45.000000Z",
            "updated_at": "2021-04-19T14:38:45.000000Z"
        },
        {
            "id": 29,
            "name": "FÄRLÖV",
            "price": 799,
            "desc": "10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nA yarn-dyed fabric with natural hints of flax that gives the cover a texture that both looks and feels crisp.\r\nPocket springs that follow your body. The big seat cushion and the generous dimensions make the sofa comfortable to sit on alone or with others - for as long as you like.\r\nThe cover is easy to keep clean as it is removable and can be machine washed.\r\nThe tall legs in solid wood make it easy to vacuum or reach toys and other things hiding under the sofa.\r\nThe velvet reflects light in a characteristic way which may make the color appear as if it changes.\r\nSmall fibers may appear on velvet. It happens naturally and they disappear over time and can also be removed with a lint roller.\r\nPress marks that may appear on the velvet usually disappear in time. With your hand, you can gently stroke in the direction of the pile or use a clothes brush. You can also use the vacuum cleaner with the soft nozzle.",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [
                {
                    "id": 141,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915313_pe784706_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915313_pe784706_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 142,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915314_pe784705_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915314_pe784705_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 143,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915309_pe784702_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915309_pe784702_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 144,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915300_pe784688_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915300_pe784688_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 145,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0929152_pe790164_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0929152_pe790164_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 146,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0929148_pe790160_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0929148_pe790160_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 147,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0550213_pe658058_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0550213_pe658058_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:36:35.000000Z",
            "updated_at": "2021-04-19T14:36:35.000000Z"
        },
        {
            "id": 27,
            "name": "FINNALA",
            "price": 599,
            "desc": "This comfortable sofa has pocket spring seat cushions with high resilience foam and a top layer of wadding. It provides a nice comfort and support for your body while maintaining the shape of the seat cushions.\r\nThe sofa's sections can be combined in different ways to get a size and shape that suits you. If you ever need a larger sofa, you can always add a section or two.\r\nThis cover is made of dope-dyed GUNNARED fabric in polyester. It is a durable fabric with a wool-like feel, a warm look and a two-toned mélange effect.\r\nThe cover is easy to keep clean since it is removable and machine washable.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n\r\nDesigner\r\nEhlén Johansson",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [],
            "attributes": [],
            "created_at": "2021-04-19T14:34:03.000000Z",
            "updated_at": "2021-04-19T14:34:03.000000Z"
        },
        {
            "id": 25,
            "name": "BINGSTA",
            "price": 129,
            "desc": "Soft, rounded armrests and back cushion provide you with your own comfortable nook which feels snug thanks to the solid and curved back panel.\r\nThe back panel gives BINGSTA its own distinct character – while the slim and stylish legs enhance its elegant look.\r\nTwo colors tone-in-tone make BINGSTA easy to coordinate and match with other furniture – and use in any environment.\r\nThe cover combines VISSLE and KABUSA fabrics in polyester. VISSLE (seat and back) is a dope-dyed, durable and smooth fabric with a two-tone effect. KABUSA (back frame) has a robust and honest look.\r\n10 year Limited warranty. Read about the terms in the warranty brochure.\r\nThis chair has been tested for domestic use and use in public environment and meets the requirements for durability and stability set forth in the following standards: EN 1021-1, EN 16139 and ANSI\/BIFMA x5.4.\r\nVISSLE fixed cover resists abrasion through 50,000 cycles. A cover that handles 15,000 cycles or more is suitable for everyday use at home. More than 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\nThis cover's ability to resist abrasion has been tested to handle 25,000 cycles. A cover that withstands 15,000 cycles or more is suitable for furniture that should withstand everyday use in the home.\r\n\r\nDesigner\r\nElizabet Gutierrez",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 14,
                "name": "Lounge chairs",
                "image": "upload\\Lounge chairs_lounge-chairs_53257.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:23.000000Z",
                "updated_at": "2021-04-18T07:04:23.000000Z"
            },
            "images": [
                {
                    "id": 120,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761760_pe751428_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761760_pe751428_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 121,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761761_pe751429_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761761_pe751429_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 122,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761762_pe751431_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761762_pe751431_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 123,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761763_pe751430_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0761763_pe751430_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 124,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809764_pe771125_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809764_pe771125_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 125,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809712_pe771104_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809712_pe771104_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 126,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809765_pe771140_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0809765_pe771140_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                },
                {
                    "id": 127,
                    "name": "BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0815168_pe772789_s5.webp",
                    "image": "upload\\BINGSTA_bingsta-armchair-vissle-dark-yellow-kabusa-dark-yellow__0815168_pe772789_s5.webp",
                    "product_id": 25,
                    "created_at": "2021-04-19T14:14:58.000000Z",
                    "updated_at": "2021-04-19T14:14:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:14:58.000000Z",
            "updated_at": "2021-04-19T14:14:58.000000Z"
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
        "total": 27
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
    -G "http://127.0.0.1:8000/api/popular-product?limit=molestiae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/popular-product"
);

let params = {
    "limit": "molestiae",
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
            "id": 1,
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        },
        {
            "id": 13,
            "name": "NEIDEN",
            "price": 59,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 38,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 39,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 40,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 41,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 42,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 43,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 44,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 45,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:44:33.000000Z",
            "updated_at": "2021-04-19T13:47:02.000000Z"
        },
        {
            "id": 14,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nAmple storage space is hidden neatly under the bed in 2 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nSONGESAND bed storage boxes work perfectly with SONGESAND bed frame. They fit neatly into the space under the bed and will be flush against sides.\r\nThe storage boxes are easy to roll out and in thanks to the castors on the base.\r\nYou can separate your linens and quilts since the combination includes one narrow and one wide storage box.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 46,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 47,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 48,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 49,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 50,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 51,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 52,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:49:35.000000Z",
            "updated_at": "2021-04-19T13:49:35.000000Z"
        },
        {
            "id": 15,
            "name": "HEMNES",
            "price": 169,
            "desc": "The sturdy solid pine frame has natural variations in grain, color and texture, giving every piece a unique look. And it has been stained and lacquered making it more durable and easy to care for.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nBeautiful craftsmanship all the way around. Why not place it in the middle of the room to create impact?\r\nThere’s plenty of space under the bed for storage boxes – great for stowing extra quilts and sheets.\r\nThe high footboard keeps bed textiles from falling onto the floor while you sleep.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n16 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSlatted bed base is included in the price but packaged separately.\r\nCreate extra storage space under the bed with RÖMSKOG underbed storage box.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nCarina Bengs\/IKEA of Sweden",
            "stock": 500,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 53,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 54,
                    "name": "hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 55,
                    "name": "hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 56,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 57,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 58,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 59,
                    "name": "hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 60,
                    "name": "hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:50:30.000000Z",
            "updated_at": "2021-04-19T13:54:32.000000Z"
        },
        {
            "id": 16,
            "name": "KURA",
            "price": 179,
            "desc": "Turned upside down the bed quickly converts from a low to a high bed.\r\nWhen the bed is used as a loft bed, it is recommended for 6 years and older.\r\nTo prevent your child from getting their head stuck, and avoiding serious injury, the distance between the bed and the wall must always be less than 2½\" or greater than 9\".\r\nHigh beds and the upper bed of bunk or loft beds are not suitable for children under 6 years of age due to the risk of injury from falls.\r\nSlatted bed base is included.\r\nMattress and bedlinens are sold separately.\r\nUse with KURA bed canopy.\r\nMax load indicates static weight, in other words the load which the bed withstands if you lie or sit on it.\r\n\r\nDesigner\r\nT Christensen\/K Legaard",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 61,
                    "name": "KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 62,
                    "name": "KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 63,
                    "name": "KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 64,
                    "name": "KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 65,
                    "name": "KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 66,
                    "name": "KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 67,
                    "name": "KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 68,
                    "name": "KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 69,
                    "name": "KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 70,
                    "name": "KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:54:25.000000Z",
            "updated_at": "2021-04-19T13:54:25.000000Z"
        },
        {
            "id": 17,
            "name": "HEMNES 2",
            "price": 299,
            "desc": "With this daybed you quickly and easily create space for overnight guests. Just pull out the bed base and you get a double bed in no time.\r\nWith some soft, fluffy pillows as back support, you easily transform this day bed into a comfortable sofa.\r\nThe large drawers have space for extra comforters, pillows, linens or other things you need to store, but want to have close at hand.\r\nThe high frame creates a cozy cocoon feeling, and is lacquered so that it's easy to maintain.\r\nThe daybed must be combined with two twin mattresses. They are placed on top of each other when you use the daybed as a single bed, and next to each other when you use it as a double bed.\r\nCoordinates with other furniture in the HEMNES series.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base is included.\r\n\r\nDesigner\r\nCarina Bengs",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 71,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 72,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 73,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 74,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 75,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 76,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 77,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:56:14.000000Z",
            "updated_at": "2021-04-19T13:56:14.000000Z"
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
        "total": 27
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

<!-- START_026de4c680ac2e8f56ed5a31c5db4db7 -->
## Show sale product sort by discount

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/sale-product?limit=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/sale-product"
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
            "id": 26,
            "name": "UPPLAND",
            "price": 499,
            "desc": "Enjoy the super comfy UPPLAND sofa with embracing feel and deep seat cushions made of pocket springs, high resilience foam and polyester fibers, adding both firm support and relaxing softness.\r\nReversible back cushions provide soft support for your back and two different sides to wear. Thanks to the combination of polyester fibers and cut foam the cushions will retain their shape and comfort year after year.\r\nThe cover is easy to keep clean as it is removable and can be machine washed.\r\nA range of coordinated covers makes it easy for you to give your furniture a new look.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\nThis cover's ability to resist abrasion has been tested to handle 15,000 cycles, which is suitable for furniture that should withstand everyday use in the home.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 98,
            "bought": 0,
            "warranty": 12,
            "discount": 15,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [
                {
                    "id": 128,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0818567_pe774489_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0818567_pe774489_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 129,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0818566_pe774488_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0818566_pe774488_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 130,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0934664_pe792485_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0934664_pe792485_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 131,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0948958_pe799429_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0948958_pe799429_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                },
                {
                    "id": 132,
                    "name": "UPPLAND_uppland-sofa-hallarp-gray__0928381_pe789853_s5.webp",
                    "image": "upload\\UPPLAND_uppland-sofa-hallarp-gray__0928381_pe789853_s5.webp",
                    "product_id": 26,
                    "created_at": "2021-04-19T14:32:56.000000Z",
                    "updated_at": "2021-04-19T14:32:56.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:32:56.000000Z",
            "updated_at": "2021-04-24T11:51:47.000000Z"
        },
        {
            "id": 16,
            "name": "KURA",
            "price": 179,
            "desc": "Turned upside down the bed quickly converts from a low to a high bed.\r\nWhen the bed is used as a loft bed, it is recommended for 6 years and older.\r\nTo prevent your child from getting their head stuck, and avoiding serious injury, the distance between the bed and the wall must always be less than 2½\" or greater than 9\".\r\nHigh beds and the upper bed of bunk or loft beds are not suitable for children under 6 years of age due to the risk of injury from falls.\r\nSlatted bed base is included.\r\nMattress and bedlinens are sold separately.\r\nUse with KURA bed canopy.\r\nMax load indicates static weight, in other words the load which the bed withstands if you lie or sit on it.\r\n\r\nDesigner\r\nT Christensen\/K Legaard",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 61,
                    "name": "KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 62,
                    "name": "KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 63,
                    "name": "KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 64,
                    "name": "KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 65,
                    "name": "KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 66,
                    "name": "KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 67,
                    "name": "KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 68,
                    "name": "KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 69,
                    "name": "KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 70,
                    "name": "KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:54:25.000000Z",
            "updated_at": "2021-04-19T13:54:25.000000Z"
        },
        {
            "id": 18,
            "name": "STRANDMON",
            "price": 329,
            "desc": "You can really loosen up and relax in comfort because the high back on this chair provides extra support for your neck.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nStationary cover.\r\nCan be used with STRANDMON ottoman to increase your sitting comfort.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 78,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0392556_pe560378_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0392556_pe560378_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 79,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837429_pe670768_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837429_pe670768_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 80,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837422_pe644554_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837422_pe644554_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 81,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837426_pe649226_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837426_pe649226_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 82,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0392557_pe560379_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0392557_pe560379_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 83,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837424_pe649224_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837424_pe649224_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 84,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0629848_pe694516_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0629848_pe694516_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:00:56.000000Z",
            "updated_at": "2021-04-19T14:00:56.000000Z"
        },
        {
            "id": 21,
            "name": "VALLENTUNA",
            "price": 520,
            "desc": "All modules in the VALLENTUNA series can be used freestanding or together to create a sofa combination in any size that suits you perfectly.\r\nVALLENTUNA retains its comfort for a long time with generous seating and pocket springs that follow your body.\r\nMURUM fixed cover is made of polyester with a protective polyurethane surface that makes it both soft and firm, while the cover is very durable and easy-care at the same time.\r\nThe cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n2 back cushions are included.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\n\r\nDesigner\r\nEhlén Johansson",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 91,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0731401_pe738241_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0731401_pe738241_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 92,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825939_pe691090_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825939_pe691090_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 93,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825941_pe692857_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825941_pe692857_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 94,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825926_pe691081_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825926_pe691081_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 95,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0817993_ph163262_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0817993_ph163262_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 96,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0831818_ph166296_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0831818_ph166296_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 97,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0719391_pe732040_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0719391_pe732040_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 98,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0673097_pe717020_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0673097_pe717020_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:04:04.000000Z",
            "updated_at": "2021-04-19T14:04:04.000000Z"
        },
        {
            "id": 29,
            "name": "FÄRLÖV",
            "price": 799,
            "desc": "10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nA yarn-dyed fabric with natural hints of flax that gives the cover a texture that both looks and feels crisp.\r\nPocket springs that follow your body. The big seat cushion and the generous dimensions make the sofa comfortable to sit on alone or with others - for as long as you like.\r\nThe cover is easy to keep clean as it is removable and can be machine washed.\r\nThe tall legs in solid wood make it easy to vacuum or reach toys and other things hiding under the sofa.\r\nThe velvet reflects light in a characteristic way which may make the color appear as if it changes.\r\nSmall fibers may appear on velvet. It happens naturally and they disappear over time and can also be removed with a lint roller.\r\nPress marks that may appear on the velvet usually disappear in time. With your hand, you can gently stroke in the direction of the pile or use a clothes brush. You can also use the vacuum cleaner with the soft nozzle.",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 28,
                "name": "Fabric sofas",
                "image": "upload\\Fabric sofas_Category_fabric-sofas.webp",
                "desc": null,
                "parent_id": 3,
                "created_at": "2021-04-18T07:10:33.000000Z",
                "updated_at": "2021-04-18T07:10:33.000000Z"
            },
            "images": [
                {
                    "id": 141,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915313_pe784706_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915313_pe784706_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 142,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915314_pe784705_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915314_pe784705_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 143,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915309_pe784702_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915309_pe784702_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 144,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0915300_pe784688_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0915300_pe784688_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 145,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0929152_pe790164_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0929152_pe790164_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 146,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0929148_pe790160_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0929148_pe790160_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                },
                {
                    "id": 147,
                    "name": "FÄRLÖV_faerloev-sofa-flodafors-gray__0550213_pe658058_s5.webp",
                    "image": "upload\\FÄRLÖV_faerloev-sofa-flodafors-gray__0550213_pe658058_s5.webp",
                    "product_id": 29,
                    "created_at": "2021-04-19T14:36:35.000000Z",
                    "updated_at": "2021-04-19T14:36:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:36:35.000000Z",
            "updated_at": "2021-04-19T14:36:35.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        },
        {
            "id": 15,
            "name": "HEMNES",
            "price": 169,
            "desc": "The sturdy solid pine frame has natural variations in grain, color and texture, giving every piece a unique look. And it has been stained and lacquered making it more durable and easy to care for.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nBeautiful craftsmanship all the way around. Why not place it in the middle of the room to create impact?\r\nThere’s plenty of space under the bed for storage boxes – great for stowing extra quilts and sheets.\r\nThe high footboard keeps bed textiles from falling onto the floor while you sleep.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n16 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSlatted bed base is included in the price but packaged separately.\r\nCreate extra storage space under the bed with RÖMSKOG underbed storage box.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nCarina Bengs\/IKEA of Sweden",
            "stock": 500,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 53,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 54,
                    "name": "hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 55,
                    "name": "hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 56,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 57,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 58,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 59,
                    "name": "hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 60,
                    "name": "hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:50:30.000000Z",
            "updated_at": "2021-04-19T13:54:32.000000Z"
        },
        {
            "id": 19,
            "name": "EKERÖ",
            "price": 159,
            "desc": "The fixed KIMSTAD coated fabric cover is a soft yet durable fabric made of polyester and cotton. The protective polyurethane coating means that it’s easy to keep clean and that it both feels and looks like leather.\r\nThe cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\nThe back cushion can be moved around to fit your sitting style.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n10 year Limited warranty. Read about the terms in the warranty brochure.\r\nPlease check with your local authorities to make sure that the product complies with any specific requirements for business use.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\n\r\nDesigner\r\nEva Lilja Löwenhielm",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 85,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0204740_pe359785_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0204740_pe359785_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 86,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836797_pe600907_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836797_pe600907_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 87,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836787_pe596504_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836787_pe596504_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 88,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836785_pe585572_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836785_pe585572_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 89,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0629853_pe694518_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0629853_pe694518_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:02:04.000000Z",
            "updated_at": "2021-04-19T14:02:04.000000Z"
        },
        {
            "id": 20,
            "name": "EKTORP",
            "price": 599,
            "desc": "The cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\nSeat cushions filled with high resilience foam and polyester fiber wadding provide comfortable support for your body when seated, and easily regain their shape when you rise.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 90,
                    "name": "EKTORP_ektorp-armchair-xl-skrea-dark-brown__0747651_pe744657_s5.webp",
                    "image": "upload\\EKTORP_ektorp-armchair-xl-skrea-dark-brown__0747651_pe744657_s5.webp",
                    "product_id": 20,
                    "created_at": "2021-04-19T14:03:01.000000Z",
                    "updated_at": "2021-04-19T14:03:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:03:01.000000Z",
            "updated_at": "2021-04-19T14:03:01.000000Z"
        },
        {
            "id": 24,
            "name": "NOLMYRA",
            "price": 39,
            "desc": "The armchair is lightweight and easy to move if you want to clean the floor or rearrange the furniture.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n\r\nDesigner\r\nJooyeon Lee",
            "stock": 20,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 14,
                "name": "Lounge chairs",
                "image": "upload\\Lounge chairs_lounge-chairs_53257.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:23.000000Z",
                "updated_at": "2021-04-18T07:04:23.000000Z"
            },
            "images": [
                {
                    "id": 116,
                    "name": "NOLMYRA_nolmyra-chair-birch-veneer-gray__0152020_pe310348_s5.webp",
                    "image": "upload\\NOLMYRA_nolmyra-chair-birch-veneer-gray__0152020_pe310348_s5.webp",
                    "product_id": 24,
                    "created_at": "2021-04-19T14:13:55.000000Z",
                    "updated_at": "2021-04-19T14:13:55.000000Z"
                },
                {
                    "id": 117,
                    "name": "NOLMYRA_nolmyra-chair-birch-veneer-gray__0836782_pe600883_s5.webp",
                    "image": "upload\\NOLMYRA_nolmyra-chair-birch-veneer-gray__0836782_pe600883_s5.webp",
                    "product_id": 24,
                    "created_at": "2021-04-19T14:13:55.000000Z",
                    "updated_at": "2021-04-19T14:13:55.000000Z"
                },
                {
                    "id": 118,
                    "name": "NOLMYRA_nolmyra-chair-birch-veneer-gray__0836779_pe585625_s5.webp",
                    "image": "upload\\NOLMYRA_nolmyra-chair-birch-veneer-gray__0836779_pe585625_s5.webp",
                    "product_id": 24,
                    "created_at": "2021-04-19T14:13:55.000000Z",
                    "updated_at": "2021-04-19T14:13:55.000000Z"
                },
                {
                    "id": 119,
                    "name": "NOLMYRA_nolmyra-chair-birch-veneer-gray__0681596_pe720192_s5.webp",
                    "image": "upload\\NOLMYRA_nolmyra-chair-birch-veneer-gray__0681596_pe720192_s5.webp",
                    "product_id": 24,
                    "created_at": "2021-04-19T14:13:55.000000Z",
                    "updated_at": "2021-04-19T14:13:55.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:13:55.000000Z",
            "updated_at": "2021-04-19T14:13:55.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/sale-product?page=1",
        "last": "http:\/\/localhost\/api\/sale-product?page=2",
        "prev": null,
        "next": "http:\/\/localhost\/api\/sale-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
        "links": [
            {
                "url": null,
                "label": "pagination.previous",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/sale-product?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http:\/\/localhost\/api\/sale-product?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http:\/\/localhost\/api\/sale-product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/sale-product",
        "per_page": 10,
        "to": 10,
        "total": 12
    }
}
```

### HTTP Request
`GET api/sale-product`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `limit` |  optional  | Limit of the query.

<!-- END_026de4c680ac2e8f56ed5a31c5db4db7 -->

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
            "id": 1,
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        },
        {
            "id": 13,
            "name": "NEIDEN",
            "price": 59,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 38,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 39,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 40,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 41,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 42,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 43,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 44,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 45,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:44:33.000000Z",
            "updated_at": "2021-04-19T13:47:02.000000Z"
        },
        {
            "id": 14,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nAmple storage space is hidden neatly under the bed in 2 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nSONGESAND bed storage boxes work perfectly with SONGESAND bed frame. They fit neatly into the space under the bed and will be flush against sides.\r\nThe storage boxes are easy to roll out and in thanks to the castors on the base.\r\nYou can separate your linens and quilts since the combination includes one narrow and one wide storage box.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 46,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 47,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 48,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 49,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 50,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 51,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 52,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:49:35.000000Z",
            "updated_at": "2021-04-19T13:49:35.000000Z"
        },
        {
            "id": 15,
            "name": "HEMNES",
            "price": 169,
            "desc": "The sturdy solid pine frame has natural variations in grain, color and texture, giving every piece a unique look. And it has been stained and lacquered making it more durable and easy to care for.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nBeautiful craftsmanship all the way around. Why not place it in the middle of the room to create impact?\r\nThere’s plenty of space under the bed for storage boxes – great for stowing extra quilts and sheets.\r\nThe high footboard keeps bed textiles from falling onto the floor while you sleep.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n16 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSlatted bed base is included in the price but packaged separately.\r\nCreate extra storage space under the bed with RÖMSKOG underbed storage box.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nCarina Bengs\/IKEA of Sweden",
            "stock": 500,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 53,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 54,
                    "name": "hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 55,
                    "name": "hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 56,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 57,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 58,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 59,
                    "name": "hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 60,
                    "name": "hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:50:30.000000Z",
            "updated_at": "2021-04-19T13:54:32.000000Z"
        },
        {
            "id": 16,
            "name": "KURA",
            "price": 179,
            "desc": "Turned upside down the bed quickly converts from a low to a high bed.\r\nWhen the bed is used as a loft bed, it is recommended for 6 years and older.\r\nTo prevent your child from getting their head stuck, and avoiding serious injury, the distance between the bed and the wall must always be less than 2½\" or greater than 9\".\r\nHigh beds and the upper bed of bunk or loft beds are not suitable for children under 6 years of age due to the risk of injury from falls.\r\nSlatted bed base is included.\r\nMattress and bedlinens are sold separately.\r\nUse with KURA bed canopy.\r\nMax load indicates static weight, in other words the load which the bed withstands if you lie or sit on it.\r\n\r\nDesigner\r\nT Christensen\/K Legaard",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 61,
                    "name": "KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 62,
                    "name": "KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 63,
                    "name": "KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 64,
                    "name": "KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 65,
                    "name": "KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 66,
                    "name": "KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 67,
                    "name": "KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 68,
                    "name": "KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 69,
                    "name": "KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 70,
                    "name": "KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:54:25.000000Z",
            "updated_at": "2021-04-19T13:54:25.000000Z"
        },
        {
            "id": 17,
            "name": "HEMNES 2",
            "price": 299,
            "desc": "With this daybed you quickly and easily create space for overnight guests. Just pull out the bed base and you get a double bed in no time.\r\nWith some soft, fluffy pillows as back support, you easily transform this day bed into a comfortable sofa.\r\nThe large drawers have space for extra comforters, pillows, linens or other things you need to store, but want to have close at hand.\r\nThe high frame creates a cozy cocoon feeling, and is lacquered so that it's easy to maintain.\r\nThe daybed must be combined with two twin mattresses. They are placed on top of each other when you use the daybed as a single bed, and next to each other when you use it as a double bed.\r\nCoordinates with other furniture in the HEMNES series.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base is included.\r\n\r\nDesigner\r\nCarina Bengs",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 71,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 72,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 73,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 74,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 75,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 76,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 77,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:56:14.000000Z",
            "updated_at": "2021-04-19T13:56:14.000000Z"
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
        "to": 10,
        "total": 10
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
            "id": 1,
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
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
        "to": 5,
        "total": 5
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
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        },
        {
            "id": 13,
            "name": "NEIDEN",
            "price": 59,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 38,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749132_pe745501_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 39,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 40,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 41,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860956_pe664781_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:33.000000Z",
                    "updated_at": "2021-04-19T13:44:33.000000Z"
                },
                {
                    "id": 42,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0869119_pe664784_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 43,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0860964_pe664783_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 44,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0734539_pe739491_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                },
                {
                    "id": 45,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751540_pe747079_s5.webp",
                    "product_id": 13,
                    "created_at": "2021-04-19T13:44:34.000000Z",
                    "updated_at": "2021-04-19T13:44:34.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:44:33.000000Z",
            "updated_at": "2021-04-19T13:47:02.000000Z"
        },
        {
            "id": 14,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nAmple storage space is hidden neatly under the bed in 2 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nSONGESAND bed storage boxes work perfectly with SONGESAND bed frame. They fit neatly into the space under the bed and will be flush against sides.\r\nThe storage boxes are easy to roll out and in thanks to the castors on the base.\r\nYou can separate your linens and quilts since the combination includes one narrow and one wide storage box.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 46,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0655476_pe709044_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 47,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0552056_pe658847_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 48,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 49,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0869131_pe658848_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 50,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0949142_pe799511_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 51,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0627013_ph149311_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                },
                {
                    "id": 52,
                    "name": "SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-with-2-storage-boxes-white-luroey__0752949_pe747528_s5.webp",
                    "product_id": 14,
                    "created_at": "2021-04-19T13:49:35.000000Z",
                    "updated_at": "2021-04-19T13:49:35.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:49:35.000000Z",
            "updated_at": "2021-04-19T13:49:35.000000Z"
        },
        {
            "id": 15,
            "name": "HEMNES",
            "price": 169,
            "desc": "The sturdy solid pine frame has natural variations in grain, color and texture, giving every piece a unique look. And it has been stained and lacquered making it more durable and easy to care for.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nBeautiful craftsmanship all the way around. Why not place it in the middle of the room to create impact?\r\nThere’s plenty of space under the bed for storage boxes – great for stowing extra quilts and sheets.\r\nThe high footboard keeps bed textiles from falling onto the floor while you sleep.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n16 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSlatted bed base is included in the price but packaged separately.\r\nCreate extra storage space under the bed with RÖMSKOG underbed storage box.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nCarina Bengs\/IKEA of Sweden",
            "stock": 500,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 53,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948863_pe799334_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 54,
                    "name": "hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0268301_pe406268_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 55,
                    "name": "hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0355811_pe383063_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 56,
                    "name": "hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0948899_pe799361_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 57,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860748_pe555654_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 58,
                    "name": "hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0860752_pe566720_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 59,
                    "name": "hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0742588_ph159783_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                },
                {
                    "id": 60,
                    "name": "hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "image": "upload\\hemnes-bed-frame-white-stain-luroey__0752906_pe747504_s5.webp",
                    "product_id": 15,
                    "created_at": "2021-04-19T13:51:30.000000Z",
                    "updated_at": "2021-04-19T13:51:30.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:50:30.000000Z",
            "updated_at": "2021-04-19T13:54:32.000000Z"
        },
        {
            "id": 16,
            "name": "KURA",
            "price": 179,
            "desc": "Turned upside down the bed quickly converts from a low to a high bed.\r\nWhen the bed is used as a loft bed, it is recommended for 6 years and older.\r\nTo prevent your child from getting their head stuck, and avoiding serious injury, the distance between the bed and the wall must always be less than 2½\" or greater than 9\".\r\nHigh beds and the upper bed of bunk or loft beds are not suitable for children under 6 years of age due to the risk of injury from falls.\r\nSlatted bed base is included.\r\nMattress and bedlinens are sold separately.\r\nUse with KURA bed canopy.\r\nMax load indicates static weight, in other words the load which the bed withstands if you lie or sit on it.\r\n\r\nDesigner\r\nT Christensen\/K Legaard",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 61,
                    "name": "KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179752_pe331952_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 62,
                    "name": "KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0179751_pe331953_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 63,
                    "name": "KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877149_pe671509_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 64,
                    "name": "KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0877146_pe639321_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 65,
                    "name": "KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0937447_pe793736_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 66,
                    "name": "KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0963101_ph172150_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 67,
                    "name": "KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0641411_ph149405_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 68,
                    "name": "KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814691_ph164781_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 69,
                    "name": "KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0908420_ph164724_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                },
                {
                    "id": 70,
                    "name": "KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "image": "upload\\KURA_kura-reversible-bed-white-pine__0814702_ph156118_s5.webp",
                    "product_id": 16,
                    "created_at": "2021-04-19T13:54:25.000000Z",
                    "updated_at": "2021-04-19T13:54:25.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:54:25.000000Z",
            "updated_at": "2021-04-19T13:54:25.000000Z"
        },
        {
            "id": 17,
            "name": "HEMNES 2",
            "price": 299,
            "desc": "With this daybed you quickly and easily create space for overnight guests. Just pull out the bed base and you get a double bed in no time.\r\nWith some soft, fluffy pillows as back support, you easily transform this day bed into a comfortable sofa.\r\nThe large drawers have space for extra comforters, pillows, linens or other things you need to store, but want to have close at hand.\r\nThe high frame creates a cozy cocoon feeling, and is lacquered so that it's easy to maintain.\r\nThe daybed must be combined with two twin mattresses. They are placed on top of each other when you use the daybed as a single bed, and next to each other when you use it as a double bed.\r\nCoordinates with other furniture in the HEMNES series.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base is included.\r\n\r\nDesigner\r\nCarina Bengs",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Twin beds",
                "image": "upload\\Twin beds_single-beds_16285.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:58:35.000000Z",
                "updated_at": "2021-04-18T06:58:35.000000Z"
            },
            "images": [
                {
                    "id": 71,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0636371_pe697851_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 72,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0857890_pe632055_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 73,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860902_pe644899_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 74,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0860888_pe632057_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 75,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0800858_ph159952_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 76,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0734477_pe739474_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                },
                {
                    "id": 77,
                    "name": "HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "image": "upload\\HEMNES2_hemnes-daybed-frame-with-3-drawers-white__0767752_pe754248_s5.webp",
                    "product_id": 17,
                    "created_at": "2021-04-19T13:56:14.000000Z",
                    "updated_at": "2021-04-19T13:56:14.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:56:14.000000Z",
            "updated_at": "2021-04-19T13:56:14.000000Z"
        },
        {
            "id": 18,
            "name": "STRANDMON",
            "price": 329,
            "desc": "You can really loosen up and relax in comfort because the high back on this chair provides extra support for your neck.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nStationary cover.\r\nCan be used with STRANDMON ottoman to increase your sitting comfort.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 78,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0392556_pe560378_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0392556_pe560378_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 79,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837429_pe670768_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837429_pe670768_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 80,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837422_pe644554_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837422_pe644554_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 81,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837426_pe649226_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837426_pe649226_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 82,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0392557_pe560379_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0392557_pe560379_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 83,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0837424_pe649224_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0837424_pe649224_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                },
                {
                    "id": 84,
                    "name": "STRANDMON_strandmon-wing-chair-jaerstad-brown__0629848_pe694516_s5.webp",
                    "image": "upload\\STRANDMON_strandmon-wing-chair-jaerstad-brown__0629848_pe694516_s5.webp",
                    "product_id": 18,
                    "created_at": "2021-04-19T14:00:56.000000Z",
                    "updated_at": "2021-04-19T14:00:56.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:00:56.000000Z",
            "updated_at": "2021-04-19T14:00:56.000000Z"
        },
        {
            "id": 19,
            "name": "EKERÖ",
            "price": 159,
            "desc": "The fixed KIMSTAD coated fabric cover is a soft yet durable fabric made of polyester and cotton. The protective polyurethane coating means that it’s easy to keep clean and that it both feels and looks like leather.\r\nThe cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\nThe back cushion can be moved around to fit your sitting style.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n10 year Limited warranty. Read about the terms in the warranty brochure.\r\nPlease check with your local authorities to make sure that the product complies with any specific requirements for business use.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\n\r\nDesigner\r\nEva Lilja Löwenhielm",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 85,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0204740_pe359785_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0204740_pe359785_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 86,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836797_pe600907_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836797_pe600907_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 87,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836787_pe596504_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836787_pe596504_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 88,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0836785_pe585572_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0836785_pe585572_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                },
                {
                    "id": 89,
                    "name": "EKERÖ_ekeroe-armchair-kimstad-black__0629853_pe694518_s5.webp",
                    "image": "upload\\EKERÖ_ekeroe-armchair-kimstad-black__0629853_pe694518_s5.webp",
                    "product_id": 19,
                    "created_at": "2021-04-19T14:02:04.000000Z",
                    "updated_at": "2021-04-19T14:02:04.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:02:04.000000Z",
            "updated_at": "2021-04-19T14:02:04.000000Z"
        },
        {
            "id": 20,
            "name": "EKTORP",
            "price": 599,
            "desc": "The cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\nSeat cushions filled with high resilience foam and polyester fiber wadding provide comfortable support for your body when seated, and easily regain their shape when you rise.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 90,
                    "name": "EKTORP_ektorp-armchair-xl-skrea-dark-brown__0747651_pe744657_s5.webp",
                    "image": "upload\\EKTORP_ektorp-armchair-xl-skrea-dark-brown__0747651_pe744657_s5.webp",
                    "product_id": 20,
                    "created_at": "2021-04-19T14:03:01.000000Z",
                    "updated_at": "2021-04-19T14:03:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:03:01.000000Z",
            "updated_at": "2021-04-19T14:03:01.000000Z"
        },
        {
            "id": 21,
            "name": "VALLENTUNA",
            "price": 520,
            "desc": "All modules in the VALLENTUNA series can be used freestanding or together to create a sofa combination in any size that suits you perfectly.\r\nVALLENTUNA retains its comfort for a long time with generous seating and pocket springs that follow your body.\r\nMURUM fixed cover is made of polyester with a protective polyurethane surface that makes it both soft and firm, while the cover is very durable and easy-care at the same time.\r\nThe cover is easy to keep clean as it can be wiped clean with a damp cloth.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\n2 back cushions are included.\r\nThis cover’s ability to resist abrasion has been tested to handle 50,000 cycles. 15,000 cycles or more is suitable for furniture used every day at home. Over 30,000 cycles means a good ability to resist abrasion.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\n\r\nDesigner\r\nEhlén Johansson",
            "stock": 50,
            "bought": 0,
            "warranty": 12,
            "discount": 10,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 13,
                "name": "Coated fabric armchairs",
                "image": "upload\\Coated fabric armchairs_Coated-fabric-armchairs_35186.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:13.000000Z",
                "updated_at": "2021-04-18T07:04:13.000000Z"
            },
            "images": [
                {
                    "id": 91,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0731401_pe738241_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0731401_pe738241_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 92,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825939_pe691090_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825939_pe691090_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 93,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825941_pe692857_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825941_pe692857_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 94,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825926_pe691081_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0825926_pe691081_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 95,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0817993_ph163262_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0817993_ph163262_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 96,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0831818_ph166296_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0831818_ph166296_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 97,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0719391_pe732040_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0719391_pe732040_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                },
                {
                    "id": 98,
                    "name": "VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0673097_pe717020_s5.webp",
                    "image": "upload\\VALLENTUNA_vallentuna-sectional-1-seat-murum-white__0673097_pe717020_s5.webp",
                    "product_id": 21,
                    "created_at": "2021-04-19T14:04:04.000000Z",
                    "updated_at": "2021-04-19T14:04:04.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:04:04.000000Z",
            "updated_at": "2021-04-19T14:04:04.000000Z"
        },
        {
            "id": 22,
            "name": "EKENÄSET",
            "price": 199,
            "desc": "Clean lines and generous with space, regardless if you are going to read, play a game or just relax in it.\r\nEach armchair has a unique expression since the wooden frame is first brown stained and then covered with clear lacquer that makes the wood’s natural grains visible.\r\nThe chair sits stable and steady since the frame is made of solid wood.\r\nThe chair legs are made of solid wood, which is a durable natural material.\r\n10-year limited warrranty. Read about the terms in the limited warranty brochure.\r\nThis fabric's ability to resist abrasion has been tested to handle 30,000 cycles. A fabric that withstands 15,000 cycles or more is suitable for furniture that should withstand everyday use in the home.\r\nThe cover has a lightfastness level of 5 (the ability to resist color fading) on a scale of 1 to 8. According to industry standards, a lightfastness level of 4 or higher is suitable for home use.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 199,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 14,
                "name": "Lounge chairs",
                "image": "upload\\Lounge chairs_lounge-chairs_53257.webp",
                "desc": null,
                "parent_id": 2,
                "created_at": "2021-04-18T07:04:23.000000Z",
                "updated_at": "2021-04-18T07:04:23.000000Z"
            },
            "images": [
                {
                    "id": 99,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0729143_pe736711_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0729143_pe736711_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 100,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736926_pe740815_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736926_pe740815_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 101,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736925_pe740814_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736925_pe740814_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 102,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736922_pe740811_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736922_pe740811_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 103,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736923_pe740812_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736923_pe740812_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 104,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736924_pe740816_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0736924_pe740816_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                },
                {
                    "id": 105,
                    "name": "EKENÄSET_ekenaeset-armchair-hillared-anthracite__0940909_pe795235_s5.webp",
                    "image": "upload\\EKENÄSET_ekenaeset-armchair-hillared-anthracite__0940909_pe795235_s5.webp",
                    "product_id": 22,
                    "created_at": "2021-04-19T14:08:48.000000Z",
                    "updated_at": "2021-04-19T14:08:48.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T14:08:48.000000Z",
            "updated_at": "2021-04-19T14:08:48.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/search-product?page=1",
        "last": "http:\/\/localhost\/api\/search-product?page=2",
        "prev": null,
        "next": "http:\/\/localhost\/api\/search-product?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
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
                "url": "http:\/\/localhost\/api\/search-product?page=2",
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/search-product",
        "per_page": 15,
        "to": 15,
        "total": 27
    }
}
```

### HTTP Request
`GET api/search-product`


<!-- END_29a4ca6b78fb58cb87f46855903df7f0 -->

<!-- START_1694fac694806aa28bd95d0f2680870e -->
## api/similar-product/{id}
> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/similar-product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/similar-product/1"
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
            "name": "MALM",
            "price": 179,
            "desc": "Adjustable bed sides allow you to use mattresses of different thicknesses.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nYou can sit up comfortably in bed thanks to the high headboard – just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nSKORVA midbeam is included in the price but packaged separately. It is required for the stability of the bed frame and to keep the mattress in place.\r\nSlatted bed base is included in the price but packaged separately.\r\nAdd 2 or 4 MALM bed boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCombines with other furniture in the MALM series.\r\nDesigner\r\nEva Lilja Löwenhielm\/IKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 1,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0749130_pe745499_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 2,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0268303_pe406267_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 3,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0355811_pe383063_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 4,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860700_pe662041_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 5,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0860683_pe566696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 6,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0800857_ph163673_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                },
                {
                    "id": 7,
                    "name": "MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "image": "upload\\MALM_malm-bed-frame-high-white-luroey__0722727_pe733696_s5.webp",
                    "product_id": 1,
                    "created_at": "2021-04-19T13:27:58.000000Z",
                    "updated_at": "2021-04-19T13:27:58.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:27:58.000000Z",
            "updated_at": "2021-04-19T13:27:58.000000Z"
        },
        {
            "id": 2,
            "name": "NEIDEN",
            "price": 75,
            "desc": "The compact design is perfect for tight spaces or under low ceilings, so you can make the most of your available space.\r\nThe hard-wearing solid pine has natural variations in grain, color and texture, giving every piece a unique look.\r\nIf you oil, wax, lacquer or stain the untreated solid wood surface it will be more durable and easy to care for.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nMattress and bedlinens are sold separately.\r\nLURÖY slatted bed base is included in the price, but is packaged separately.\r\nCenter support beam included.\r\nDesigner\r\nIKEA of Sweden\/Jon Karlsson",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 8,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0749131_pe745500_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 9,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0268301_pe406268_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 10,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0355811_pe383063_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 11,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859809_pe664785_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 12,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859806_pe664780_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 13,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0859802_pe664779_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                },
                {
                    "id": 14,
                    "name": "NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "image": "upload\\NEIDEN_neiden-bed-frame-pine-luroey__0751533_pe747074_s5.webp",
                    "product_id": 2,
                    "created_at": "2021-04-19T13:30:01.000000Z",
                    "updated_at": "2021-04-19T13:30:01.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:30:01.000000Z",
            "updated_at": "2021-04-19T13:30:01.000000Z"
        },
        {
            "id": 3,
            "name": "SONGESAND",
            "price": 179,
            "desc": "This classic bed frame will look great with your choice of textiles and bedroom furniture. You can even complete the look with other products from the SONGESAND series.\r\nYou can add SONGESAND bed storage boxes underneath. Perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nAdd SONGESAND underbed storage boxes to create lots of extra storage space.\r\nMattress and bedlinens are sold separately.\r\nCoordinates with other furniture in the SONGESAND series.\r\n\r\nDesigner\r\nIKEA of Sweden",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 15,
                    "name": "SONGESAND_cots_45781.webp",
                    "image": "upload\\SONGESAND_cots_45781.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 16,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0355811_pe383063_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 17,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860907_pe658191_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 18,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0860901_pe658190_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 19,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0800862_ph162917_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                },
                {
                    "id": 20,
                    "name": "SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "image": "upload\\SONGESAND_songesand-bed-frame-brown-luroey__0752931_pe747522_s5.webp",
                    "product_id": 3,
                    "created_at": "2021-04-19T13:31:07.000000Z",
                    "updated_at": "2021-04-19T13:31:07.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:31:07.000000Z",
            "updated_at": "2021-04-19T13:31:07.000000Z"
        },
        {
            "id": 4,
            "name": "BRIMNES",
            "price": 379,
            "desc": "Everything is kept close at hand with integrated storage in the headboard.\r\nAmple storage space is hidden neatly under the bed in 4 large drawers. Perfect for storing quilts, pillows and bed linen.\r\nThe drawers are easy to roll out and in thanks to the casters on the base.\r\nHide cables for lamps and chargers by feeding them through the holes on the top of the headboard.\r\nYou can sit up comfortably in bed thanks to the high headboard; just prop some pillows behind your back and you will have a comfortable place to read or watch TV.\r\nThis versatile bed frame will look great with your choice of textiles and bedroom furniture.\r\nAdjustable bed sides allow you to use mattresses of different thicknesses.\r\n17 layer-glued slats adjust to your body weight and increase the suppleness of the mattress.\r\nThe price for this combination includes SKORVA midbeam, but it is a separate product which you pick from its own shelf at the store. If you buy the bed via the website, SKORVA midbeam is included in the delivery.\r\nSlatted bed base is included in the price but packaged separately.\r\nMattress and bedlinens are sold separately.\r\n\r\nDesigner\r\nIKEA of Sweden\/K Hagberg\/M Hagberg",
            "stock": 100,
            "bought": 0,
            "warranty": 12,
            "discount": 0,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 21,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0637519_pe698355_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 22,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0268303_pe406267_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 23,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0355811_pe383063_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 24,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861355_pe614968_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 25,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861220_pe659473_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 26,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0861363_pe614969_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 27,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0734482_pe739476_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 28,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0738512_pe741471_s5.webp",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                },
                {
                    "id": 29,
                    "name": "BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "image": "upload\\BRIMNES_brimnes-bed-frame-with-storage-headboard-black-luroey__0781823_pe760955_s5.jpg",
                    "product_id": 4,
                    "created_at": "2021-04-19T13:32:32.000000Z",
                    "updated_at": "2021-04-19T13:32:32.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:32:32.000000Z",
            "updated_at": "2021-04-19T13:32:32.000000Z"
        },
        {
            "id": 5,
            "name": "HAUGA",
            "price": 179,
            "desc": "Designed to coordinate perfectly with the rest of the HAUGA series, the upholstered bed frame adds a touch of softness to your bedroom, bringing comfort during the night, and adding style around the clock.\r\nA timeless look with soft upholstery, gentle curves and piping on the headboard and footboard.\r\nThe soft, padded headboard is comfortable to lean against while reading or watching TV in bed.\r\nThere’s plenty of space under the bed for storage boxes - perfect for storing extra quilts and pillows.\r\nYou can easily vacuum under the bed frame to keep the space clean and dust-free.\r\nThe VISSLE cover is soft to touch and made from recycled polyester.\r\nMattress and bedlinens are sold separately.\r\nSlatted bed base and midbeam are included.\r\nThe back of the headboard is finished with a black non-woven material.\r\n\r\nDesigner\r\nLisa Hilland",
            "stock": 50,
            "bought": 0,
            "warranty": 6,
            "discount": 5,
            "rating": 0,
            "rating_averaged": 0,
            "brand": {
                "id": 1,
                "name": "IKEA",
                "image": null,
                "desc": null,
                "created_at": "2021-04-19T13:27:25.000000Z",
                "updated_at": "2021-04-19T13:27:25.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Full, Queen and King size platform beds",
                "image": "upload\\Full, Queen and King size platform beds_double-beds_16284.webp",
                "desc": null,
                "parent_id": 1,
                "created_at": "2021-04-18T06:53:58.000000Z",
                "updated_at": "2021-04-18T06:53:58.000000Z"
            },
            "images": [
                {
                    "id": 30,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789232_pe764315_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 31,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789234_pe764316_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 32,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789235_pe764317_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 33,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789236_pe764322_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 34,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0789244_pe764314_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 35,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966512_ph175119_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 36,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0966511_ph175117_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                },
                {
                    "id": 37,
                    "name": "HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "image": "upload\\HAUGA_hauga-upholstered-bed-frame-vissle-gray__0893556_pe782343_s5.webp",
                    "product_id": 5,
                    "created_at": "2021-04-19T13:34:02.000000Z",
                    "updated_at": "2021-04-19T13:34:02.000000Z"
                }
            ],
            "attributes": [],
            "created_at": "2021-04-19T13:34:02.000000Z",
            "updated_at": "2021-04-19T13:34:02.000000Z"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/similar-product\/1?page=1",
        "last": "http:\/\/localhost\/api\/similar-product\/1?page=1",
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
                "url": "http:\/\/localhost\/api\/similar-product\/1?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "pagination.next",
                "active": false
            }
        ],
        "path": "http:\/\/localhost\/api\/similar-product\/1",
        "per_page": 15,
        "to": 5,
        "total": 5
    }
}
```

### HTTP Request
`GET api/similar-product/{id}`


<!-- END_1694fac694806aa28bd95d0f2680870e -->

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
    "data": []
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


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Rating] 1"
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
    "data": []
}
```

### HTTP Request
`GET api/rating-by-product/{product_id}`


<!-- END_c54775bdd8bb93942b3e4d1e4a0a0dd3 -->

#general


<!-- START_9701a82664aaba3449b081ff78e05a9e -->
## Get order detail

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/order/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/order/1"
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
`GET api/order/{id}`


<!-- END_9701a82664aaba3449b081ff78e05a9e -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Get orders

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


