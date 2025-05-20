<?php
echo "Hello World! Bishal Rauniyar <br>";
$name = "Bishal Rauniyar";
$age = 21;
$gpa = 3.5;
$isMale = true;
$food = "pizza";
$quantity = 2;
$price = 30.5;
$total = $quantity * $price;
// cookies

// The $_COOKIE superglobal in PHP is an associative array that contains all the cookies sent by the browser to the server. The keys of the array are the cookie names, and the values are the cookie values.
setcookie("name", "Bishal Rauniyar", time() + 86400);
setcookie("age", 21, time() + 86400);
setcookie("gpa", 3.5, time() + 86400);

foreach ($_COOKIE as $key => $value) {
    echo "{$key}={$value} <br>";
}
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
    <p><?php echo "your total is RS {$quantity}*{$price}={$total}"; ?></p>  this is a string template our total is RS {$quantity}*{$price} -->
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

    <!-- $username = ""; // Empty string
if (isset($username)) { // Checks if $username is defined and not null
    echo "Username is set"; 

} else {
    echo "Username is not set";
}
if (empty($username)) { // Checks if $username is considered empty
    echo "Username is empty"; 
} else {
    echo "Username is not empty";
}  -->



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
echo __DIR__;
echo "<br>";
echo __FILE__;
echo "<br>";
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


//array_chunk (oddnumber of elements CHECK) 
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
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
// [9]


//compact() function usecase

$name = "Bishal";
$age = 21;
$info = compact("name", "age");
echo "compact array : <br>";
foreach ($info as $key => $value) {
    echo "[$key=>$value]";
}
//output
//[name=>Bishal][age=>21]


// range() generates an array containing a start and an end value, with optional step increments inslusive in nature.

$even_numbers = range(2, 10, 2);
echo " <br> Even numbers : <br>";
foreach ($even_numbers as $number) {
    echo  "$number, ";
}
echo "<br>";


//"list() function"
$info = array("Bishal", "Rauniyar", 21, "Kalimati");
list($firstname, $lastname, $age, $location) = $info;
echo "Firstname: $firstname \n";
echo "Lastname:$lastname \n";
echo "Age:$age \n";
echo "Location:$location \n";
echo "<br>";

// output
//Firstname: Bishal Lastname: Rauniyar Age:21


//array_fill() creates an array with a specified number of elements, each having the same value.

$filledArray = array_fill(0, 4, "Bishal");
echo "Filled Array :";
foreach ($filledArray as $fa) {
    echo $fa . '';
}
echo "<br>";
// output
//Filled Array :BishalBishalBishalBishal


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
$fruits = array("apple", "banana", "cheery", "date");
$filledArray = array_flip($fruits);
echo "Flipped array:";
foreach ($filledArray as $key => $value) {
    echo "[$key=>$value]";
}
echo "<br>";
//output
//Flipped array:[apple=>0][banana=>1][cheery=>2][date=>3]


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


//output
// Key value intersect : [b=>2] 


//array_intersect_assoc() computes the intersection of arrays with an additional index check, comparing both values and keys.


$a = array("a" => 1, "b" => 2, "c" => 3);
$b = array("a" => 3, "b" => 2, "c" => 1);
$array_intersect_assoc = array_intersect_assoc($a, $b);
echo "Array Intersect Asso :";
foreach ($array_intersect_assoc as $key => $value) {
    echo "[$key=>$value]";
}
echo "<br>";
//output
//Array Intersect Asso :[b=>2]

//array_intersect_key() computes the intersection of arrays using keys for comparison and returns an array containing values from the first array that have matching keys in the other arrays.


$a = array("a" => 1, "b" => 2, "c" => 3);
$b = array("z" => 3, "b" => 2, "c" => 1);
$array_intersect_key = array_intersect_key($a, $b);
echo "Array Intersect Key :";
foreach ($array_intersect_key as $key => $value) {
    echo "[$key=>$value]";
}
echo "<br>";
//output
//Array Intesect Key : [b=>2][c=>3]


