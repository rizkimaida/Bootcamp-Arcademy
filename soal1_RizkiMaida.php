<?php
$config = array(
		'name' =>'Rizki Maida Octaviani Simarmata',
		'age'=>21,
		'address'=>'Serang, Banten',
		'hobbies'=> array('cooking','singing'),
		'is_married'=>false,
		'list_school' => array(
		    array(
		        'year_in' =>2010,
		        'year_out' => 2013,
		        'major' => null,
		        ),
		    array(
		        'year_in' =>2013,
		        'year_out' => 2016,
		        'major' => "science",
		        ),
		    array(
		        'year_in' =>2016,
		        'year_out' => 2019,
		        'major' => "computer science and information system",
		        ),
		    ),
		'skills' => array(
		    array(
		        'skill_name'=>'php',
		        'level'=>'advanced',
		        ),
		    array(
		        'skill_name'=>'html',
		        'level'=>'advanced',
		        ),
		    array(
		        'skill_name'=>'phyton',
		        'level'=>'beginner',
		        ),
			array(
		        'skill_name'=>'c++',
		        'level'=>'beginner',
		        ),
		    ),
		'interest_in_coding'=> true,
	);
echo json_encode($config);
?>
