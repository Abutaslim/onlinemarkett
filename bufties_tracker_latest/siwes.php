<?php 
	
	$First_name = 'Yusuf';
	$last_name = 'Ahmad';

	$fullname = $First_name." ".$last_name;
	//($fullname);

	//print_r (implode($fullname,"," ));

	//$arry = [];
	$arry =   array(1,2,3,4,5,6,7,8,9,10);

	//print_r($arry);
	
for ($i=0; $i <count($arry); $i++) { 
	
	echo $arry[$i];

}

foreach ($arry as  $value) {
	echo $value;
}

?>