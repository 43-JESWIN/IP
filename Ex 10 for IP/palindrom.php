<?php
    $number = $_GET['number'];
    $no = $number;
    $res = 0;
    while ($number > 0)
    {
        $rem = $number % 10;
        $res = ($res * 10) + $rem;
        $number = (int)($number / 10); 
    }
    echo (int)$res."<br>";
    if ($res == $no)
    {
        echo 'Yes it is Palindrome';
    }
    else
    {
        echo 'It is not a palindrome';
    }
?>