<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
//Going from line 214 of phpflickr class
  // Has curl. Use it!
				$curl = curl_init("https://api.flickr.com/services/rest");
				curl_setopt($curl, CURLOPT_POST, true);
				$data=array("api_key"=> "091038bd077c0cb98ae9ad68c357f223"
				,"format"=> "php_serial","license"=>  "4,5,6,7"
				 ,"method"=> "flickr.photos.search","page"=> 1
				 ,"per_page"=> 20);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($curl);
				var_dump($response);
				curl_close($curl);
?>
</body>
</html>
