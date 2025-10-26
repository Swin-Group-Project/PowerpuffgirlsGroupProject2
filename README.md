# Overview
This project is a dynamic web application developed for COS10026 - Web Technologies Project 2.
It simulates a job management platform where users can browse and apply for game development roles, while administrators can manage job listings and user data through secure access pages.

The system demonstrates how HTML, CSS, PHP, and MySQL can be combined to build a fully functional website with both client and admin interaction.


# Features

## For General Users
- Browse available job positions
- Apply for jobs using an online form
- View job listings in a structured table layout
- Receive confirmation messages after submitting a job application

## For Admin Users
- Secure admin login system with session handling
- Access to Manage Dashboard for viewing and managing records
- Data fetching from MySQL with real-time updates

# Additional Features
- Proper input validation and error handling
- Responsive design using both inline and external CSS
- Implemented media queries for different screen sizes
- Added ARIA roles to improve accessibility for screen readers
- Structured and well-commented code for readability
- Follows HTML5 and PHP best practices


# Technologies Used

| Category | Tools / Languages |
|----------|------------------|
| Frontend | HTML5, CSS3 |
| Backend  | PHP (tested on XAMPP) |
| Database | MySQL (via phpMyAdmin) |
| Server   | Apache (XAMPP) |



# Setup & Installation
- Install XAMPP (or any local server with PHP and MySQL).
- Copy the project folder into the htdocs directory.
- Open phpMyAdmin .
- Create a new database (e.g project_2).
- Import project_part2.sql into the database.
- Update database credentials inside settings.php.
- Start Apache and MySQL from XAMPP Control Panel.
- Visit the project in your browser


# Learning Outcomes
Throughout this project, we learned how to:
- Connect PHP with MySQL to fetch and store data.
- Use sessions for secure user authentication.
- Apply media queries to create a responsive layout.
- Add ARIA roles and attributes to improve website accessibility.
- Validate and handle form inputs effectively.
- Structure a complete multi-page PHP project following best practices.


# Authors
- Ryan Tay
- Aron Winjoto
- Wei-ting Chen
- Lira Khisha


# Future Improvements
- Implement email notifications when a user submits a job application.
- Create user profile pages where applicants can track their submitted applications.
- Enhance form validation and feedback using JavaScript for a better user experience.
- Improve mobile responsiveness further with advanced CSS techniques.
- Add role-based access control for more fine-grained admin/user permissions.


# License
**This project is for educational purposes only. You may view the code on GitHub, but you cannot use, copy, or modify it for your own purposes. If you reference or discuss this project, please give credit to the original authors**

**© 2025 Ryan Tay, Aron Winjoto, Wei-ting Chen, Lira Khisha**