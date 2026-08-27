# EduFreeDocs.com — Project Structure & Functionality

## 1. Project Overview

EduFreeDocs is a student educational-resource platform.

### Technology Stack

- **Frontend:** PHP, HTML, Tailwind CSS, JavaScript
- **Backend:** PHP REST-style API
- **Database:** MySQL
- **Email:** EmailJS for email verification
- **Hosting:** InfinityFree

### Main Academic Structure

```text
School
  ↓
Course
  ↓
Year / Semester
  ↓
Unit
  ↓
Resources
  ├── Notes
  ├── Past Papers
  ├── CATs
  ├── Assignments
  └── Revision Materials
```

---

# 2. Complete Folder Structure

```text
EduFreeDocs.com/
│
├── index.php
├── .htaccess
│
├── api/
│   ├── auth/
│   ├── schools/
│   ├── courses/
│   ├── semesters/
│   ├── units/
│   ├── documents/
│   ├── search.php
│   ├── downloads.php
│   ├── favorites.php
│   └── notifications.php
│
├── config/
├── middleware/
├── helpers/
├── pages/
├── auth/
├── student/
├── admin/
├── includes/
├── assets/
├── uploads/
└── database/
```

---

# 3. Root Files

## `index.php`

The main homepage of EduFreeDocs.

Responsibilities:

- Display the EduFreeDocs landing page.
- Show the main navigation.
- Allow students to search for resources.
- Display featured schools/courses/resources.
- Provide links to browse academic materials.
- Load reusable components such as the navbar and footer.

Example user flow:

```text
Student opens EduFreeDocs
        ↓
index.php
        ↓
Search / Browse Schools
```

---

## `.htaccess`

Apache configuration file.

Responsibilities:

- Configure URL rewriting.
- Improve URL structure.
- Add security rules.
- Prevent access to sensitive folders/files where appropriate.
- Configure PHP/Apache behavior supported by the hosting environment.

---

# 4. `api/` — Backend API

This folder contains the PHP REST-style API.

The frontend JavaScript communicates with these files using `fetch()`.

Example:

```text
JavaScript
    ↓
GET /api/schools/list.php
    ↓
PHP
    ↓
MySQL
    ↓
JSON response
    ↓
JavaScript
    ↓
Update page
```

The API should generally return JSON rather than HTML.

---

# 5. `api/auth/` — Authentication API

Handles registration, login, verification, password reset, and user sessions/tokens.

## `login.php`

Handles user login.

Responsibilities:

- Receive email and password.
- Validate input.
- Find the user in MySQL.
- Verify the password.
- Check whether the email is verified.
- Authenticate the user.
- Return a JSON response.

---

## `register.php`

Handles new account registration.

Responsibilities:

- Receive name, email, and password.
- Validate the data.
- Check whether the email already exists.
- Hash the password.
- Generate a verification code.
- Save the user.
- Save verification information.
- Tell the frontend to send the verification email through EmailJS.

Flow:

```text
Register
   ↓
PHP API
   ↓
Validate
   ↓
Create user
   ↓
Generate verification code
   ↓
MySQL
   ↓
EmailJS
   ↓
Student receives email
```

---

## `verify-email.php`

Verifies the student's email address.

Responsibilities:

- Receive verification code/email information.
- Check the code against MySQL.
- Check code expiry.
- Mark the account as verified.
- Return success/failure JSON.

---

## `resend-verification.php`

Creates and sends a new verification code.

Responsibilities:

- Check the user's account.
- Generate a new code.
- Update the expiry time.
- Trigger EmailJS from the frontend.
- Prevent unnecessary repeated requests.

---

## `forgot-password.php`

Starts the password-reset process.

Responsibilities:

- Accept the user's email.
- Generate a reset token/code.
- Save it securely.
- Trigger the password-reset email process.

---

## `reset-password.php`

Completes password recovery.

Responsibilities:

- Validate reset token/code.
- Check expiry.
- Validate new password.
- Hash the new password.
- Update the user's password.
- Invalidate the reset token.

---

## `logout.php`

Logs the user out.

Responsibilities:

- Destroy/invalidate authentication state.
- Return a successful response.

---

## `me.php`

Returns information about the currently authenticated user.

Example response:

```json
{
  "id": 15,
  "name": "Student Name",
  "email": "student@example.com",
  "role": "student"
}
```

---

# 6. `api/schools/` — School API

Handles the academic schools.

Example schools:

```text
School of Computing & IT
School of Engineering
School of Business
```

## `list.php`

Returns all schools.

Example:

```text
GET /api/schools/list.php
```

---

## `get.php`

Returns one specific school and its information.

Example:

```text
GET /api/schools/get.php?id=1
```

---

## `create.php`

Creates a new school.

Used mainly by administrators.

