<?php
// echo "Hello World! Bishal Rauniyar <br>";
// $name = "Bishal Rauniyar";
// $age = 21;
// $gpa = 3.5;
// $isMale = true;
// $food = "pizza";
// $quantity = 2;
// $price = 30.5;
// $total = $quantity * $price;
// cookies
// setcookie("name", "Bishal Rauniyar", time() + 86400);
// setcookie("age", 21, time() + 86400);
// setcookie("gpa", 3.5, time() + 86400);

// foreach ($_COOKIE as $key => $value) {
//     echo "{$key}={$value} <br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <!-- <h2>hello <?php echo $name ?></h2>
    <p><?php echo "$name has ordered $quantity $food online <br>"; ?></p>
    <p><?php echo "your total is RS {$quantity}*{$price}={$total}"; ?></p> -->
    <!-- sign up form -->

    <!-- POST METHOD -->
    <!-- <form action="index.php" method="post">

        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <button type="submit">Sign In</button>

    </form> -->

    <!-- GET METHOD -->
    <!-- <form action="index.php" method="get">

        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <button type="submit">Sign Up</button>

    </form> -->
    <!-- find the price of pizza with quantity entered in the form and display the total -->
    <!-- <form action="index.php" method="post">
        <label for="Pizza">Pizza Quantity</label>
        <input type="number" name="pizza">
        <input type="submit" value="Submit">
    </form> -->
    <!-- for radius of circle -->
    <!-- <form action="index.php" method="post">
        <label for="Radius">Enter the radius of the circle</label>
        <input type="number" name="radius">
        <input type="submit" value="Submit">

    </form> -->

    <!-- // Associative Array -->
    <!-- <form action=index.php method="post">
        <input type="text" name="country" placeholder="Enter the country">
        <button type="submit">Submit</button>
        <br>
    </form> -->
    <!-- isset() and empty () -->


    <!-- <h2> Login form </h2>
    <form action="index.php" method="post">
        <input type="email" name="email" placeholder="Enter your email"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <button type="submit" value="signin" name="signin">Sign In</button>
    </form> -->


</body>

</html>

<?php
// post method
// echo "{$_POST["email"]} <br>";
// echo "{$_POST["password"]} <br>";

// get method
// echo "{$_GET["email"]} <br>";
// echo "{$_GET["password"]} <br>";
// $pizzaQantity = $_POST["pizza"];
// $total = $pizzaQantity * $price;
// echo "You have ordered $pizzaQantity pizza";
// echo "<br>";
// echo "Your total is RS $pizzaQantity * $price = {$total}";
// $radius = $_POST["radius"];
// $area = pi() * $radius * $radius;
// echo "The area of the circle is $area";
// echo "<br>";
// $circumference = 2 * pi() * $radius;
// echo "<br>";
// echo "The circumference of the circle is $circumference";
// $volume = 4 / 3 * pi() * $radius * $radius * $radius;
// echo "<br>";
// echo "The volume of the circle is $volume";
// 
// Magic Constants
// echo __DIR__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __LINE__;
// echo "<br>";
// echo __FUNCTION__;
// echo "<br>";
// echo __CLASS__;
// echo "<br>";
// echo __METHOD__;
// echo "<br>";
// echo __NAMESPACE__;
// echo "<br>";
// echo __TRAIT__;
// echo "<br>";

// $capitals = array(
//     "Nepal" => "Kathmandu",
//     "India" => "New Delhi",
//     "China" => "Beijing",
//     "USA" => "Washington D.C.",
//     "UK" => "London"
// );

// $country = $_POST["country"];
// echo "The capital of $country is $capitals[$country]";
// 


