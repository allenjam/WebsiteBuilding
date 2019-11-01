<?php
//this processes the website with the contact and form pages.
$action  = filter_input(INPUT_POST,'action');
 if(!isset($action)){
   $action  = filter_input(INPUT_GET,'action');
   if(!isset($action)){
       $action = "one";
	   }
   }
   
switch($action){
    case "one":
	   include("index2.php");
	   break;
	case "two":
        include("index3.php");
        break;
    case "three":
	//Processing  of information from front-end.
$first=filter_input(INPUT_POST,'email');
$second=filter_input(INPUT_POST,'fName');
$third =filter_input(INPUT_POST,'lName');
$fourth=filter_input(INPUT_POST,'address');
$fifth=filter_input(INPUT_POST,'city');
$sixth =filter_input(INPUT_POST,'state');
$seventh=filter_input(INPUT_POST,'code');
$eighth=filter_input(INPUT_POST,'phone');
$package=filter_input(INPUT_POST,'package');
$content ="";
if($package =="member"){
	 $content ="MEMBER PACKAGE";
}else if($package =="deluxe"){
	$content="DELUXE PACKAGE";
}else if($package =="temporary"){
	  $content = "TEMP PACKAGE";
}	
$tickets =filter_input(INPUT_POST,'tickets');
$pay = filter_input(INPUT_POST,'pay');
$payMethod ="";
if($pay == "cash"){
	  $payMethod = "BILL ME";
}else if($pay == "Credit Card"){
	   $payMethod = "Credit Card";
}
$credit  =filter_input(INPUT_POST,'credit');
$creditType ="";
if($credit == "visa"){
	$creditType ='VISA';
}else if($credit == 'mastercard'){
   $creditType ='MASTERCARD';
}else if($credit == 'discovery'){
	 $creditType ='DISCOVERY';
}else if($credit == 'AMEX'){
	 $creditType = "AMEX";
	}	
$cardNum =filter_input(INPUT_POST,'cardNum');
$month =filter_input(INPUT_POST,'month');
       include("index3.php");
       break;	   

}

?>