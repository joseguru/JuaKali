# [Juakali](http://juakali.co.ke) - A Mobile && Web Framework For Blu-Collar Workers and Employers


[Official Website & Documentation](http://laravel.com)


# API v 0.9

## Categories
```curl
GET : http://juakali.co.ke/categories
```
## Locations
```curl
GET : http://juakali.co.ke/locations
```
## Workers
```curl
GET : http://juakali.co.ke/workers
```
## Search Worker
```curl
POST : http://juakali.co.ke/workers/search
[name, location, category, rating]
```

## Rate a worker - such a user needs to be logged in
```curl
POST : http://juakali.co.ke/rating/
[worker_id, user_id, rating]
```

## Mark worker as available/unavailable
```curl
POST : http://juakali.co.ke/worker/update/:id
[available: 0|1]
```
## Sign up employers
POST : http://juakali.co.ke/auth/create
[email, password]

## Sign up Workers
POST : http://juakali.co.ke/workers/create
[username, password, email, location_id, category_id]

## login url, please provide me a sample user on the system
POST : http://juakali.co.ke/auth/new
[username, password]

## Reset lost password

