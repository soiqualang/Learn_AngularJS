<?php
function makeRandomString($max=6) {
    $i = 0; //Reset the counter.
    $possible_keys = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $keys_length = strlen($possible_keys);
    $str = ""; //Let's declare the string, to add later.
    while($i<$max) {
        $rand = mt_rand(1,$keys_length-1);
        $str.= $possible_keys[$rand];
        $i++;
    }
    return $str;
}

$name1=makeRandomString();
$name2=makeRandomString();
$name3=makeRandomString();

$date1=date('Y/m/d|H:i:s', time());
$date2=date('Y/m/d|H:i:s', time());
$date3=date('Y/m/d|H:i:s', time());

$cat1='c1';
$cat2='c2';
$cat3='c3';

$val1=rand(10,100);
$val2=rand(10,100);
$val3=rand(10,100);

$someJSON = '[{
		"name": "'.$name1.'",
		"date": "'.$date1.'",
		"cat": "'.$cat1.'",
		"value": "'.$val1.'"
	}, {
		"name": "'.$name2.'",
		"date": "'.$date2.'",
		"cat": "'.$cat2.'",
		"value": "'.$val2.'"
	}, {
		"name": "'.$name3.'",
		"date": "'.$date3.'",
		"cat": "'.$cat3.'",
		"value": "'.$val3.'"
	}
]';
$someArray = json_decode($someJSON, true);
echo json_encode($someArray);
?>