<?php

$var = "hi!";


$array = array('uno'=>'one', 'dos'=>'two', 'tres'=>'three', 'quatro'=>'four');

echo "Say Hello: $var"; // outputs 'hi!' 
echo "<br/><br/>";


echo 'Say Hello: $var'; // outputs '$var' as text


echo "<br/><br/>";

// echo "Array key: uno $array['uno']"; // comment and uncomment out this line to continue
echo "<br/><br/>";
echo "Array key: uno with curly braces: {$array['uno']}";


echo "<br/><br/>";


foreach($array as $key=>$value)
{
  echo "Index: $key equals $value";
  echo "<br/><br/>";
}

//and lets concatenate them in a variety of ways
echo "with double quotes";
echo "<br/><br/>";
$concatenated = '';
$concatenated .= "{$array['uno']} and {$array['dos']}";
echo "<br/><br/>";
echo $concatenated;
echo "<br/><br/>";


echo "with single quotes";
echo "<br/><br/>";
$concatenated = '';
$concatenated .= $array['uno'] . ' and ' . $array['dos'];
echo $concatenated;
echo "<br/><br/>";


echo "<br/><br/>";

//echo "Uno? $array['uno']"; //comment and uncomment out this line to see the difference between this and the next
echo "<br/><br/>";
echo "Uno? {$array['uno']}";

?>