---

## `update.php`

Updates an existing school.

Used mainly by administrators.

---

## `delete.php`

Deletes/deactivates a school.

Used mainly by administrators.

---

# 7. `api/courses/` — Course API

Handles courses belonging to schools.

Example:

```text
Computing & IT
   ├── BBIT
   ├── BIT
   └── Computer Science
```

## `list.php`

Returns courses.

Can filter by school:

```text
GET /api/courses/list.php?school_id=1
```

---

## `get.php`

Returns one course.

---

## `create.php`

Creates a course.

---

## `update.php`

Updates a course.

---

## `delete.php`

Deletes/deactivates a course.

---

# 8. `api/semesters/` — Year/Semester API

Handles academic years/semesters.

Examples:

```text
1.1
1.2
2.1
2.2
3.1
3.2
4.1
4.2
```

## `list.php`

Returns years/semesters belonging to a course.

Example:

```text
GET /api/semesters/list.php?course_id=2
```

---

## `get.php`

Returns one semester/year.

---

## `create.php`

Creates a semester/year.

---

## `update.php`

Updates a semester/year.

---

## `delete.php`

Deletes/deactivates a semester/year.

---

# 9. `api/units/` — Unit API

Handles units belonging to a semester/year.

Example:

```text
BBIT
  ↓
Year 2.2
  ↓
Data Structures
Software Engineering
Database Systems
```

## `list.php`

Returns units for a specific semester.

```text
GET /api/units/list.php?semester_id=6
```

---

## `get.php`

Returns one unit.

---

## `create.php`

Creates a unit.

---

## `update.php`

Updates a unit.

---

## `delete.php`

Deletes/deactivates a unit.

---

# 10. `api/documents/` — Resource API

This handles the actual academic resources.

Resource types:

- Notes
- Past Papers
- CATs
- Assignments
- Revision Materials
- Other Resources

## `list.php`

Returns documents/resources.

Can filter by:

```text
school
course
semester
unit
resource type
search term
```

Example:

```text
GET /api/documents/list.php?unit_id=25
```

---

## `get.php`

Returns information about one document.

---

## `upload.php`

Handles document uploads.

Responsibilities:

- Authenticate the uploader.
- Validate title and metadata.
- Validate file type.
- Validate file size.
- Save the file.
- Save document information in MySQL.
- Associate the document with the correct unit.
- Record who uploaded it.

---

## `update.php`

Updates document information.

---

## `delete.php`

Deletes/deactivates a document.

---

# 11. `api/search.php`

Handles global resource searching.

Example:

```text
GET /api/search.php?q=data+structures
```

Search can return:

```text
Documents
Units
Courses
```

The JavaScript frontend displays the results without requiring a full page reload.

---

# 12. `api/downloads.php`

Handles document download tracking.

Responsibilities:

- Check the document.
- Check permissions if required.
- Record the download.
- Return/provide the file.

This allows EduFreeDocs to show statistics such as:

```text
1,250 Downloads
```

---

# 13. `api/favorites.php`

Handles student favorites.

Responsibilities:

- Add document to favorites.
- Remove document from favorites.
- Get user's favorite documents.
- Check whether a document is already favorited.

---

# 14. `api/notifications.php`

Handles user notifications.

Examples:

```text
New document uploaded
Upload approved
Email verified
Password changed
```

---

# 15. `config/` — Configuration

Contains database and application configuration.

## `database.php`

Creates the MySQL/PDO database connection.

This file should contain the database connection logic.

All API/database operations should use this connection instead of creating separate connections everywhere.

---

## `config.php`

General application configuration.

Examples:

```text
Site name
Base URL
Upload limits
Environment settings
```

---

## `constants.php`

Stores reusable application constants.

Examples:

```text
User roles
Document types
Maximum file size
Allowed file extensions
```

---

# 16. `middleware/` — Security & Access Control

Middleware is code that runs before protected actions.

## `auth.php`

Checks whether the user is authenticated.

Used for:

```text
Student dashboard
Uploads
Favorites
Downloads
Profile
```

---

## `admin.php`

Checks whether the authenticated user is an administrator.

Used for:

```text
Manage schools
Manage courses
Manage units
Manage documents
Manage users
```

---

## `cors.php`

Handles Cross-Origin Resource Sharing if required by the API architecture.

---

# 17. `helpers/` — Reusable PHP Functions

Contains common functions used by multiple API/page files.

## `response.php`

Standardizes JSON responses.

Example:

```json
{
  "success": true,
  "message": "Document uploaded successfully",
  "data": {}
}
```

---

## `validation.php`

Contains validation functions.

Examples:

```text
Validate email
Validate password
Validate required fields
Validate document type
Validate file size
```

---

## `auth.php`

