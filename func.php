<?php 
$document=$_REQUEST['path'];
			 $cmd = "java -jar tika-app-1.1.jar -m $document 2>&1";      
			//$cmd = "ipconfig 2>&1";        
			exec("$cmd", $output);
			print_r($output);
		

?>
