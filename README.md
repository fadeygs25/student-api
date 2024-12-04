Here is the translation of the guide to install and run Laravel on macOS:

---

**To install and run Laravel on macOS, you need to follow a few basic steps, including installing PHP, Composer, and Laravel. Below is a detailed guide:**

### Step 1: Install Homebrew (if not already installed)
Homebrew is a popular package manager for macOS that helps you install the necessary tools. If you haven't installed it yet, you can do so as follows:

1. Open Terminal.
2. Run the following command to install Homebrew:
   ```bash
   /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
   ```

### Step 2: Install PHP
Laravel requires PHP 8.1 or higher. You can install PHP via Homebrew.

1. Run the following command to install PHP:
   ```bash
   brew install php
   ```

2. After installation, you can check the installed PHP version with this command:
   ```bash
   php -v
   ```

### Step 3: Install Composer
Composer is a dependency manager for PHP, which is essential for installing Laravel.

1. Run the following command to install Composer:
   ```bash
   brew install composer
   ```

2. Check the installed Composer version:
   ```bash
   composer --version
   ```

### Step 4: Install Laravel
Once PHP and Composer are installed, you can install Laravel.

1. Install Laravel through Composer. Open Terminal and run the following command to create a new Laravel project:
   ```bash
   composer create-project --prefer-dist laravel/laravel my-laravel-app
   ```

   Replace `my-laravel-app` with the name of the directory you want for your project.

2. After the installation is complete, navigate to the project directory:
   ```bash
   cd my-laravel-app
   ```

### Step 5: Configure and Run Laravel
1. To run the Laravel application, you can use the `artisan serve` command, a built-in tool in Laravel to run the development server.

   In the project directory, run the following command:
   ```bash
   php artisan serve
   ```

2. The development server will start, and you will see a message like this:
   ```
   Laravel development server started: http://127.0.0.1:8000
   ```

3. Open your browser and visit `http://127.0.0.1:8000` to see the Laravel application running.

### Step 6: Install and Configure Database (Optional)
Laravel uses a configuration file `.env` for database connections. You can configure it to connect to MySQL, SQLite, PostgreSQL, etc.

1. If you are using MySQL, you need to install MySQL:
   ```bash
   brew install mysql
   ```

2. Start MySQL:
   ```bash
   brew services start mysql
   ```

3. Update the database configuration in the `.env` file of your Laravel project (look for the `DB_*` section).

### Step 7: Test the Laravel Application
- After completing the setup, you can run the following command to test the application:
  ```bash
  php artisan migrate
  ```

This command will perform any migrations (if any) for your database.

### Summary of Key Commands:
- Install PHP: `brew install php`
- Install Composer: `brew install composer`
- Install Laravel: `composer create-project --prefer-dist laravel/laravel <project-name>`
- Run Laravel: `php artisan serve`
- Start MySQL: `brew services start mysql`

Good luck with installing and running Laravel on macOS!

---