// isset() and empty()
// if (isset($_POST["signin"])) {
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     if (empty($email)) {
//         echo "Email is empty";
//     } else if (empty($password)) {
//         echo "Password is empty";
//     } else {
//         echo "Welcome $email";
//     }
// }
// The array() function is used to create an array.
$fruits = array("apple", "banana", "cherry");

echo "Fruits: ";

foreach ($fruits as $fruit) {

    echo $fruit . " ";
}

echo "<br>";

//array_combine 
$keys = array("a", "b", "c");
$values = array("appple", "banana", "cherry");

$combined = array_combine($keys, $values);
echo "Combined Array: <br>";
foreach ($combined as $key => $value) {
    echo "[$key=>$value] <br>";
}
//output
//Combined Array:
// [a=>appple]
// [b=>banana]
// [c=>cherry]


//array_chunk
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$chunked = array_chunk($numbers, 2);
echo "Chunked Array: <br>";
foreach ($chunked as $chunk) {
    echo "[" . implode(",", $chunk) . "]<br>";
}
//output
//Chunked Array:
// [1,2]
// [3,4]
// [5,6]
// [7,8]
// [9,10]


//compact() function

$name = "Bishal";
$age = 21;
$info = compact("name", "age");
echo "compact array : <br>";
foreach ($info as $key => $value) {
    echo "[$key=>$value]";
}
//output
//[name=>Bishal][age=>21]


// range() generates an array containing a start and an end value, with optional step increments.

$even_numbers = range(2, 10, 2);
echo " <br> Even numbers : <br>";
foreach ($even_numbers as $number) {
    echo  "$number, ";
}
echo "<br>";


//"list() function"
$info = array("Bishal", "Rauniyar", 21);
list($firstname, $lastname, $age) = $info;
echo "Firstname: $firstname \n";
echo "Lastname:$lastname \n";
echo "Age:$age \n";
echo "<br>";

// output
//Firstname: Bishal Lastname:Rauniyar Age:21


//array_fill() creates an array with a specified number of elements, each having the same value.

$filledArray = array_fill(0, 5, "Bishal");
echo "Filled Array :";
foreach ($filledArray as $fa) {
    echo $fa . '';
}
echo "<br>";
// output
//Filled Array :BishalBishalBishalBishalBishal


//array_fill_keys() creates an array using specified keys and the same value for each key.
$keys = array("a", "b", "c");

$filledArray = array_fill_keys($keys, "hello");

echo "Filled Array with Keys: ";

foreach ($filledArray as $key => $value) {

    echo "[$key => $value] ";
}
echo "<br>";
//output 
//Filled Array with Keys: [a => hello] [b => hello] [c => hello]

//array_flip() flips the keys and values of an array, creating a new array where the original values become keys, and the original keys become values.
$fruits = array("apple", "banana", "cheery");
$filledArray = array_flip($fruits);
echo "Flipped array:";
foreach ($filledArray as $key => $value) {
    echo "[$key=>$value]";
}
echo "<br>";
//output
//Flipped array:[apple=>0][banana=>1][cheery=>2]


//array_slice() extracts a portion of an array based on a starting index and length, creating a new array containing the selected elements.


$fruits = array("apple", "banana", "cherry", "date", "fig");
$slice = array_slice($fruits, 1, 3);
echo "Sliced array : ";
foreach ($slice as $slic) {
    echo $slic . " ";
}
echo "<br>";
//output
// Sliced array : banana cheery date


//array_diff() calculates the difference between two or more arrays and returns an array containing the values that are present in the first array but not in the other arrays.

$a = array("a", "b", "c");
$b = array("b", "c", "d");
$differrences = array_diff($a, $b);
echo "Difference are/is :";
foreach ($differrences as $differrence) {
    echo $differrence . " ";
}

echo "<br>";
//array_diff_key() computes the difference of arrays using keys for comparison and returns an array containing values from the first array whose keys are not present in the other arrays.
$a = array("a" => 1, "b" => 2, "c" => 3);
$b = array("b" => 2, "c" => 3, "c" => 4);
$array_diff_key = array_diff_key($a, $b);
echo "Key value difference :";
foreach ($array_diff_key as $key => $value) {
    echo "[$key => $value]";
}
echo "<br>";
//output
//Key value difference :[a => 1]

//array_diff_assoc() computes the difference of arrays with an additional index check.
//Basically complement of difference of the array provided.


$a = array("a" => 1, "b" => 2, "c" => 3);
$b = array("b" => 2, "c" => 3, "c" => 4);
$array_diff_assoc = array_diff_assoc($a, $b);
echo "Key value difference Complement:";
foreach ($array_diff_assoc as $key => $value) {
    echo "[$key => $value]";
}
echo "<br>";

//output 
//Key value difference Complement:[a => 1][c => 3]



//The array_intersect() function calculates the intersection of two or more arrays and returns an array containing values that are present in all input arrays.

$a = array("a" => 1, "b" => 2, "c" => 3);
$b = array("b" => 2, "c" => 3, "c" => 4);
$array_intersect = array_intersect($a, $b);
echo "Key value intersect :";
foreach ($array_intersect as $key => $value) {
    echo "[$key => $value]";
}
echo "<br>";
