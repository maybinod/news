## News Project

### Clone the project
```
git clone https://github.com/maybinod/news.git
```
#### Install composer
````
composer install
````

#### Copy .env.example file to .env
````
cp .env.example .env
````

### Create account in newsapi site https://newsapi.org/

### Add newsapi key to this value `NEWS_API_KEY` in .env file or use existing key generated by myself available in env.example file

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
npm install
````

#### Run vue app in hot reload mode
````
npm run hot
````

#### Serve the app
````
php artisan serve
````

#### Run Test
````
php artisan test
````
