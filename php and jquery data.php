<?php
if($_GET['what'] == 'good'){
	$names = array('Sherlock Holmes', 'John Watson',
'Hercule Poirot', 'Jane Marple');
echo getHTML($names);
	
	}
	else if($_GET['what'] == 'bad'){
		$names = array('Professor Moriarty', 'Sebastian Moran',
'Charles Milverton', 'Von Bork', 'Count Sylvius');
echo getHTML($names);
		} 
function getHTML($names){
	$strResult = '<ul>';
	for($c = 0;$c<count($names);$c++){
		$strResult .= '<li>'.$names[$c].'</li>';
		}
		$strResult .= '</ul>';
		return $strResult;
	}

?>