
#  Lecture notes PHP and MySQL


PHP emerged in 1995, around the same time as JavaScript. While they approached programming differently, they shared the same vision of solving web development challenges. Over the years, various frameworks and languages like ColdFusion, .NET, Django, Ruby on Rails, Flask, Angular, and Next.js have come and gone. Yet, PHP remains a vital part of web development. Its simplicity makes it widely used, though it also leads to a significant amount of unsafe and poorly written code.

## What is PHP?
<details>
  <summary><strong>Click to read more</strong></summary>

PHP originally stood for "Personal Home Page," but now it’s a recursive acronym for "PHP: Hypertext Preprocessor." It’s an **open-source** language that executes code on the server and generates dynamic HTML content for the client. This server-side processing makes PHP particularly efficient for tasks like handling passwords and managing backend complexities.
</details>

### Key Features of PHP:
<details>
  <summary><strong>Click to read more</strong></summary>

- **Server-side Execution**: Generates ready-to-use HTML, reducing client-side complexity.
- **Database Support**: Works seamlessly with MySQL and other databases.
- **Versatility**: Handles dynamic content, file operations, cookies, encryption, and more.
- **Flexible Codebase**: Can integrate PHP, HTML, CSS, and JavaScript, returning content as plain HTML.
</details>

## Setting Up PHP Development
<details>
  <summary><strong>Click to read more</strong></summary>

PHP requires a server environment for execution. Tools like **XAMPP** or **MAMP** are widely used to create a local PHP and MySQL server.

1. **Install XAMPP or MAMP**: These tools simplify the process of running PHP and MySQL locally.
2. **Check `htdocs` Directory**: Place your project files here, ensuring the correct `index.php` file is present.
3. **Start Local Server**: MAMP/XAMPP will host your project files locally, accessible via a browser.

### Writing PHP Code:
PHP files typically contain a mix of HTML and PHP code. PHP code is enclosed within `<?php ?>` tags and executed on the server. Example:

```php
<?php
echo "<h1>Welcome to PHP</h1>";
?>
```
PHP files end with .php, and it’s common to have an index.php as the entry point.
</details>

### PHP Syntax and Features

### Case Insensitivity

<details>
  <summary><strong>Click to read more</strong></summary>

 PHP is case-insensitive for keywords like echo but case-sensitive for variable names and constants.
    Variables

Variables start with $ and can hold any data type. Rules include:

*  Must begin with a $ followed by a letter or _.
*  Cannot begin with a number.
*  Are loosely typed, meaning their type is inferred automatically.

```php 
    $name = "John";
    $age = 30;
 ```
</details>

### Constants
<details>
  <summary><strong>Click to read more</strong></summary>

Typically written in uppercase, constants are defined using define().
Data Types

PHP supports:

* Strings
* Integers
*  Floats
* Booleans
* Arrays
* Objects
* Null
* Resources (external references like database connections)

Comments: 
* Single-line: // or #
*  Multi-line: /* */

Output: 

* echo: Outputs strings (faster, can take multiple parameters).
* print: Outputs strings but returns a value.

echo "Hello, World!";
print "This is PHP.";

Super Globals

PHP includes built-in global variables, such as:
```php
    $GLOBALS
    $_SERVER
    $_REQUEST, $_POST, $_GET
```
</details>

### PHP and MySQL
<details>
  <summary><strong>Click to read more</strong></summary>

PHP integrates seamlessly with MySQL for database operations. The phpMyAdmin tool is commonly used to manage databases.
Creating a Table

Example SQL for creating a customers table:
```sql 
CREATE TABLE `customers` (
    CustomerId INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Address VARCHAR(255),
    Zip INT,
    City VARCHAR(255),
    PRIMARY KEY (CustomerId)
);
```
</details>

### Inserting Data
<details>
  <summary><strong>Click to read more</strong></summary>

```sql
INSERT INTO `customers` (LastName, FirstName, Address, Zip, City)
VALUES ('Olsen', 'Ole', 'Oppveien 12', '1234', 'Stedet');
```
</details>

### Querying Data
<details>
  <summary><strong>Click to read more</strong></summary>
  Fetch specific data using SQL queries:

```sql 
SELECT * FROM `customers` WHERE CustomerId = 7;
SELECT * FROM `customers` WHERE LastName LIKE '%sen';
```
</details>

### Updating Data
<details>
  <summary><strong>Click to read more</strong></summary>

```sql 
UPDATE `customers`
SET FirstName = "Lars Erik"
WHERE CustomerId = 3;
```
</details>

  ### Relationships and Joins
<details>
  <summary><strong>Click to read more</strong></summary>
  To create relationships between tables:

  ```sql 
  CREATE TABLE `orders` (
    OrderId INT NOT NULL AUTO_INCREMENT,
    CustomerId INT,
    OrderDate DATE,
    PRIMARY KEY (OrderId),
    FOREIGN KEY (CustomerId) REFERENCES customers(CustomerId)
);
```
Use joins to fetch data from related tables:

```sql 
SELECT orders.OrderId, customers.FirstName, customers.LastName
FROM orders
INNER JOIN customers ON orders.CustomerId = customers.CustomerId;
```
</details>

  ### Debugging with PHP
PHP does not have a console like JavaScript. Instead, use:

var_dump: Displays the type and value of a variable.
print_r: Prints readable information about arrays.

<details>
  <summary><strong>Click to read more</strong></summary>
  </details>
  
  ```php
  $info = ["name" => "John", "age" => 30];
var_dump($info);
print_r($info);
```
  </details>

  ### Conclusion
<details>
  <summary><strong>Click to read more</strong></summary>
  PHP remains relevant in web development due to its simplicity, power, and versatility. Combined with MySQL, it provides a robust foundation for building dynamic websites and applications.

  </details>


