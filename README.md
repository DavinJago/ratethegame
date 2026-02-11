# Rate The Game 👾

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![BSl](https://img.shields.io/badge/bootstrap-purple?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-yellow?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MARIADB](https://img.shields.io/badge/mariadb-%23ABC74A?style=for-the-badge&logo=mariadb&logoColor=white)


Rate The Game is a web application focused on video game ratings, similar to platforms like IMDb, IGN, and Metacritic — but in a simpler version.
This project allows users to rate games freely, view detailed game information, explore upcoming and newly released games, read the latest gaming news, and access several other basic features.

> Please excuse any limitations or simplicity, as this project is intended as a basic full-stack practice project.

## Features 🪶
* Display newly released and upcoming games
* Rate games freely
* Simple and clean UI/UX
* Basic user profile system
* And several other features

## Contributors
- Davin (Authentication Pages, UI Styling (CSS), Project Structure, Hosting)
- Hamzah (HTML Markup & Initial CSS Layout)
- Rizky (JavaScript Logic & Authentication Controllers)
- Tuppal (Backend Development (PHP) & Database Design)

## Installation & Setup (Laravel)

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

> Note: The game page is not fully completed due to the project deadline.

<img width="2530" height="1348" alt="Screenshot 2026-02-01 232524" src="https://github.com/user-attachments/assets/32615f6d-e1bc-4318-8343-2ba5a390ac3e" />
<img width="2527" height="1356" alt="Screenshot 2026-02-01 232555" src="https://github.com/user-attachments/assets/90a2200d-f013-4538-835e-644fb65c013f" />
<img width="2525" height="1353" alt="Screenshot 2026-02-01 232604" src="https://github.com/user-attachments/assets/9ea49f3d-b680-4bc5-9b1e-88970230babc" />
<img width="2524" height="1355" alt="Screenshot 2026-02-01 232612" src="https://github.com/user-attachments/assets/7bf1630f-d330-4dff-9cf3-43f7e446f375" />
