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

    <!-- <form action="index.php" method="post">
        <label for="Pizza">Pizza Quantity</label>
        <input type="number" name="pizza">
        <input type="submit" value="Submit">
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
?>