//array_key_exists() checks if a specified key exists and returns true if the key is found, and false otherwise.

$person = array("name" => "Bishal", "age" => 21, "location" => "kalimati");
$key_exits = array_key_exists("name", $person);
echo "The key name Exits: " . ($key_exits ? "YES" : "NO");
echo "<br>";
//ourput
//The key name Exits : YES



//The in_array() function checks if a specified value exists in an array. It returns true if the value is found, and false if otherwise.

$fruits = array("apple", "banana", "cherry", "date");
$in_array = in_array("banana", $fruits);
echo "banana in array :";
if ($in_array == 0) {
    echo " NO0";
} else {
    echo " YES";
}
echo "<br>";

// array_search() looks for a value in an array and returns the corresponding key if the value is found. If the value is not found, it returns false.

$fruits = array("apple", "banana", "cherry", "date");
$key_search = array_search("date", $fruits);
echo "date found at key : " . ($key_search);
echo "<br>";

//The array_count_values() function counts the frequency of values in an array and returns an associative array where the keys are the unique values from the input array.
$a = array(1, 2, 2, 3, 6, 5, 5, 4, 1, 2, 5, 2, 5, 1);
$count = array_count_values($a);
echo "Counted Values are: ";
foreach ($count as $value => $count) {
    echo "$value:$count ,";
}
echo "<br>";


//The array_merge() function merges two or more arrays into a single array.

$a = array(1, 2, 3, 3, 2, 1);
$b = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$c = array_merge($a, $b);
echo "Merged Array";
foreach ($c as $item) {
    echo "$item" . ' ';
}
echo "<br>";
//output 
//Merged Array1 2 3 3 2 1 1 2 3 4 5 6 7 8 9


//array_merge_recursive() is used to merge multidimensional arrays.
$a = array("a" => "apple", "b" => "ball");
$b = array("c" => "cat", "d" => "dog");
$c = array_merge_recursive($a, $b);
echo "Merged Recursive ";
foreach ($c as $key => $value) {
    echo "$key => $value" . " ";
}
echo "<br>";
//output
//Merged Recursive a => apple b => ball c => cat d => dog



//array_replace() replaces the values of the first array with the values from the second array for matching keys.
$a = array("a" => "apple", "b" => "ball");
$b = array("b" => "banana", "d" => "dog");
$c = array_replace($a, $b);
echo "Array Replaced ";
foreach ($c as $key => $value) {
    echo "$key => $value" . " ";
}
echo "<br>";
//output

//Array Replaced a => apple b => banana d => dog


//array_reduce() reduces an array to a single value using a callback function.


$numbers = array(1, 2, 3, 4, 5);

$sum = array_reduce($numbers, function ($carry, $item) {

    return $carry + $item;
});

echo "Sum of Numbers: " . $sum;

// output
// Sum of Numbers: 15

echo "<br>";


//The array_pop() function removes and returns the last element from an array.

$a = array(1, 2, 3, 4);
$lastelement = array_pop($a);
echo "last element is : " . ($lastelement);



// output
// last element is : 4 
echo "<br>";


//The array_shift() function removes and returns the first element from an array.
$a = array(1, 2, 3, 4);
$firstelement = array_shift($a);
echo "the first element is : " . ($firstelement);
echo "<br>";

//output
// the first element is : 1


// array_unshift() adds one or more elements to the beginning of an array.

$a = array(1, 2, 3, 4);
array_unshift($a, "0", "5");
echo " the new array is: ";
foreach ($a as $item) {
    echo $item . " ";
}
echo "<br>";
//output
//the new array is: 0 5 1 2 3 4


// arsort() sorts an associative array in descending order, preserving key-value associations.

$fruits = array("banana" => 5, "cherry" => 11, "apple" => 30);
arsort($fruits);

echo "Sorted Array (Reverse): ";

foreach ($fruits as $key => $value) {

    echo "[$key => $value] ";
}
echo "<br>";
//output
//Sorted Array (Reverse): [apple => 30] [cherry => 11] [banana => 5]

