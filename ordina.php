<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>



<?php
/*
  //$A e $B sono due array: A è grande $displayed, B non si sa. A è vuoto.
  //i è l'indice di A
  //k è l'indice di B

  $displayed = 5;

  $A = array(
    1 => 10,
  );

  $B = array(
    1 => 10,
    2 => 50,
    3 => 9,
    4 => 2,
  );

echo "questo è A: ".$A."<br>e questo è B: ".$B."<br>";

  $A[1]=$B[1]

  $k=2;

  while ($k <= count($B)){

    for ($i=1; $i<=$displayed; $i++){
      if ($B[$k] >= $A[$i]){

        for ($m=$i; $m <= $displayed; $m++){
          $A[$m+1]=$A[$m];
        }
        $A[$i]=$B[$k];
      }
    }

    $k++;
  }



echo "questo è A: ".$A."<br>e questo è B: ".$B."<br>";

*/
?>

<?php

// PHP program to show sorting of
// array of objects by object fields

// School Data array
$gfg_array = array(
	array(
		'score' => '100',
		'name' => 'Sam',
		'subject' => 'Data Structures'
	),
	array(
		'score' => '50',
		'name' => 'Tanya',
		'subject' => 'Advanced Algorithms'
	),
	array(
		'score' => '75',
		'name' => 'Jack',
		'subject' => 'Distributed Computing'
	)
);

// Class for encapsulating school data
class geekSchool {

	var $score, $name, $subject;

	// Constructor for class initialization
	public function geekSchool($data) {
		$this->name = $data['name'];
		$this->score = $data['score'];
		$this->subject = $data['subject'];
	}
}

// Function to convert array data to class object
function data2Object($data) {
	$class_object = new geekSchool($data);
	return $class_object;
}

// Comparator function used for comparator
// scores of two object/students
function comparator($object1, $object2) {
	return $object1->score > $object2->score;
}

// Generating array of objects
$school_data = array_map('data2Object', $gfg_array);

// Printing original object array data
print("Original object array:<br>");

print_r($school_data);

// Sorting the class objects according
// to their scores
usort($school_data, 'comparator');

// Printing sorted object array data
print("<br>Sorted object array:<br>");

print_r($school_data);

?>





</body>
</html>