Contains authentication-related helper functions.

Examples:

```text
Hash password
Verify password
Create authentication state/token
Get current user
```

---

## `upload.php`

Contains reusable file-upload functions.

Examples:

```text
Validate file
Generate safe filename
Move uploaded file
Determine file type
```

---

## `functions.php`

General reusable application functions.

---

# 18. `pages/` — Public Website Pages

These are the pages users see.

They contain PHP + HTML + Tailwind CSS.

They are NOT the API.

## `schools.php`

Displays available schools.

Example:

```text
Choose Your School

[ Computing & IT ]
[ Engineering ]
[ Business ]
```

---

## `school.php`

Displays one school and its courses.

Example:

```text
Computing & IT

BBIT
BIT
Computer Science
```

---

## `courses.php`

Displays courses.

---

## `course.php`

Displays one course and its years/semesters.

Example:

```text
BBIT

1.1
1.2
2.1
2.2
3.1
3.2
4.1
4.2
```

---

## `semester.php`

Displays units belonging to a selected year/semester.

Example:

```text
BBIT → 2.2

Data Structures
Software Engineering
Database Systems
```

---

## `unit.php`

Displays resources belonging to a unit.

Example:

```text
Data Structures

Notes
Past Papers
CATs
Assignments
Revision Materials
```

---

## `notes.php`

Displays notes for a unit.

---

## `past-papers.php`

Displays past examination papers.

Filtering can include:

```text
Year
Course
Unit
Exam type
```

---

## `document.php`

Displays details of one resource.

Example:

```text
Data Structures Notes

Course: BBIT
Year: 2.2
Unit: Data Structures
Type: Notes
File size: 2.4 MB

[ Download ]
[ Add to Favorites ]
```

---

## `search.php`

Displays search results.

---

# 19. `auth/` — Authentication Pages

These are the visible authentication forms.

## `login.php`

Login form.

---

## `register.php`

Registration form.

---

## `verify-email.php`

Email verification interface.

Example:

```text
Check your email

Enter the 6-digit verification code:

[ _ _ _ _ _ _ ]

[ Verify Email ]

Didn't receive it?
[ Resend Code ]
```

EmailJS is used to deliver the email.

---

## `forgot-password.php`

Password recovery form.

---

## `reset-password.php`

New password form.

---

# 20. `student/` — Student Dashboard

Private pages for authenticated students.

## `dashboard.php`

Main student dashboard.

Possible information:

```text
Welcome, Francis

Downloads       24
Favorites       12
Uploads          5

Recent Downloads
Recent Resources
```

---

## `downloads.php`

Shows the student's download history.

---

## `favorites.php`

Shows saved/favorited documents.

---

## `uploads.php`

Shows documents uploaded by the student.

Possible statuses:

```text
Pending
Approved
Rejected
```

---

## `notifications.php`

Shows student notifications.

---

## `profile.php`

Allows the student to manage profile information.

---

# 21. `admin/` — Administration

Private area for administrators.

## `index.php`

Admin dashboard.

Possible statistics:

```text
Total Students
Total Schools
Total Courses
Total Units
Total Documents
Total Downloads
Pending Uploads
```

---

## `schools.php`

Admin manages schools.

Operations:

```text
Create
View
Edit
Deactivate
```

---

## `courses.php`

Admin manages courses.

---

## `semesters.php`

Admin manages academic years/semesters.

---

## `units.php`

Admin manages units.

---

## `documents.php`

Admin manages uploaded resources.

Operations:

```text
Approve
Reject
Edit
Delete
```

---

## `users.php`

Admin manages users.

---

## `uploads.php`

Admin reviews pending student uploads.

---

## `reports.php`

Displays system statistics and reports.

---

# 22. `includes/` — Reusable UI Components

These files prevent us from duplicating HTML across pages.

## `header.php`

Contains:

- HTML `<head>`
- Meta tags
- Tailwind CSS
- Global styles
- Page configuration

---

## `navbar.php`

Desktop navigation.

Example:

```text
EduFreeDocs

Home
Schools
Courses
Past Papers
Search

Login
```

---

## `mobile-nav.php`

Mobile navigation.

Designed around the mobile wireframe.

---

## `footer.php`

Global footer.

---

## `school-card.php`

Reusable school card.

---

## `course-card.php`

Reusable course card.

---

## `semester-card.php`

Reusable semester/year card.

---

## `unit-card.php`

Reusable unit card.

---

## `document-card.php`

Reusable resource/document card.

---

# 23. `assets/` — Frontend Assets

## `assets/css/`

### `custom.css`

Small amount of custom CSS that is not convenient to write with Tailwind.

Tailwind should remain the primary styling system.

---

# 24. `assets/js/` — JavaScript

## `app.js`

Global JavaScript.

