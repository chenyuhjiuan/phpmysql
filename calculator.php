 <?php 
// Default output value 

    $theoutput = ""; 

// If the form is posted, grab those values and start script operations 

if(@$_POST['psc']) { 

    $input_one = $_POST['i1']; 
    $input_two = $_POST['i2']; 
    $operation = $_POST['op']; 

// Trim these in case a space is added, strip_tags just in case 

    $input_one = trim(strip_tags($input_one)); 
    $input_two = trim(strip_tags($input_two)); 

// Make a reset link 

    $the_reset = ' <a href="'.htmlentities($_SERVER["REQUEST_URI"]).'">Reset</a>'; 

// Do the basic math operations (probably a way to combine into one string but I couldn't figure it out 

    if ($operation == "+") { 
        $theanswer = $input_one + $input_two; 
    } 

    if ($operation == "-") { 
        $theanswer = $input_one - $input_two; 
        $operation = "&#8211;"; // To display a better symbol 
    } 

    if ($operation == "*") { 
        $theanswer = $input_one * $input_two; 
        $operation = "&#215;"; // To display a better symbol 
    } 

    if ($operation == "/") { 
        $theanswer = $input_one / $input_two; 
        $operation = "&#247;"; // To display a better symbol 
    } 

// In case a bot submits large values - people are limited by the input maxlengths 

    if (strlen($input_one) > 10 || strlen($input_two) > 10 ) { 
        $theoutput = ' <p class="error"><strong>Error:</strong> Input limit exceeded.'.$the_reset.'</p>';   
    } else 

// In case the inputs are left empty... can't add air, right? 

    if( empty($input_one) || empty($input_two) ) { 
        $theoutput = ' <p class="error"><strong>Error:</strong> You must enter values.'.$the_reset.'</p>'; 
    } else 

// In case someone tries letter math or other stuff 
// There is a better way to do this. If you know how, please email me at "mikecherim" at my green-beast.com domain 

    if( !preg_match("([0-9])", $input_one) || !preg_match("([0-9])", $input_two) || preg_match("([a-z])i", $input_one ) || preg_match("([a-z])i", $input_two ) ) { 
       $theoutput = ' <p class="error"><strong>Error:</strong> Enter numbers only.'.$the_reset.'</p>'; 
    } 

// All's well, let's create an output string 
    else { 
        $theoutput = " <p><strong>Output: </strong>"."$input_one"." $operation "."$input_two"." = "."$theanswer $the_reset"."</p>"; 
    } 
    
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
    <div id="nav">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a class="current" href="calculator.php">Calculator</a></li>
        <li><a href="test.php">Test</a></li>
        </ul> 
    </div>
<!-- end #nav --> 
<div id="mainContent" style="height: 30em;">
    <h2>Calculator</h2>
    <p>Enter two numbers, select an operator, and click the = button to see your result.</p>
        
      
    <form style="background-color:  #F5FFE0;" action='' method='post'>
        
        <br>
         
        <input type="text" id="i1" name="i1" size="8" maxlength="8" value="" />

         
        <select name="op" id="op">
        <option value="+" selected="selected" title="Add">&nbsp;+ </option> 
        <option value="-" title="Subtract">&nbsp;&#8211; </option> 
        <option value="*" title="Multiply">&nbsp;&#215; </option> 
        <option value="/" title="Divide">&nbsp;&#247; </option> 
        </select>

         
        <input type="text" id="i2" name="i2" size="8" maxlength="10" value="" />
     
        <input type="submit" class="button" name="psc" value="=" />
        <?php echo $theoutput; // This is the output in case it's not obvious ?>
        <br><br><br><br><br><br><br><br>
        </form>
        
      </div>
    <!-- end #mainContent -->   
     
    
  <?php include 'footer.php'; ?>

</div>
 <!-- end #container -->   
</body>
</html>