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
            "name": "Reinger, Thompson and Nitzsche",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 2,
            "name": "Watsica PLC",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 3,
            "name": "Barrows-Hyatt",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 4,
            "name": "Shanahan-Mueller",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 5,
            "name": "Kshlerin-Morissette",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
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
        "name": "Reinger, Thompson and Nitzsche",
        "created_at": "2021-03-10T11:27:51.000000Z",
        "updated_at": "2021-03-10T11:27:51.000000Z"
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
            "name": "Mertz, Stokes and Ebert",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 2,
            "name": "Goodwin-West",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 3,
            "name": "Kassulke PLC",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 4,
            "name": "Nitzsche PLC",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 5,
            "name": "Schumm, Schiller and Runte",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
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
        "name": "Mertz, Stokes and Ebert",
        "created_at": "2021-03-10T11:27:51.000000Z",
        "updated_at": "2021-03-10T11:27:51.000000Z"
    }
}
```

### HTTP Request
`GET api/category/{category}`


<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->

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
            "name": "Roma Dooley",
            "price": 115877,
            "desc": "In quia ipsa omnis ex voluptas esse. Quod tempore quisquam dolores. Neque quam odio sunt. Quia repellendus magni culpa aut ea cupiditate nihil. Aut quidem nobis non alias.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 2,
            "name": "Prof. Grant Pagac I",
            "price": 8678005,
            "desc": "Aut at exercitationem dolorem quasi exercitationem nihil ipsum. Qui laborum ad dolorum sed cum. Et et mollitia laborum.",
            "brand": {
                "id": 1,
                "name": "Reinger, Thompson and Nitzsche",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 3,
            "name": "Dana Koss",
            "price": 7519085,
            "desc": "Repudiandae et qui harum unde sit. Dolor consequuntur possimus accusamus commodi pariatur aut exercitationem. Quos dolores ratione sunt asperiores.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 4,
            "name": "Jayson Boyle",
            "price": 7769448,
            "desc": "Totam laudantium est veniam labore veniam. Sed et fugiat quae. Commodi earum saepe impedit molestiae. Et quasi aspernatur sunt nihil.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 5,
            "name": "Benny Reinger",
            "price": 2375871,
            "desc": "Et in nam debitis numquam deserunt. Reprehenderit natus maxime debitis molestias. Dolorem vero recusandae aliquam quam. Culpa consequuntur rerum reprehenderit libero corrupti perspiciatis a.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Mertz, Stokes and Ebert",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 6,
            "name": "Kirsten Brekke",
            "price": 6403909,
            "desc": "Quidem temporibus eos delectus voluptatem ipsam. Quo officiis fuga animi reiciendis enim suscipit rem non. Recusandae non est qui quae. Possimus quo eveniet omnis ipsum quaerat.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 7,
            "name": "Effie Bashirian",
            "price": 4736793,
            "desc": "Tempora voluptas distinctio vero libero. Ex et natus cupiditate. Dignissimos voluptatem iste aut nobis. Eum non id ut provident voluptatem aut.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 8,
            "name": "Hayley Wehner",
            "price": 9107455,
            "desc": "Non sequi est rerum ad quia. Fuga dolorem quasi incidunt. Aut natus autem debitis est. Earum necessitatibus hic nesciunt similique atque voluptas.",
            "brand": {
                "id": 1,
                "name": "Reinger, Thompson and Nitzsche",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Schumm, Schiller and Runte",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 9,
            "name": "Benny Tremblay",
            "price": 4516036,
            "desc": "Ut unde omnis asperiores rem commodi asperiores. Temporibus eum animi rerum modi. Nulla natus repudiandae ut exercitationem. Quae totam aliquid sequi illo possimus sapiente ducimus.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 10,
            "name": "Malachi Abernathy MD",
            "price": 77052,
            "desc": "Assumenda dolorem quasi id quos sint. Repellat dicta quasi aut veritatis quae voluptas neque.",
            "brand": {
                "id": 1,
                "name": "Reinger, Thompson and Nitzsche",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Mertz, Stokes and Ebert",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 11,
            "name": "Danika Reynolds",
            "price": 3169878,
            "desc": "Enim eum in quae incidunt enim est corrupti. Dolore saepe tempore consequatur esse necessitatibus. Dolore atque est quia iste repellendus.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 12,
            "name": "Mr. Mateo Altenwerth",
            "price": 9212719,
            "desc": "Rerum at repellendus voluptatum et et architecto. Qui qui ducimus nobis aut enim. Recusandae molestiae dolorum repellendus magnam quis voluptatum veniam quos.",
            "brand": {
                "id": 4,
                "name": "Shanahan-Mueller",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 13,
            "name": "Dr. Manley Schaden",
            "price": 5873344,
            "desc": "Vel voluptatum harum optio et repellendus. Voluptatem est vero quas reprehenderit hic praesentium voluptatem. Ut nemo ut commodi deserunt reprehenderit rerum tempore.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 14,
            "name": "Jackie Schmitt",
            "price": 1475960,
            "desc": "Accusamus iusto eligendi tempore quae officiis sapiente. Consequuntur suscipit numquam soluta quis voluptatum minima facilis.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Schumm, Schiller and Runte",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 15,
            "name": "Augustine Marquardt DDS",
            "price": 7651015,
            "desc": "Dolor non atque nemo at. Ipsum voluptatem nemo atque sit consequatur. Hic magni totam velit voluptatum consequatur qui et necessitatibus. Ut dolorem voluptates inventore distinctio.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 16,
            "name": "Miss Mercedes Conn",
            "price": 6706742,
            "desc": "Ut rerum fuga nisi quibusdam nisi distinctio. Nam possimus molestiae amet ea sit. Aut possimus est eum rerum numquam. Sint aliquid debitis earum nihil non aspernatur.",
            "brand": {
                "id": 4,
                "name": "Shanahan-Mueller",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 17,
            "name": "Adella Mayert",
            "price": 5230273,
            "desc": "Facilis illum quo aut placeat corporis voluptatem. Rerum veritatis dignissimos iusto nihil officia. Qui aut et sit excepturi tempore consequatur. Nobis omnis dolorem consequuntur et.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [
                {
                    "id": 1,
                    "attribute": "120",
                    "attribute_type": "Size",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 2,
                    "attribute": "22",
                    "attribute_type": "Heavy",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 18,
            "name": "Linwood Gleason",
            "price": 1106405,
            "desc": "Iste et consectetur sint dolorem nobis a. Omnis ut et vel quisquam aut omnis. Rerum quo est corrupti non sed eaque earum.",
            "brand": {
                "id": 4,
                "name": "Shanahan-Mueller",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 19,
            "name": "Miss Maureen Funk I",
            "price": 6661701,
            "desc": "Similique omnis veritatis est aperiam ratione reprehenderit. Iste accusantium adipisci soluta vitae vero. At et veniam laboriosam ut. Quod consequatur reprehenderit distinctio unde fugit non.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 20,
            "name": "Ms. Josefa Goldner",
            "price": 6769551,
            "desc": "Beatae officiis accusantium neque harum. Laudantium voluptatem ea ab asperiores.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 21,
            "name": "Triston Kreiger",
            "price": 707669,
            "desc": "Est voluptatibus unde illo voluptatem fuga doloremque. Veniam veniam unde ut veritatis commodi aspernatur facilis. Quis molestiae fuga rerum.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 22,
            "name": "Joanie Gaylord Jr.",
            "price": 110032,
            "desc": "Maxime enim et consequatur porro consequatur doloribus velit. Soluta voluptas odio ad. Neque accusamus quod in commodi. Magni quis facere necessitatibus nesciunt.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 23,
            "name": "Ryan Lowe",
            "price": 1742316,
            "desc": "Quia eum eum tempore et beatae similique impedit. Sed quos omnis ad rerum optio quis nemo. Non ea culpa illum illo. Aspernatur quis eius ut unde.",
            "brand": {
                "id": 1,
                "name": "Reinger, Thompson and Nitzsche",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 5,
                "name": "Schumm, Schiller and Runte",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 24,
            "name": "Magnolia Larkin",
            "price": 5812766,
            "desc": "Ab quo repellendus occaecati culpa ratione. Eos fugit placeat rerum officiis odio corrupti delectus blanditiis. Ut non illo rerum deserunt.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 4,
                "name": "Nitzsche PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 25,
            "name": "Tillman Howe",
            "price": 1614329,
            "desc": "Tenetur officia et sunt omnis beatae est doloremque. Nam nemo et assumenda nesciunt inventore amet. Officiis aperiam incidunt alias exercitationem sunt optio laudantium.",
            "brand": {
                "id": 1,
                "name": "Reinger, Thompson and Nitzsche",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 26,
            "name": "Prof. Harvey Effertz",
            "price": 2058836,
            "desc": "Ea sit non incidunt non sequi. Eos autem quas eveniet omnis commodi deleniti nulla.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 27,
            "name": "Kenton Wilderman",
            "price": 2412249,
            "desc": "Facilis perferendis maiores ipsum minus accusamus aut qui enim. Nihil fugiat voluptas molestiae nobis ipsam. Esse eum modi sapiente. Vero laboriosam magnam nam ipsum.",
            "brand": {
                "id": 3,
                "name": "Barrows-Hyatt",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 3,
                "name": "Kassulke PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 28,
            "name": "Dr. Garret Toy IV",
            "price": 5692118,
            "desc": "Molestias maiores soluta omnis aliquam. Voluptatum sit qui occaecati doloribus sapiente tempore ut. Consequatur repudiandae earum facere aut in iusto quod. Ullam exercitationem velit iure non.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 29,
            "name": "Burnice Nikolaus",
            "price": 8274932,
            "desc": "Dolor a quibusdam possimus accusantium. Harum autem et aut aliquid. Nihil aut at distinctio aperiam dolor nemo. Aut rerum consequatur vel.",
            "brand": {
                "id": 5,
                "name": "Kshlerin-Morissette",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 2,
                "name": "Goodwin-West",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        {
            "id": 30,
            "name": "Rudy Carroll",
            "price": 2070779,
            "desc": "Eius dicta maxime perspiciatis commodi aut eaque tenetur. Sunt numquam fuga reiciendis porro. Et voluptate voluptatem magni quia facere ipsa nobis.",
            "brand": {
                "id": 2,
                "name": "Watsica PLC",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "category": {
                "id": 1,
                "name": "Mertz, Stokes and Ebert",
                "created_at": "2021-03-10T11:27:51.000000Z",
                "updated_at": "2021-03-10T11:27:51.000000Z"
            },
            "attributes": [],
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
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
        "name": "Roma Dooley",
        "price": 115877,
        "desc": "In quia ipsa omnis ex voluptas esse. Quod tempore quisquam dolores. Neque quam odio sunt. Quia repellendus magni culpa aut ea cupiditate nihil. Aut quidem nobis non alias.",
        "brand": {
            "id": 5,
            "name": "Kshlerin-Morissette",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        "category": {
            "id": 2,
            "name": "Goodwin-West",
            "created_at": "2021-03-10T11:27:51.000000Z",
            "updated_at": "2021-03-10T11:27:51.000000Z"
        },
        "attributes": [],
        "created_at": "2021-03-10T11:27:51.000000Z",
        "updated_at": "2021-03-10T11:27:51.000000Z"
    }
}
```

### HTTP Request
`GET api/product/{product}`


<!-- END_1fcbf5d495e6ada99ea017e9ae32b380 -->


