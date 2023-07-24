<?php  
$server_name = "localhost";
$username = "root";
$password = ""; 
$database_name = "croplinkdb";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
try {
    // Create a PDO connection
   

    //conection successful
    echo "Connected to the database successfully";

    // Close the connection
    
} catch (PDOException $e) {
    // Connection failed
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $cartItems = $_POST['cartItems'];
  echo "Received cartItems: " . $cartItems . "<br>";

  parse_str($cartItems, $cartItemsArray);

  echo "Decoded cartItemsArray: ";
  var_dump($cartItemsArray);
  echo "<br>";

  if (is_array($cartItemsArray)) {
    foreach ($cartItemsArray as $key => $value) {
      if ($key === 'titleInput') {
        $title = $value;
        echo "Title: " . $title . "<br>";
      } elseif ($key === 'priceInput') {
        $price = $value;
        echo "Price: " . $price . "<br>";
      }
      // Rest of your code for processing the cart items
    }
  } else {
    echo "Invalid cartItemsArray: " . $cartItemsArray;
  }
}
?>
