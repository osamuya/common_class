<?php
require_once (__DIR__."/../lib/common/checkdegit.php");
?>

<!DOCTYPE html>
<html>
<head>
	<script
		src="https://code.jquery.com/jquery-2.2.4.js"
		integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		crossorigin="anonymous">
	</script>
	<title>Check degit</title>
</head>
</head>

<body>
<h1>Check degit</h1>
頭から7桁の数字のチェックデジットが8桁目（太字）の数字になります。<br>
14300011←最後の1桁がチェックデジット<br>
<br>
<?php
	$obj = new checkdegit();
	foreach ($number as $key => $value) {
		$para = $value[0].$value[1].$value[2];
		$checkdegit = $obj->janCode_8degits($para);
		print $para."<strong>".$checkdegit."</strong><br>\n";
	}
?>
</body>
</html>



