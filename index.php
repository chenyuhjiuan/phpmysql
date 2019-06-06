

<!DOCTYPE html>
<html>  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Math Helper</title>
<link rel="shortcut icon" href="images/favicon.ico">

<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body class="oneColElsCtrHdr">


<div id="container">
  <?php include 'header.php'; ?>
<div id="nav">
<ul>
<li><a class="current" href="index.php">Home</a></li>
<li><a href="calculator.php">Calculator</a></li>
<li><a href="test.php">Test</a></li>

</ul> </div>
 <!-- end #nav -->  
 <div id="mainContent" style="background-color: #F5FFE0;">
    
    <h1>Welcome to Math Helper</h1>
     
    <p>Here we offer help with your sticky math problems.  </p>
    <p>Today is <span style="color: green; font-weight: bold;"><?php 
					date_default_timezone_set('US/Eastern');
					echo DATE("M-d-Y"); ?></span>. 
        It is now <span style="color: red; font-weight: bold;"><?php date_default_timezone_set('US/Eastern');echo date('g:i:s a'); ?></span>.</p>
    <p style="color: #7932A7; font-style: italic;">Have a wonderful day!</p>
  </div>
 
 <br><br><br><br><br><br><br><br><br>
     <!-- end #mainContent -->  
  <?php include 'footer.php'; ?>

</div>
 <!-- end #container -->   


    
    
    
</body>
</html>