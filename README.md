# 📚 Library Management System (Laravel + Bootstrap)

A **Library Management System** developed using **Laravel (PHP Framework)** for the backend and **Bootstrap** for the frontend.  
The purpose of this system is to help libraries efficiently manage books, members, employees, and book circulation while maintaining records in an organized way.

The project is currently **under development**. At the moment, the **Manage Books module is implemented**, while other modules are planned for future implementation.

---

# 🚀 Features

- Built using **Laravel Framework**
- Responsive interface using **Bootstrap**
- Modular system design
- CRUD functionality for book management
- Dashboard with real-time statistics
- Expandable structure for future modules

---

# 📦 Modules

The system is divided into multiple modules to manage different aspects of the library.

## 1. Manage Books ✅ (Implemented)

This module handles all book-related operations in the library.

### Features
- Add new books
- Edit book details
- Delete books
- Manage book categories

### Sub Modules
- **Author Management**
- **Genre Management**
- **Book Management**

### Supported Operations
- Create
- Read
- Update
- Delete

---

## 2. Manage Members ⏳ (Planned)

This module will manage library members.

### Planned Features
- Add/Edit/Delete members
- Member contact information
- Membership records
- Borrowing history

---

## 3. Inventory Management ⏳ (Planned)

This module will track the availability and stock of books.

### Planned Features
- Track available books
- Record damaged or lost books
- Inventory reports

---

## 4. Issue Books ⏳ (Planned)

This module will manage book lending and returns.

### Planned Features
- Issue books to members
- Record returned books
- Due date tracking
- Overdue book management

---

## 5. Manage Employees ⏳ (Planned)

This module will manage staff working in the library.

### Planned Features
- Add/Edit/Delete employee records
- Assign roles and responsibilities
- Manage employee information

---

## 6. Finances ⏳ (Planned)

This module will manage financial records of the library.

### Planned Features
- Fine management
- Expense tracking
- Revenue tracking
- Financial reports

---

# 📊 Dashboard

The system includes a dashboard that displays **real-time statistics** for quick overview.

### Dashboard Sections

| Section | Status |
|-------|--------|
| Total Books | ✅ Working |
| Total Members | ⏳ Not Implemented |
| Issued Books | ⏳ Not Implemented |
| Overdue Books | ⏳ Not Implemented |

Currently, **only the Total Books counter is functional** and updates dynamically.

---

# 🛠️ Tech Stack

**Backend**
- Laravel (PHP)

**Frontend**
- Bootstrap
- HTML
- CSS
- JavaScript

**Database**
- MySQL


---

## 🎯 Future Improvements

- Complete remaining modules
- Implement authentication and role-based access
- Add advanced search and filtering
- Generate reports
- Improve UI/UX
- Add API support for integrations

---

## 👨‍💻 Author

Muhammad Abu Bakr
Computer Science Student
Interested in Web Development, AI, and ML Engineering

---
## 📷 ScreenShot
<div align="center">
  <img src="Library-Management-System/assets/icon.png" width="200" height="200" alt="Logo">
  <img src="Library-Management-System/assets/Main Menu.png" width="200" height="400" alt="Main Menu">
  <img src="Library-Management-System/assets/Mange Books.png" width="200" height="400" alt="Mange Books">
</div>
---

# ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/library-management-system.git

cd library-management-system

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate

php artisan serve

http://localhost:8000
