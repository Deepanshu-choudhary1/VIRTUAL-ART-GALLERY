
Virtual Art Gallery
The Virtual Art Gallery is a web application that allows users to explore and upload artworks, as well as place orders for artworks they like. The application utilizes HTML, CSS, JavaScript (JS), PHP, MySQL, and Apache server with XAMPP. Artwork uploads are stored in the computer's storage, and order notifications are sent to provided email addresses.

Features
Artwork Display: Browse through a collection of artworks displayed in the gallery.
Artwork Upload: Users can upload their artworks to be displayed in the gallery.
Order Placement: Users can place orders for artworks they like.
Email Notifications: Order notifications are sent to provided email addresses.
Technologies Used
HTML: Used for structuring the web pages.
CSS: Used for styling the web pages.
JavaScript (JS): Used for interactive features and client-side validation.
PHP: Used for server-side scripting to handle uploads, orders, and email notifications.
MySQL: Used as the database to store artwork information and order details.
Apache Server with XAMPP: Used to host the web application locally.
Setup Instructions
Install XAMPP: Download and install XAMPP from the official website (https://www.apachefriends.org/index.html).

Start Apache and MySQL Servers: Open XAMPP Control Panel and start the Apache and MySQL servers.

Clone the Repository: Clone the repository to your local machine using Git:

git clone https://github.com/Deepanshu-choudhary1/VIRTUAL-ART-GALLERY
Move the Project Files: Move the project files to the htdocs directory in your XAMPP installation directory.

Create the Database: Import the provided SQL file (database.sql) into your MySQL database using phpMyAdmin or MySQL command line.

Configure Email Settings: Open the PHP files responsible for sending email notifications (send_order_email.php) and configure the email settings (SMTP server, sender email address, etc.).

Access the Application: Open your web browser and navigate to http://localhost/<project-directory> to access the virtual art gallery.

Usage
Browse through the gallery to view artworks.
Use the upload feature to add new artworks to the gallery.
Place orders for artworks you like.
Check your email for order notifications.

Contributing
Contributions are welcome! Feel free to open issues or submit pull requests to contribute to this project.

License
This project is licensed under the MIT License.