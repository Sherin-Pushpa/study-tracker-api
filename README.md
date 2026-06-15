# 📚 Study Tracker API
A Laravel REST API application for managing study records with full CRUD operations. Built using Laravel MVC architecture and tested using Postman.
## 🚀 Features
- Create study records
- View all records
- View single record
- Update records
- Delete records
- REST API structure
- Tested using Postman
- Laravel MVC architecture
## 🛠️ Tech Stack
- Laravel
- PHP
- MySQL
- Postman
## 📌 API Endpoints

| Method | Endpoint |
|--------|----------|
| GET | /api/study-tracker |
| GET | /api/study-tracker/{id} |
| POST | /api/study-tracker |
| PUT | /api/study-tracker/{id} |
| DELETE | /api/study-tracker/{id} |

## ⚙️ Installation
```bash
git clone https://github.com/your-username/study-tracker-api.git

cd study-tracker-api

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve
```
## 🔥 Run Project

After starting the server:

```
http://127.0.0.1:8000/api/study-tracker
```

## 🧪 Example POST Request

```json
{
  "title": "Laravel Basics",
  "description": "Learned CRUD operations",
  "date": "2026-06-15"
}
```

---

## 📁 Project Structure

```
app/
 ├── Http/
 │    ├── Controllers/
 ├── Models/
routes/
 ├── api.php
database/
 ├── migrations/
```

---

## 📌 Future Improvements

- Authentication (Laravel Sanctum / JWT)
- Pagination
- Search and filtering
- Better dashboard UI
- Role-based access (Admin/User)

---

## 👨‍💻 Author

Your Name
