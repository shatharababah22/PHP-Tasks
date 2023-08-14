
<?php
include 'connection.php'; 

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $fetchQuery = "SELECT * FROM productitems WHERE `id` = '$id'";
    $result = mysqli_query($con, $fetchQuery);
    $addproduct = mysqli_fetch_array($result);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<style>
    body
    {
        background-image:url(https://img.freepik.com/free-photo/background-blue-recycled-paper_1253-84.jpg);
    }
     input[type="text"]{
    display: flex;
    justify-content: center;
    text-align: center;
}
 h2{
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
    </style>
<body>
    <h2>Update Product</h2>
    <form method="post" >





    <input type="text" class="form-control" id="in1" placeholder="Item Name" name="ItemName"   value="<?php echo $addproduct['Item_Name'] ?>">

        <input type="text" class="form-control" id="in2" placeholder="The Description" name="TheDescription"  value="<?php echo $addproduct['Item_Description'] ?>">
        <input type="text" class="form-control" id="in4" placeholder="The Price" name="ThePrice"  value="<?php echo $addproduct['Price'] ?>" >
        <button type="submit" class="btn btn-success" id="button1" name="submit">Submit</button>
    </form>


    	
	<?php
    if (isset($_POST['submit'])) {
        $id = $_GET['Id'];
        $product_name = $_POST['ItemName'];
        $description = $_POST['TheDescription'];
        $price = $_POST['ThePrice'];
    
        $updateQuery = "UPDATE productitems
                        SET Item_Name = '$product_name', 
                        Item_Description = '$description', 
                            Price = '$price' 
                        WHERE `id` = '$id'";


        $insertquery= mysqli_query($con, "SELECT * FROM productitems WHERE `id` = '$id'");
        $addproduct= mysqli_fetch_array($insertquery);
    
        if (mysqli_query($con, $updateQuery)) {
            echo "Product updated successfully!";
            header("Location: Display.php");
        } else {
            echo "Error updating product: " . mysqli_error($con);
        }
    }
    ?>


</body>
</html>



	


