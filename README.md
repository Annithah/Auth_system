Posinnove Authentication System

This project is a repeated implementation of an authentication system inspired by the original Posinnove platform. It has been recreated using Laravel and Breeze, including user registration, login, and dashboard access. The user interface has been customized to closely match the design of the Posinnove website and styled using custom Tailwind CSS.

Features

- User registration
- User login and logout
- Protected dashboard (only visible to authenticated users)
- Navigation bar with Home, About Us, Services, Contact
- Simple and clean homepage design
- Responsive layout using custom Tailwind CSS

 Technologies Used

- PHP (Laravel Framework)
- Laravel Breeze (for auth scaffolding)
- Blade templating engine
- Tailwind CSS for better design
- SQLite/MySQL (you choose your database)

 How to Install and Run Locally

1. Clone the Repository
git clone https://github.com/Annithah/Auth_system.git
cd Auth_system

2. Install independencies
   
composer install
npm install

3. Run migration
   
php artisan migrate

4. Install laravel breeze if not yet installed

 php artisan breeze:install blade
 npm install && npm run dev

 5.Run Server
 php artisan serve