// asort() sorts an associative array in accending order, preserving key-value associations.

$fruits = array("banana" => 5, "cherry" => 11, "apple" => 30);
asort($fruits);

echo "Sorted Array (accending): ";

foreach ($fruits as $key => $value) {

    echo "[$key => $value] ";
}
echo "<br>";
//output
//Sorted Array (accending): [banana => 5] [cherry => 11] [apple => 30]


//rsort() sorts an indexed array in descending order.

$num = array(1, 2, 3, 5, 6, 8);
rsort($num);
echo "Reverced Sorted Numbers :";
foreach ($num as $nu) {
    echo $nu . " ";
}
echo "<br>";
//output
//Reverced Sorted Numbers :8 6 5 3 2 1


//usort() sorts an indexed array using a user-defined comparison function.
$numbers = array(5, 3, 1, 4, 2);

usort($numbers, function ($a, $b) {

    return $a % $b;
});

echo "Sorted Numbers (User-Defined): ";

foreach ($numbers as $number) {

    echo $number . " ";
}
echo "<br>";
//output
//Sorted Numbers (User-Defined): 4 2 3 5 1



//array_multisort() performs a multi-dimensional sorting of an array.
$names = array("bishal", "gokarna", "rohan");
$ages = array(21, 20, 21);
array_multisort($names, $ages);
echo "Sorted Names: ";
foreach ($names as $name) {
    echo $name . " ";
}

echo "<br>";

echo "Sorted Ages: ";
foreach ($ages as $age) {
    echo $age . " ";
}

//output
//Sorted Names: bishal gokarna rohan
// Sorted Ages: 21 20 21
echo "<br>";



// shuffle() randomly shuffles the elements of an array.

$cards = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
shuffle($cards);
echo "Suffeled Cards :";
foreach ($cards as $card) {
    echo $card . " ";
}

//output
//Suffeled Cards: 9 5 1 2 8 7 6 3 4
echo "<br>";


//natsort()
// This function sorts an array using a "natural order" algorithm, which is useful for sorting arrays with numbers.


$fruits = array("apple1", "apple5", "apple0");

natsort($fruits);

echo "Naturally Sorted Fruits: ";

foreach ($fruits as $fruit) {

    echo $fruit . " ";
}
//output
//If the input is apple010 ,apple5 apple2
// the output will be apple010,apple2,apple5 that is because the natsort() function will only chek the 1st element of the n
// Naturally Sorted Fruits: apple0 apple1 apple5
echo "<br>";

//12/20/2024
//array_filter() filters the elements of an array using a callback function and returns a new array containing only the elements that pass the callback's test.

$numbers = array(1, 2, 3, 4, 5);

$filtered = array_filter($numbers, function ($n) {

    return $n % 2 == 0; // Filter even numbers.

});

echo "Filtered Numbers (Even): ";

foreach ($filtered as $number) {

    echo $number . " ";
}
echo "<br>";
//output 
//Filtered Numbers (Even): 2 4


//"array_pad() pads an array to a specified length with a specified value."
$number = array(1, 2, 3);
$padded = array_pad($number, 5, 0);
echo "Padded Array :";
foreach ($padded as $num) {
    echo $num . " ";
}
echo "<br>";
//  output
// Padded Array : 1 2 3 0 0


// array_map() applies a callback function to each element of an array and returns a new array containing the results of the callback function for each element.
$a = array(1, 2, 3, 4);
$square = array_map(
    function ($n) {
        return $n *  $n;
    },
    $a
);
echo "The square of each element :";
foreach ($square as $sqr) {
    echo $sqr . " ";
}
echo "<br>";
// output : 
// The square of each element : 1 4 9 16



//array_change_key_case()
// This function changes the case of keys in an array to either lowercase or uppercase.
//for lower case CASE_UPPER
$a = array("Apple" => 1, "Ball" => 2, "CaT" => 3);
$lowercase = array_change_key_case($a, CASE_LOWER);
echo "The Lower case keys changes are as follows";
foreach ($lowercase as $key => $value) {
    echo "[$key=>$value]" . " ";
}
echo "<br>";

