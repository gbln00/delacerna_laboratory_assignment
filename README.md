How to Install a Laravel App from GitHub
1. Prerequisites

Make sure you have these installed on your machine:

PHP (8.0 or higher recommended)

Composer

Git

MySQL (or another supported database)

Node.js & npm (optional, for frontend assets)

2. Clone the Project from GitHub

Open your terminal and run:

git clone https://github.com/username/repository-name.git


Then go into the project folder:

cd repository-name

3. Install PHP Dependencies

Run Composer to install Laravel dependencies:

composer install

4. Create Environment File

Copy the example environment file:

cp .env.example .env


Generate the application key:

php artisan key:generate

5. Configure the Database

Open the .env file and update these values:

DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password


Create the database in MySQL (or your DB tool).

6. Run Migrations (and Seeders if needed)
php artisan migrate


If the project uses seeders:

php artisan db:seed

7. Install Frontend Dependencies (Optional)

If the project uses frontend assets:

npm install
npm run dev

8. Start the Development Server
php artisan serve


Open your browser and visit:

http://127.0.0.1:8000

9. Done 🎉

Your Laravel app should now be running locally.
