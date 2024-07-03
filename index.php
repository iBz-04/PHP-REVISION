<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action ="index.php" method="post">
    <label for="x">x:</label>
    <input type="text" name="x"><br/>
    <label for="x">y:</label>
    <input type="text" name="y"><br/>
    <hr/>
    <input type="submit" value="total">
  <!-- <label style="font-size: large; margin: 3px;" for="quantity">quantity</label><br/>
  <input type="text" name="quantity"><br/>
  <input style="margin: 4px;" type="submit" value="total"><br/> -->
    <!-- <label for="useranme">Name</label><br/>
    <input type="text" name="username"><br/>
    <label for="Password">Password</label><br/>
    <input type="password" name="password"><br/>
    <input style="margin-top: 4px; border-radius: 5px;" type="submit" value="Login">
  </form> -->
</body>
</html>

<?php
  //  echo"Hello World yo!! <br />";
  //  echo"its a good day"
   // this is a comment
   /* this is
   a multiline comment*/
  //  $name = "ibrah Raya";
  //  $food = "beans";
  //  $email = "iss@gmail.com";
  //  $age = 21;
  //  $users = 5;
  //  $price = 5.99;
  //  $employed = true;

  //  $total = null;

  //  echo"Hello {$name} <br/>";
  //  echo"You like {$food} <br/>";
  //  echo"your email is {$email} <br/>";
  //  echo"you are {$age} yrs old <br/>";
  //  echo"there are {$users} users online <br/>";
  //  echo"the price is: \${$price} <br/>";
  //  echo"employement status: {$employed} <br/>";

  //  echo"you have a cost of {$price} and your users are {$users} <br/>";
  //  $total = $price * $users;
  //  echo"total is \${$total}";

  //arithmetic operators
  // $x = 10;
  // $y = 2;
  // $z = null;

  // $z = $x % $y;
  // echo $z;

  //increment & decrement operators (++ , --)
  // $count = 10;
  // $count+= 3;
  // echo $count;

 // Operator precedence
 // ()
 // **
 // * / %
 // + -



 //$_GET & $_POST (special variables that are USED TO COLLECT DATA FROM AN HTML FORM)
/*
data is sent to the file in the action attribute of <form></form>
<form action="some_file.php" method="get"></form> */

//$_GET = data is appended to the URL - NOT SECURE
//$_POST = data is packaged inside the body of the HTTP request - MORE SECURE

// echo "{$_POST["username"]} <br/>";
// echo "{$_POST["password"]} <br/>";

// $item = "Stuff";
// $price = 5.99;
// $total = null;
// $quantity = $_POST["quantity"];

// $total = $quantity * $price;

// echo"You have ordered {$quantity} x {$item}/s <br/>";
// echo "your total is: \${$total}";
$x = $_POST['x'];
$y = $_POST["y"];
$total = null;

// $total = abs($x); absolute value
$total= round($x) ** round($y);
echo "Your total is: \${$total} <br/>";

$maximum = max($x, $y);
echo"The Largest number of among them is: {$maximum}";


?>
