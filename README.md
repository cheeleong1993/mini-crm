# Laravel Mini CRM System

This is a simple Customer Relationship Management (CRM) system built using Laravel 11 and TailwindCSS.  
It helps manage customers and their leads efficiently, with a clean and modern design.

---

## ✨ Features

- User Authentication (Register, Login, Logout)
- Manage Customers (Create, View, Edit, Delete)
- Manage Leads (Create, View, Edit, Delete)
- Leads are linked to Customers (Relationship Management)
- Responsive design with TailwindCSS
- Flash success messages on actions
- RESTful routing and clean MVC structure

---

## 🚀 Tech Stack

- PHP 8.2+
- Laravel 11
- MySQL Database
- TailwindCSS
- Vite
- Laravel Breeze (Authentication system)

---

## 🛠 Installation Guide

Follow these steps to set up the project locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/cheeleong1993/mini-crm.git
   cd mini-crm
2. **Install PHP and JS Dependencies:**

   ```bash
   composer install
    npm install
    npm run dev
3. **Set Up the Environment File:**

   ```bash
   cp .env.example .env
4. **Generate Application Key:**

   php artisan key:generate

5. **Run Database Migrations:**

   ```bash
   php artisan migrate
6. **Serve the Application:**

   ```bash
   php artisan serve
   