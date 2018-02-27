<?php
$inString = " WDV341 at DMACC ";
$inNumber = 1234567890;
$inCurrency = 123456;

function todaysDate1()
{
	$mydate1=getdate(date("U"));
	return date('m/d/Y');	//Create a function that will accept a date input and format it into mm/dd/yyyy format.
}

function todaysDate2()
{
  $mydate2=getdate(date("U"));
  return date('d/m/Y');
}


function stringManipulation($inString)
{
  echo "<p>Your input is: $inString";
  echo "<p>Your input has " . strlen($inString) . " charcters.</p>";
  echo "<p>White Space has been trimmed from " . trim($inString) . ".</p>";
  echo "<p>Your input in all lowercase: " . strtolower($inString) . "</p>";
 //Still Need To Figure out if the string contains a word
}

function numberManipulation($inNumber)
{
  echo "<p>Your formatted number input is: " . number_format($inNumber) . "</p>";
}

function currencyManipulation($inCurrency)
{
  $inCurrency = number_format($inCurrency, 2);
  echo "$".$inCurrency;
}

?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP Function Examples</title>
</head>
<body>
  <h1>PHP Functions</h1>
  <h2>Date Manipulation</h2>
  <p>Today's date in mm/dd/yyyy: <?php echo todaysDate1(); ?></p>
  <p>Today's date in dd/mm/yyyy: <?php echo todaysDate2(); ?></p>
  <h2>String Input Manipulation</h2>
  <p><?php echo stringManipulation($inString); ?></p>
  <h2>Number Manipultion</h2>
  <p><?php echo numberManipulation($inNumber); ?></p>
  <h2>Currency Manipulation</h2>
  <p><?php echo currencyManipulation($inCurrency); ?></p>

</body>
</html>
