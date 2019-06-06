<?php
require_once 'database.php';
$query = "SELECT MAX(productID) FROM products "; 
$result1 = $db->query($query)  ;

// Print out result
while($row1 = $result1->fetch()){
	$max1_message = $row1['MAX(productID)'];
	 
}
 
?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Math Helper</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico">
</head>

<body class="oneColElsCtrHdr">

<div id="container">
  <?php include 'header.php'; ?>
<div id="nav"><ul>
<li><a href="index.php">Home</a></li>
<li><a href="calculator.php">Calculator</a></li>
<li><a class="current" href="test.php">Test</a></li>
</ul> </div>
 <!-- end #nav -->  
 <div id="mainContent" style="height: 30em;">
    
     <h2>Test: <span style="font-size: 12pt;color: green;">Click the following buttons randomly to see the result.</span></h2>
   
    <form id="form1" action="add_product.php" method="post">
                <p>We have products which include the information of Code, Name and List Price. You can add products' 
               information according to your preferences in the following columns. Those inputs will be stored in our database. 
                </p>
                 
                <label>     Code:  </label>    
                <input type="input" name="code" />
                <br />

                <label>     Name:  </label>    
                <input type="input" name="name" />
                <br />

                <label>List Price:</label>
                <input type="input" name="price" />
                                <br>
                <label><input type="submit" name="submit1" value="Add Product" /></label>
                <?php if(!empty($error_message)) { ?>
                <span style="color: red;"><?php echo $error_message;  ?> </span>
                <?php } ?>
                <span style="color: red;"><?php echo $enter_message;  ?> </span>
                 
                <br />
    </form>
   
     
    <form id="form2" action="delete.php" method="post">
        <p>You also can delete the product item by entering the products' ID number. The max number of the product ID in 
            our database now is  <?php if(!empty($max1_message)) { ?>
                <span style="color: red;"><?php echo $max1_message;  ?> 
                <?php } ?>.</p>
        
        <label>     Product ID:  </label>    
                <input type="input" name="productID" />
                <br />

                 
                <label><input type="submit" name="submit2" value="Delete Product" /></label>
                <?php if(!empty($error1_message)) { ?>
                <span style="color: red;"><?php echo $error1_message;  ?> </span>
                <?php } ?>
                <span style="color: red;"><?php echo $delete_message;  ?> </span>
                 
                <br />
        
    </form>
  
   
             
            
   </div>
  
 <!-- end #mainContent -->  
    <?php include 'footer.php'; ?>
    
  
  
</div>
    
<!-- end #container -->    
    
</body>
</html>