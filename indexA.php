<?php
 #This is  the  processing of  the information  for maaging  a list.
$action  =filter_input(INPUT_POST,'action');
$result  =array();
if(!isset($action)){
                    $result[] ="Enter a value here.";
					include('exhibit1.php');
                   
				   exit();
				   }
$storage= array();
switch($action){
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
				if(in_array($nameValue,$storage)){
				    $remove =array_search($nameValue,$storage);
				    unset($storage[$remove]);
				    array_values($storage);
				    sort($storage);
				}else{
					  $result[] ='Entry not listed';
					  include('exhibit1.php');
					  exit();
				}
				include('exhibit1.php');
				}
				     
                break;	
}

?> 
