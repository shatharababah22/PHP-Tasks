<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
             background-image:url(https://img.freepik.com/premium-photo/light-blue-paper-texture-detail_34836-3646.jpg?w=2000);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 
'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            margin-left:150px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            background-color:rgba(150,186,204,0.8);
        }
        th {
            background-color: #f4f5f7;
            color: rgb(46, 46, 184);
            font-weight: 600;
        }
      
        a {
            text-decoration: none;
            color: #ccc;
            color: rgb(46, 46, 184);
        }
        .Header{
    margin-top:200px;
font-family: monospace;
font-weight: 700;
font-size: 45px;
text-align: center;

color: rgb(0, 30, 128);
}
    </style>
</head>
<body>
<h1 class="Header">Display Item</h1>
    <?php
   $Retrieve = 'SELECT * FROM productitems';
   $result = mysqli_query($con, $Retrieve);
   
   if (mysqli_num_rows($result) > 0) {
       echo "<table><tr><th>Item_Name</th><th>Item_Description</th><th>Price</th><th>Insert Product</th><th>Update</th><th>Delete</th></tr>";
     
       while($row = $result->fetch_assoc()) {
           $Id = $row["Id"]; 
           echo "<tr>
                   <td>".$row["Item_Name"]."</td>
                   <td>".$row["Item_Description"]."</td>
                   <td>".$row["Price"]."</td>
                   <td><a href='Insert.php'>Insert</a></td>
                   <td><a href='Update.php?Id=$Id'>Update</a></td>
                   <td><a href='Delete.php?Id=$Id'>Delete</a></td>
                 </tr>";
       }
   } else {
       echo "0 results";
   }
    ?>
</body>
</html>