// for lower case CASE_UPPER
$a = array("Apple" => 1, "Ball" => 2, "CaT" => 3);
$uppercase = array_change_key_case($a, CASE_UPPER);
echo "The Upper case keys changes are as follows";
foreach ($uppercase as $key => $value) {
    echo "[$key=>$value]" . " ";
}
echo "<br>";


//Output : 
// The Lower case keys changes are as follows[apple=>1] [ball=>2] [cat=>3]
// The Upper case keys changes are as follows[APPLE=>1] [BALL=>2] [CAT=>3]


//"array_reverse()The reverse array function reverses the order of elements in an array."

$normal = array("Bishal", "Ajay", "Madhav");
$reversed = array_reverse($normal);
echo "Reveresed  Array : ";
foreach ($reversed as $rev) {
    echo "$rev" . " ";
}
echo "<br>";
// Output 
// Reveresed Array : Madhav Ajay Bishal


//array_splice()
// array_splice() removes a portion of an array and replaces it with new elements. 
// It can also return the removed elements as a new array.
$developers = array("bishal", "arpan", "gokarna", "saugat");
$added_developers = array_splice($developers, 2, 2, array("nabin", "rohan"));
// $added_developers = $developers;
echo "Replacing the elements at index 2 : ";
foreach ($developers  as $ad) {
    echo "$ad" . " ";
}
echo "<br>";
//Replacing the elements at index 2 : bishal arpan nabin rohan
//REMOVING elements
echo "Removed the elements at index 2 : ";
foreach ($added_developers  as $ad) {
    echo "$ad" . " ";
}
echo "<br>";
//Removing the elements at index 2 : gokarna saugat


//"array_unique() removes duplicate values from an array and returns a new array with only the unique values.
$a = array("bishal", "ajay", "madhav", "bishal", "Bishal");
$b = array_unique($a);
echo "Unique element in the array are: ";
foreach ($b as $newb) {
    echo "$newb" . " ";
}
echo "<br>";
//output( bishal and Bishal are  not same)
//Unique element in the array are: bishal ajay madhav Bishal



//array_walk() applies a user-defined callback function to each element of an array.
$fruits = array("apple", "banana", "cherry");

array_walk($fruits, function (&$value) {

    $value = strtoupper($value);
});

echo "Modified Fruits: ";

foreach ($fruits as $fruit) {

    echo $fruit . " ";
}

echo "<br>";
//uppercase output
//Modified Fruits: APPLE BANANA CHERRY

$fruits = array("Apple", "Banana", "Cherry");

array_walk($fruits, function (&$value) {

    $value = strtolower($value);
});

echo "Modified Fruits: ";

foreach ($fruits as $fruit) {

    echo $fruit . " ";
}
echo "<br>";
//lowercase output
// Modified Fruits: apple banana cherry




// Array Calculations & Returns
// 44. array_keys()
// array_keys() returns all the keys or a subset of keys from an associative array.
$a = array("Apple" => 1, "Ball" => 2, "CaT" => 3);
$b = array_keys($a);
echo "keys of the element in the array are: ";
foreach ($b as $key) {
    echo "[$key]" . " ";
}
echo "<br>";



//array_column()
// array_column() extracts the values from a single column of a multi-dimensional array and returns an array containing those values.
$people = array(
    array("name" => "Bishal", "age" => 21, "location" => "kathmand"),
    array("name" => "Bisha", "age" => 22, "location" => "kathman"),
    array("name" => "Bish", "age" => 23, "location" => "kathma"),
    array("name" => "Bis", "age" => 24, "location" => "kathm"),
    array("name" => "Bi", "age" => 25, "location" => "kath"),
    array("name" => "B", "age" => 26, "location" => "kat")
);

$names = array_column($people, "name");
$ages = array_column($people, "age");
$locations = array_column($people, "location");
echo "The names are :";
echo "<br>";
foreach ($names as $name) {
    echo $name . " ";
    echo "<br>";
}

echo "<br>";

