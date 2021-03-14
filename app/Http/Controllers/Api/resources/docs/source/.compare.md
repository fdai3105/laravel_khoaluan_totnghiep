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

#Authenticator


APIs of auth
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Created a user

> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"modi","email":"provident","password":"quam","phone":"aperiam","gender":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "modi",
    "email": "provident",
    "password": "quam",
    "phone": "aperiam",
    "gender": 5
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
            "name": "Ratke, Hyatt and Little",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 2,
            "name": "Bosco Group",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 3,
            "name": "Wehner Inc",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 4,
            "name": "Bauch-Goldner",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 5,
            "name": "VonRueden, Tillman and Hermiston",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
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
        "name": "Ratke, Hyatt and Little",
        "created_at": "2021-03-14T11:21:01.000000Z",
        "updated_at": "2021-03-14T11:21:01.000000Z"
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
            "name": "Greenholt LLC",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 2,
            "name": "Flatley Ltd",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 3,
            "name": "Ondricka, Spencer and Williamson",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 4,
            "name": "Breitenberg-Lebsack",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 5,
            "name": "Auer, Goldner and Ratke",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
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
        "name": "Greenholt LLC",
        "created_at": "2021-03-14T11:21:01.000000Z",
        "updated_at": "2021-03-14T11:21:01.000000Z"
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Florencio Emmerich",
            "price": 7134607,
            "desc": "Ullam ut odio amet nihil illo. Suscipit aut accusamus in ut. Et ipsum rem quisquam hic doloribus. Eos eos minima neque nam voluptatem.",
            "brand": {
                "id": 3,
                "name": "Wehner Inc",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 2,
            "name": "Crystel McClure",
            "price": 2095344,
            "desc": "Voluptatum perspiciatis porro repellat rerum explicabo libero quo vitae. Labore architecto enim repudiandae doloribus est voluptatibus.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 3,
            "name": "Dr. Orion O'Kon",
            "price": 4055594,
            "desc": "Eum est fugit earum et. Quod neque reiciendis expedita dicta et eaque delectus. Culpa est ducimus occaecati ut modi est. Nesciunt quaerat id sunt deserunt adipisci voluptatibus.",
            "brand": {
                "id": 1,
                "name": "Ratke, Hyatt and Little",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 4,
            "name": "Trisha Schoen DDS",
            "price": 4310021,
            "desc": "Vel totam eveniet veniam fugit nesciunt sed. Quia sunt sed itaque est. Et quo facilis enim et. Voluptatem ipsa tempore eos distinctio qui. Accusantium blanditiis qui asperiores fugiat amet.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Greenholt LLC",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 5,
            "name": "Miss Breana Nitzsche",
            "price": 9714816,
            "desc": "Et explicabo voluptatem reiciendis doloribus numquam et fugit animi. Qui laboriosam id dolore molestiae. Est dolor et cum itaque vitae. Sapiente reiciendis voluptas et iure est temporibus et.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 6,
            "name": "Kiera Swaniawski DVM",
            "price": 7121339,
            "desc": "Laboriosam modi quia alias. Adipisci ut nam laudantium praesentium provident et itaque. Veniam dignissimos aliquid eos saepe. Molestias in eaque aliquam dicta qui debitis praesentium.",
            "brand": {
                "id": 1,
                "name": "Ratke, Hyatt and Little",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Greenholt LLC",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 7,
            "name": "Viola Treutel",
            "price": 2448708,
            "desc": "At consequatur laboriosam officiis non facere enim aspernatur. Dolores dolorem praesentium molestiae officia. Dicta qui sint ut reiciendis.",
            "brand": {
                "id": 1,
                "name": "Ratke, Hyatt and Little",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 8,
            "name": "Beulah Smitham",
            "price": 1832159,
            "desc": "Aut qui sunt nemo dolore culpa et quas. Alias amet aliquid ullam vero. Voluptatem et porro quasi dolorem.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 9,
            "name": "Mr. Freddie Rempel",
            "price": 6832492,
            "desc": "Ipsum omnis qui debitis culpa et laborum ex. Accusantium est nihil nostrum quam. Maxime quia molestiae quibusdam sit veniam.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 10,
            "name": "Rahsaan Bashirian",
            "price": 738518,
            "desc": "Earum et ipsum fugit corporis qui id. Incidunt est est et nihil. Ea molestiae voluptate aut quos voluptatum. Similique at ducimus unde laboriosam sunt.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 11,
            "name": "Kelvin Bechtelar",
            "price": 9859192,
            "desc": "Eveniet nobis adipisci est sequi ab atque. Enim officiis laborum sunt quo atque. Et suscipit et architecto repellat qui voluptas.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 12,
            "name": "Myles Kuphal V",
            "price": 9583001,
            "desc": "Neque minima fugiat quibusdam deserunt voluptas. Maxime itaque veniam officia omnis. Laborum sit aut iste ipsam hic.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 13,
            "name": "Joany Metz",
            "price": 4066752,
            "desc": "Aut doloremque et magnam aliquam architecto non provident. Vitae suscipit est eum nesciunt consequatur. Placeat consequatur aperiam ea iure dolores.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 14,
            "name": "Elias Little",
            "price": 3386114,
            "desc": "Ipsum dolore consectetur officia in et et. Quasi veniam harum laboriosam. Dolorum nihil ut dolore laudantium.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 15,
            "name": "Delia Swift",
            "price": 5053449,
            "desc": "Sit aut voluptate unde dicta dicta. Ab facere et officiis qui rerum aut dolor. Quibusdam est dolores qui aut libero. Et doloremque dolore fugiat a sit ea veniam enim.",
            "brand": {
                "id": 3,
                "name": "Wehner Inc",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 16,
            "name": "Evangeline Rice III",
            "price": 7169770,
            "desc": "Repellendus voluptate omnis qui et animi optio error. Voluptas facilis debitis odit rem et. Sunt rerum aut architecto velit. Dolores beatae dolorum officia sunt.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 17,
            "name": "Lauretta Krajcik",
            "price": 5178380,
            "desc": "Quasi minus magnam ut ut ut in explicabo. Quidem iusto et est est ipsa error suscipit quo. Molestiae minima quam mollitia voluptatibus sint. Fuga quam voluptatem sed.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Greenholt LLC",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 18,
            "name": "Cordell Schaden",
            "price": 2050672,
            "desc": "Est quibusdam fugit aperiam iusto. Illo voluptatibus sed consequatur. Aut accusamus nesciunt veritatis iste vero ut explicabo. Fuga numquam sunt illo aut voluptas autem.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 19,
            "name": "Celia Volkman",
            "price": 9876389,
            "desc": "Est sit libero nostrum quia numquam nam. Laudantium at quis ut quia eum. Sed molestias fuga laboriosam voluptatibus quaerat.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 20,
            "name": "Marlee Homenick",
            "price": 4964746,
            "desc": "Tempora repellat culpa ut. Voluptatum natus eum consequatur. Unde quia dignissimos recusandae est ut nisi libero.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 21,
            "name": "Luna Casper",
            "price": 1920849,
            "desc": "Molestiae repellendus impedit molestias ipsa amet quae. Quibusdam vitae mollitia rerum est. Rerum est quidem mollitia voluptate qui officiis.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Ondricka, Spencer and Williamson",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 22,
            "name": "Brooklyn Effertz",
            "price": 8828181,
            "desc": "Repellat sed est libero illum. Nam praesentium quia ab dolorem iusto officiis dignissimos sed. Facere et deleniti iusto.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Auer, Goldner and Ratke",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 23,
            "name": "Mr. Franco Dickinson Jr.",
            "price": 5883526,
            "desc": "Laborum et est dolores nisi et. Fugit non debitis exercitationem consequatur. Doloribus commodi accusantium voluptas quasi.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Greenholt LLC",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 24,
            "name": "Keely Schuster",
            "price": 9900347,
            "desc": "Dolorem qui deserunt omnis excepturi officia voluptas occaecati. Nulla possimus exercitationem sit excepturi nam. Repellat vel harum architecto voluptas quo est. Aut architecto culpa earum soluta.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 25,
            "name": "Prof. Zack Batz",
            "price": 1355469,
            "desc": "Non sit in eos laborum blanditiis architecto reiciendis. Velit fuga laborum dolorem consequatur saepe ullam labore. Nobis non qui optio fuga impedit. Ex quibusdam omnis est voluptas eius harum earum.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Auer, Goldner and Ratke",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 26,
            "name": "Dr. Abelardo Rowe IV",
            "price": 90607,
            "desc": "Quo maiores nobis eligendi qui. Molestiae eum iure iure possimus delectus veritatis. Reprehenderit corrupti doloremque in quaerat.",
            "brand": {
                "id": 2,
                "name": "Bosco Group",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Auer, Goldner and Ratke",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 27,
            "name": "Dr. Emory O'Kon",
            "price": 7607190,
            "desc": "Quas dignissimos sed nemo. Fugit et omnis necessitatibus modi sunt quia. Distinctio quasi ut rerum quos officia. Dolore non corrupti id odit et molestias velit.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Breitenberg-Lebsack",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 28,
            "name": "Torrey Gottlieb Jr.",
            "price": 1835716,
            "desc": "Sit et distinctio qui officiis pariatur nemo at. Sunt sunt porro magnam qui ea consequatur omnis. Deleniti quisquam magni accusamus impedit aut a aliquam.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 29,
            "name": "Sienna Wiza IV",
            "price": 6326385,
            "desc": "Sunt labore eum tenetur modi dolorem. Molestias voluptas ipsam odio nesciunt sit. Voluptates odit aut velit. Maiores temporibus quia ea corporis quis occaecati.",
            "brand": {
                "id": 5,
                "name": "VonRueden, Tillman and Hermiston",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Auer, Goldner and Ratke",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        {
            "id": 30,
            "name": "Angelo Towne",
            "price": 5472496,
            "desc": "Aspernatur incidunt unde cumque dicta harum et voluptate. Non voluptas necessitatibus fugit maiores ut in. Et ut eos quod voluptates libero maxime. Omnis quis et voluptatibus consectetur.",
            "brand": {
                "id": 4,
                "name": "Bauch-Goldner",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Flatley Ltd",
                "created_at": "2021-03-14T11:21:01.000000Z",
                "updated_at": "2021-03-14T11:21:01.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        }
    ]
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


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Florencio Emmerich",
        "price": 7134607,
        "desc": "Ullam ut odio amet nihil illo. Suscipit aut accusamus in ut. Et ipsum rem quisquam hic doloribus. Eos eos minima neque nam voluptatem.",
        "brand": {
            "id": 3,
            "name": "Wehner Inc",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        "category": {
            "id": 2,
            "name": "Flatley Ltd",
            "created_at": "2021-03-14T11:21:01.000000Z",
            "updated_at": "2021-03-14T11:21:01.000000Z"
        },
        "attributes": [],
        "created_at": "2021-03-14T11:21:01.000000Z",
        "updated_at": "2021-03-14T11:21:01.000000Z"
    }
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


