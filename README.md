# **QR Code Menu System for University Cafeteria**

A simple and efficient web-based QR Code Menu System that allows customers to access the cafeteria menu by scanning a QR code and enables the admin to manage menu categories and items dynamically. The project is built with **HTML**, **CSS**, and **JavaScript** , **MYSQL** and **PHP** For  backend functionality.

---

## **Features**

### **Customer Features**
- **Contactless Access**: Customers can scan a QR code to access the menu.
- **View Menu**: Browse menu items categorized into Breakfast, Lunch, Drinks, etc.
- **Filter by Category**: Easily filter items by category for better navigation.
- **View Item Details**: Each menu item includes a name, description, price, and image.

### **Admin Features**
- **Admin Dashboard**: A dedicated admin interface for menu management.
- **CRUD Operations**: 
  - Add, update, or delete categories.
  - Add, update, or delete menu items.
- **Real-Time Updates**: Changes made by the admin are reflected immediately for customers.

---

## **Technology Stack**
- **Frontend**:
  - HTML
  - CSS
  - JavaScript
- **Backend (Optional)**:
  - PHP  (for future database integration)
  - MySQL (for storing menu data)
- **QR Code**:
  - QR code linking to the customer-facing menu page.
---
## **Usage**

### **For Customers**
1. Scan the QR code provided on cafeteria tables or posters.
2. View the menu, categorized into Breakfast, Lunch, Drinks, etc.
3. Filter items by category or view item details (name, price, description, image).

### **For Admins**
1. Navigate to the admin dashboard (`admin.html`).
2. Log in (future functionality for authentication can be added).
3. Add, edit, or delete categories and menu items through the dashboard form.
---


## **Installation & Setup**
1. Clone the Repository
git clone https://github.com/your-username/qr-code-menu.git
cd qr-code-menu
2. Install Dependencies
Set up XAMPP or LAMP for running Apache and MySQL.
1. Import the MySQL database file (database.sql) into phpMyAdmin.
2. Update database connection settings in config.php with your MySQL credentials.
3. Access the Project
Navigate to localhost/qr-code-menu in your browser to access the system.
---

## **Testing **
The system has undergone various types of testing:
Unit Testing: Verified individual functions and database queries.
Integration Testing: Ensured that frontend-backend interactions work smoothly.
System Testing: Conducted end-to-end testing to ensure full system functionality.
User Acceptance Testing (UAT): Feedback from users to validate usability.
---
## **Contributing**
Feel free to fork the repository and submit pull requests. Please ensure that you follow the code style and include tests for new features or bug fixes.
---
## **License**
This project is licensed under the MIT License.
---

## **Acknowledgments**
1. PHP for backend server-side logic.
2. MySQL for database management.
3. JavaScript for responsive frontend interactivity.
