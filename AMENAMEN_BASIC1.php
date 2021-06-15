<!DOCTYPE>
<html lang="en">
<head>
    <title> PHP Basics </title>
    <meta charset="utf-8" />
    <style>

    </style>
</head>
<body>
    <!--AMEN-AMEN, MA. SARAH.-->
    <link rel="stylesheet" type="text/css" href=" ">
	
<hr color="red" size="3">
<h2>Basic 1</h2>	
<hr color="red" size="3">
<h2>
	<?php
		echo "It's a rainy day today.<br>";
		echo "Hello ","Hi ","Welcome to ","PHP <br>";
		
		$name="Ace";
		$printName= print $name;
		?>
</h2>	
	
<hr color="red" size="3">
<h2>Single Vs. Double Quote</h2>
	<?php
		$season="rainy";
		echo "It is a $season season today!<br>";
		echo 'It is a $season season today!<br>';
	?>

<hr color="red" size="3">
<h2>Escape Charater and Sequence</h2>
	<?php
		echo "My Dad told me \"I shall return\"<br>";
		echo 'Goodbye Mr. O\'reilly'
		?>

<hr color="red" size="3">
<h2>Declaring Values of Variables</h2>
	<?php
		$booleanVal=true;
		$number1=87; $number2=95;
		$greeting="Good Afternnon";
		$sum=$number1+$number2;
		define("PI",3.1416);
		$totalRadius=PI*$number1;
		$colors=array("teal","yellow","gray");
		
		echo "The value of boolean is $booleanVal<br>";
		echo "The sum of numbers $number1 + $number2 = ".$sum."<br>";
		echo "$greeting everyone!<br>";
		echo "The total value of Radius is $totalRadius<br>";
		echo"My team color belongs to $colors[2]";
	?>	


<hr color="red" size="3">
<h2>Basic 2</h2>
<hr color="red" size="3">
<?php
    //Variable variables
    $varName="Ace";
    $$varName="2020"; // this is equivalent to $Ace=2020

    echo 'The value og $$varName is '.$$varName."<br>";
    echo 'The value of $Ace is '. $Ace. "<br>";

?>



	
</body>
</html>