<?php

for($a=1;$a<=5;$a++){
    echo $a*2 . "<br />";
}

$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}

$count = 0;

while($count<=20){
    $count += 1;
    echo $count . "<br />";
}

$b=0;
while ($b<10){
  if ($b==5){
    break;
  }
  echo $b;
  $b++;
}

$c=0;
while ($c<10){
  if($c==5){
    $c++;
    continue;
  }
  echo $c;
  $c++;
}

$count=0;
while($count<=100){
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}

$num=0;
do{
  echo "num= " . $num . "<br />";
  $num += 1;
}while ($num<3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";}