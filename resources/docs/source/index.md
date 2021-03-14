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
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Brand


APIs for brand
<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
    -G "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Price-Klein",
        "created_at": "2021-03-12T17:08:51.000000Z",
        "updated_at": "2021-03-12T17:08:51.000000Z"
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
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
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
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Veum Inc",
        "created_at": "2021-03-12T17:08:51.000000Z",
        "updated_at": "2021-03-12T17:08:51.000000Z"
    }
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

#Comment


APIs for comment
<!-- START_b9d6267392532c6008f9ac9629a3d4c3 -->
## Display comments by product id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/comment/comment-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/comment/comment-product/{product_id?}`


<!-- END_b9d6267392532c6008f9ac9629a3d4c3 -->

#Product


APIs for product
<!-- START_dc538d69a8586a7a3c36d4393cee42e6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/product`


<!-- END_dc538d69a8586a7a3c36d4393cee42e6 -->

<!-- START_1fcbf5d495e6ada99ea017e9ae32b380 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/product/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/product/{product}`


<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->

#Rating


APIs for rating
<!-- START_e2cf52df507d02a2867a78c3c1dd77b5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/rating`


<!-- END_e2cf52df507d02a2867a78c3c1dd77b5 -->

<!-- START_d44382a67dad858edca95bf02a4642fb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/rating/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/rating/{rating}`


<!-- END_d44382a67dad858edca95bf02a4642fb -->

<!-- START_e42ceedbb38aa06f2859aa0f8af5ba18 -->
## Display ratings by product id

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/rating/rating-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/rating/rating-product/{product_id?}`


<!-- END_e42ceedbb38aa06f2859aa0f8af5ba18 -->

<!-- START_820bc036154f8d8ed569b9728dba9650 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    -G "http://localhost/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
`GET api/comment/{comment}`


<!-- END_290df647fbc0fcbe56d880990e4bfdfc -->


