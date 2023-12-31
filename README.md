# Laravel Task Manager Project

This repository contains a Laravel project for managing tasks with a MySQL database. The project is built using Laravel [version] and PHP [version].

## Getting Started

Follow these instructions to set up and run the project locally.

### Prerequisites

- PHP [version]
- Composer (Dependency Manager for PHP)
- MySQL Server

### Installation

1. Clone the repository:

   ```bash
   cd laravel-task-manager

2. Install project dependencies using Composer:

    ```bash
    composer install

3. Copy the .env.example file and rename it to .env:
   
   ```bash
    cp .env.example .env

4. Generate the application key:

     ```bash
     php artisan key:generate

5. Configure the .env file:

     ```bash
        APP_NAME=LaravelTaskManager
        APP_ENV=local
        APP_KEY=[your-generated-app-key]
        APP_DEBUG=true
        APP_URL=http://localhost

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=task_manager
        DB_USERNAME=[your-database-username]
        DB_PASSWORD=[your-database-password]

6. Create the task_manager database in MySQL.

     ```bash
     php artisan migrate --seed

7. Start the development server:

     ```bash
     php artisan serve

8. Access the application in your browser at http://localhost:8000.