echo "The ages are :";
echo "<br>";
foreach ($ages as $age) {
    echo $age . " ";
    echo "<br>";
}

echo "<br>";

echo "The locations are :";
echo "<br>";
foreach ($locations as $location) {
    echo $location . " ";
    echo "<br>";
}

echo "<br>";
//Output
//The names are :
// Bishal
// Bisha
// Bish
// Bis
// Bi
// B

// The ages are :
// 21
// 22
// 23
// 24
// 25
// 26

// The locations are :
// kathmand
// kathman
// kathma
// kathm
// kath
// kat



//array_rand() returns one or more random keys from an array.
$fruits = array("apple", "banana", "cherry", "date", "fig");
$randomKey = array_rand($fruits);
echo "Random Key: " . $randomKey . " " . $fruits[$randomKey];
echo "<br>";

// Output 
//Random key with the value


//array_product()
// This function calculates the product of all the values in an array.
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = array_product($a);
echo "The product of the given array is : ";
echo $b;
echo "<br>";
// output
//The product of the given array is : 362880


//array_sum() calculates the sum of all the values in an array.
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = array_sum($a);
echo "The sum of the given array is : ";
echo $b;
echo "<br>";
// output
// The sum of the given array is : 45


//"count() returns the number of elements in an array."
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = count($a);
echo "The number of elements in the given array is : ";
echo $b;
echo "<br>";
//output
//The number of elements in the given array is : 9


//"current() returns the current element's value in an array." 
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = current($a);
echo "The current elements in the given array is : ";
echo $b;
echo "<br>";
//output
// The current elements in the given array is : 1


//"key() returns the current element's key in an array."
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$b = key($a);
echo "The current element's key in the given array is : ";
echo $b;
echo "<br>";
//output
// The current element's key in the given array is : 0


//extract()
// The extract function imports variables into the current symbol table from an associative array, using the array keys as variable names and values as variable values.
$person = array("name" => "John", "age" => 30);

extract($person);

echo "Name: " . $name . ", Age: " . $age . "<br>";


//next()
//This function advances the internal pointer of an array to the next element and returns that element's value.

$a = array("bishal", "kumar", "rauniyar");
$b = next($a);
echo "$b";
echo "<br>";

//prev() moves the internal pointer of an array to the previous element and returns that element's value.

$fruits = array("apple", "banana", "cherry");

end($fruits); //pushing the internal pointer to the last element of the array

$prevFruit = prev($fruits);

echo "Previous Fruit: " . $prevFruit;
echo "<br>";


// end() moves the internal pointer of an array to the last element and returns that element's value.

$fruits = array("apple", "banana", "cherry");

$lastFruit = end($fruits);

echo "Last Fruit: " . $lastFruit;
echo "<br>";

// Output:
// Last Fruit: cherry

// reset() moves the internal pointer of an array to the first element and returns that element's value.
$fruits = array("apple", "banana", "cherry");
$firstFruit = reset($fruits);

echo "First Fruit: " . $firstFruit;
echo "<br>";

// Output:
// First Fruit: apple


//each() returns the current key-value pair from an array and advances the internal pointer to the next element. Note: This function has been removed in PHP versions 7.2 and later – try using foreach instead.

// $fruits = array("apple", "banana", "cherry");

// $pair = each($fruits);

// echo "Key: " . $pair['key'] . ", Value: " . $pair['value'];
// echo "<br>";

//file() reads an entire file into an array, with each line of the file as an element in the array.
$lines = file("example.txt");

foreach ($lines as $line) {

    echo $line . "\n";
}
echo "<br>";
// output
// bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar bishal rauniyar

//SORT_ASC
// This constant specifies ascending order.
$a = array(1, 6, 3, 4, 5);
sort($a, SORT_ASC);
foreach ($a as $b) {
    echo "$b";
}
echo "<br>";


//SORT_DESC
// This constant specifies descending order.
$a = array(1, 6, 3, 4, 5);
rsort($a, SORT_DESC);
foreach ($a as $b) {
    echo "$b";
}
echo "<br>";


