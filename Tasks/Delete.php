<?php
include 'connection.php';

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    
    
    $del = "DELETE FROM productitems WHERE id = $id";
    
    
    if (mysqli_query($con, $del)) {
        echo "Record deleted successfully";
        echo "<h1><a href='Display.php'>Back to All Products</a>";
        echo "</h1>";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}


?>





