<?php
 
  
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'root';
    $password = 'ilovejune1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
 
if(@$_POST['submit1']){
$code = $_POST['code'];
$name = $_POST['name'];  
$price = $_POST['price'];  

if(empty($code) || empty($name) || empty($price)){
     
    $error_message ='Please fill in all three items, if you want to add data into our database.' ;
    }   else if($price<0){
        $error_message = 'Price must be a positive number.';
    }   else if (!is_numeric($price)){
        $error_message = 'Please enter a number for List Price.';
    }
    
    else {
    
        $error_message = '';
    }
if($error_message !=''){
      include 'test.php';
      exit();
}
    
    }
 
 
 $query = "INSERT INTO products
                 ( `productCode`, `productName`, `listPrice`)
              VALUES
                 ('$code', '$name', '$price')";
       $db->exec($query);          
    $enter_message ="You successfully entered " .$code.", ".$name." and ".$price." into our database for one product information. ";
    include 'test.php';
    exit();
?> 
