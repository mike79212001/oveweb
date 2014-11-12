<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
	
    
    <?php
    	function dirToArray($dir) { 
		   
		   $result = array(); 

		   $cdir = scandir($dir); 
		   foreach ($cdir as $key => $value) 
		   { 
		      if (!in_array($value,array(".",".."))) 
		      { 
		         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
		         { 
		         	
		            $list = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
		            foreach($list as $value2) {
						$result[] = $value2;
					}
		         } 
		         else 
		         { 
		            $result[] = $dir.DIRECTORY_SEPARATOR.$value; 
		         } 
		      } 
		   } 
		   
		   return $result; 
		} 
		
		
		$list = dirToArray($_SERVER['DOCUMENT_ROOT']."/picture");
		echo json_encode($list);
//		echo dirname("0313153947222126587.jpg");
//		print_r($list);
    ?>
	
	
	<!-- jquery and bootstrap -->
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>
