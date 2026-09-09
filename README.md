# Point-of-Sale (POS) System

A basic four-page Point-of-Sale (POS) system developed using **CodeIgniter 4** for a laboratory activity.

## Features

The application contains four pages:

- **Home** - Landing page of the POS system
- **About** - Information about the application
- **Customer Accounts** - Displays customer records
- **User Accounts** - Displays user/staff records

## Routes

| Page | Route |
|---|---|
| Home | `/` |
| About | `/about` |
| Customer Accounts | `/customers` |
| User Accounts | `/users` |

## Customer Accounts

Customer records are stored temporarily using a static PHP array.

Each customer contains:

- Full Name
- Email
- Phone

The records are displayed in the view using a PHP `foreach` loop.

## User Accounts

User/staff records are also stored temporarily using a static PHP array.

Each user contains:

- Username
- Full Name
- Role

The records are displayed in the view using a PHP `foreach` loop.

## Data Source

This version of the application does **not use a database**.

Static PHP arrays are used as temporary data sources for the Customer Accounts and User Accounts pages, as required by the laboratory activity.

Therefore, there is no database export for this version of the project.

## Technologies Used

- PHP
- CodeIgniter 4
- Composer
- HTML
- Git
- GitHub

## Installation

Clone the repository:

```bash
git clone https://github.com/quincn/pos-system.git