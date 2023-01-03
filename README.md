## Instruction
- Download and install XAMPP.
- Download and extract the source code.
- Place `lab-7`  folder into `...\xampp\htdocs`.
- Start `Apache` and `MySQL` in XAMPP Control Panel.
- Connect to [phpMyAdmin](http://localhost/phpmyadmin/).
- Create a new database `wpc_lab` (web programming lab).
- Import data from `wpc_lab.sql`.
- Go to(http://localhost/lab-7/index.php).
- Login or Register.
- Enjoy!
# Optional
- Go to `\views\layouts\footer.php` and uncomment the last line to enable Google Map API
## Introduction
- This webapp uses MVC model with the following structure:
|-- lab-7
    |-- assets
        |-- fonts
        |-- images
        |-- javascripts
        |-- stylesheets
    |-- controllers
        |-- utils
    |-- models
    |-- views
        |-- layouts
        |-- dashboard
        |-- error
        |-- home
        |-- login
        |-- products
        |-- profile
        |-- register
    |-- connection.php
    |-- index.php
    |-- routes.php
    |-- search.php

- The controllers folder contains all the classes for the web functions.
- The models folder contains classes of database logic.
- The views folder contains all the frontend parts of the webapp.
- All url must go through index.php/page=?.
- If page not exist or go to dashboard or profile without log in first, redirect to error page.