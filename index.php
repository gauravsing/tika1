<?php 
$output = file_get_contents('http://localhost/print/jar/func.php?path=http://indiatradefair.com/tender/tender_05may2014.pdf'); // this WILL do an http request for you
$pagecount = 0;
$data =array($output);
foreach($data as $op)
    {
        // Extract the number
        if(preg_match("/Pages:\s*(\d+)/i", $op, $matches) === 1)
        {
            $pagecount = intval($matches[1]);
            break;
        }
    }
			echo  $pagecount;  
		

?>
