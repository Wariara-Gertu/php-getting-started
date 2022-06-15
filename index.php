<?php
//$myname = "Wariara Kinuthia";
//echo $myname

//arrays
$students = array("Wariara","Purity","Annet","Jamal","Mitchell",);
echo $students[2];


//associative array
$mymarks = array("Assesments" => 25,
                    "CAT"=> 15,
                    "Projects" => 35,
                    "Attendance" => 8,
                );
  echo "My Project Marks:" .$mymarks["Projects"];           


// Multidimensional Arrays
$webdevtechnologies = array(
    'frontend' => array('HTML','CSS','JS','Bootstrap'),
    'backend' => array('PHP','Python','Java','JS'),
    'frameworks' => array('Laravel','Django','SpringBoot','Flutter'),
    'database' => array('MySQL','PostgreSQL','MongoDB','Firebase')

);
 
echo $webdevtechnologies['frontend'][2];
echo $webdevtechnologies['frameworks'][2];
echo $webdevtechnologies['database'][0];

?>