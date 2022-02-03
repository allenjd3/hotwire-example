# Hotwire Example

### Installation

```bash
git clone git@github.com:allenjd3/hotwire-example.git
cd hotwire-example

cp .env.example .env
touch ./database/database.sqlite

composer install && npm install && npm run dev

php artisan key:generate

php artisan migrate:fresh --seed

php artisan serve
```

You can log in using the user admin@admin.com with the password 'password' (Don't share that password!!!)

### Watch Video 

Watch the video [here](video)- Then come back here for detailed instructions!
