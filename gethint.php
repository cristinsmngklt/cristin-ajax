<?php
//array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
//get the q paramether from URL
$q = $_REQUEST ["q"];
$hint = "";
//lookup all hint from array if $q is different from ""
if ($q !== ""){
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
		if (stristr($q, substr($name, 0, $len))){
			if($hint === ""){
				$hint = $name;
			}else{
				$hint .= ", $name";
			}
		}
	}
}
//output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" :$hint;
?>