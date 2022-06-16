<?php
function checkeligibilitytovote()
{
    $name = "Wariarak";
    $age = 20;
    if($age >=18)
    {
        echo "$name You are Eligible To Vote";
    }
    else
    {
       echo "$name You Are Not Eligible To Vote";
    }
}

//checkeligibilitytovote();

//grading
function gradingsystem()
{
    $marks = 56;
    if($marks >= 80)
    {
        $grade = "A (Plain)";
    }
    else if($marks >=75)
    {
        $grade = "A-";
    }
    else if($marks >=65)
    {
        $grade = "B+";
    }
    else if($marks >=60)
    {
        $grade = "B(plain)";
    }
    else if($marks >=50)
    {
        $grade = "C+";
    }
    else
    {
        $grade ="FAIL";
    }
    echo "Your score is: $grade"; 
}
gradingsystem();
?>