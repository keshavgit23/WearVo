WearVo – Laravel E-Commerce Platform

WearVo is a modern mini-ecommerce platform built using Laravel 12, MySQL, TailwindCSS, and Blade.
It includes product management, authentication, admin/product CRUD, and a clean frontend UI.


---

🚀 Features

✅ User Features

User Registration & Login

View latest products

Product details page

Profile page

Secure sessions & CSRF protection


🛒 Product Management (Admin)

Add new products

Edit / Delete products

Product images stored using Laravel Storage

Slug-based clean URLs


🔐 Authentication

Laravel Breeze authentication

Redirect protection using middleware

Login required to access profile dashboard


🎨 UI / Frontend

TailwindCSS

Responsive layout

Clean product grid



---

🏗️ Tech Stack

Category	Technologies

Backend	Laravel 12 (PHP 8.2)
Frontend	Blade, TailwindCSS, Vite
Database	MySQL
Auth	Laravel Breeze
Deployment	GitHub (Local Dev)



---

📁 Project Structure

myapp/
 ├── app/
 ├── resources/views/
 ├── routes/web.php
 ├── public/
 ├── database/migrations/
 └── storage/


---

⚙️ Setup Instructions

1️⃣ Clone Repo

git clone https://github.com/keshavgit23/WearVo.git
cd WearVo

2️⃣ Install Dependencies

composer install
npm install
npm run dev

3️⃣ Create Environment File

cp .env.example .env
php artisan key:generate

4️⃣ Setup Database

Update .env:

DB_DATABASE=wearvo
DB_USERNAME=root
DB_PASSWORD=

Then run migrations:

php artisan migrate

5️⃣ Run the Project

php artisan serve


---

📸 Screenshots (Add later)

Home Page

Products

Product Page

Admin CRUD


(You can upload screenshots anytime and I’ll help you add them.)


---

🤝 Contributing

This is a learning-focused ecommerce project.
Feel free to open issues or add improvements.


---

📜 License

MIT License.

