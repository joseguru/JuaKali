## [Juakali](http://juakali.co.ke) - A Mobile && Web Framework For Blu-Collar Workers and Employers


[Official Website & Documentation](http://juakali.co.ke/about)


## API v 0.9

## Categories
```ajax
GET : http://juakali.co.ke/categories
```
## Locations
```ajax
GET : http://juakali.co.ke/locations
```
## Workers
```ajax
GET : http://juakali.co.ke/workers
```
## Search Worker
```ajax
POST : http://juakali.co.ke/workers/search
[name, location, category, rating]
```

## Rate a worker - such a user needs to be logged in
```ajax
POST : http://juakali.co.ke/rating/
[worker_id, user_id, rating]
```

## Mark worker as available/unavailable
```ajax
POST : http://juakali.co.ke/worker/update/:id
[available: 0|1]
```
## Sign up employers
```ajax
POST : http://juakali.co.ke/auth/create
[email, password]
```
## Sign up Workers
```ajax
POST : http://juakali.co.ke/workers/create
[username, password, email, location_id, category_id]
```
## User Login
```ajax
POST : http://juakali.co.ke/auth/new
[username, password]
```
## Reset lost password

