# The test task for PHP Junior Developer: Develop a book inventory system

Develop a basic book inventory system using Laravel along with the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) and integrate the Filament admin panel.

## Project Requirements

1. **Book Model**: Design a `Book` model with the following attributes: `id`, `title`, `author`, `publication_year`, `publisher`, `isbn`.

2. **User and Admin Roles**: Implement a simple user authentication system with role-based access control. Users with the `Admin` role should have access to the Filament admin panel for managing books, while users with the `User` role should only be able to view the list of books.

3. **List Page for Users**: Develop a page accessible to `User` roles that displays all the books in the inventory. Each book entry should include details such as `title`, `author`, `publication_year`, `publisher`, and `isbn`.

4. **Filament Admin Panel**: Enable CRUD operations (`Create`, `Read`, `Update`, `Delete`) for managing books through the Filament admin panel.

5. **Authorization**: Ensure that only users with the `Admin` role can perform actions such as creating, updating, or deleting books. Users with the `User` role should only have permission to view the list of books.

## Getting Started with LARAVEL SAIL

Follow these steps to set up the project on your local machine.

### Prerequisites

- Docker
- Docker Compose

### Installation
1. Clone the repository
```
git clone https://github.com/aarkhyptsev/tall-book-inventory.git
```
2. Navigate to the project directory
```
cd tall-book-inventory
```
3. Copy the .env file and set up environment variables
```
cp .env.example .env
```
4. Update the .env
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
5. Installing Composer Dependencies for Existing Applications
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```
6. Generate an application key:
```
./vendor/bin/sail artisan key:generate

```
7. Start Docker and run Sail containers:
```
./vendor/bin/sail up -d
```
8. Running migrations and populating the database
```
./vendor/bin/sail artisan migrate --seed
```
9. Install and run npm
```
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```
10. Accessing the Application

The application will be accessible at http://localhost.

## Getting Started (Classic Method)

Follow these steps to set up the project on your local machine without Docker.

### Prerequisites

- PHP
- Composer
- MySQL or another database supported by Laravel

### Installation

1. Clone the repository
```
git clone https://github.com/aarkhyptsev/tall-book-inventory.git
```
2. Navigate to the project directory
```
cd tall-book-inventory
```
3. Install Composer dependencies
```
npm install
composer install

```
4. Copy the .env file and set up environment variables
```
cp .env.example .env
```
5. Update the .env
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
6. Generate the application key
```
npm run dev
php artisan key:generate

```
7. Run migrations and seed the database
```
php artisan migrate
php artisan db:seed

```
8. Start the local development server
```
php artisan serve

```
9. Accessing the Application

The application will be accessible at http://localhost.
