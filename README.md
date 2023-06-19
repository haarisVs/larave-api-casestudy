
# Larave API Case Study

This is a Laravel example of auth:sanctum providing a REST
API.

## Install

    composer install

## Setup .env
## Run migration and seed

    php artisan migrate --seed

# REST API

The REST API to the example app is described below.

## Get list User for Public Guest View

### Request

`GET /api/v1/users/show`

    curl -i -H 'Accept: application/json' http://127.0.0.1:8000/api/v1/users/show

### Response

    {
    "data": [
        {
            "id": 1,
            "email": "admin@gmail.com",
            "password": "$2y$10$4KDem0vRriRAlevMTdguT.Za6SKJDq6eM7HKLRFI2Te.FIMQR4yQO",
            "first_name": "System",
            "last_name": "admin",
            "photo": null
        }
    ],
    "links": {
        "first": "http://127.0.0.1:8000/api/v1/users/show?page=1",
        "last": "http://127.0.0.1:8000/api/v1/users/show?page=1",
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
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/v1/users/show?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://127.0.0.1:8000/api/v1/users/show",
        "per_page": 10,
        "to": 1,
        "total": 1
    }
}

## Authentication endpoints using oauth2

### Request

`POST /api/v1/oauth2`

    curl -i -H 'Accept: application/json' POST -d'_method=POST -d 'email=admin@gmail.com&password=password' http://127.0.0.1:8000/api/v1/oauth2

### Response

    {
        "access_token": "1|j5RwEzCUeRtbfyNq6iNsCNWFkDwIIQHdazaI1EkR"
    }

## Create a new User

### Request

`POST /api/v1/users`

    curl -i -H 'Accept: application/json' -d 
    Authentication - bearer token  "1|j5RwEzCUeRtbfyNq6iNsCNWFkDwIIQHdazaI1EkR"
    form-body
        email:test@gmail.com
        first_name:test
        last_name:test last
        password:password
        photo:file

    http://127.0.0.1:8000/api/v1/users

### Response

    {
        "data": {
            "id": 2,
            "email": "test@gmail.com",
            "password": "$2y$10$yckrjdxc.B67tJpXok7T3eLcXsNZCKdVLVJZqZ/jpUWzjg/gkjjHy",
            "first_name": "test",
            "last_name": "test last",
            "photo": "photos/um3VDVCKc10YKQxNEc6mZ3H45PCgDdWKuzbahF4U.png"
        }
    }

## Get a specific User

### Request

`GET /api/v1/users/id`

    curl -i -H 'Accept: application/json'  Authentication - bearer token  GET -d'_method=GET' http://127.0.0.1:8000/api/v1/users/1

### Response

    {
        "data": {
            "id": 2,
            "email": "test@gmail.com",
            "password": "$2y$10$yckrjdxc.B67tJpXok7T3eLcXsNZCKdVLVJZqZ/jpUWzjg/gkjjHy",
            "first_name": "test",
            "last_name": "test last",
            "photo": "photos/um3VDVCKc10YKQxNEc6mZ3H45PCgDdWKuzbahF4U.png"
        }
    }

## Update User

### Request

`PUT /api/v1/users/id`

    curl -i -H 'Accept: application/json' PUT -d 
    Authentication - bearer token  "1|j5RwEzCUeRtbfyNq6iNsCNWFkDwIIQHdazaI1EkR"
    form-body
        email:first@gmail.com
        first_name:fist
        last_name:mac
        password:password

    http://127.0.0.1:8000/api/v1/users/id

### Response

    {
        "data": {
            "id": 2,
            "email": "first@gmai.com",
            "password": "$2y$10$aUF1ZzoQpLr/2mq0V2t3x.gOkS5.S2ngK.NAoKfZTWD580utsQueu",
            "first_name": "fist",
            "last_name": "mac",
            "photo": "photos/um3VDVCKc10YKQxNEc6mZ3H45PCgDdWKuzbahF4U.png",
            "status": "This Record Update"
        }
    }

### delete

`DELETE /api/v1/users/id`

    curl -i -H 'Accept: application/json' -X Authentication - bearer token DELETE -d'_method=DELETE' http://127.0.0.1:8000/api/v1/users/id

### Response

    {
        "data": {
            "id": 2,
            "email": "first@gmai.com",
            "password": "$2y$10$aUF1ZzoQpLr/2mq0V2t3x.gOkS5.S2ngK.NAoKfZTWD580utsQueu",
            "first_name": "fist",
            "last_name": "mac",
            "photo": "photos/um3VDVCKc10YKQxNEc6mZ3H45PCgDdWKuzbahF4U.png",
            "status": "This Record Deleted"
        }
    }

