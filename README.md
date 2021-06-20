## News Project

### Clone the project
```
git clone git@github.com:maybinod/news.git
```

#### Copy .env.example file to .env
````
cp .env.example .env
````

#### Create account in newsapi site https://newsapi.org/

#### Add newsapi key to this value `NEWS_API_KEY` in .env file

#### Generate key
````
php artisan key:generate
````

#### Configure the env variable to database connection

#### Run migration
````
php artisan migrate
````

#### Import news data from `newsapi.org` by running the command
````
php artisan news:create
````

#### Install npm
````
npm run install
````

#### Run vue app in hot reload mode
````
npm run hot
````

#### Serve the app
````
php artisan serve
````
