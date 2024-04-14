<?php
if(isset($_GET['t1']) && isset($_GET['t2'])){
    $weight = $_GET['t1'];
    $height = $_GET['t2'];
    
    if(!empty($weight) && !empty($height)) {
        $bmi = $weight / ($height * $height);
        echo 'The BMI is ' . $bmi . "<br>";
        if ($bmi < 18.5) {
            echo 'You are UnderWeight';
        } else if ($bmi >= 18.5 && $bmi < 25) {
            echo 'You are in Normal Weight';
        } else if ($bmi >= 25 && $bmi < 30) {
            echo 'You are Overweight';
        } else if ($bmi >= 30) {
            echo 'You are Obese';
        } else {
            echo 'Invalid';
        }
    } else {
        echo 'Please enter both weight and height.';
    }
}
?>

