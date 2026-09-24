# 🛒 Online Shopping Application

A web-based **Online Shopping / E-commerce Application** developed using **PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap**.

The application provides a complete shopping workflow where users can browse products, create an account, add products to their cart, manage quantities, and place orders. An admin panel is also included for managing products, categories, subcategories, and other store-related data.

---

## 📌 Project Overview

The **Online Shopping Application** is a dynamic e-commerce website designed to simulate an online shopping platform.

The project uses **PHP for server-side development** and **MySQL for database management**. The frontend is built with HTML, CSS, JavaScript, and Bootstrap to provide a responsive and user-friendly interface.

The application contains two main sections:

* 👤 **User Section**
* 🔐 **Admin Section**

---

## ✨ Features

### 👤 User Features

* User registration and login
* User profile management
* Change password
* Browse products
* View product information
* Product categories and subcategories
* Product pricing and discounts
* Stock availability
* Add products to cart
* Update product quantity
* Remove products from cart
* Cart item count
* Checkout
* Order/payment processing
* Logout functionality

### 🔐 Admin Features

* Admin login
* Admin dashboard
* Add new categories
* Edit categories
* Delete categories
* Add subcategories
* Edit subcategories
* Delete subcategories
* Add products
* Edit products
* Delete products
* Upload product images
* Manage product stock
* Manage product pricing
* Manage product discounts
* View and manage store data

---

## 🛠️ Technologies Used

| Technology       | Purpose                       |
| ---------------- | ----------------------------- |
| **HTML5**        | Website structure             |
| **CSS3**         | Styling and layout            |
| **Bootstrap**    | Responsive UI components      |
| **JavaScript**   | Client-side functionality     |
| **AJAX**         | Asynchronous requests         |
| **PHP**          | Server-side development       |
| **MySQL**        | Database management           |
| **XAMPP**        | Local development environment |
| **Font Awesome** | Icons                         |

---

## 🏗️ Project Structure

```text
Online-Shopping-Application/
│
├── css/
│   └── Website stylesheets
│
├── database/
│   └── Database related files
│
├── dist/
│   └── Frontend/distribution resources
│
├── image/
│   └── Product and website images
│
├── js/
│   └── JavaScript files
│
├── uploads/
│   └── Uploaded product images
│
├── addToCart.php
├── addcategory.php
├── addphoto.php
├── addproducts.php
├── addsubcategory.php
├── addtocartdetails.php
│
├── adminheader.php
├── adminhome.php
├── adminlogin.php
├── adminlogout.php
│
├── ajaxSubCat.php
├── cart.php
├── cartCount.php
├── changeQty.php
├── changepassword.php
├── checkout.php
│
├── connection.php
│
├── deletecategory.php
├── deletephoto.php
├── deleteproduct.php
├── deleteproduct1.php
├── deletesubcategory.php
│
├── editcategory.php
├── editproduct.php
├── editproduct1.php
├── editsubcategory.php
│
├── fileupload.php
├── footer.php
├── headerfiles.php
├── index.php
│
├── insertPayment.php
├── publicheader.php
├── test.php
├── thanks.php
├── upload.php
│
├── userchangepassword.php
├── userdashboard.php
├── userdashboardheader.php
├── userlogin.php
├── userlogout.php
├── userprofile.php
├── usersignup.php
├── usersignupaction.php
│
├── viewcategory.php
├── viewphoto.php
├── viewproducts.php
├── viewsubcategory.php
│
└── README.md
```

---

# 🚀 Getting Started

Follow the steps below to run the project locally.

## 1. Install XAMPP

Download and install **XAMPP** on your computer.

XAMPP provides:

* Apache Server
* MySQL Database
* PHP

---

## 2. Clone the Repository

Open Command Prompt or PowerShell and run:

```bash
git clone https://github.com/ArjunKumarYadav/Online-Shopping-Application.git
```

Move into the project directory:

```bash
cd Online-Shopping-Application
```

---

## 3. Move the Project to XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The final location should be:

