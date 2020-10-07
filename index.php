<?php


	$lesson 		= "Concatenation";
	$titleName 		= "PHP " . $lesson;
	$headingTitle 	= "welcome to php " . $lesson;
	$brief 		= "we are seeking to understand the concept of " . $lesson . " trougth those examples";
	$result		= 0;
	$double 	= 17.75;
	$boolean	= true;

	

	const MAX_LENGTH = 200;
	define("MAX_ARRAY", 150);
	//define("MAX_ARRAY", 150, false);   => the third para is for the case-Insenistive wich is by default false

	$numberOne = 12;
	$numberTow = 3;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> <?php echo $titleName; ?> </title>
	</head>
	<body>
		<h1> <?php echo $headingTitle; ?></h1>
		<p> <?php echo $brief; ?></p>

		<?php for($i = 1; $i<=10; $i++){
			$result += $i;
			echo "<p> the count is " . $i ." and the result is : " . $result . "</p>";
		}  
		?>

		<?php
				 //====================================================
				 //==================   PHP Types   ===================
				 //====================================================
		?>

		<?php echo "<h3>the type of ". $lesson ." is ". gettype($lesson) . " or ". var_dump($lesson) ."</h3>"?>

		<?php echo "<h3>The type of " . $result . " is " . gettype($result) . " or " . var_dump($result). "</h3>"?>

		<?php echo "<h3>The type of " . $double . " is " . gettype($double) . " or " . var_dump($double). "<h3>"?>

		<?php echo "<h3>The type of " . $boolean . " is " . gettype($boolean). " or " . var_dump($boolean). "</h3>"?>

		<?php echo "<h3>The type of <strong>Array</strong> is " . gettype($array) . " or " . var_dump($array). " </h3>"?>

	

		<?php 

		//train the Eror Control operator 
		//@mysqli_connect("localhost", "zakaria", "123456789", "OurDatabase") or die("somethin wrong with the conncetion");
		?>

		<?php echo "<h2>The value of the constant with the const method " . MAX_LENGTH . "</h2>"?>

		<?php echo "<h2>the value of the constant with the define method " . MAX_ARRAY . "</h2>"?>

		 <?php echo "<h3>the exponentition of this numbers ".$numberOne." and ".$numberTow." is ".($numberOne ** $numberTow)."</h3>" ?> 

		<?php echo "the number one is " .$numberOne?>
		<?php echo "the number tow is " .$numberTow?>

		<?php 
			$multiDim = array(
				array("zakaria", "imane", "shaime", "salma"),
				array("ben salek", "jaekhmane", "essyedi", "mimouan")
			);

			foreach($multiDim as $val1){
				echo "<h2>the dimention </h2>";
				foreach($val1 as $val2){
					echo "V2 => " . $val2 . "<br>";
				}
			}

			// build a function that calculate the age in days

			function calculateAge($name, $age){
				echo "Your age in days is ". $age * 350 . " days Mr " . $name;
			}

			calculateAge("Zakaria", 22);

			//The default parameter value

			function printSomething($profession, $age = "NULL", $name = "UNKNOWN" ){
				return "<h3>hello " . $name . " your age is " . $age . " and your profession is " . $profession . "</h3>";
			}

			echo printSomething("developper");

			echo "<h2>show the multidimentional array</h2><pre>";
			print_r($multiDim );
			echo "</pre>";

			/* $languages = array(
				"html",
				"css", 
				"angular",
				"nodeJs",
				"vueJs",
				"bootstrap",
				"jquery",
				"sass"
			); */

			 $languages = array(
				array(
				"angular1",
				"nodeJs1",
				"vueJs1"
			), array(
				"angular2",
				"nodeJs2",
				"vueJs2"
			), array(
				"angular3",
				"nodeJs3",
				"vueJs3"
			));





			     //===========================================================
				 //==================   PHP Serach array   ===================
				 //===========================================================



			//================   The Array To Try Function   ==================
			$searchArray = array(
			"12",
			"zakaria" => "zak",
			"hicham" => "hi",
			"girl",
			"radouane",
			12 => 12
		);

			
			//================   Print It On The Browser    ===================
			echo "<h2>printing the other method</h2> <pre>";
			print_r($languages);
			echo "</pre>";

			//==================   in_array() Function   ======================
			if(in_array(("nodeJs1"), $languages)){
				echo "they are those values <br>";
			}else{
				echo "they aren't those values <br>";
			}

			echo "<h1>the retun is : " . in_array(array("angular1", "nodeJs1", "vueJs1"), $languages) ."</h1>";
			echo "<br>The type is : " . gettype(in_array("nodeJs1", $languages[0])) . "<br>";

			
			if(in_array(12, $searchArray, true)){
				echo "the value exit in this array";
			}else{
				echo "the value doesn't exit in this array";
			}

			echo "<h1>the return of the search by type array is : " . in_array(12, $searchArray, true)."</h1>";

			

			//==================   array_search() Function   ======================
			echo "<h1>THE array_search() FUNCTION !!!!<h1>";
			echo "<h2>The return value is " . array_search(12, $searchArray, false) . "</h2>"; // TRUE MEANS === IDENTICAL COMPARISON

			//==================   array_keys($array, searchValue) Function   ======================
			echo print_r(array_keys($searchArray, "simo", true)); // RETURN AN INDEXED ARRAY CONTAIN KEYS OF THIS VALUE 
			

			


				 //===================================================================
				 //==================   PHP array Add/Remove Function   ==============
				 //===================================================================

			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";

			//==================   Add items function   ======================
			//=============   array_push(), array_unshift()   ================
			echo "<h1>Add Items function </h1>";

			array_push($searchArray, "XML"); //Add one element to the last place
			array_push($searchArray, "python", "ajax"); // add multiple elements to the last places

			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";

			array_unshift($searchArray, "json"); //add one element to the first place
			array_unshift($searchArray, "UML", "Merise"); // add multiple elements to the first places

			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";


			//==================   Remove items function   ======================
			//=============   array_pop(), array_shift()   ================

			echo "<h1>Remove Items function </h1>";

			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";

			$lastElement = array_pop($searchArray);
			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";

			echo "<h3>the last element removed : " .$lastElement. "<h3>";

			$firstElement = array_shift($searchArray);
			echo "<pre>";
			echo print_r($searchArray);
			echo "</pre>";

			echo "<h3>the fist element removed : " .$firstElement. "<h3>";



			//==================   sorting array function  [Indexed arrays ] ======================
			//======================   sort(array, [SORT_{ NATURAL, REGULAR, STRING, NUMERIC, FLAG_CASE}]), rsort()   =========================
			 $srotArray = array("zakaria", "hicham", "imane", "malak", "radouane", "12", "ZakaRia");
			echo "<h1>Sorting arrays functions !</h1>";
			echo "<pre>";
			echo print_r($srotArray);
			echo "</pre>";

			echo "the value returned after sorting the array : " . sort($srotArray, SORT_REGULAR );
			echo "<h2>sort() function resualt with SORT_REGULAR parameter</h2>";
			echo "<pre>";
			echo print_r($srotArray);
			echo "</pre>";

			//==================   sorting array function  [Associative arrays ] ======================
			//======================   asort(array, [SORT_{ NATURAL, REGULAR, STRING, NUMERIC, FLAG_CASE}]), arsort()   =========================
			//======================   ksort(array, [SORT_{ NATURAL, REGULAR, STRING, NUMERIC, FLAG_CASE}]), krsort()   =========================
			$associativeSortArray = array(
				"css" => 87,
				"html" => 80,
				"css3" => 93,
				"html5" => 89,
				"js" => 80,
				"xml" => 90
			);

			echo "<h2>sorting associative array by value</h2>";
			asort($associativeSortArray, SORT_NATURAL);
			echo "<pre>";
			echo print_r($associativeSortArray);
			echo "</pre>";

			echo "<h2>sorting associative array by KEY </h2>";
			ksort($associativeSortArray); //
			echo "<pre>";
			echo print_r($associativeSortArray);
			echo "</pre>";

			//==================    Array function  array_reverse(), shuffle() ======================

			$reverse_shuffle = array(
				"hamada" ,
				"imane" ,
				"shaime",
				"salma" ,
				"hicham",
				"radouane"
			);

			echo "<h1>try array_reverse() AND shuffle() functions !</h1>";
			echo "<pre>";
			echo print_r(array_reverse($reverse_shuffle, false)); //the function return another array | doesn't effect the main array
			echo "</pre>";
			echo "<h2>Print the shuffle() array !</h2>";
			shuffle($reverse_shuffle); // return 1 OR 0 
			echo "<pre>";
			echo print_r($reverse_shuffle);
			echo "</pre>";

			//==================    Array function  array_fill() ======================

			

			echo "<pre>";
			echo print_r(array_fill(6, 10, ["zakaria", "imane", "shaime", "salma"]));
			//echo print_r(array_fill(0, 5, "hicham"));
			echo "</pre>";



			$ar = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
			$n=9;

			$defferentValues = array();
			$defferentValues [] = $ar[0];
			$exist = false;
			$pairNumber = 0;
			$numberAccuracy = 0;
			for ($i=1; $i<$n;$i++){

				for($j=0; $j<count($defferentValues); $j++){

					if($defferentValues[$j] === $ar[$i]){
						$exist = true;
					}
				}

				if($exist === false){
					$defferentValues[] = $ar[$i];
				}

				$exist = false;  

			}

			for($i=0; $i<count($defferentValues); $i++){

            for($j=0; $j<$n; $j++){
                if($defferentValues[$i] === $ar[$j])
                $numberAccuracy++;
            }

			echo "<h2>the value " . $defferentValues[$i] . " accurate " . $numberAccuracy . " time </h2>";
            if($numberAccuracy % 2 === 0){
                $pairNumber += $numberAccuracy / 2;
            }
            else{
                $numberAccuracy--;
                if($numberAccuracy !==0){
                    $pairNumber += $numberAccuracy / 2;
                }
                
            }
            $numberAccuracy = 0;
		}


		
			echo "<h1>trying fill array without indexes ".$pairNumber." </h1>";
			echo "<pre>";
			echo print_r($defferentValues);
			echo "</pre>";

			for($i=0;$i<count($defferentValues); $i++){
				echo " => " . $defferentValues[$i];
			}

			


			


			
			



		?>






	</body>
</html>  