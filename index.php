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

?>