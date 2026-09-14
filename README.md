# Point-of-Sale (POS) System

A basic four-page Point-of-Sale (POS) system developed using **CodeIgniter 4** for a technical assessment.

The application was initially developed using static PHP arrays and has now been extended to use a **MySQL database with CodeIgniter Models**.

## Features

The application contains four pages:

- **Home** - Landing page of the POS system
- **About** - Information about the application
- **Customer Accounts** - Displays customer records retrieved from MySQL
- **User Accounts** - Displays user/staff records retrieved from MySQL

## Routes

| Page | Route |
|---|---|
| Home | `/` |
| About | `/about` |
| Customer Accounts | `/customers` |
| User Accounts | `/users` |

## Database

The application uses a MySQL database containing two tables:

### Customers

- `id`
- `full_name`
- `email`
- `phone`
- `created_at`

### Users

- `id`
- `username`
- `full_name`
- `created_at`

Each table contains at least five sample records.

The database export is included in:

```text
database/pos_system.sql
```

## CodeIgniter Models

Database records are retrieved using two CodeIgniter Models:

```text
app/Models/CustomerModel.php
app/Models/UserModel.php
```

The controllers use the Models and CodeIgniter's `findAll()` method to retrieve records from MySQL.

The general application flow is:

```text
Route
  ↓
Controller
  ↓
Model
  ↓
MySQL Database
  ↓
Controller
  ↓
View
  ↓
Browser
```

## Technologies Used

- PHP
- CodeIgniter 4
- MySQL
- phpMyAdmin
- Composer
- HTML
- Git
- GitHub

## Local Installation

Clone the repository:

```bash
git clone https://github.com/quincn/pos-system.git
```

Enter the project directory:

```bash
cd pos-system
```

Install Composer dependencies:

```bash
composer install
```

Copy the environment template:

```bash
copy env .env
```

Create a MySQL database named:

```text
pos_system
```

Import:

```text
database/pos_system.sql
```

Configure the database connection in `.env`:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = pos_system
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```

Start CodeIgniter:

```bash
php spark serve
```

Then visit:

```text
http://localhost:8080/
```

## Project Structure

```text
app/
├── Controllers/
│   ├── Pages.php
│   ├── Customers.php
│   └── Users.php
├── Models/
│   ├── CustomerModel.php
│   └── UserModel.php
└── Views/
    ├── home.php
    ├── about.php
    ├── customers.php
    └── users.php

database/
└── pos_system.sql
```

## Live Application

The hosted version is available at:

http://serranotw35.wuaze.com/