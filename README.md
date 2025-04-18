## Une version française du Readme est disponible : https://github.com/chkpr/check_it/blob/main/README_fr.md

# CheckIt: To Do List application

CheckIt is a to-do list manager that features lists creation and edition, marking items as done or still to do, and filtering lists by category.
This project was carried out as part of Studi's Graduate Developer fullstack learning program (https://www.studi.com/fr/formation/developpement-web/graduate-developpeur-web-full-stack).

## Technologies

- PHP 8.1
- MySQL 5.7
- Bootstrap 5.3
- Xampp
- VSCode

## Local deployment

### Step 1: Import the database

After cloning the repository and starting Xampp and PHP, import the project database, either using PHPMyAdmin or from the terminal:

```
mysql -u username -ppassword check_it < check_it.sql
```

In case it generates an error ("the < operator is reserved for future use") on Windows please try this:

```
Get-Content check_it.sql | mysql -u username -ppassword check_it
```

### Step 2: Connect the database to the project

Create a pdo.php file in the assets/lib folder with the following code. Remember to replace “root” with the database manager username and “ ” with the password:

```
<?php
try
{
$pdo = new PDO("mysql:dbname=check_it;host=localhost;charset=utf8mb4", "root", " ");
}
catch (Exception $e)
{
die('Error: ' . $e->getMessage());
}
?>
```

### Step 3: Test the project

This project is intended to learn and is not meant to be used in production. However, its features can be tried in a local environment with a test user:

###### login: user@user.com

###### password: password

#### To create a new user:

##### 1. Connect to the database:

```
mysql -u username -ppassword
```

##### 2. Insert the new user into database:

```
INSERT INTO user (nickname, email, password) VALUES ('username', 'useremail', 'userpassword');
```

or use PHPMyAdmin to insert a new user.

##### 3. Password hashing:

Use password_hash() to hash the password (https://www.php.net/manual/en/function.password-hash.php):

1. Create a file named "hash.php" in the root directory of your application.

2. Paste the following code into the file:

```
<?php
echo password_hash("userpassword", PASSWORD_DEFAULT);
?>

```

3. Open the hash.php file in your navigator: it should display a string that starts with a '$' sign. Copy this string and insert it into the database as explained on the next step.

##### 4. Insert hashed password into database:

```
UPDATE check_it
SET password = 'hashedpassword”
```

(or use PHPMyAdmin to insert the hash)

##### 5. Delete the hash.php file

It is no longer needed and shouldn't be kept in the directory.

## Online

As already mentioned, this project was created for training purpose only (for the same purpose, it was also made available online at this address: https://glacial-temple-51496-87c24c489cfb.herokuapp.com/)

## Features currently being added

- Add categories to lists
- User account creation