```text
C:\xampp\htdocs\Online-Shopping-Application
```

---

## 4. Start XAMPP

Open **XAMPP Control Panel**.

Start:

```text
Apache
MySQL
```

Both services should be running before opening the application.

---

# 🗄️ Database Setup

## 5. Open phpMyAdmin

Open your browser and go to:

```text
http://localhost/phpmyadmin
```

---

## 6. Create the Database

Create a new MySQL database named:

```text
student_shopping
```

The application is configured to connect to a MySQL database with this name.

---

## 7. Import the Database

If a SQL database file is included in the `database` folder:

1. Open `phpMyAdmin`
2. Select the `student_shopping` database
3. Click **Import**
4. Select the `.sql` file
5. Click **Go**

The required tables should then be created.

---

# ⚙️ Database Configuration

The database connection is handled through:

```text
connection.php
```

The default local configuration uses:

```php
$con = mysqli_connect(
    '127.0.0.1',
    'root',
    null,
    'student_shopping'
);
```

If your MySQL username, password, host, or database name is different, update `connection.php` accordingly.

> ⚠️ Do not upload real production database credentials or passwords to a public GitHub repository.

---

# ▶️ Run the Application

After starting Apache and MySQL, open:

```text
http://localhost/Online-Shopping-Application/
```

The home page will display the available products.

---

# 🛍️ Application Workflow

The basic shopping workflow is:

```text
Home Page
    ↓
Browse Products
    ↓
Select Product
    ↓
Add To Cart
    ↓
View Cart
    ↓
Update Quantity
    ↓
Checkout
    ↓
Payment / Order Processing
    ↓
Order Confirmation
```

---

# 🔐 Admin Workflow

The administrator can manage the online store through the admin section.

```text
Admin Login
     ↓
Admin Dashboard
     ↓
Manage Categories
     ↓
Manage Subcategories
     ↓
Manage Products
     ↓
Upload Product Images
     ↓
Manage Price / Discount / Stock
```

---

# 💡 Key Functional Modules

### Product Management

Products can be added, edited, viewed, and deleted from the admin section.

Product information includes:

* Product name
* Price
* Discount
* Stock
* Product image
* Category
* Subcategory

The homepage dynamically retrieves products from the MySQL database and displays their calculated selling price and availability.

### Shopping Cart

Users can add available products to their shopping cart.

The cart supports:

* Adding products
* Updating quantities
* Removing products
* Viewing cart details
* Calculating product prices

### User Authentication

The application provides:

* User registration
* User login
* User profile
* Password change
* User logout

### Category Management

The admin can manage:

* Categories
* Subcategories
* Category relationships

AJAX is used for dynamic subcategory-related functionality.

# 🎯 What I Learned From This Project

Through this project, I practiced:

* Building dynamic websites using PHP
* Connecting PHP applications with MySQL
* Performing CRUD operations
* Creating user authentication
* Managing sessions and user data
* Working with relational database tables
* Creating shopping cart functionality
* Implementing product and category management
* Handling image uploads
* Using AJAX for dynamic requests
* Creating responsive layouts using Bootstrap
* Working with Git and GitHub
* Understanding the basic architecture of an e-commerce application

---

# 🔮 Future Improvements

Possible improvements for future versions include:

* Secure password hashing using modern password hashing functions
* Improved input validation and sanitization
* Payment gateway integration
* Order history for users
* Product search functionality
* Product filtering and sorting
* Product reviews and ratings
* Wishlist functionality
* Improved admin dashboard
* Better responsive design
* Email notifications
* Deployment to a production server

---

# 👨‍💻 Author

**Arjun Kumar Yadav**

Web Developer | Frontend Developer | React.js | JavaScript | PHP | MySQL

GitHub:
https://github.com/ArjunKumarYadav

---

# 📄 License

This project is created for **learning and educational purposes**.

---

## ⭐ Project

If you find this project useful for learning PHP, MySQL, and e-commerce application development, consider giving the repository a ⭐.
