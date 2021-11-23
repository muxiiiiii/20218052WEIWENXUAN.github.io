<!DOCTYPE html>
<html>
<body>

<h1>homework3-1 : Sum,Factorial</h1>
<p>Print the numbers 1 through n=10 and find the total sum and product.
</p >
<br>
1+...+n=?
<br>

<?php 
$n =10;
$sum=0;
for ($x=1; $x<=$n; $x++) {
   $sum+= $x ;
}
echo "recult : $sum<br>"
?>   
<br>
1* ... * n= ?
<br>

<h1>homework3-2 : Sorting</h1>
<p>Receive n integer nu,bers from 10 to 100, generate n integer random numbers ,and output the generated results and sorted results in ascending order.</p >

<?php
$n=16;
echo "random number :";
echo(rand(10,100));
echo"<br>";
$numbers=array(4,6,2,22,11);
$arrlength=count($numbers);
for($x=0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

<br>
<p>sorting result</p >
<?php
sort($numbers);
$arrlength=count($numbers);

for($x=0; $x<$arrlength;$x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>

<h1>homework3-3 : Fibonacci</h1>
<p>Receive an integer number n less than 100 and output the proportions of n Fibonacci seqences and the front and rear terms</p >

<?php
$n=10;
$a=1;
$b=1;
echo "$a <br>";
echo "$b <br>";
for($x=0; $x <= $n; $x++) {
   $c=$a+$b;
   $b=$a;
   $a=$c;
  echo "$c <br>";
}
?>

</body>
</html>