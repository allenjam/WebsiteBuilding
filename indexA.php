<?php
 #This is  the  processing of  the information  for maaging  a list.
$action  =filter_input(INPUT_POST,'action');
if(!isset($action)){
                    $result ="Enter a value here.";
                   echo htmlspecialchars($result);
				   exit();
				   }
$storage= array();
switch($storage){
     case 'add':
	            $nameValue = filter_input(INPUT_POST,'task');
				$storage[]=$nameValue;
				if(count($storage)>1){
				      sort($storage);
				}
				include('exhibit1.php');
	            break;
	case 'delete':
	            if(count($storage)>0){
	            $nameValue =filter_input(INPUT_POST,'task');
				$remove =array_search($nameValue,$storage);
				unset($storage[$remove]);
				array_values($storage);
				sort($storage);
				include('exhibit1.php');
				}
				     
                break;	
}

?> 
