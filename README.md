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
  - Up-on logging out, the counter is automatically set to display closed
  - Up-on logging in, the counter is automatically set to display active

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

## 🤝 Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

1. Fork the Project
2. Create your Feature Branch (git checkout -b feature/AmazingFeature)
3. Commit your Changes (git commit -m 'Add some AmazingFeature')
4. Push to the Branch (git push origin feature/AmazingFeature)
5. Open a Pull Request

## 📧 Contact

Rochit Madamanchi - madamanchi4@gmail.com

Project Link: https://github.com/Rochit02/Token-Management-System

## ⚖️ License
This project is licensed under the [Creative Commons Attribution-NonCommercial 4.0 International License](LICENSE). See the LICENSE file for details.
Token Management System © 2024 by Rochit Madamanchi is licensed under Creative Commons Attribution-NonCommercial 4.0 International 

