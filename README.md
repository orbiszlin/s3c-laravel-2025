<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Demonstration of Laravel framework

This project demonstrates how to work with the Laravel framework and familiarizes students with this development
framework. It also teaches students best practices in web application development regardless of the chosen framework
solution, and focuses on the advantages and disadvantages of specific solutions.

## Installation

**Local installation**

To install, you need to have these components installed on your system:

- PHP 8.3 or higher is available in the command line.
- Composer is available in the command line.
- NPM (v11.5) and Node.js (v24.5) or newer versions.
- _General installation (new project and system requirements) is described
  at [Výukových materiálech](https://jakubforman.notion.site/Instalace-Laravelu-28ec832877e580c58ee4d394814f8861)._

1. Clone the repository `git clone` of this project, or use an IDE cloning tool.
2. Install PHP libraries `composer install`.
3. ~~Install NPM libraries `npm install`~~ (not necessary yet).
4. Set up the project:
   - Copy `.env.example > .env` file and setup the file.
   - Generate key `php artisan key:generate`.
5. if using SQLite, create an empty file: `/database/database.sqlite`.
6. Migrate database and seed all data  `php artisan migrate:fresh --seed`.
7. ~~Build CSS `npm run dev` or `npm run build` for built~~ (not needed yet).
8. Start server `php artisan serve`.

