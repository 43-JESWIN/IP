<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "products";
$port = 3307;
$nameErr = "";$desErr = "";$priceErr = "";
$conn = new mysqli($servername, $username, $password, $database, $port);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $pname = $_POST["name"];
    $pdescription = $_POST["description"];
    $pprice = $_POST["price"];
    if (empty($pname)) {
        $nameErr = "Enter name";
    }    
    else {
        $namepattern = "/^[a-zA-Z ]*$/";
        if (!preg_match($namepattern, $pname)) {
            $nameErr = "Invalid name";
        }
    }
    if (empty($pdescription)) {
        $desErr = "Enter Description";
    }
    if (empty($pprice)) {
        $priceErr = "Enter price";
    } else {
        $pricePattern = "/^\d+(\.\d+)?$/";
        if (!preg_match($pricePattern, $pprice)) {
            $priceErr = "Invalid price format";
        }    }
            if (empty($nameErr) && empty($desErr) && empty($priceErr)) {
        $sql = "INSERT INTO product_table (Name, Description, Price) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssd", $pname, $pdescription, $pprice);
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $stmt->close();
    }
   }
   }$conn->close();
?>
<style>
    form{
        border: 1px solid white;        width:400px;        height:400px;        margin-top: 20;
    }
.error {
    color: red;
}
</style>
<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="name">Product</label>
    <input type="text" id="Name" name="name">
    <span class="error"><?php echo $nameErr; ?></span>    <br><br>
    <label for="description">Description</label>
    <input type="text" id="Description" name="description">
    <span class="error"><?php echo $desErr; ?></span>    <br><br>
    <label for="price">Price</label>
    <input type="numer" id="Price" name="price">
    <span class="error"><?php echo $priceErr; ?></span>    <br><br>
    <input type="submit" value="Submit">
</form>
