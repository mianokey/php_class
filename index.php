<?php

//bmi calculator
$weight=60; //weight in kgs
$height=1.6; //height in metres
$height_squared=pow($height,2);

$bmi_index=round(($weight/$height_squared),2);


if ($bmi_index < 18.5) {
    $msg="Underweight";
} else if ($bmi_index <= 24.9) {
    $msg="Normal";
} else if ($bmi_index <= 29.9) {
    $msg="Overweight";
} else {
    $msg="Obese";
}

echo "Your BMI index is ".$bmi_index ." which is considered ".$msg;


?>