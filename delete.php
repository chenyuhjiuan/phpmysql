<?php

require_once 'database.php';


$query1 = "SELECT MAX(productID) FROM products "; 
$result1 = $db->query($query1)  ;

// Print out result
while($row1 = $result1->fetch()){
	$max1_message = $row1['MAX(productID)'];
	 
}

if(@$_POST['submit2']){
$productid = $_POST['productID'];
 

if(empty($productid)){
     
    $error1_message ='Please fill in the product ID number, if you want to delete one item in our database.' ;
    }   else if($productid<0){
        $error1_message = 'Product ID number must be a positive number.';
    }   
    
    else if ($productid>$max1_message){
        $error1_message = "Please enter a number which is not biger than ".$max1_message.".";
    }
    /*else if($productid === NULL){
        $error1_message = "The number you choosed was not existed. Please try another number.";
    }
    
    else if(!is_int($productid)=== TRUE){
        $error1_message ="Please enter an integer.";
    }
    */
    else {
    
        $error1_message = '';
    }
if($error1_message !=''){
      include 'test.php';
      exit();
}
    
    }
    
   
    
 $query = "DELETE FROM products
           WHERE productID = '$productid' ";
       $db->exec($query);          
    $delete_message ="You successfully deleted item ID number " .$productid.".";
    include 'test.php';
    exit();

?>