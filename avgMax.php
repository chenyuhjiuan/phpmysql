 

<?php
// Make a MySQL Connection
   $dbhost = 'localhost'; 
 $dbuser = 'root';
 $dbpass = 'ilovejune1';
 $db = 'my_guitar_shop1';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 mysql_select_db($db);

if(@$_POST['submit']) {
$query = "SELECT MAX(listPrice) FROM products "; 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	$max_message = "The most expensive item in our database now is priced at $" .$row['MAX(listPrice)'];
	 
}


$query1 = "SELECT AVG(listPrice) FROM products "; 
$result1 = mysql_query($query1) or die(mysql_error());
while($row1=mysql_fetch_array($result1)){
	 
	$avg_message = " and the average price for our products is in the amount of $".$row1['AVG(listPrice)'];
}
}
include 'test.php';
    exit();
?>

 