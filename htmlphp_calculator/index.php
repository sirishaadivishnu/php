<!-- Write a program to create HTML and PHP calculator -->
<!-- Author: Sirisha Adivishnu -->
<html>
<body>
 
<h3>Addition</h3>
<form action="addition.php" method="get">
First Number: <input type="number" name="add_first"><br>
Second Number: <input type="number" name="add_second"><br>
<button type="submit">Add</button><br>
</form>
<h3>Division</h3>
<form action="division.php" method="get">
Numerator: <input type="number" name="div_num"><br>
Denominator: <input type="number" name="div_den"><br>
<button type="submit">Divide</button><br>
</form>
<a href="index.php">Reset</a>
</body>
</html>