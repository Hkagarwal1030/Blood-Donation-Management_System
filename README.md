# Blood Donation Management System
🩸 Blood Donation Management System (PHP + MySQL)
















A simple, clean, and efficient Blood Donation Management System built using PHP & MySQL.
This system allows hospitals, administrators, or blood bank centers to manage donor records, including adding, updating, deleting, and searching for donors.

🩺 Features
📝 Donor Registration

Add new donors

Collect essential donor details

Validate mandatory fields

📋 View All Donors

Displays all donor data in a formatted table

Red-themed headers and titles for emergency-style design (as styled in style.css 

style

)

🔍 Search Donors

Search by donor name or blood group

Instantly displays matched results

✏️ Update Donor Information

Modify existing donor details

Clean and simple editing interface

❌ Delete Donors

Remove a donor from the database

Confirmation and error display support

🎨 Responsive UI

Styling includes:

Light blue background

Centered forms

Red action/button theme

Clear success/error messages
(From style.css file) 

style

📂 Project Structure
/blood-donation-system
│── index.php        → Home / Register page
│── admin.php        → Donor list (Admin Panel)
│── register.php     → Form to add donor
│── update.php       → Update donor details
│── delete.php       → Delete donor
│── search.php       → Search donor records
│── db.php           → Database configuration
│── style.css        → UI styling
│── README.md

🗄️ Database Setup

Run this SQL:

CREATE DATABASE blood_donation;

USE blood_donation;

CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    blood_group VARCHAR(10) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(150),
    city VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

⚙️ Database Connection

Your db.php should contain:

$conn = new mysqli("localhost", "root", "", "blood_donation");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

🚀 How to Run the Project
1️⃣ Move the project to your server directory

For XAMPP:

htdocs/blood-donation-system/


For WAMP:

www/blood-donation-system/

2️⃣ Start Apache & MySQL Servers

From XAMPP/WAMP Control Panel.

3️⃣ Open the project
http://localhost/blood-donation-system/

4️⃣ Add Donors

Use the register form on index.php.

5️⃣ Manage Donors

Open admin.php to:

View donors

Update details

Delete donors

Search donors

🔐 Security Notes

SQL queries should be upgraded to prepared statements

Input sanitization recommended

Could add admin login for protected access

📌 Future Enhancements

🔑 Admin Authentication

📅 Donation history tracking

🧬 Blood compatibility matcher

📍 Location-based donor search

📊 Dashboard with charts

📱 Fully responsive Bootstrap UI

🤝 Contributing

Contributions are welcome!

Fork the repository

Create a new branch

Add improvements

Submit a pull request

📄 License

Licensed under the MIT License.
