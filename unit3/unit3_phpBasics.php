<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - PHP Basics</title>
</head>

<body>
  <!-- 1. Create a variable called yourName, assign it the value of your name -->
  <?php $yourName = "Will Brown"; ?>

  <!-- 2. Display the assignment name in an h1 element on the page. Include the elements in your output.  -->
  <?php echo "<h1>PHP Basics</h1>"; ?>

  <!-- 3. Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable. -->
<h2><?php echo $yourName ?></h2>

  <!-- 4.Create the following variables:  number1, number2 and total.  Assign a value to them.   -->
  <p>
  <?php $number1 = 2;
     $number2 = 4;
     $total = 6;
  ?>
</p>

  <!-- 5. Display the value of each variable and the total variable when you add them together. -->
  <p>
  <?php echo $number1 . "+" . $number2 . "=" . $total ?>
  </p>
  
<script>
	<?php echo "var myArray = ['PHP', 'HTML', 'Javascript'];" ?>

  <?php echo "for (i=0; i < myArray.length; i++) {
              document.write(myArray[i] + '<br>');
            }";
  ?>

</script>

</body>

</html>
