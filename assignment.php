<?php
/*HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. 
Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand 
dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the 
commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven 
thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars 
the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using 
a ternary operator in Php.*/
?>
<?php
$fee = 500;
$f1 = $fee * (25/100);
$f2 = $fee * (20/100);
$f3 = $fee * (15/100);

$result = ($fee > 20000) ? "The Commision is twenty-five percent ({$f1}$).": 
(($fee >= 10000 && $fee <= 20000) ? "The Commision is twenty percent ({$f2}$)." : 
(($fee >= 7000 && $fee <= 10000) ? "The Commision is fifteen percent ({$f3}$)." : 
(($fee <= 7000) ? "Commission Invalid" : "Invalid input")));
echo "Tuition Fee = {$fee}$.\n";
echo $result;


