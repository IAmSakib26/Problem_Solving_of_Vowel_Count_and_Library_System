<?php 
$strings = ["Hello", "World", "PHP", "Programming"];
$nl = "\n";
$vowels = ['a','e','i','o','u'];
foreach($strings as $string){
    $vowelCount = 0;
    for($i=0;$i<strlen($string);$i++){
        if(in_array(strtolower($string[$i]),$vowels)){
            $vowelCount++;
        }
    }
    $revStr = strrev($string);
    print 'Original String: '.$string.', Vowel Count: '.$vowelCount.', Reversed String: '.$revStr.'<br>';
    
}