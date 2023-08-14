
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-image: url(https://img.freepik.com/free-photo/background-blue-recycled-paper_1253-84.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  }
  input[type="text"]{
    display: flex;
    justify-content: center;
    text-align: center;
}
 .Header{
    margin-top:200px;
font-family: monospace;
font-weight: 700;
font-size: 45px;
text-align: center;

color: rgb(0, 30, 128);
}
#in1,#in2,#in3,#in4{

width: 50%;
height: 55px;
margin: auto ;
margin-top: 20px;

border-radius: 4px;
background-color: rgb(230, 236, 255);
}
.form-control:hover{
box-shadow: 2px 2px 2px rgb(235, 235, 250);
}
.parag{
    font-size: 30px;
    color: rgb(0, 30, 128);  
    text-align: center;
    font-weight: 400;
}
#button1{
margin: auto ;
margin-left: 45%;
margin-top: 20px;
width: 150px;
height: 50px;
color: rgb(46, 46, 184);
background-color: rgb(235, 235, 250);
border-radius: 10px;
font-family: 'Lucida Sans', 'Lucida Sans Regular', 
'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.product{
    cursor:progress;
  font-weight: 700;
  font-size: 12px;
  color: rgb(0, 30, 128);  
    text-align: center;
    margin-left:650px;
 

}

</style>

<body>
<h1 class="Header">Add Product</h1>
<p class="product"><a href="Display.php">View all products</a></p>

    <form method="Post">
        <input type="text" class="form-control" id="in1" placeholder="Item Name" name="ItemName" required>
        <input type="text" class="form-control" id="in2" placeholder="The Description" name="TheDescription" required>
        <input type="text" class="form-control" id="in4" placeholder="The Price" name="ThePrice" required>
        <button type="submit" class="btn btn-success" id="button1" name="submit">Submit</button>
    </form>
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $product_name = $_POST['ItemName'];
    $description = $_POST['TheDescription'];
    $price = $_POST['ThePrice'];

    $sql = "INSERT INTO `productitems` (Item_Name, Item_Description, Price) VALUES ('$product_name', '$description', '$price')";
    
    if (mysqli_query($con, $sql)) {
        echo "<p class='parag'>New product added successfully!</p>";
        header("Location: Display.php"); 
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
    



?>

</body>
</html>