Examples:

```text
Mobile menu
Toast notifications
Modal handling
General UI interactions
```

---

## `api.js`

Central JavaScript API helper.

Example:

```javascript
fetch('/api/schools/list.php')
```

This allows us to keep API communication organized.

---

## `auth.js`

Handles login/register-related frontend behavior.

---

## `email-verification.js`

Handles EmailJS.

Responsibilities:

```text
Initialize EmailJS
Receive verification data
Send verification email
Display success/error
```

Important:

```text
EmailJS sends the email.
PHP/MySQL decides whether the code is valid.
```

---

## `schools.js`

Loads and displays schools using the API.

---

## `courses.js`

Loads courses dynamically.

---

## `semesters.js`

Loads years/semesters dynamically.

---

## `units.js`

Loads units dynamically.

---

## `documents.js`

Loads and displays documents.

---

## `search.js`

Handles live/global search.

---

## `dashboard.js`

Handles student dashboard interactions.

---

## `upload.js`

Handles document upload UI and API communication.

---

# 25. `assets/images/`

Contains images used by the website.

```text
logo.svg
favicon.ico
placeholders/
```

---

# 26. `uploads/` — Academic Files

Contains uploaded academic resources.

```text
uploads/
│
├── notes/
├── past-papers/
├── cats/
├── assignments/
├── revision/
└── other/
```

Examples:

```text
uploads/notes/data-structures.pdf
uploads/past-papers/bbit-2025.pdf
uploads/cats/software-engineering-cat1.pdf
```

Uploaded files should be validated before being stored.

---

# 27. `database/`

Contains database setup files.

## `schema.sql`

Creates all database tables and relationships.

Main tables will likely include:

```text
users
schools
courses
semesters
units
documents
downloads
favorites
notifications
verification_codes
password_resets
```

---

## `seed.sql`

Adds initial/sample data.

Example:

```text
Schools
Courses
Years/Semesters
Units
Sample documents
```

---

# 28. How Everything Connects

## Student browsing

```text
index.php
   ↓
schools.php
   ↓
school.php
   ↓
course.php
   ↓
semester.php
   ↓
unit.php
   ↓
document.php
```

---

## Dynamic data

```text
PHP page
   ↓
JavaScript
   ↓
fetch()
   ↓
PHP API
   ↓
MySQL
   ↓
JSON
   ↓
JavaScript
   ↓
HTML/Tailwind UI
```

---

# 29. Registration & Email Verification

```text
register.php
     ↓
api/auth/register.php
     ↓
Validate user
     ↓
Hash password
     ↓
Generate verification code
     ↓
MySQL
     ↓
email-verification.js
     ↓
EmailJS
     ↓
Student receives code
     ↓
verify-email.php
     ↓
api/auth/verify-email.php
     ↓
MySQL
     ↓
Account verified
```

---

# 30. Document Upload

```text
Student
   ↓
student/uploads.php
   ↓
upload.js
   ↓
api/documents/upload.php
   ↓
Validate user
   ↓
Validate file
   ↓
Save file
   ↓
Save metadata
   ↓
Pending
   ↓
Admin reviews
   ↓
Approved
   ↓
Document becomes visible
```

---

# 31. Document Download

```text
Student
   ↓
document.php
   ↓
Download button
   ↓
api/downloads.php
   ↓
Check document
   ↓
Record download
   ↓
Serve file
```

---

# 32. Complete Student Journey

```text
HOME
  ↓
SELECT SCHOOL
  ↓
SELECT COURSE
  ↓
SELECT YEAR / SEMESTER
  ↓
SELECT UNIT
  ↓
SELECT RESOURCE TYPE
  ↓
VIEW DOCUMENT
  ↓
DOWNLOAD / FAVORITE
```

Example:

```text
Computing & IT
       ↓
     BBIT
       ↓
      2.2
       ↓
Data Structures
       ↓
     Notes
       ↓
Data Structures Notes.pdf
       ↓
    DOWNLOAD
```

---

# 33. Design Principle

The new EduFreeDocs should be:

- Mobile-first
- Clean
- Professional
- Fast
- Easy to navigate
- Accessible
- Responsive
- Student-focused

Tailwind CSS will be the primary UI styling system.

---

# 34. Important Separation

Keep these concepts separate:

```text
PAGES
↓
Display the website

API
↓
Handle data and business operations

CONFIG
↓
Database/application configuration

MIDDLEWARE
↓
Authentication and authorization

HELPERS
↓
Reusable backend functions

INCLUDES
↓
Reusable UI components

ASSETS
↓
CSS, JavaScript and images

UPLOADS
↓
Academic files

DATABASE
↓
Database structure and seed data
```

This separation will make EduFreeDocs easier to develop, debug, secure, and maintain.