//SORT_NUMERIC
// This constant indicates that elements should be treated as numeric values when sorting. It ensures that the values are compared numerically rather than as strings.

$a = array("1", "4", "2", "9");
sort($a, SORT_NUMERIC);
foreach ($a as $b) {
    echo "$b";
}
echo "<br>";


//SORT_REGULAR
// This constant indicates that elements should be compared in their original data types without any special treatment as numbers or strings.

$a = array("1", "4", "2", "9", 3);
sort($a, SORT_NUMERIC);
foreach ($a as $b) {
    echo "$b";
}
echo "<br>";


//CASE_LOWER
// This constant specifies that keys should be converted to lowercase.
$fruits = array("Apple" => "Red", "Banana" => "yellow");

$lowercaseKeys = array_change_key_case($fruits, CASE_LOWER);

foreach ($lowercaseKeys as $key => $value) {

    echo "Key: " . $key . ", Value: " . $value . "\n";
}
echo "<br>";

//OUTPUT
// Key: apple, Value: Red Key: banana, Value: yellow



//CASE_UPPER
// This constant specifies that keys should be converted to uppercase.
$fruits = array("Apple" => "Red", "Banana" => "yellow");

$lowercaseKeys = array_change_key_case($fruits, CASE_UPPER);

foreach ($lowercaseKeys as $key => $value) {

    echo "Key: " . $key . ", Value: " . $value . "\n";
}
echo "<br>";

//output
//Key: APPLE, Value: Red Key: BANANA, Value: yellow


//completed the practice of php here


$capitals = array(
    "Nepal" => "Kathmandu",
    "Nepal" => "New Delhi",
    "China" => "Beijing",
    "USA" => "Washington D.C.",
    "UK" => "London"
);
foreach ($capitals as $country => $capital) {
    echo "The capital of $country is $capital";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}



// function getClientIP()
// {
//     // Check for shared internet/ISP IP
//     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//         return $_SERVER['HTTP_CLIENT_IP'];
//     }

//     // Check for IPs passing through proxies
//     if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//         // HTTP_X_FORWARDED_FOR can contain multiple IPs separated by comma
//         // The first one is the client's original IP
//         $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
//         return trim($ipList[0]);
//     }

//     // If neither found, use REMOTE_ADDR
//     if (!empty($_SERVER['REMOTE_ADDR'])) {
//         return $_SERVER['REMOTE_ADDR'];
//     }

//     // If all else fails
//     return 'Unknown';
// }

// // Example usage
// $clientIP = getClientIP();
// echo "Client IP Address: " . $clientIP;


// echo "<br>";
// $ipaddress = getenv("REMOTE_ADDR");
// echo "Your IP Address is " . $ipaddress;



// echo "<br>";
// echo "<br>";
// echo "<br>";


function getClientIP()
{
    $ip_sources = ['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'];
    foreach ($ip_sources as $source) {
        if (!empty($_SERVER[$source])) {
            $ip = $_SERVER[$source];
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            if ($ip != '127.0.0.1' && $ip != '::1') {
                return $ip;
            }
        }
    }
    $context = stream_context_create(['http' => ['timeout' => 5]]);
    $externalIP = @file_get_contents('https://api.ipify.org', false, $context);
    return $externalIP !== false ? trim($externalIP) : 'Kansas City';
}

function get_city_name()
{
    $client_ip = getClientIP();
    if ($client_ip === 'Kansas City') {
        return 'Kansas City';
    }

    $apiKey = '3b525eaaafd6f889e2476e21b1350959';
    $apiUrl = "http://api.ipstack.com/{$client_ip}?access_key={$apiKey}";
    $args = ['timeout' => 5, 'httpversion' => '1.1'];
    $response = wp_remote_get($apiUrl, $args);

    if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
        $data = json_decode(wp_remote_retrieve_body($response), true);
        return isset($data['city']) && !empty($data['city']) ? $data['city'] : 'Kansas City';
    }
    return 'Kansas City';
}

// Output the city name
echo get_city_name();

qwe