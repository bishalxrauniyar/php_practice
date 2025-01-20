php practice
beginnings s
Understanding PHP Syntax:

Familiarity with how PHP code is written and embedded within HTML.
Ability to start and close PHP tags (<?php and ?>).
Variables and Data Types:

Knowledge of declaring variables using $ and understanding data types like strings, integers, floats, arrays, and booleans.
Control Structures:

Proficiency in using conditional statements (if, else, elseif, switch) and loops (for, while, foreach) for logic control.
Functions:

Understanding how to create and use custom functions.
Familiarity with built-in PHP functions for tasks like string manipulation, array handling, and mathematical operations.
Form Handling:

Ability to process and validate user input from HTML forms using $\_GET and $\_POST superglobals.
Basic Error Handling:
//
//
//
12/18/24

Today covered topics :

Associative Arrays

Understanding the structure and usage of associative arrays in PHP.
Key-value pair operations and practical examples.

array_fill_keys()

Using array_fill_keys() to create an array with specified keys and identical values.

array_fill()

Utilizing array_fill() to populate an array with a specific value for a defined range.

list()

Exploring the list() construct for assigning variables in a single operation from array values.

range()

Generating arrays with a sequence of numbers or characters using range().

compact()

Converting variables into an associative array using the compact() function.

array_chunk()

Dividing an array into smaller chunks using the array_chunk() function.

array_combine()

Combining two arrays to create a new associative array with one as keys and the other as values.

POST and GET Examples

Practical implementations of $\_POST and $\_GET superglobals for handling form data in PHP.
Distinction between POST and GET methods, with security considerations and real-world examples

GitHub repo link: github.com/bishalxrauniyar/php_practice

//
//
//
12/19/2024
array_diff():
Returns elements in the first array not found in others.
array_diff_key(): Compares arrays by keys and returns differing keys.
array_intersect(): Finds common elements across arrays.
array_slice(): Extracts a portion of an array.
array_key_exists(): Checks if a specific key exists in an array.
in_array(): Checks if a value exists in an array.
array_search(): Finds a value and returns its key.
array_count_values(): Counts values and returns a frequency array.
array_merge(): Combines arrays into one.
array_merge_recursive(): Merges arrays recursively.
array_replace(): Replaces elements of the first array with others.
array_reduce(): Reduces an array to a single value using a callback.
array_pop(): Removes the last element of an array.
array_shift(): Removes the first element of an array.
array_unshift(): Adds elements to the start of an array.
arsort(): Sorts an array by values in descending order.
rsort(): Sorts an array in reverse order.
usort(): Sorts an array with a custom function.
array_multisort(): Sorts multiple arrays simultaneously.
shuffle(): Randomizes array elements.
natsort(): Sorts an array using natural ordering.
//
//
//
//
12\*/30/2024
continue with the internship

WordPress Progress Update:
Installation: Installed WordPress locally using XAMPP (or Local).
Themes: Explored and customized themes for the website.
Elementor: Used Elementor block editor for page building and design.
Posts & Pages: Understood the difference between Posts (dynamic content) and Pages (static content).
Plugins: Installed Elementor and Starter Templates plugins for easy site setup.
Starter Templates: Provides a library of ready-made templates and access to Pixabay images.
Site Creation: Built a WordPress site using a theme, customized with Elementor, and added content with plugins.

1.  extract()
    Imports variables into the current symbol table.
    Uses array keys as variable names and values as the variable values.
    $person = array("name" => "John", "age" => 30);
extract($person);
    echo "Name: " . $name . ", Age: " . $age;
2.  next()
    Advances the internal pointer of an array to the next element.
    Returns the value of the next element.
    $a = array("bishal", "kumar", "rauniyar");
$b = next($a);
    echo $b;
3.  prev()
    Moves the internal pointer to the previous element of the array.
    Returns the previous element’s value.
    $fruits = array("apple", "banana", "cherry");
end($fruits); // Move to the last element
    $prevFruit = prev($fruits);
    echo "Previous Fruit: " . $prevFruit;
4.  end()
    Moves the internal pointer to the last element of an array.
    Returns the last element’s value.
    $fruits = array("apple", "banana", "cherry");
$lastFruit = end($fruits);
    echo "Last Fruit: " . $lastFruit;
5.  reset()
    Resets the internal pointer to the first element of an array.
    Returns the first element’s value.
    $fruits = array("apple", "banana", "cherry");
$firstFruit = reset($fruits);
    echo "First Fruit: " . $firstFruit;
6.  each()
    (deprecated in PHP 7.2 and later)
    Returns the current key-value pair and moves the internal pointer to the next element.
    $fruits = array("apple", "banana", "cherry");
$pair = each($fruits);
    echo "Key: " . $pair['key'] . ", Value: " . $pair['value'];
7.  file()
    Reads an entire file into an array, each line being an element.
    $lines = file("example.txt");
foreach ($lines as $line) {
    echo $line . "\n";
    }
8.  SORT_ASC
    Sorts an array in ascending order.
    $a = array(1, 6, 3, 4, 5);
sort($a, SORT_ASC);
    foreach ($a as $b) {
echo "$b";
    }
9.  SORT_DESC
    Sorts an array in descending order.
    $a = array(1, 6, 3, 4, 5);
rsort($a, SORT_DESC);
    foreach ($a as $b) {
echo "$b";
    }
10. SORT_NUMERIC
    Treats array elements as numeric values when sorting.
    $a = array("1", "4", "2", "9");
sort($a, SORT_NUMERIC);
    foreach ($a as $b) {
echo "$b";
    }
11. SORT_REGULAR
    Compares elements in their original data types (strings, integers, etc.).
    $a = array("1", "4", "2", "9", 3);
sort($a, SORT_NUMERIC);
    foreach ($a as $b) {
echo "$b";
    }
12. CASE_LOWER
    Converts array keys to lowercase.
    $fruits = array("Apple" => "Red", "Banana" => "yellow");
$lowercaseKeys = array_change_key_case($fruits, CASE_LOWER);
foreach ($lowercaseKeys as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value;
    }
13. CASE_UPPER
    Converts array keys to uppercase

$fruits = array("Apple" => "Red", "Banana" => "yellow");
$upperCaseKeys = array_change_key_case($fruits, CASE_UPPER);
foreach ($upperCaseKeys as $key => $value) {
echo "Key: " . $key . ", Value: " . $value;
}

WordPress Progress Update:

Learned Basics of WordPress:

Gained understanding of how to use the WordPress dashboard, manage posts/pages, and install themes/plugins.
Themes downloaded
Astra Theme Download:

Installed the Astra theme for building a fast, customizable website with pre-built templates.

WooCommerce Plugin Setup:

Installed WooCommerce for adding e-commerce functionality but faced issues with payments not working properly.

Editing with Block Editor & Elementor:

Used the Block Editor  for basic content and Elementor for advanced page design with drag-and-drop features
 have to make a project to clearly understand .
