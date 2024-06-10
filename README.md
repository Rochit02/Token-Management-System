# 🎟️ Token Management System

Welcome to the Token Management System! This project is designed to streamline the process of managing tokens at various service counters. It includes features for creating, deleting, and prioritizing tokens, as well as managing counter statuses and displaying queued tokens.

## 📋 Features

- **Token Management**
  - Create new tokens
  - Delete existing tokens
  - Prioritize tokens that have not arrived at the counter

- **Counter Management**
  - Next token
  - Token not arrived
  - Active status
  - On a short break status
  - Counter closed status

- **Display Page**
  - Queued tokens
  - Tokens not arrived
  - Tokens assigned to specific counters
  - Counter statuses

## 🛠️ Built With

- **Frontend:**
  - HTML
  - CSS
  - JavaScript

- **Backend:**
  - PHP
  - MySQL

## 🚀 Getting Started

Follow these steps to get the project up and running on your local machine.

### Prerequisites

- Web server with PHP support (e.g., XAMPP, WAMP)
- MySQL database

### Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/Rochit02/token-management-system.git

2. **Navigate to the project directory:** 
   ``` sh
   cd token-management-system

3. **Import the database:**
   - From the file SQL.txt, use the query in it to create new database and required tables for the application.

4. **Start the server:**
   - Ensure your web server is running (e.g., start Apache and MySQL if using XAMPP).
   - Open a web browser and navigate to `http://localhost/token-management-system`.

## 📂 Project Structure
```
token-management-system/
├── Application/
│   ├── Database setup/
│   │   └── setup_database.sql
│   ├── css/
│   │   ├── styles.css
│   │   ├── styles1.css
│   │   ├── styles2.css
│   │   ├── styles3.css
│   │   └── styles4.css
│   ├── counters.php
│   ├── display.php
│   ├── fetch_assigned_tokens.php
│   ├── fetch_counters.php
│   ├── fetch_not_arrived_tokens.php
│   ├── fetch_queued_tokens.php
│   ├── index.html
│   ├── login.php
│   ├── logout.php
│   ├── mysql.txt
│   ├── prioritize.php
│   ├── register.php
│   └── tokens.php
├── README.md
└── LICENSE
```

## 📸 Screenshots

### Index Page

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/9cd039a0-f31e-439f-b259-76d762399a75)

### Register Page

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/4c8132db-eea0-4743-80d6-e8c174700065)

### Login Page

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/eaa39728-b6e5-4a69-93f1-e5fe23148c79)

### Counter Management

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/db84fbe2-8f8a-42bd-9d4a-d2071ec8f6fc)

### Display Page

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/11c7cb90-8e0c-408a-bcf0-43f4d0c8a103)

### Token Generator

![image](https://github.com/Rochit02/Token-Management-System/assets/150697578/e6f54ec7-8587-4741-9b0c-379c25939c36)

## 📊 Top Languages

![Top Languages](https://github-readme-stats.vercel.app/api/top-langs/?username=Rochit02&repo=token-management-system&layout=compact&theme=radical)

## 📧 Contact

Rochit Madamanchi - madamanchi4@gmail.com

Project Link: https://github.com/Rochit02/Token-Management-System

## ⚖️ License
Distributed under the MIT License. See LICENSE for more information.
