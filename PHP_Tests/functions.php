<?php
	$elem1 = "100";
	$elem2 = "100.00";

	function equals($x1,$x2){
		return ($x1==$x2)?"True":"False";
	}

	function identical($x1,$x2){
		return ($x1===$x2)?"True":"False";
	}

	Echo "Is $elem1 equal to $elem2? ".Equals($elem1,$elem2)." <br/>\n";
	Echo "Is $elem1 identical to $elem2? ".Identical($elem1,$elem2)." <br/>\n"
?>