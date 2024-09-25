# NEYL FINDER APPLICATION

This project is a simple Laravel application deployed using Docker with a MySQL database. This README provides the steps to set up, run, and test the application locally.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Application](#running-the-application)
- [Testing the Database Connection](#testing-the-database-connection)
- [Making Changes](#making-changes)
- [Git Integration](#git-integration)
- [License](#license)

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started) (including Docker Compose)
- [Git](https://git-scm.com/downloads)

## Installation

1. **Clone the Repository**:
   Open a terminal and clone this repository to your local machine:
   ```bash
   git clone https://github.com/yourusername/laravel-docker-app-sand-box.git
   cd laravel-docker-app-sand-box

2. **Build the Docker Containers**:
   Use Docker Compose to build the application and database containers:
   ```bash
   docker-compose build

3. **Start the Containers**:
   Once the build is complete, start the containers:
   ```bash
   docker-compose up -d

4. **Install Dependencies**:
   Enter the application container and install the Laravel dependencies:
   ```bash
   docker exec -it app bash
   composer install

5. **Set Up the Environment**:
   Copy the example environment file to create your own:
   ```bash
   cp .env.example .env
   ```

   Open the .env file and set the database connection parameters:
   ```bash
   cp .env.example .env

6. **Generate Application Key**:
   Still inside the application container, run:
   ```bash
   php artisan key:generate

7. **Run Migrations**:
   Run the database migrations to set up your database tables:
   ```bash
   php artisan migrate

## Running the Application

1. The application should now be accessible at http://localhost:8000 in your web browser.

## Testing the Database Connection

1. **Enter the application container**:
   ```bash
   docker exec -it app bash

2. **Run the database migrations (if not done previously)**:
   ```bash
   php artisan migrate

3. **If you want to test the connection with a simple query, you can use Tinker**:
   ```bash
   php artisan migrate
   ```

   In Tinker, you can run:
   ```bash
   DB::connection()->getPdo();
   ```

## Making Changes

You can edit your Laravel application files directly in the app directory of your local machine. Changes will reflect in the Docker container since the directory is mounted.

## Git Integration

1. **Stage Your Changes**:
   ```bash
   git add .

2. **Commit Your Changes**:
   ```bash
   git commit -m "Your commit message"

3. **Push Changes to GitHub**:
   ```bash
   git push origin master

## License

This project is licensed under the MIT License. See the LICENSE file for details.


