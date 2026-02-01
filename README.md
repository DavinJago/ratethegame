# Rate The Game 👾

Rate The Game is a web application focused on video game ratings, similar to platforms like IMDb, IGN, and Metacritic — but in a simpler version.
This project allows users to rate games freely, view detailed game information, explore upcoming and newly released games, read the latest gaming news, and access several other basic features.

Please excuse any limitations or simplicity, as this project is intended as a basic full-stack practice project.

## Features 🪶
* Display newly released and upcoming games
* Rate games freely
* Simple and clean UI/UX
* Basic user profile system
* And several other features


### Installation & Setup (Laravel)

Make sure you already have:

- XAMPP (Apache + MySQL + PHP)
- Composer
- Laravel installed

```terminal
cd C:/xampp/htdocs/RTG
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

then open in your browser

```http://127.0.0.1:8000```

Even though the project is placed inside xampp/htdocs, Laravel still requires:

```php artisan serve```

because Laravel uses its own development server.
