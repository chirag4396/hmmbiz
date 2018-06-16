<?php
session_start();
// echo $_POST['sort'];

// defining Function to sort a array elements in asc or desc order as per parameters.
function sortArr(){
	$_SESSION['randArr'] = $_SESSION['randArr'];
	// Loop trough every elements of provided Array
	for($j = 0; $j < count($_SESSION['randArr']); $j ++) {
		/*
			Now for checking whether the element is having greater value to
			next element we need to check all the next elements again so need to loop through
			every elements less to the value of exist values, because one is low and one will be high,

			it may happen where 2 or more values will be same in list so need to sort that too
		*/
		for($i = 0; $i < count($_SESSION['randArr'])-1; $i ++) {
			/*
				checks where we want to sort in asc and desc and accordingly it will generated condition.					
			*/

			$sort = $_POST['sort'] == 'desc' ? ($_SESSION['randArr'][$i] < $_SESSION['randArr'][$i+1]) : ($_SESSION['randArr'][$i] > $_SESSION['randArr'][$i+1]);
			
			/*
				Check wheter element is greater than next element
			*/
			if($sort) {
				/*normal 3 variable swap method can be used to replace the value of array
					1. store the actual greater value to temp variable		
				*/
				$temp = $_SESSION['randArr'][$i+1];
				/*
					2. replace the greater value with lower one
				*/
				$_SESSION['randArr'][$i+1]=$_SESSION['randArr'][$i];
				/*
					3. replace lower value with $temp variable which was previous containing a higher value.
				*/
				$_SESSION['randArr'][$i]=$temp;
			}       
		}
	}
	return $_SESSION['randArr'];
}

// Generate an SESSION with some dummy records which values is in between 1 to 100
function randomArr(){
	unset($_SESSION['randArr']);

	for($i=1;$i<=1000;$i++){
		$_SESSION['randArr'][] = rand(1,100);
	}
	
	$_SESSION['preRandArr'] = $_SESSION['randArr'];
}

/*set the sorting orders like asc, desc, or previous stat*/
if(isset($_POST['sort'])){	
	if ($_POST['sort'] == 'prev') {	
		$_SESSION['randArr'] = $_SESSION['preRandArr'];
	}else{	
		sortArr();
	}
}else{
	randomArr();
}

// Manipulating data of Array and truning it to li tag
$data = '';
foreach ($_SESSION['randArr'] as $key => $value) {
	$data .= '<li>'.$value.'</li>';
}

echo $data;
// unset($_SESSION['randArr']);