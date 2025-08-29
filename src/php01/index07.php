<?php
function test($number1,$number2)
{
    $n1 = $number1 + $number2;
    return $n1;
}

$answer = test(2,3);
echo $answer . "<br />";

function score($score1,$score2,$score3)
{
    $total = $score1 + $score2 + $score3;
    if($total>210){
        echo $total . "点なので合格です";
    }
    else{
        echo $total . "点なので不合格です";
    }
}
echo (score(0,80,80)) . "<br />";

function sannkaku($bottom,$height){
    return $bottom * $height / 2;
}
function sikaku($bottom,$height){
    return $bottom * $height;
}
function daikei($head,$bottom,$height){
    return ($head + $bottom) * $height / 2;
}
echo sannkaku(2,9) . "<br />";
echo sikaku(4,5) . "<br />";
echo daikei(8,9,9) . "<br />";

 $people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}