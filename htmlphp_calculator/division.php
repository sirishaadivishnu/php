<!-- Write a program to create HTML and PHP calculator -->
<!-- Author: Sirisha Adivishnu -->
<html>
<body>

<?="${_GET['div_num']} divided by ${_GET['div_den']} is:"?>
<h4><?=$_GET['div_num']/$_GET['div_den']?></h4>
<a href="index.php">Reset</a>
</body>
</html>