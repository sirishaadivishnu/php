<!-- Write a program to create HTML and PHP calculator -->
<!-- Author: Sirisha Adivishnu -->
<html>
<body>

<?="The sum of ${_GET['add_first']} and ${_GET['add_second']} is:"?>
<h4><?=$_GET['add_first']+$_GET['add_second']?></h4>
<a href="index.php">Reset</a>
</body>
</html>